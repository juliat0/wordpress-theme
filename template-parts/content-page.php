<?php
if ( has_post_thumbnail() ) {
    echo '<div class="col-xs-12 col-sm-8 col-md-6">';
}
?>
<h1><?php the_title(); ?></h1>
<?php 
the_content();
?>
<?php
if ( has_post_thumbnail() ) {
    echo '</div><div class="col-xs-12 col-sm-4 col-md-6"><img src="' . get_the_post_thumbnail_url(get_the_ID(), 'large') . '" alt="image"></div>';
}
?>

