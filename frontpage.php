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
          ?> 
            <li>
              <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a> 
              <span><?php echo get_the_date('M j, Y'); ?></span>
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