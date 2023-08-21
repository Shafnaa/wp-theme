<?php get_header() ?>

<!-- Hero -->
<section class="relative bg-softorange overflow-hidden pt-24 px-4 md:pt-32">
  <div class="text-center mb-16">
    <h1 class="text-4xl md:text-[56px] mb-5 font-bold">
      <?php the_title() ?>
    </h1>
    <p class="text-sm text-base text-gray">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_content();
        }
      }
      ?>
    </p>
    <div class="h-12"></div>
    <form class="md:max-w-[550px] flex flex-col space-y-3 md:space-y-0 md:grid md:grid-cols-3 items-stretch justify-items-stretch text-base rounded-full p-1 md:bg-white mx-auto md:border md:border-smoke">
      <input class="h-12 md:col-span-2 md:bg-transparent placeholder:text-center md:placeholder:text-left placeholder:text-gray md:focus:bg-transparent rounded-full focus:outline-none border border-smoke md:border-0 md:pl-8" type="email" placeholder="Enter your email..." />
      <button type="submit" class="text-white font-bold rounded-full py-3.5 px-9 bg-orange">
        Sign Up
      </button>
    </form>
  </div>

  <div class="">
    <div class="flex justify-center items-end">
      <div class="w-[360px] h-48 md:h-[430px] rounded-2xl border-4 border-white rotate-[-18deg] z-[0] mr-[-120px]">
        <img src="https://s3-alpha-sig.figma.com/img/725c/5a75/0a4823408e096a3ac6feb4fdc4f8a348?Expires=1692576000&Signature=GRd8MAeNfK5sqRZKUXeyv6tlxp1aRwv57zeZ2jglAHNZGc8xduOs-T6fFduP8f1vCaLKtOIZcWjPugQPbPh1QsqgNCH8cEnwYfeLiMYYlzcrO1Tc39~zcPJSS6VD3G41-haZIGUvaNnpBKoxabgIYMgGe3KJzxx7-uGVid3luN-re18u87IHOGYXqrNnByn7rZ1L~ntrsD8nNDNmlC9OKYuN6tFypVFgMPnnUCf3FGAjSmAULkH8TDL89YD7p-i7UTS8UdRFgqdFMvBE3J4DOfSdZFTdIAsROikZCNDi7Wg2E1jHZ7~i~oAbU13Wu15TBVUDyMWLS3YU55XEUMBzwA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" class="w-full h-full object-cover rounded-2xl" />
      </div>
      <div class="relative p-3 md:p-8 z-[1]" style="
              background-image: url('<?php echo get_template_directory_uri() ?>/assets/media/ipad.png');
              background-size: 100%;
            ">
        <video class="w-[720px] rounded-lg md:rounded-2xl" src="<?php echo get_template_directory_uri() ?>/assets/media/vid.mp4" id="video"></video>
        <div class="controls">
          <button class="btn" id="play"><i class="fas fa-play"></i></button>
          <input type="range" class="peogressbar" id="progressbar" min="0" max="100" step="0.1" value="0" />
        </div>
      </div>
      <div class="w-[360px] h-48 md:h-[430px] rounded-2xl border-4 border-white rotate-[18deg] z-[0] ml-[-120px]">
        <img src="https://s3-alpha-sig.figma.com/img/725c/5a75/0a4823408e096a3ac6feb4fdc4f8a348?Expires=1692576000&Signature=GRd8MAeNfK5sqRZKUXeyv6tlxp1aRwv57zeZ2jglAHNZGc8xduOs-T6fFduP8f1vCaLKtOIZcWjPugQPbPh1QsqgNCH8cEnwYfeLiMYYlzcrO1Tc39~zcPJSS6VD3G41-haZIGUvaNnpBKoxabgIYMgGe3KJzxx7-uGVid3luN-re18u87IHOGYXqrNnByn7rZ1L~ntrsD8nNDNmlC9OKYuN6tFypVFgMPnnUCf3FGAjSmAULkH8TDL89YD7p-i7UTS8UdRFgqdFMvBE3J4DOfSdZFTdIAsROikZCNDi7Wg2E1jHZ7~i~oAbU13Wu15TBVUDyMWLS3YU55XEUMBzwA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" class="w-full h-full object-cover rounded-2xl" />
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/assets/media/rect.svg" class="absolute bottom-0 w-full min-h-8 object-cover object-center z-[2]" />
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" width="308" height="84" viewBox="0 0 308 84" fill="none" class="absolute left-0 top-[120px]">
    <path d="M305.546 63.3998C289.148 32.1281 254.318 15.2178 219.259 20.8482C181.309 26.9542 170.428 53.6607 121.198 74.6417C90.2288 87.8237 53.9717 86.9297 23.3452 72.9297C-2.56357 61.0792 -33.5134 34.9053 -39.8669 5.66885C-40.9512 0.647108 -34.4074 -2.2442 -31.5731 2.16885C-21.8716 17.3292 -15.0615 32.3944 -1.5744 44.9678C12.1219 57.7123 28.8238 67.071 46.9333 71.8074C87.851 82.5167 124.907 68.6688 157.93 44.8727C183.592 26.4025 208.968 10.2341 241.877 15.2178C269.879 19.4786 294.988 36.6933 307.848 62.0493C308.609 63.571 306.345 64.9216 305.546 63.3998Z" fill="url(#paint0_linear_112_194)" />
    <defs>
      <linearGradient id="paint0_linear_112_194" x1="13.4998" y1="-9.49976" x2="293" y2="-38.4998" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FF5802" />
        <stop offset="1" stop-color="#FF5802" stop-opacity="0" />
      </linearGradient>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="367" height="176" viewBox="0 0 367 176" fill="none" class="absolute right-0 top-[240px]">
    <path d="M1.08835 169.633C14.4491 147.616 31.9869 119.645 61.3958 121.336C90.1674 122.976 88.9082 150.319 105.682 166.289C116.649 176.748 132.644 177.293 146.068 171.485C163.317 164.015 173.258 147.335 180.522 130.829C189.691 110.004 196.79 81.4336 219.512 71.172C230.664 66.1251 246.723 66.3715 254.464 77.3085C261.976 87.9305 259.251 103.085 262.018 115.179C269.846 149.372 309.407 157.212 336.416 139.354C382.601 108.806 376.915 38.3235 431.751 17.2749C440.56 13.8964 437.323 -1.57309 427.608 0.641167C378.398 11.904 371.469 70.2126 347.546 105.915C334.157 125.916 308.856 144.51 284.602 130.313C263.125 117.731 275.476 87.8757 260.671 70.3759C251.259 59.2586 235.056 57.2776 221.714 61.3993C204.21 66.7821 193.158 82.199 185.529 98.0404C174.899 120.145 169.489 149.72 146.323 162.559C132.105 170.424 115.745 169.214 105.593 155.577C99.288 147.083 95.8584 136.692 88.382 129.032C76.1922 116.519 58.3382 116.519 43.0554 122.873C22.8517 131.301 11.2974 151.416 0.931109 169.529C0.875008 169.681 1.02695 169.737 1.08835 169.633Z" fill="url(#paint0_linear_112_191)" />
    <defs>
      <linearGradient id="paint0_linear_112_191" x1="355" y1="-29.4998" x2="-5.53415" y2="90.8674" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FF5802" />
        <stop offset="1" stop-color="#FF5802" stop-opacity="0" />
      </linearGradient>
    </defs>
  </svg>
