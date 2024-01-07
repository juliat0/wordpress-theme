<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php
                    if (is_author()) {
                        echo '<h1 class="page-title">' . get_the_author() . '</h1>';
                    } elseif (is_category()) {
                        echo '<h1 class="page-title">' . single_cat_title('', false) . '</h1>';
                    } elseif (is_archive()) {
                        echo '<h1 class="page-title">' . get_the_archive_title() . '</h1>';
                    }

                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>

                    <nav class="navigation pagination">
                        <?php the_posts_pagination(); ?>
                    </nav>
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
