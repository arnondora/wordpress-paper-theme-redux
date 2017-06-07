<!DOCTYPE html>
<html amp>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <!-- AMP Style  -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <title>
      <?php if(is_home()) {?>
        <?php bloginfo('name')?> - <?php bloginfo('description')?>
      <?php } elseif (is_search()) {?>
        Search Result for <?php echo get_search_query();?> - <?php bloginfo('name')?>
      <?php } elseif (is_tag() || is_category()) {?>
        <?php single_term_title()?> - <?php bloginfo('name')?>
      <?php } else {?>
        <?php the_title() ?> - <?php bloginfo('name')?>
      <?php } ?>
    </title>
    <?php wp_head() ?>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">[A(;]</a>
        <ul class="left">
          <li><a href="#" data-activates="slide-out" class="headernav-button-collapse">Menu</a></li>
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