</section>

<!-- Episodes -->
<section class="relative bg-white py-10 px-4 md:py-24 md:px-24">
  <div class="max-w-screen-xl mx-auto">
    <div class="md:flex md:flex-row md:justify-between items-center mb-10">
      <h2 class="text-xl md:text-4xl text-center md:text-left font-bold">
        Latest Episodes
      </h2>
      <div class="hidden md:flex flex-row space-x-5">
        <button id="prev-btn" class="w-12 h-12 flex justify-center items-center rounded-full border-2 border-smoke hover:bg-smoke" onclick="moveToPreviousSlide()">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M12.1569 16.0954L7.0614 10.9998L12.1569 5.9043L13.4194 7.1668L9.5864 10.9998L13.4194 14.8329L12.1569 16.0954Z" fill="#626262" />
          </svg>
        </button>
        <button id="next-btn" class="w-12 h-12 flex justify-center items-center rounded-full border-2 border-orange hover:bg-orange" onclick="moveToNextSlide()">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M9.84307 16.0954L14.9386 10.9998L9.84307 5.9043L8.58057 7.1668L12.4136 10.9998L8.58057 14.8329L9.84307 16.0954Z" fill="#FF5802" />
          </svg>
        </button>
      </div>
    </div>
    <div class="slide-container relative h-[320px] md:h-[450px] flex rounded-2xl overflow-hidden">
      <div class="slides h-[320px] md:h-[450px] flex rounded-2xl space-x-7">
        <?php
        $episode_args = array(
          'post_type' => 'episode',
        );

        $episode_query = new WP_Query($episode_args);

        if ($episode_query->have_posts()) {
          while ($episode_query->have_posts()) {
            $episode_query->the_post();
            get_template_part('template-parts/episode', 'slide');
          }
        }
        ?>
      </div>
    </div>
    <div class="flex md:hidden flex-row justify-center space-x-5 pt-4">
      <button id="prev-btn" class="swiper-prev w-12 h-12 flex justify-center items-center rounded-full border-2 border-smoke hover:bg-smoke" onclick="moveToPreviousSlide()">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M12.1569 16.0954L7.0614 10.9998L12.1569 5.9043L13.4194 7.1668L9.5864 10.9998L13.4194 14.8329L12.1569 16.0954Z" fill="#626262" />
        </svg>
      </button>
      <button id="next-btn" class="swiper-next w-12 h-12 flex justify-center items-center rounded-full border-2 border-orange hover:bg-orange" onclick="moveToNextSlide()">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M9.84307 16.0954L14.9386 10.9998L9.84307 5.9043L8.58057 7.1668L12.4136 10.9998L8.58057 14.8329L9.84307 16.0954Z" fill="#FF5802" />
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- Recipes -->
<section class="py-10 px-4 md:py-24 md:px-24">
  <div class="max-w-screen-xl mx-auto text-center">
    <h2 class="text-xl md:text-4xl font-bold mb-5">Discover Our Recipes</h2>
    <form name="filterby" action="" class="filters flex flex-row space-x-3 md:justify-center mb-14 overflow-x-auto" id="sort-options">
      <label name="filter">
        <input type="radio" onchange="filteredResult(value)" name="filter" value="element-item" checked />
        <div class="filter-label">
          <div class="filter-symbol">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
              <path d="M8.83266 8.67841L12.166 12.0117L16.9218 7.25591L18.8327 9.16675V4.16675H13.8327L15.7435 6.07758L12.166 9.65508L8.83266 6.32175L2.41016 12.7442L3.58849 13.9226L8.83266 8.67841Z" fill="#FF5802" />
            </svg>
          </div>
          <p class="mr-3">Latest</p>
        </div>
      </label>
      <label name="filter">
        <input type="radio" onchange="filteredResult(value)" name="filter" value="People" />
        <div class="filter-label">
          <div class="filter-symbol">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
              <path d="M8.83266 8.67841L12.166 12.0117L16.9218 7.25591L18.8327 9.16675V4.16675H13.8327L15.7435 6.07758L12.166 9.65508L8.83266 6.32175L2.41016 12.7442L3.58849 13.9226L8.83266 8.67841Z" fill="#FF5802" />
            </svg>
          </div>
          <p class="mr-3">People</p>
        </div>
      </label>
      <label name="filter">
        <input type="radio" onchange="filteredResult(value)" name="filter" value="Podcast" />
        <div class="filter-label">
          <div class="filter-symbol">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
              <path d="M8.83266 8.67841L12.166 12.0117L16.9218 7.25591L18.8327 9.16675V4.16675H13.8327L15.7435 6.07758L12.166 9.65508L8.83266 6.32175L2.41016 12.7442L3.58849 13.9226L8.83266 8.67841Z" fill="#FF5802" />
            </svg>
          </div>
          <p class="mr-3">Podcast</p>
        </div>
      </label>
      <label name="filter">
        <input type="radio" onchange="filteredResult(value)" name="filter" value="Blogging" />
        <div class="filter-label">
          <div class="filter-symbol">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
              <path d="M8.83266 8.67841L12.166 12.0117L16.9218 7.25591L18.8327 9.16675V4.16675H13.8327L15.7435 6.07758L12.166 9.65508L8.83266 6.32175L2.41016 12.7442L3.58849 13.9226L8.83266 8.67841Z" fill="#FF5802" />
            </svg>
          </div>
          <p class="mr-3">Blogging</p>
        </div>
      </label>
      <label name="filter">
        <input type="radio" onchange="filteredResult(value)" name="filter" value="Entertainment" />
        <div class="filter-label">
          <div class="filter-symbol">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
              <path d="M8.83266 8.67841L12.166 12.0117L16.9218 7.25591L18.8327 9.16675V4.16675H13.8327L15.7435 6.07758L12.166 9.65508L8.83266 6.32175L2.41016 12.7442L3.58849 13.9226L8.83266 8.67841Z" fill="#FF5802" />
            </svg>
          </div>
          <p class="mr-3">Entertainment</p>
        </div>
      </label>
      <label name="filter">
        <input type="radio" onchange="filteredResult(value)" name="filter" value="Business" />
        <div class="filter-label">
          <div class="filter-symbol">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
              <path d="M8.83266 8.67841L12.166 12.0117L16.9218 7.25591L18.8327 9.16675V4.16675H13.8327L15.7435 6.07758L12.166 9.65508L8.83266 6.32175L2.41016 12.7442L3.58849 13.9226L8.83266 8.67841Z" fill="#FF5802" />
            </svg>
          </div>
          <p class="mr-3">Business</p>
        </div>
      </label>
    </form>
    <div class="filter-element grid grid-row-4 grid-cols-2 md:grid-row-3 md:grid-cols-4 gap-7 justify-items-stretch items-stretch text-white text-left">
      <?php
      $recipe_args = array(
        'post_type' => 'recipe',
      );

      $recipe_query = new WP_Query($recipe_args);

      if ($recipe_query->have_posts()) {
        while ($recipe_query->have_posts()) {
          $recipe_query->the_post();
          get_template_part('template-parts/recipe', 'list');
        }
      }
      ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-[url('<?php echo get_template_directory_uri() ?>/assets/media/CTA.svg')] bg-cover bg-center bg-no-repeat py-16 px-4 md:py-36 md:px-10">
  <div class="max-w-screen-xl mx-auto flex flex-col md:grid md:grid-cols-2 gap-7 justify-items-stretch md:items-center text-white text-center md:text-left">
    <h2 class="text-xl md:text-4xl font-bold">
      Get Latest Information about Hacker Growth TV
    </h2>
    <form class="flex flex-col space-y-3 md:space-y-0 md:grid md:grid-cols-3 items-stretch justify-items-stretch text-base text-white rounded-full p-1 md:bg-white/30">
      <input class="h-12 rounded-full col-span-2 bg-white/30 placeholder:text-center md:placeholder:text-left md:bg-transparent placeholder:text-white md:focus:bg-transparent focus:outline-none md:pl-8" type="email" placeholder="Enter your email..." />
      <button type="submit" class="font-bold rounded-full py-3.5 px-9 bg-orange">
        Sign Up
      </button>
    </form>
  </div>
