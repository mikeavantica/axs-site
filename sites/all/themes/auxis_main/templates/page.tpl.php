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
    <div class="dkp dummy_header"><div class="dummy"></div></div>

    <header class="dkp header" id="header" role="banner">
        <div id="navigation">

            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                   class="dkp nav-logo header__logo" id="logo"><img src="<?php print $logo; ?>"
                                                                    alt="<?php print t('Home'); ?>"
                                                                    class="header__logo-image"/></a>
            <?php endif; ?>

            <?php if ($main_menu): ?>

                <a href="#main-mmenu"></a>

                <?php if ($page['mmenu']): ?>
                    <div class="mmenu">
                        <?php print render($page['mmenu']); ?>
                    </div> <!-- /.Sliding Menu Mobile -->
                <?php endif; ?>

                <?php if ($page['dkpmenu']): ?>
                    <div class="dkp dkp-menu-wrapper">
                        <?php print render($page['dkpmenu']); ?>
                    </div> <!-- /.Desktop Menu -->
                <?php endif; ?>

            <?php endif; ?>

            <?php print render($page['navigation']); ?>

        </div>
    </header>

  <div id="main">

    <div id="content" class="main-content column" role="main">
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

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

    <footer id="footer" class="internal-footer">
        <?php if ($page['footer_internal_menu']): ?>
            <div class="footer-internal-menu">
                <?php print render($page['footer_internal_menu']); ?>
            </div> <!-- /.Sliding Menu Mobile -->
        <?php endif; ?>
        <div class="copy">
            Copyright © <?php echo date("Y"); ?> | Auxis Inc. All Right
        </div>
    </footer>
</div>

<?php print render($page['bottom']); ?>
