<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div id="page" class="wrapper">
    <div id="dummy" class="dummy_header">
        <div class="dummy"></div>
    </div>

    <header class="dkp header" id="header" role="banner">
        <div id="navigation">

            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                   class="dkp nav-logo header__logo" id="logo">
                    <div class="logo-container">
                        <img src="<?php print $logo; ?>"
                             alt="<?php print t('Home'); ?>"
                             class="header__logo-image"/>
                        <span>Grow Your Business, Not Your Backoffice. ™</span>
                    </div>
                </a>
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

    <div id="main" class="root-content">

        <div id="content" class="dkp main-content column" role="main">
            <div class="article">
                <?php print $breadcrumb; ?>
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
                <?php print render($page['highlighted']); ?>
                <?php print render($page['content']); ?>
                <?php print render($page['content_tabs']); ?>
                <?php print $feed_icons; ?>
            </div>
            <aside class="left-col">
                <?php if ($page['left_col']): ?>
                    <?php print render($page['left_col']); ?>
                <?php endif; ?>
            </aside>
            <aside class="right-col">
                <?php if ($page['right_col']): ?>
                    <?php print render($page['right_col']); ?>
                <?php endif; ?>
            </aside>
        </div>

    </div>

    <footer id="footer" class="internal-footer">
        <div class="internal-footer-content">
            <?php if ($page['footer_internal_menu']): ?>
                <div class="footer-internal-menu">
                    <?php print render($page['footer_internal_menu']); ?>
                </div> <!-- /.Sliding Menu Mobile -->
            <?php endif; ?>
            <div class="copy">
                Copyright © <?php echo date("Y"); ?> | Auxis LLC All Rights Reserved.
            </div>
        </div>
    </footer>
</div>
<?php print render($page['bottom']); ?>

<script type="text/javascript">
    var cdJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
    document.write(unescape("%3Cscript src='" + cdJsHost + "analytics.clickdimensions.com/ts.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
    var cdAnalytics = new clickdimensions.Analytics('analytics.clickdimensions.com');
    cdAnalytics.setAccountKey('aHCzUGWXvq0GMJ0afLYDXg');
    cdAnalytics.setDomain('auxis.com');
    cdAnalytics.trackPage();
</script>
