<?php get_header() ?>

<section class="relative md:pt-32">
  <div class="max-w-screen-xl mx-auto mb-16">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        if (get_post_type() === 'post') {
          echo '<div class="flex flex-row space-x-1.5">';
          the_tags('<div class="text-sm px-3.5 py-2.5 border border-gray rounded-full">', '</div>
            <div class="text-sm px-3.5 py-2.5 border border-gray rounded-full">', '</div>');
          echo '</div>';
          get_template_part('template-parts/content', 'blog');
        } else if (get_post_type() === 'recipe') {
          get_template_part('template-parts/content', 'recipe');
        }
      }
    }
    ?>
    <?php
    comments_template();
    ?>
  </div>
</section>

<?php get_footer() ?>