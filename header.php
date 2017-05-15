<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
        <ul style = "margin-left:15px;" class="left">
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