</section>

<!-- Blog -->
<section class="py-8 px-4 md:py-24 md:px-24">
  <div class="max-w-screen-xl mx-auto">
    <h2 class="text-center md:text-left text-xl md:text-4xl font-bold mb-8 md:mb-16">Blog</h2>
    <div class="grid grid-row-3 grid-cols-1 items-stretch">
      <?php
      $blog_args = array(
        'post_type' => 'post',
      );

      $blog_query = new WP_Query($blog_args);

      if ($blog_query->have_posts()) {
        while ($blog_query->have_posts()) {
          $blog_query->the_post();
          get_template_part('template-parts/blog', 'list');
        }
      }
      ?>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="relative bg-softorange md:py-24 md:px-24">
  <svg xmlns="http://www.w3.org/2000/svg" width="267" height="199" viewBox="0 0 267 199" fill="none" class="absolute top-1/4 left-0">
    <path d="M265.933 4.07702C245.227 0.717243 218.623 -3.20226 204.13 15.9146C189.941 34.6095 207.553 48.2835 208.586 67.119C209.272 79.444 201.157 89.6434 190.463 94.8911C176.719 101.63 161.127 98.9728 147.059 94.7483C129.307 89.4208 107.848 78.7166 89.4809 87.3715C80.4597 91.6135 72.1256 101.695 74.8131 112.273C77.4265 122.542 88.2588 128.865 94.2914 136.972C111.346 159.899 95.2983 188.556 69.9572 195.853C26.6178 208.322 -14.0597 167.54 -56.0834 190.391C-62.8328 194.063 -70.7096 183.88 -64.2031 179.031C-31.2167 154.492 8.5818 181.022 43.3514 185.071C62.8231 187.349 87.717 181.5 91.7361 158.967C95.2878 139.008 70.2583 130.878 67.2365 112.454C65.3206 100.745 72.6552 89.6582 82.2608 83.5693C94.8468 75.5693 110.242 76.8706 124.092 80.5176C143.409 85.6155 164.597 97.898 184.797 90.3302C197.185 85.6782 205.081 74.9013 201.994 61.4019C200.062 53.0047 195.434 45.3863 194.638 36.7045C193.325 22.5367 202.76 11.4737 214.775 5.3626C230.675 -2.70115 249.248 0.773041 265.951 3.9245C266.075 3.97011 266.03 4.09396 265.933 4.07702Z" fill="url(#paint0_linear_112_544)" />
    <defs>
      <linearGradient id="paint0_linear_112_544" x1="-97.8652" y1="150.722" x2="159.801" y2="-99.0937" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FF5802" />
        <stop offset="1" stop-color="#FF5802" stop-opacity="0" />
      </linearGradient>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="301" height="114" viewBox="0 0 301 114" fill="none" class="absolute top-1/2 right-0">
    <path d="M3.58088 113.064C20.8589 67.5279 70.7542 64.6298 112.341 71.1129C151.077 77.1377 196.659 88.7791 231.609 64.0445C243.592 55.5787 253.702 41.6093 252.54 26.2535C251.574 13.6275 241.454 2.77563 228.953 0.74322C217.511 -1.10257 206.958 5.42896 204.406 16.9869C201.453 30.4049 209.789 43.4841 221.232 49.8188C239.291 59.8259 263.683 58.6781 283.511 56.9903C309.499 54.7782 334.682 47.6164 358.318 36.6514C364.801 33.6466 359.889 23.6007 353.398 26.6687C332.043 36.7252 309.449 43.4115 285.98 46.0633C267.315 48.1637 233.498 52.2243 218.944 36.3802C211.448 28.2233 210.376 9.91913 224.914 9.44994C239.065 8.99327 246.854 23.5918 243.539 35.9724C237.528 58.5239 211.183 68.6961 190.46 71.3752C148.08 76.8715 106.703 58.1315 64.3392 63.5016C37.2775 66.9443 6.36756 83.4026 0.850353 112.48C0.546245 114.097 3.03776 114.501 3.58088 113.064Z" fill="url(#paint0_linear_112_547)" />
    <defs>
      <linearGradient id="paint0_linear_112_547" x1="339" y1="-53" x2="-21.2853" y2="32.0892" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FF5802" />
        <stop offset="1" stop-color="#FF5802" stop-opacity="0" />
      </linearGradient>
    </defs>
  </svg>
  <h2 class="text-center text-4xl font-bold mb-8">
    What People Say’s About Us
  </h2>
  <div class="mySwiper-2">
    <div class="swiper-wrapper text-white text-center mx-auto">
      <div class="swiper-slide">
        <div class="w-60 h-80 flex flex-col justify-end rounded-2xl border-4 border-white bg-testimonials bg-cover bg-center py-6 mx-auto">
          <h4 class="text-xl font-bold">Alexander Graham</h4>
          <p>CEO of Konten Media</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="w-60 h-80 flex flex-col justify-end rounded-2xl border-4 border-white bg-testimonials bg-cover bg-center py-6 mx-auto">
          <h4 class="text-xl font-bold">Alexander Graham</h4>
          <p>CEO of Konten Media</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="w-60 h-80 flex flex-col justify-end rounded-2xl border-4 border-white bg-testimonials bg-cover bg-center py-6 mx-auto">
          <h4 class="text-xl font-bold">Alexander Graham</h4>
          <p>CEO of Konten Media</p>
        </div>
      </div>
    </div>
    <div class="w-fit flex flex-row space-x-5 mx-auto">
      <button class="swiper-prev-2 w-12 h-12 flex justify-center items-center rounded-full border-2 border-smoke hover:bg-smoke">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M12.1569 16.0954L7.0614 10.9998L12.1569 5.9043L13.4194 7.1668L9.5864 10.9998L13.4194 14.8329L12.1569 16.0954Z" fill="#626262" />
        </svg>
      </button>
      <button class="swiper-next-2 w-12 h-12 flex justify-center items-center rounded-full border-2 border-orange hover:bg-orange">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M9.84307 16.0954L14.9386 10.9998L9.84307 5.9043L8.58057 7.1668L12.4136 10.9998L8.58057 14.8329L9.84307 16.0954Z" fill="#FF5802" />
        </svg>
      </button>
    </div>
  </div>
</section>

<?php get_footer() ?>