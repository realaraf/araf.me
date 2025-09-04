<footer>
    <p class="mt-12 mb-5 font-inter text-sm text-gray-500 dark:text-gray-400">© <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Built with ❤️ using <a href="https://tailwindcss.com" class="sm:border-b-gray-200 sm:border-b-2 sm:border-dashed dark:sm:border-b-gray-600">Tailwind CSS</a>, <a href="https://wp.org/" class="sm:border-b-gray-200 sm:border-b-2 sm:border-dashed dark:sm:border-b-gray-600">WordPress</a>.</p>
  </footer>

  <!--script>
    const sunIcon = document.getElementById("sunIcon");
    const moonIcon = document.getElementById("moonIcon");
  
    // Load saved theme on page load
    if (localStorage.getItem("theme") === "dark" || 
       (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("dark");
      sunIcon.classList.remove("hidden");
      moonIcon.classList.add("hidden");
    } else {
      document.documentElement.classList.remove("dark");
      sunIcon.classList.add("hidden");
      moonIcon.classList.remove("hidden");
    }
  
    function toggleTheme() {
      if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        sunIcon.classList.add("hidden");
        moonIcon.classList.remove("hidden");
      } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
        sunIcon.classList.remove("hidden");
        moonIcon.classList.add("hidden");
      }
    }
  </script-->
  <script>
    const sunIcon = document.getElementById("sunIcon");
    const moonIcon = document.getElementById("moonIcon");
    const themeStylesheet = document.getElementById("themeStylesheet");

    // Load saved theme on page load
    if (localStorage.getItem("theme") === "dark" || 
       (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("dark");
      themeStylesheet.href = "https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism-okaidia.min.css";  // load dark stylesheet
      sunIcon?.classList.remove("hidden");
      moonIcon?.classList.add("hidden");
    } else {
      document.documentElement.classList.remove("dark");
      themeStylesheet.href = "https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism.min.css"; // load light stylesheet
      sunIcon?.classList.add("hidden");
      moonIcon?.classList.remove("hidden");
    }

    function toggleTheme() {
      if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        themeStylesheet.href = "https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism.min.css"; // switch to light stylesheet
        sunIcon?.classList.add("hidden");
        moonIcon?.classList.remove("hidden");
      } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
        themeStylesheet.href = "https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism-okaidia.min.css"; // switch to dark stylesheet
        sunIcon?.classList.remove("hidden");
        moonIcon?.classList.add("hidden");
      }
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/prism.min.js" integrity="sha512-UOoJElONeUNzQbbKQbjldDf9MwOHqxNz49NNJJ1d90yp+X9edsHyJoAs6O4K19CZGaIdjI5ohK+O2y5lBTW6uQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <?php wp_footer(); ?>
  </body>
</html>