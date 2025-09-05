<?php get_header(); ?>

<h1 class="mt-10 mb-4 text-[min(10vw,48px)] leading-[1] font-bold font-bebas-neue tracking-wide">My Notes</h1>

<!-- Post Loop Start -->
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>

  <ul>
    <li class="flex justify-between items-center font-inter text-lg/10 border-b-gray-200 dark:border-b-gray-600 dark:sm:border-b-gray-600 border-b-2 border-dashed sm:border-none mb-2">
      <a href="<?php echo get_the_permalink(); ?>" class="sm:border-b-gray-200 transition hover:sm:border-b-gray-300 sm:border-b-2 sm:border-dashed dark:sm:border-b-gray-600 hover:dark:sm:border-b-gray-500 truncate"><?php echo get_the_title(); ?></a> 
      <span class="hidden sm:block text-gray-600"><?php echo get_the_date('M j, Y'); ?></span>
    </li>   
  </ul>
    
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

<?php get_footer(); ?>

    
