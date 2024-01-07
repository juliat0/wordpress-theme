<header class="content-header">
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
</header>
 <?php
 the_content();
 ?>
