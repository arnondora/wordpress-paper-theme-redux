<!-- Header Goes Here  -->
<?php get_header()?>

<main <?php body_class()?>>

  <!-- Page Thumbnail (if any) -->
  <?php the_post(); if (has_post_thumbnail()) { ?>
    <div class="parallax-container">
      <div id = "page-parallax" class="page-parallax"><img src="<?php the_post_thumbnail_url()?>"></div>
    </div>
  <?php } ?>

  <div class =  "container page-container">
    <h1 class><?php the_title();?></h1>
    <div class = "content">
      <?php the_content();?>
    </div>
  </div>

</main>


<!-- Footer Goes Here -->
<?php get_footer()?>
