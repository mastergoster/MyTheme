<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <h1><?php echo bloginfo('name'); ?></h1>
        <nav id="navigation">
            <?php wp_nav_menu(array('theme_location' => 'main')); ?>
        </nav>
    </header>
    <div id="wrap">
        <section id="content">
            <?php if (have_posts()) : ?>
                <div id="loop">
                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <p>Publié le <?php the_time('d/m/Y'); ?><?php if (!is_page()) : ?> dans <?php the_category(', '); ?><?php endif; ?></p>
                            <?php if (is_singular()) : ?>
                                <?php the_content(); ?>
                            <?php else : ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>">Lire la suite</a>
                            <?php endif; ?>
                        </article>
                    <?php endwhile; ?>
                </div>
                <div id="pagination">
                    <?php echo paginate_links(); ?>
                </div>
            <?php else : ?>
                <p>Aucun résultat</p>
            <?php endif; ?>
        </section>

        <aside id="sidebar">
            <?php dynamic_sidebar('main-sidebar'); ?>
        </aside>
    </div>
    <footer id="footer">
        <?php dynamic_sidebar('footer-sidebar'); ?>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>