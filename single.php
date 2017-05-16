<!-- Header Goes Here  -->
<?php get_header()?>

<main <?php body_class()?>>

  <!-- Post Thumbnail  -->
  <?php the_post(); if (has_post_thumbnail()) { ?>
    <div class="single-container-img">
      <img class = "responsive-img" src = "<?php the_post_thumbnail_url()?>">
    </div>
  <?php } ?>

  <div class = "single-container">
    <div class = "row title">
      <h1><?php the_title();?></h1>
      <p>Posted by <?php the_author();?> on <?php the_date('F jS, Y');?></p>
    </div>

    <div class = "row content">
      <?php the_content();?>
      <hr>
      <div class = "tags">
        <ul>
          <li class = "chip chip-category"><?php the_category('</li><li class = "chip chip-category">');?></li>
          <?php the_tags( '<li class = "chip chip-tag">', '</li><li class = "chip chip-tag">', '</li>' ); ?>
        </ul>
      </div>
    </div>

    <?php if (comments_open()) comments_template();?>
  </div>

  <!-- Sharing Button -->
  <div class="fixed-action-btn vertical click-to-toggle pull-right">
      <a class="btn-floating btn-large social-btn-share">
        <i class="fa fa-share-alt"></i>
      </a>
      <ul>
        <li><a href = "https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-facebook"><i class="fa fa-facebook-f"></i></a></li>
        <li><a href = "https://twitter.com/home?status=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href = "https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-google-plus"><i class="fa fa-google-plus"></i></a></li>
      </ul>
  </div>

</main>


<!-- Footer Goes Here -->
<?php get_footer()?>
