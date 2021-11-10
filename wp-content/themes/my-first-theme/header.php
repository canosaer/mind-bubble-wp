<html>
    <head>
        <?php
            wp_head();
        ?>
    </head>

    <body>
        <div class="page-container">
            <header class="site-header">
                <input type="radio" class="toggle__radio" name="toggle" id="toggle" aria-label="nav-menu-toggle" role="button">
                <label for="toggle" class="toggle">
                    <div class="toggle__line toggle__line_1"></div>
                    <div class="toggle__line toggle__line_2"></div>
                </label>
                <nav class="menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'menu__list',
                            'container_class' => 'menu__container',
                            'items_wrap' => '<ul id="mft-menu" class="%2$s">%3$s</ul>'
                        ));
                    ?>
                </nav>
                <figure class="logo">
                    <a class="logo__link" href="<?php echo home_url("/"); ?>"></a>
                </figure>
                <form class="search-bar">
                    <button class="search-bar__button">
                        <img class="search-bar__button-icon" src="http://localhost/wp-content/uploads/2021/11/magnifying-glass.png" alt="search">
                    </button>
                    <input class="search-bar__input" placeholder="Search">
                </form>
            </header>