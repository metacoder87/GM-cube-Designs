<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <title>GM<sup>3</sup> Designs | Web Development Full Stack</title>
        <link rel="icon" type = "image/png" href="<?php echo get_template_directory_uri(); ?>img/gm_cubed_neon.png">
  </head>

<body>
    <div id="slideout-menu">
      <ul>
        <li>
            <a href="<?php echo site_url(''); ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo site_url('/projects'); ?>">Projects</a>
          </li>
          <li>
            <a href="<?php echo site_url('/developer'); ?>">Developer</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
          </li>
        <div class="searchbox-slide-menu">
          <?php get_search_form(); ?>
        </div>
      </ul>
    </div>

    <nav>
      <div id="logo-img">
          <a href="<?php echo site_url(''); ?>">
              <img src='<?php echo get_template_directory_uri(); ?>/img/gm_cubed_banner.png' alt='GM Cube Design banner logo'>
          </a>
      </div>
      <div id="menu-icon">
          <i class="fas fa-bars"></i>
      </div>
        <ul>
          <li>
            <a href="<?php echo site_url(''); ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo site_url('/projects'); ?>">Projects</a>
          </li>
          <li>
            <a href="<?php echo site_url('/developer'); ?>">Developer</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
          </li>
          <li>
            <div id="search-icon">
              <i class="fas fa-search"></i>
            </div>
          </li>
        </ul>
     </nav>

     <div id="searchbox">
       <?php get_search_form(); ?>
     </div>

     <?php if(!is_front_page()) { ?>
        <main>
     <?php } ?>
