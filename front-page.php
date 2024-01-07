<?php
get_header();
?>
<body>
    <div id="wrap">
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero">
                                <img src="<?php
                                the_post_thumbnail_url('large'); ?>" alt="image">
                                <div class="text">
                                <?php if (have_posts()): ?>
                                <?php while (have_posts()): the_post(); ?>
                                    <h1><?php the_title(); ?></h1>
                                    <p><?php the_content(); ?></p>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<script src="js/script.js"></script>
<?php
 get_footer();
 ?>

</body>
</html>