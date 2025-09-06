<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/img/araf_me.jpg'; ?>" />
  <meta property="og:title" content="<?php echo !is_front_page(get_the_title() . " by "); ?>Araf" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet"> 
  <link id="themeStylesheet" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism.min.css">
  <?php wp_head(); ?>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors">
  <header class="max-w-[800px] mx-5 sm:mx-auto flex items-center justify-between py-4">
    <!-- Left: Name -->
    <a href="<?php bloginfo( 'home' ); ?>"><h1 class="text-[min(10vw,32px)] font-bold font-bebas-neue flex items-center" title="John Doe"><img src="<?php echo get_template_directory_uri() . "/img/araf.jpg"; ?>" class="w-10 h-10 rounded-lg mr-2" alt=""> <span class="pt-1.5 tracking-wide ps-1"><?php bloginfo( 'name' ); ?></span></h1></a>

    <!-- Right: Menu + Toggle -->
    <div class="flex items-center space-x-3">
      <nav class="flex space-x-2 text-base">
        <!-- <a href="#" class="hover:underline">Home</a> -->
        <a href="<?php echo get_site_url() . "/blog"; ?>" class="border-b-gray-200 border-b-2 border-dashed dark:border-b-gray-600 font-inter transition hover:bg-gray-200 dark:hover:bg-gray-600">Blog</a>
      </nav>

      <!-- Dark/Light Switch -->
      <!-- id="toggleDark" -->
      <button class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition hover:cursor-pointer" onclick="toggleTheme()">
        <!-- Sun Icon (for dark mode) -->
        <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M12 3v2m0 14v2m9-9h-2M5 12H3
               m15.364 6.364l-1.414-1.414M7.05 7.05 5.636 5.636
               m12.728 0-1.414 1.414M7.05 16.95l-1.414 1.414
               M12 8a4 4 0 100 8 4 4 0 000-8z"/>
        </svg>
      
        <!-- Moon Icon (for light mode) -->
        <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M21 12.79A9 9 0 1111.21 3
                   7 7 0 0021 12.79z"/>
        </svg>
      </button>      
    </div>
  </header>
