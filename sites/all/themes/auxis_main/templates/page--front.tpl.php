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

                <!--nav id="main-dkp-menu" class="dkp-menu">
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="?mike">Mike</a>
                        </li>
                        <li class="nav-item">
                            <a href="?movie">Movies</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group">
                                    <li class="level-2"><a href="?movie&genre=0">Option A</a>
                                        <ul>
                                            <li><a href="?movie&genre=7">A1</a></li>
                                            <li><a href="?movie&genre=9">A2</a></li>
                                            <li>&#8230;</li>
                                        </ul>
                                    </li>
                                    <li class="level-2"><a href="?movie&genre=0">Option B</a>
                                        <ul>
                                            <li><a href="?movie&genre=7">B1</a></li>
                                            <li><a href="?movie&genre=9">B2</a></li>
                                            <li>&#8230;</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="?tv">TV Shows</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group">
                                    <li><a href="?tv&genre=20">Classic TV</a></li>
                                    <li><a href="?tv&genre=21">Crime TV</a></li>
                                    <li>&#8230;</li>
                                </ul>
                                <ul class="sub-nav-group">
                                    <li><a href="?tv&genre=27">Reality TV</a></li>
                                    <li><a href="?tv&genre=30">TV Action</a></li>
                                    <li>&#8230;</li>
                                </ul>
                                <ul class="sub-nav-group">
                                    <li><a href="?tv&genre=33">TV Dramas</a></li>
                                    <li><a href="?tv&genre=34">TV Horror</a></li>
                                    <li>&#8230;</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!--div id="menu-wrapper">

                    <ul class="dkp mm-nav">
                        <li><a href="#">Home</a></li>
                        <li>
                            <a href="#">Managment Consulting</a>
                            <div>
                                <div class="mm-nav-column">
                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Pampers Diapers</a>
                                            <ul>
                                                <li><a href="#">Option 1</a></li>
                                                <li><a href="#">Option 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Huggies Diapers</a></li>
                                        <li><a href="#">Seventh Generation</a></li>
                                        <li><a href="#">Diapers</a></li>
                                        <li><a href="#">Derbies</a></li>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </div>

                                <div class="mm-nav-column">
                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>

                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </div>

                                <div class="mm-nav-column">
                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Pampers Diapers</a></li>
                                        <li><a href="#">Huggies Diapers</a></li>
                                        <li><a href="#">Seventh Generation</a></li>
                                        <li><a href="#">Diapers</a></li>
                                        <li><a href="#">Derbies</a></li>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </div>

                                <div class="mm-nav-column">
                                    <h3>Related Categories</h3>
                                    <ul>
                                        <li><a href="#">Pampers Diapers</a></li>
                                        <li><a href="#">Huggies Diapers</a></li>
                                        <li><a href="#">Diapers</a></li>
                                    </ul>

                                    <h3 class="orange">Brands</h3>
                                    <ul>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Technology Services</a>
                            <div>
                                <div class="mm-nav-column">
                                    <h3>Technology Services</h3>
                                    <ul>
                                        <li><a href="#">Huggies Diapers</a></li>
                                        <li><a href="#">Seventh Generation</a></li>
                                        <li><a href="#">Diapers</a></li>
                                        <li><a href="#">Derbies</a></li>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </div>
                            </div>


                        </li>
                        <li>
                            <a href="#">BPO</a>
                            <div>
                                <div class="mm-nav-column">
                                    <h3>Related Categories</h3>
                                    <ul>
                                        <li><a href="#">Pampers Diapers</a></li>
                                        <li><a href="#">Huggies Diapers</a></li>
                                        <li><a href="#">Diapers</a></li>
                                    </ul>

                                    <h3>Brands</h3>
                                    <ul>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                    </ul>
                                </div>

                                <div class="mm-nav-column">
                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Pampers Diapers</a></li>
                                        <li><a href="#">Huggies Diapers</a></li>
                                        <li><a href="#">Seventh Generation</a></li>
                                        <li><a href="#">Diapers</a></li>
                                        <li><a href="#">Derbies</a></li>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </div>

                                <div class="mm-nav-column">
                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>

                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </div>

                                <div class="mm-nav-column">
                                    <h3>Home</h3>
                                    <ul>
                                        <li><a href="#">Pampers Diapers</a></li>
                                        <li><a href="#">Huggies Diapers</a></li>
                                        <li><a href="#">Seventh Generation</a></li>
                                        <li><a href="#">Diapers</a></li>
                                        <li><a href="#">Derbies</a></li>
                                        <li><a href="#">Driving shoes</a></li>
                                        <li><a href="#">Espadrilles</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Viewpoints</a></li>
                        <li><a href="#">Client Results</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>

                </div>

                <!--nav id="main-menu" role="navigation" tabindex="-1">
                    <php
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
                </nav-->
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
