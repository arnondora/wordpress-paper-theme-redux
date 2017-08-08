<?php get_header()?>

<main <?php body_class()?>>
  <?php
    // The categories will be print in order
    $categories = ['2','3','5'];
    $categories = array_merge([null], $categories)
  ?>
  <div class = "home-container">

      <?php foreach( $categories as $category ){ ?>
        <div class = "page-section-wrapper">

          <?php
            if ($category != null) $categoryName = wp_get_post_categories( $category );
            $postQueryArgs = array(
              'post_type' => 'post',
              'cat' =>  $category,
              'posts_per_page' => 3,
              'no_found_rows'  => true, // We don't need pagination so this speeds up the query
            );

            $queriedPosts = new WP_Query( $postQueryArgs );

            // Counter
            $i = 0;

            if ($queriedPosts->have_posts()) {
          ?>

          <div class = "section-info">
            <h1 class = "category-description"> <?php if ($category == null) echo "Latest"; else echo get_cat_name($category); ?> </h1>
            <?php if($category != null) {?> <a class = "see-more-button" href = "<?php echo get_category_link($category)?>">See more</a> <?php } ?>
          </div>

          <section class = "section-wrapper" category = "<?php if ($category == null) echo "latest"; else echo $category; ?> ">

              <!-- Manipulate Post Here -->
              <?php while( $queriedPosts->have_posts() ){ ?>
                <?php ++$i; $queriedPosts->the_post(); ?>
                <?php if ($i == 1) { echo "<div class = 'section-item'>";  } ?>
                <?php if ($i == 2) { echo "<div class = 'section-item'>"; } ?>

                <div class = "shadow-box">
                  <?php if (has_post_thumbnail() && $i == 1) {?>
                    <a rel="noopener"  href = "<?php the_permalink();?> "><img alt = "<?php the_title() ?>" src = "<?php the_post_thumbnail_url()?>" class="thumbnail"></a>
                  <?php } ?>

                  <!-- Sharing Button -->
                  <div class="share-btn fixed-action-btn horizontal click-to-toggle pull-right <?php if (!has_post_thumbnail() || $i > 1) echo "social-btn-thumbnail share-no-thumbnail"?>">
                      <a rel="noopener"  class="btn-floating btn-large social-btn-share">
                        <i class="fa fa-share-alt"></i>
                      </a>
                      <ul>
                        <li><a rel="noopener"  href = "https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="btn-floating social-btn-facebook"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a rel="noopener"  href = "https://twitter.com/home?status=<?php the_permalink();?>" class="btn-floating social-btn-twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a rel="noopener"  href = "https://plus.google.com/share?url=<?php the_permalink();?>" class="btn-floating social-btn-google-plus"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                  </div>

                  <div class = "content-wrapper <?php if (!has_post_thumbnail() || $i > 1) echo "content-wrapper-no-thumbnail"?>">
                    <a rel="noopener"  href = "<?php the_permalink();?> "><h1 class= "title"><a rel="noopener"  class = "excerpt link-no-colour link-no-decorate" href = "<?php the_permalink() ?>"><?php the_title();?></a></h1></a>
                    <p class = "subtitle"><?php the_category(' ')?> | <?php the_date('F jS, Y');?> | <?php the_author();?></p>
                    <span class = "excerpt"><?php the_excerpt();?></span>
                  </div>

                </div>

                <?php if ($i == 1 || $i == 3) { echo "</div>"; }?>
              <?php } ?>

            <?php } ?> <!-- End Query IF -->
          </section>
        </div>
      <?php } ?>

      <section class = "more-cat-section">
        <h1>More Categories</h1>
        <div class = "more-cat-wrapper">
          <?php
            $categories =  get_categories( array(
              'parent'  => 0
              )
            );
            foreach  ($categories as $category) { ?>
              <div class = "more-cat-item">
                <a href='<?php echo get_category_link( $category->term_id ); ?>'> <?php echo $category->cat_name; ?></a>
              </div>
            <?php } ?>
        </div>
      </section>

    </div>
  </div>
</main>

<!-- Footer Goes Here -->
<?php get_footer()?>
