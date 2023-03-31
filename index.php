<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="assets/fonts/delicious-handrawn/font-style.css">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <p class="header-icon">
                <i class="fas fa-vihara"></i>
            </p>
            <h1><?php bloginfo('title'); ?></h1>
        </div>
    </header>

    <nav class="burger-icon">
        <a href="#mobile-nav"><i class="fas fa-bars"></i></a>
    </nav>

    <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>

    <main>

        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
        ?>

        <!--            <h2 class="my-post-title"><?php the_title(); ?></h2>-->
        <?php the_content(); ?>

        <?php
                endwhile;
            endif;
        ?>

    </main>

    <footer>
        <div class="container">
            <nav class="footer-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
            </nav>

            <p>
                © 2023 Enno Hyttrek
            </p>
        </div>
    </footer>

    <nav id="mobile-nav" class="mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>
    <?php wp_footer() ?>
</body>

</html>
