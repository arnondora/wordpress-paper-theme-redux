<!-- Header Goes Here  -->
<?php get_header()?>

<main <?php body_class()?>>

  <!-- Post Thumbnail  -->
  <?php the_post(); if (has_post_thumbnail()) { ?>
    <div class="single-container-img">
      <img class = "responsive-img" alt = "<?php the_title() ?>" src = "<?php the_post_thumbnail_url()?>">
    </div>
  <?php } ?>

  <div id = "post-<?php the_ID(); ?>" <?php post_class('single-container'); ?>>
    <div class = "row title">
      <h1><?php the_title();?></h1>
      <p>Posted by <?php the_author();?> on <?php the_date('F jS, Y');?></p>
    </div>

    <div class = "row content">
      <?php the_content();?>
      <?php wp_link_pages(); ?>
      <div class = "tags">
        <ul>
          <li class = "chip-category"><?php the_category('</li><li class = "chip-category">');?></li>
          <?php the_tags( '<li class = "chip-tag">', '</li><li class = "chip-tag">', '</li>' ); ?>
        </ul>
      </div>
    </div>

    <!-- Sharing Button -->
    <div class="fixed-action-btn vertical click-to-toggle pull-right">
        <a rel="noopener"  class="btn-floating btn-large social-btn-share">
          <i class="fa fa-share-alt"></i>
        </a>
        <ul>
          <li><a rel="noopener" data-position="left" data-delay="50" data-tooltip="Facebook" href = "https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="btn-floating social-tooltipped social-btn-facebook"><i class="fa fa-facebook-f"></i></a></li>
          <li><a rel="noopener" data-position="left" data-delay="50" data-tooltip="Twitter" href = "https://twitter.com/home?status=<?php the_permalink();?>" target="_blank" class="btn-floating social-tooltipped social-btn-twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a rel="noopener" data-position="left" data-delay="50" data-tooltip="Google+" href = "https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank" class="btn-floating social-tooltipped social-btn-google-plus"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>

    <?php
      $related_post_args = array(
        'post_type' => 'post',
        'cat' =>  wp_get_post_categories( get_the_ID() ),
        'posts_per_page' => 3,
	      'post__not_in'   => array( get_the_ID() ), // Exclude current post
	      'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
      );

      $relatedPost = new WP_Query( $related_post_args );

      if ($relatedPost->have_posts()) :
    ?>
    <div class = "row content more-post">
      <h2>More post from us !</h2>
      <hr>
      <div class = "article-set">
        <?php while( $relatedPost->have_posts() ): $relatedPost->the_post(); ?>
          <div class = "col m4 s12">
            <a href = "<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <?php if (has_post_thumbnail()): ?>
              <a href = "<?php the_permalink();?>"><img alt = "<?php the_title() ?>" src = "<?php the_post_thumbnail_url()?>" class="postThumbnailImage"></a>
            <?php endif;?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>

  <?php endif; ?>

    <?php if (comments_open()) comments_template();?>
  </div>

</main>


<!-- Footer Goes Here -->
<?php get_footer()?>
