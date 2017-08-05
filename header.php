<!DOCTYPE html>
<html amp <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="theme-color" content="#0f94f6">
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/manifest.json' ?>">

    <!-- AMP Style  -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <?php wp_head() ?>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">[A(;]</a>
        <ul class="left">
          <li><a href="#" data-activates="slide-out" class="headernav-button-collapse hide-on-large-only">Menu</a></li>
        </ul>

        <ul class="topbar-right">
          <li class = "search-box-wrapper" onmouseover="openTopSearchBar(this)" onmouseout="closeTopSearchBar(this)">
            <i class="fa fa-search top-search-icon" aria-hidden="true"></i>
            <form method="get" action =  "<?php echo home_url('/')?>">
              <input type="text" id = "top-search-input" class = "top-search-input" name="s" placeholder="Search something new!">
            </form>
          </li>
        </ul>
      </div>
    </nav>

    <section>
      <div id="slide-out" class="side-nav fixed left-aligned">
        <center>
          <?php wp_nav_menu(
            [
              'menu' => 'primary',
              'menu_class' => '',
              'container' => '',
              'walker' => new papertheme_primary_menu_nav_walker()
            ]
          );?>
        </center>
      </div>
    </section>
