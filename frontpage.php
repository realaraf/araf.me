<?php 
  /* Template Name: Front Page Template */
  get_header(); 
?>

<div class="max-w-[800px] mx-5 sm:mx-auto">

  <h1>Shopify & WordPress Developer</h1>
  <p class="hero">Hey! I'm Md. Araful Karim (Araf). I develope high-quality Shopify ecommerce and WordPress sites. All of my open source works are publicly available on <a href="https://github.com/realaraf" target="_blank">GitHub</a>. You can connect/contact me on <a href="https://www.linkedin.com/in/realaraf/" target="_blank">LinkedIn</a> or <a href="https://calendly.com/meet_araf/30min" target="_blank">schedule a meeting</a> for project discussion.</p>
  
  <div class="subs">
    <p>You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p>
    <iframe src="https://embeds.beehiiv.com/180c3a9d-ec5e-4350-b35e-976cb7c185d4?slim=true" data-test-id="beehiiv-embed" height="52" frameborder="0" scrolling="no" style="margin: 0 auto; border-radius: 0px !important; background-color: transparent; margin-top: 20px;"></iframe>  
  </div>

  <!-- Alert: Default -->
  <!-- <div class="alert default">
    <p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:fit-content;" role="img" aria-label="Info">
        <title>Info</title>
        <circle cx="12" cy="12" r="10" fill="currentColor"/>
        <rect x="11" y="10" width="2" height="6" fill="white"/>
        <circle cx="12" cy="7.5" r="1" fill="white"/>
      </svg>Note: You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p> 
  </div> -->

  <!-- Alert: Blue -->
  <!-- <div class="alert blue">
    <p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:fit-content;" role="img" aria-label="Info">
        <title>Info</title>
        <circle cx="12" cy="12" r="10" fill="currentColor"/>
        <rect x="11" y="10" width="2" height="6" fill="white"/>
        <circle cx="12" cy="7.5" r="1" fill="white"/>
      </svg>Note: You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p> 
  </div> -->

  <!-- Alert: Red -->
  <!-- <div class="alert red">
    <p class="flex mt-0 sm:mt-4 text-lg font-inter leading-6 items-center sm:items-start">
      <svg class="mt-0.25 me-2.5 sm:me-1.5 w-[40px] sm:w-[28px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:fit-content;" role="img" aria-label="Info">
        <title>Info</title>
        <circle cx="12" cy="12" r="10" fill="currentColor"/>
        <rect x="11" y="10" width="2" height="6" fill="white"/>
        <circle cx="12" cy="7.5" r="1" fill="white"/>
      </svg>Note: You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p> 
  </div> -->

  <!-- Alert: Yellow -->
  <!-- <div class="alert yellow">
    <p class="flex mt-0 sm:mt-4 text-lg font-inter leading-6 items-center sm:items-start">
      <svg class="mt-0.25 me-2.5 sm:me-1.5 w-[40px] sm:w-[28px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:fit-content;" role="img" aria-label="Info">
        <title>Info</title>
        <circle cx="12" cy="12" r="10" fill="currentColor"/>
        <rect x="11" y="10" width="2" height="6" fill="white"/>
        <circle cx="12" cy="7.5" r="1" fill="white"/>
      </svg>Note: You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p> 
  </div> -->

  <!-- Alert: Green -->
  <!-- <div class="alert green">
    <p class="flex mt-0 sm:mt-4 text-lg font-inter leading-6 items-center sm:items-start">
      <svg class="mt-0.25 me-2.5 sm:me-1.5 w-[40px] sm:w-[28px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:fit-content;" role="img" aria-label="Info">
        <title>Info</title>
        <circle cx="12" cy="12" r="10" fill="currentColor"/>
        <rect x="11" y="10" width="2" height="6" fill="white"/>
        <circle cx="12" cy="7.5" r="1" fill="white"/>
      </svg>Note: You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p> 
  </div> -->

  <!-- Alert: Gray -->
  <!-- <div class="alert gray">
    <p class="flex mt-0 sm:mt-4 text-lg font-inter leading-6 items-center sm:items-start">
      <svg class="mt-0.25 me-2.5 sm:me-1.5 w-[40px] sm:w-[28px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:fit-content;" role="img" aria-label="Info">
        <title>Info</title>
        <circle cx="12" cy="12" r="10" fill="currentColor"/>
        <rect x="11" y="10" width="2" height="6" fill="white"/>
        <circle cx="12" cy="7.5" r="1" fill="white"/>
      </svg>Note: You can subscribe my newsletter to ger real-life web development tips and resources, directly to your inbox.</p> 
  </div> -->

  <h2>Blog Posts</h2>
  <?php
    if ( is_front_page() ) { // Run only on the front page
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5,
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
    }
    ?>


  <h2>Links</h2>
  <?php
    if ( is_front_page() ) { // ensures this runs only on the front page
      $args = array(
          'post_type'      => 'post',   // get regular posts
          'posts_per_page' => 5,        // number of posts to display
          'orderby'        => 'date',
          'order'          => 'DESC'
      );

      $query = new WP_Query( $args );

      if ( $query->have_posts() ) {
          echo '<ul class="ps-0 posts">';
          while ( $query->have_posts() ) {
              $query->the_post();
			  $format = get_post_format();
          ?> 
            <li>
			      <?php if ( $format === 'link' ) : ?>
				      <a href="<?php echo esc_url( get_field('post_link') ); ?>" class="flex" target="_blank"><span class="text-gray-900 dark:text-gray-100  me-1"><?php the_title(); ?></span> <svg class="w-[16px] fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M384 64C366.3 64 352 78.3 352 96C352 113.7 366.3 128 384 128L466.7 128L265.3 329.4C252.8 341.9 252.8 362.2 265.3 374.7C277.8 387.2 298.1 387.2 310.6 374.7L512 173.3L512 256C512 273.7 526.3 288 544 288C561.7 288 576 273.7 576 256L576 96C576 78.3 561.7 64 544 64L384 64zM144 160C99.8 160 64 195.8 64 240L64 496C64 540.2 99.8 576 144 576L400 576C444.2 576 480 540.2 480 496L480 416C480 398.3 465.7 384 448 384C430.3 384 416 398.3 416 416L416 496C416 504.8 408.8 512 400 512L144 512C135.2 512 128 504.8 128 496L128 240C128 231.2 135.2 224 144 224L224 224C241.7 224 256 209.7 256 192C256 174.3 241.7 160 224 160L144 160z"/></svg></a>
              <span><?php echo get_the_date('M j, Y'); ?></span>
			      <?php endif; ?>
            </li> 
          <?php 
          }
          echo '</ul>';
          wp_reset_postdata();
      }
    }
  ?>
	
</div>

<?php get_footer(); ?>
