<!-- Footer -->
<footer class="pt-20 pb-12 px-10">
  <div class="max-w-screen-xl grid grid-cols-2 items-center bg-footer-newsletter bg-cover bg-center text-white rounded-xl mx-auto mb-20 md:px-16 md:py-14">
    <div>
      <h3 class="text-2xl font-bold mb-3">Join Our Newsletter</h3>
      <p class="text-base">
        We’ll send you a nice letter once a week. No Spam
      </p>
    </div>
    <form class="grid grid-cols-3 items-stretch justify-items-stretch text-base text-white rounded-full p-1 bg-white/30">
      <input class="col-span-2 bg-transparent placeholder:text-white focus:bg-transparent focus:outline-none pl-8" type="email" placeholder="Enter your email..." />
      <button type="submit" class="font-bold rounded-full py-3.5 px-9 bg-orange">
        Subscribe
      </button>
    </form>
  </div>
  <div class="grid grid-cols-3 grid-row-2 max-w-screen-xl gap-x-40 mx-auto mb-12 px-4 pb-20 border-b-2 border-smoke">
    <div class="">
      <a href="<?php echo get_home_url() ?>" class="flex items-center mb-5">
        <?php
        if (function_exists('the_custom_logo')) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
        ?>
        <img src="<?php echo $logo[0] ?>" class="h-12 mr-3" alt="Growth Hacker" />
        <span class="self-center text-lg font-semibold whitespace-nowrap text-black">
          <?php echo get_bloginfo('name') ?>
        </span>
      </a>
      <p class="text-base text-gray">
        See episodes where the experts reveal their secrets on startup
        growth.
      </p>
    </div>
    <div class="col-span-2 flex flex-row justify-between space-x-100 pt-10">
      <div>
        <h4 class="text-xl font-semibold mb-5">Quick Links</h4>

        <?php
        wp_nav_menu(
          array(
            'menu' => 'Secondary menu',
            'container' => '',
            'theme_location' => 'Secondary menu',
            'items_wrap' => '<ul id="" class="flex flex-col space-y-3 text-base text-gray">%3$s</ul>',
          )
        )
        ?>

      </div>
      <div>
        <h4 class="text-xl font-semibold mb-5">Company</h4>

        <?php
        wp_nav_menu(
          array(
            'menu' => 'Company menu',
            'container' => '',
            'theme_location' => 'Company menu',
            'items_wrap' => '<ul id="" class="flex flex-col space-y-3 text-base text-gray">%3$s</ul>',
          )
        )
        ?>

      </div>
      <div>
        <h4 class="text-xl font-semibold mb-5">Social Media</h4>

        <?php
        wp_nav_menu(
          array(
            'menu' => 'Social menu',
            'container' => '',
            'theme_location' => 'Social menu',
            'items_wrap' => '<ul id="" class="flex flex-col space-y-3 text-base text-gray">%3$s</ul>',
          )
        )
        ?>

      </div>
    </div>
  </div>
  <p class="text-center text-base text-gray">
    ©Copyright Growth Hacker TV 2023. All Right Reserved
  </p>
</footer>

<!-- Filter JS -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="./assets/scripts/script.js"></script> -->

<!-- Flowbite navbar -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script> -->

<!-- Swiper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->

<!-- Initialize Swiper -->
<!-- <script src="./assets/scripts/swiper1.js"></script>
  <script src="./assets/scripts/swiper2.js"></script> -->

<?php wp_footer() ?>

</body>

</html>