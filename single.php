<?php
get_header();
?>
<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<article>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="image">
                        <?php
                        if (have_posts()) {
                        while (have_posts()) {
                        the_post();
                        echo '<h1 class="title">' . get_the_title() . '</h1>';
                        echo '<p>'. get_template_part('template-parts/content', 'article') . '</p>';
                        }
                        }
                        ?>  
                    </article>
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
