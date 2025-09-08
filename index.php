<?php get_header(); ?>

<div class="max-w-[800px] mx-5 sm:mx-auto">

  <h2>Blog Posts</h2>

  <ul class="ps-0 posts">
  <!-- Post Loop Start -->
  <?php 
  if ( have_posts() ) :
      while ( have_posts() ) : the_post();
  ?>

      <li>
        <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a> 
        <span><?php echo get_the_date('M j, Y'); ?></span>
      </li>   
      
      <!-- Pagination Start -->
          <?php //wpstarter_pagination() ?>
      <!-- Pagination End -->

  <?php
      endwhile;
  else :
      _e( 'Sorry, no posts were found.', 'wpstarter' );
  endif;
  ?>
  <!-- Post Loop End -->
  </ul>

</div>

<?php get_footer(); ?>

    
