<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- <title>Growth Hacker TV</title> -->

  <!-- Tailwind Setup -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- <script src="./tailwind.config.js"></script> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" /> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" /> -->

  <!-- css -->
  <!-- <link rel="stylesheet" href="style.css" /> -->

  <!-- Swiper js -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->

  <?php wp_head() ?>
</head>

<body>
  <!-- Navbar -->
  <header class="fixed w-screen top-0 z-50">
    <nav class="bg-white border-gray-200 light text-black px-2 lg:px-20">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-6">
        <a href="<?php echo get_home_url() ?>" class="flex items-center">
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
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
        <div class="hidden w-full flex flex-col items-stretch text-center p-2 md:flex md:flex-row md:items-center md:space-x-12 md:w-auto" id="navbar-default">

          <?php
          wp_nav_menu(
            array(
              'menu' => 'Primary menu',
              'container' => '',
              'theme_location' => 'Primary menu',
              'items_wrap' => '<ul id="" class="font-semibold text-base flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-9 md:mt-0">%3$s</ul>',
            )
          )
          ?>

          <!-- <ul class="font-semibold text-base flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-9 md:mt-0">
            <li>
              <a href="#" class="block text-black">Episode</a>
            </li>
            <li>
              <a href="#" class="block text-black">Recipes</a>
            </li>
            <li>
              <a href="#" class="block text-black">About</a>
            </li>
            <li>
              <a href="#" class="block text-black">Contact Us</a>
            </li>
            <button>
              <img src="./assets/media/Frame.svg" />
            </button>
          </ul> -->
          <button class="font-bold text-orange border border-red-text-orange rounded-full px-10 py-4">
            Sign Up
          </button>
        </div>
      </div>
    </nav>
  </header>