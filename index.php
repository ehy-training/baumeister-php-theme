<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>

    <header>
        <h1><?php bloginfo('title'); ?></h1>
    </header>

    <nav></nav>

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
        <p>
            © 2023 Enno Hyttrek
        </p>
    </footer>

</body>

</html>
