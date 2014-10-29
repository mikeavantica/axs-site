<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  STARTERKIT_preprocess_html($variables, $hook);
  STARTERKIT_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

function auxis_main_menu_link__menu_block__1(array $variables)
{
    $element = $variables['element'];
    $sub_menu = '';
    $custom_class = 'class=""';

    //print_r($element);

    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);

    if (array_search('active', $element['#attributes']['class']) > 0) {
        $custom_class = 'class="Selected"';
    }

    return '<li ' . $custom_class . '>' . $output . $sub_menu . "</li>\n";
}

function auxis_main_menu_tree__menu_block__2($variables)
{
    return '<ul class="nav-menu">' . $variables['tree'] . '</ul>';
}

function auxis_main_menu_link__menu_block__2(array $variables)
{
    $element = $variables['element'];
    $depth = $variables['element']['#original_link']['depth'];
    $element = $variables['element'];
    $sub_menu = '';
    $item_title = '';
    $element['#attributes']['class'][] = 'level-' . $depth;
    $isColumn = (array_search('menu-col', $element['#localized_options']['attributes']['class'])) ? true : false;
    $menuFull = $element['#localized_options']['attributes']['class'];
    $style = '';

    if ($element['#below']) {
        // Wrap in dropdown-menu.
        unset($element['#below']['#theme_wrappers']);
        if ($depth == 1) {
            if (array_search('menu-full', $menuFull)) {
                $style = 'menu-full';
            } else if (array_search('menu-full-4', $menuFull)) {
                $style = 'menu-full-4';
            }
            $sub_menu = '<div class="sub-nav '.$style.'"><ul class="sub-nav-group">' . drupal_render($element['#below']) . '</ul></div>';
        } elseif ($depth == 2) {
            $sub_menu = '<ul class="sub-nav-block">' . drupal_render($element['#below']) . '</ul>';
        } else  {
            $sub_menu = '<ul>' . drupal_render($element['#below']) . '</ul>';

        }
    }

    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    if ($isColumn == 1) {
        $element['#attributes']['class'][] = 'menu-col';
    }

    return '<li' . drupal_attributes($element['#attributes']) . '>' . $item_title . $output . $sub_menu . "</li>\n";
}

function auxis_main_menu_link__menu_block__3(array $variables)
{
    $element = $variables['element'];
    $sub_menu = '';

    $element['#attributes']['class'][] = 'level-' . $element['#original_link']['depth'];
    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    if ($element['#title'] == 'BPO') {
        $element['#title'] = "Business Process Outsourcing";
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function auxis_main_preprocess_block(&$variables, $hook) {
    //dpm($variables['block']);
    if ($variables['block']->module == 'views') {
        //$variables['elements']['#block']->subject = NULL;
    }
}

function auxis_main_form_alter(&$form, &$form_state, $form_id) {

    if ($form_id == 'search_block_form') {
        //dpm($form['search_block_form']);
        $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
        $form['search_block_form']['#title_display'] = 'before'; // Toggle label visibilty
        $form['search_block_form']['#size'] = 40;  // define size of the textfield
        //$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
        //$form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
        // Add extra attributes to the text box
        $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
        $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
        //$form['search_block_form']['#attributes']['class'][] = "form-control";
        //dpm($form['search_block_form']['#attributes']);
        // Prevent user from searching the default text
        $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";
        // Alternative (HTML5) placeholder attribute instead of using the javascript
        $form['search_block_form']['#attributes']['placeholder'] = t('Search');
    }
}

/**
 * Implementation of hook_views_pre_render()
 * Breadcumbs Redefine
 * @param view $view
 */
function auxis_main_views_pre_render(&$view) {

    //dpm($view->name);
    if ($view->name == "case_studies_details_view") {
        //dpm($view->name);
        $breadcrumb = array();
        $breadcrumb[] = l(t('Home'), '<front>');
        $breadcrumb[] = l(t('Case Studies'), 'case-studies');

        //dpm(drupal_get_title());

        // Set the breadcrumbs
        drupal_set_breadcrumb($breadcrumb);
    }
}