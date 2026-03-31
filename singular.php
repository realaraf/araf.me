<?php get_header(); ?>

<!-- Post/Page Content Start -->
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
    <article class="mx-5 sm:mx-auto">
        <h1><?php echo get_the_title(); ?></h1>
        <p class="text-gray-600">Published on <?php echo get_the_date('M j, Y'); ?></p>
        <?php //if(get_the_post_thumbnail_url()){ ?>
            <!-- img src="<?php //echo get_the_post_thumbnail_url(); ?>" -->
        <?php //} ?>
        <?php the_content(); ?>
    </article>    
<?php
    endwhile;
else :
    _e( 'Sorry, no posts were found.', 'wpstarter' );
endif;
?>
<!-- Post/Page Content End -->

<div class="max-w-[800px] mx-5 sm:mx-auto">

  <div class="subs"> 
    <p>You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p>
    <iframe src="https://embeds.beehiiv.com/180c3a9d-ec5e-4350-b35e-976cb7c185d4?slim=true" data-test-id="beehiiv-embed" height="52" frameborder="0" scrolling="no" style="margin: 0 auto; border-radius: 0px !important; background-color: transparent; margin-top: 20px;"></iframe>  
  </div>

    <h2>You may also like</h2>
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 100,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        echo '<ul class="ps-0 posts">';
        while ( $query->have_posts() ) {
            $query->the_post();
            $format = get_post_format();

            // For standard posts, get_post_format() returns false
            if ( ! $format || $format === 'standard' ) : 
        ?>
            <li>
                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <?php echo esc_html( get_the_title() ); ?>
                </a>
                <span><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
            </li>
        <?php 
            endif;
        }
        echo '</ul>';
        wp_reset_postdata();
    }
    ?>
</div>

<?php get_footer(); ?>
