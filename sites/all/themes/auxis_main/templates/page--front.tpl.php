<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

    <header class="dkp header" id="header" role="banner">

        <div id="navigation">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="dkp nav-logo header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
            <?php endif; ?>

            <?php if ($main_menu): ?>

                <!--a href="#main-mmenu"></a>

                <nav id="main-mmenu">
                    <ul>
                        <li class="Selected"><a href="index.html">Home</a></li>
                        <li><a href="horizontal-submenus.html">About Us</a></li>
                    </ul>
                </nav-->

                <nav id="main-menu" role="navigation" tabindex="-1">
                    <?php
                    // This code snippet is hard to modify. We recommend turning off the
                    // "Main menu" on your sub-theme's settings form, deleting this PHP
                    // code block, and, instead, using the "Menu block" module.
                    // @see https://drupal.org/project/menu_block
                    print theme('links__system_main_menu', array(
                        'links' => $main_menu,
                        'attributes' => array(
                            'class' => array('links', 'inline'),
                        ),
                        'heading' => array(
                            'text' => t('Main menu'),
                            'level' => 'h2',
                            'class' => array('element-invisible'),
                        ),
                    )); ?>
                </nav>
            <?php endif; ?>

            <?php print render($page['navigation']); ?>

        </div>
    </header>

    <div id="main">

        <div id="content" class="column" role="main">
            <div class="content-slider">
                <img src="<?php echo drupal_get_path('theme', 'auxis_main'); ?>/images/slider.png">
            </div>
            <div class="content-news">
                <div class="news-info">news</div>
                <div class="news-clients">clients</div>
            </div>
            <div class="content-details">
                <div class="features">
                    <div class="feature-a">feature a</div>
                    <div class="feature-b">feature b</div>
                    <div class="feature-c">feature c</div>
                </div>

                <div class="details">
                    <?php print render($page['highlighted']); ?>
                    <?php print $breadcrumb; ?>
                    <a id="main-content"></a>
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php print $messages; ?>
                    <?php print render($tabs); ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                        <ul class="action-links"><?php print render($action_links); ?></ul>
                    <?php endif; ?>
                    <?php print render($page['content']); ?>
                    <?php print $feed_icons; ?>
                </div>
            </div>
        </div>

        <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_first = render($page['sidebar_first']);
        $sidebar_second = render($page['sidebar_second']);
        ?>

        <?php if ($sidebar_first || $sidebar_second): ?>
            <aside class="sidebars">
                <?php print $sidebar_first; ?>
                <?php print $sidebar_second; ?>
            </aside>
        <?php endif; ?>

    </div>

    <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
