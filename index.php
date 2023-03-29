<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
        <link rel="stylesheet" href="assets/fonts/delicious-handrawn/font-style.css">
    <?php wp_head() ?>
</head>

<body>

    <header>
        <h1><?php bloginfo('title'); ?></h1>
    </header>
    
        <nav class="burger-icon">
    <a href="#mobile-nav"><div></div></a>
    </nav>

    <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>

    <main>

        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
        ?>
        <article>
            <h2 class="my-post-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
        <?php
                endwhile;
            endif;
        ?>

    </main>

    <footer>
           <nav class="footer-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
    </nav>
       
        <p>
            © 2023 Enno Hyttrek
        </p>
    </footer>
       
        <nav  id="mobile-nav" class="mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>

</body>

</html>
