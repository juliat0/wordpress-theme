<?php
get_header();
?>
  <main>
    <section>
      <div class="container">
        <div class="row">
          <div id="primary" class="col-xs-12">
            <?php
              if ( have_posts() ){
                while ( have_posts() ){
                  the_post();
                  get_template_part('template-parts/content', 'page');
                }
              }
            ?>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
get_footer();
?>