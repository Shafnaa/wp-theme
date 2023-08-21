<article class="flex flex-col-reverse space-y-4 space-y-reverse md:grid md:grid-cols-5 md:gap-x-24 items-stretch justify-items-stretch min-h-60 pb-8 mb-8 border-smoke border-b-2">
  <div class="col-span-3">
    <div class="flex flex-row space-x-2.5 text-orange text-xs md:text-base mb-1.5">
      <div class="">by <?php the_author() ?></div>
      <div class="">•</div>
      <div class=""><?php the_date() ?></div>
    </div>
    <a href="<?php the_permalink() ?>">
      <h3 class="text-base md:text-2xl font-semibold mb-4">
        <?php the_title() ?>
      </h3>
    </a>
    <p class="text-sm md:text-base text-gray mb-5">
      <?php the_excerpt_rss() ?>
    </p>
    <div class="flex flex-row space-x-1.5">
      <?php
      the_tags('<div class="text-xs md:text-sm uppercase px-3.5 py-2.5 border border-gray rounded-full">', '</div>
        <div class="text-xs md:text-sm uppercase px-3.5 py-2.5 border border-gray rounded-full">', '</div>')
      ?>
    </div>
  </div>
  <img class="col-span-2 rounded-xl object-cover md:h-60" src="<?php the_post_thumbnail_url() ?>" />
</article>