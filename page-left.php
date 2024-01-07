<?php
    /*
    Template name: menu-left
    */
    get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <?php
                    if(have_posts()){
                    while(have_posts()){
                    the_post();
                    get_template_part('template-parts/content', 'page');
                    }
                    }
                    ?>                      
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                    <?php
                    wp_nav_menu(
                    array(
                    'menu' => 'side',
                    'container' => '',
                    'theme_location' => 'side',
                    'items_wrap' => '<ul class="side-menu">%3$s</ul>'
                    )
                    );
                    ?>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>