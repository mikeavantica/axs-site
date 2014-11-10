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

    <div id="main">

        <div id="content" class="column" role="main">
            <div class="content-slider">
                <?php if ($page['content_slider']): ?>
                    <?php print render($page['content_slider']); ?>
                <?php endif; ?>
            </div>
            <div class="content-news">
                <div class="news-info">
                    <?php if ($page['content_event']): ?>
                        <?php print render($page['content_event']); ?>
                    <?php endif; ?>
                </div>
                <div class="dkp news-clients">
                    <?php if ($page['content_slider_client']): ?>
                        <?php print render($page['content_slider_client']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="content-details">
                <div class="features">
                    <?php if ($page['content_highlight_block']): ?>
                        <?php print render($page['content_highlight_block']); ?>
                    <?php endif; ?>
                </div>

                <div class="details">
                    <!-- no more details-->
                    <?php print $messages; ?>
                </div>
            </div>
        </div>

    </div>

    <?php print render($page['footer']); ?>

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
