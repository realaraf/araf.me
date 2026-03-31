<?php get_header(); ?>

<div class="max-w-[800px] mx-5 sm:mx-auto">

  <h2>Blog Posts</h2>

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

    
