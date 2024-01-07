<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                        <?php
                        // Kontrollera om det är en arkivsida eller en vanlig inläggssida
                        if (is_home() && !is_front_page()) {
                            echo '<h1>';
                            single_post_title();
                            echo '</h1>';
                        } 
                        ?>

                    <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>

                    <nav class="navigation pagination">
                        <?php
                        the_posts_pagination();
                        ?>
                    </nav>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <?php dynamic_sidebar('sidebar-1');?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
