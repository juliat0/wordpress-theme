<article>
<?php
if ( has_post_thumbnail() ) {
echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'large') . '" alt="image">';
}
?>
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <ul class="meta">     
    <li class="date">
      <i class="fa fa-calendar"></i>
      <?php echo get_the_date(); ?>
    </li>
    <li class="">
      <i class="fa fa-user"></i>
      <?php the_author_posts_link(', '); ?>
    </li>
    <li class="tag">
      <i class='fa fa-tag'></i>
      <?php the_category(', '); ?>
    </li>
  </ul>
  <p>
  <?php
  the_excerpt();
  ?>
  </p>
</article>
