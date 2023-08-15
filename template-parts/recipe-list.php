<a href="<?php the_permalink() ?>" class="element-item People h-[262px] flex flex-col justify-end rounded-xl bg-[url('<?php the_post_thumbnail_url() ?>')] bg-cover bg-center p-5">
  <h4 class="font-bold"><?php the_title() ?></h4>
  <p class="">by <?php the_author() ?></p>
</a>