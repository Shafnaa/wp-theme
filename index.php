<?php get_header() ?>

<section class="md:py-24 md:px-24">
  <div class="max-w-screen-xl mx-auto">
    <h2 class="text-4xl font-bold mb-16">Blog</h2>
    <div class="grid grid-row-3 grid-cols-1 items-stretch">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          get_template_part('template-parts/blog', 'list');
        }
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer() ?>