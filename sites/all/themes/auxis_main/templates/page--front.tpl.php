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

    </div>

    <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
