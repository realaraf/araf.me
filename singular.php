<?php get_header(); ?>

<!-- Post/Page Content Start -->
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
    <article>
        <h1 class="mt-10 mb-4 text-[min(10vw,48px)] leading-[1] font-bold font-bebas-neue tracking-wide"><?php echo get_the_title(); ?></h1>
        <p class="font-inter text-lg/10 text-gray-600">Published on <?php echo get_the_date('M j, Y'); ?></p>
        <?php if(get_the_post_thumbnail_url()){ ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <?php } ?>
        <?php the_content(); ?>
    </article>    
<?php
    endwhile;
else :
    _e( 'Sorry, no posts were found.', 'wpstarter' );
endif;
?>
<!-- Post/Page Content End -->

<div class="mt-12 pt-6 pb-12 px-12 text-center border-2 border-dashed border-gray-200 rounded-[6px] bg-gray-50 dark:bg-gray-800 dark:border-gray-600">
    <p class="mt-4 text-lg sm:text-2xl font-inter leading-9">You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p>
    <iframe src="https://embeds.beehiiv.com/180c3a9d-ec5e-4350-b35e-976cb7c185d4?slim=true" data-test-id="beehiiv-embed" height="52" frameborder="0" scrolling="no" style="margin: 0 auto; border-radius: 0px !important; background-color: transparent; margin-top: 20px;"></iframe>  
</div>

<h1 class="mt-12 mb-4 text-[min(7.5vw,36px)] leading-[1] font-bold font-bebas-neue tracking-wide">You may also like</h1>
  <?php
    $args = array(
        'post_type'      => 'post',   // get regular posts
        'posts_per_page' => 5,        // number of posts to display
        'orderby'        => 'date',
        'order'          => 'DESC'
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        echo '<ul>';
        while ( $query->have_posts() ) {
            $query->the_post();
        ?> 
        <li class="flex justify-between items-center font-inter text-lg/10 border-b-gray-200 dark:border-b-gray-600 dark:sm:border-b-gray-600 border-b-2 border-dashed sm:border-none mb-2">
            <a href="<?php echo get_the_permalink(); ?>" class="sm:border-b-gray-200 transition hover:sm:border-b-gray-300 sm:border-b-2 sm:border-dashed dark:sm:border-b-gray-600 hover:dark:sm:border-b-gray-500"><?php echo get_the_title(); ?></a> 
            <span class="hidden sm:block text-gray-600"><?php echo get_the_date('M j, Y'); ?></span>
        </li> 
        <?php 
        }
        echo '</ul>';
        wp_reset_postdata();
    }
  ?>

<?php get_footer(); ?>