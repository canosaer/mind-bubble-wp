<?php
    $searchBar = '
    <form role="search" method="get" action="http://localhost/" class="wp-block-search__button-inside wp-block-search__icon-button wp-block-search">
        <div class="wp-block-search__inside-wrapper">
            <input type="search" id="wp-block-search__input-1" class="wp-block-search__input" name="s" value="" placeholder=""  required />
            <button type="submit" class="wp-block-search__button has-icon">
                <svg id="search-icon" class="search-icon" viewBox="0 0 24 24" width="24" height="24">
                    <path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path>
                </svg>
            </button>
        </div>
    </form>
    '
?>

<html>
    <head>
        <?php
            wp_head();
        ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="page-container">
            <header class="site-header">
                <nav class="menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'menu__list',
                            'container_class' => 'menu__container',
                            'items_wrap' => '<ul id="mb-menu" class="%2$s">%3$s</ul>'
                        ));
                    ?>
                </nav>
                <figure class="logo">
                    <a class="logo__link" href="<?php echo home_url("/"); ?>"></a>
                </figure>

                <?php echo $searchBar?>
            </header>