<a href="<?php the_permalink() ?>" class="<?php echo strip_tags(get_the_tag_list("", "", " ")) ?>element-item h-[170px] md:h-[262px] flex flex-col justify-end rounded-xl bg-[url('<?php the_post_thumbnail_url() ?>')] bg-cover bg-center p-3 md:p-5">
  <h4 class="text-sm md:text-xl font-bold"><?php the_title() ?></h4>
  <p class="text-xs md:text-sm">by <?php the_author() ?></p>
</a>