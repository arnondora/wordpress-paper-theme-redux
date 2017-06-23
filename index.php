<?php get_header()?>

<main <?php body_class()?>>
  <!-- Content Goes Here -->
  <div class = "home-container">

      <!-- Search Box  -->
      <div class = "row">
        <?php get_search_form();?>
      </div>

      <!-- Search Result -->
      <?php if (is_search()) {?>
        <div class = "row search-result">
          <p>Searched for : <?php echo get_search_query();?></p>
        </div>
      <?php } ?>

      <!-- Category or Category Page -->
      <?php if (is_category() || is_tag()) {?>
        <div class = "row search-result">
          <h1><?php if(is_tag()) echo "Tag : "; single_term_title()?></h1>
          <p class = "category-description">
            <?php
              if (is_category()) echo category_description();
              else if (is_tag()) echo tag_description();
            ?>
          </p>
        </div>
      <?php } ?>

      <!-- For Desktop and Tablet Site -->
      <div class = "row hide-on-med-and-down">
        <?php
          //Prevent Repreated Post showing when Post Number is 1
          if ($wp_the_query->post_count == 1) $limit = 0;
          else $limit = 1;

          $counter = 0;
          if(have_posts())
          {
            for($i=0; $i<=$limit; $i++)
            {
              wp_reset_query();
        ?>
                <div class = "col s12 m12 l6">
                <?php
                  while (have_posts())
                  {
                    the_post();
                    $counter++;
                    if ($counter%2 == $i) continue;
                ?>
                  <div class = "row">
                    <div class = "card index-card-margin-<?php if($i == 0) echo 'left'; else echo 'right';?>">
                      <?php if (has_post_thumbnail()) { ?>
                        <div class = "card-image">
                          <a rel="noopener"  href = "<?php the_permalink(); ?>"><img src = "<?php the_post_thumbnail_url() ?>" alt = "<?php the_title()?>"></a>
                          <!-- Sharing Button -->
                          <div style = "position: relative;" class="fixed-action-btn horizontal click-to-toggle pull-right <?php if (has_post_thumbnail()) echo "social-btn-thumbnail"?>">
                              <a rel="noopener"  class="btn-floating btn-large social-btn-share">
                                <i class="fa fa-share-alt"></i>
                              </a>
                              <ul>
                                <li><a rel="noopener"  href = "https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a rel="noopener"  href = "https://twitter.com/home?status=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="noopener"  href = "https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-google-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                        </div>
                      <?php } ?>

                      <div class = "card-content">
                        <?php if (has_post_thumbnail() == false) {?>
                          <!-- Sharing Button -->
                          <div style = "position: relative; margin-top:10px;" class="fixed-action-btn horizontal click-to-toggle pull-right <?php if (has_post_thumbnail()) echo "social-btn-thumbnail"?>">
                              <a rel="noopener"  class="btn-floating btn-large social-btn-share">
                                <i class="fa fa-share-alt"></i>
                              </a>
                              <ul>
                                <li><a rel="noopener"  href = "https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a rel="noopener"  href = "https://twitter.com/home?status=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="noopener"  href = "https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank" class="btn-floating social-btn-google-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                        <?php } ?>
                        <h1><a rel="noopener"  class = "link-no-colour link-no-decorate" href = "<?php the_permalink() ?>"><?php the_title();?></a></h1>
                        <p><?php the_excerpt();?></p>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>
                </div>
          <?php
            }
          } else {
          ?>
            <h1 class = "not-found-result">We can't found what you are looking for...</h1>
            <h3 class = "not-found-result-subtext">Try other keyword or <a rel="noopener"  href = "<?php echo home_url('/')?>">Go Home?</a></h3>
          <?php
            }
          ?>

      </div>

    <!-- For Mobile Site -->
    <div class = "row hide-on-large-only">
        <?php
            if(have_posts())
            {
        ?>
                <div class = "col s12 m12 l6">
                <?php
                  while (have_posts())
                  {
                    the_post();
                ?>
                  <div class = "row">
                    <div class = "card">
                      <?php if (has_post_thumbnail()) { ?>
                        <div class = "card-image">
                          <a rel="noopener"  href = "<?php the_permalink();?> "><img alt = "<?php the_title() ?>" src = "<?php the_post_thumbnail_url() ?>"></a>
                          <!-- Sharing Button -->
                          <div style = "position: relative;" class="fixed-action-btn horizontal click-to-toggle pull-right <?php if (has_post_thumbnail()) echo "social-btn-thumbnail"?>">
                              <a rel="noopener"  class="btn-floating btn-large social-btn-share">
                                <i class="fa fa-share-alt"></i>
                              </a>
                              <ul>
                                <li><a rel="noopener"  href = "https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="btn-floating social-btn-facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a rel="noopener"  href = "https://twitter.com/home?status=<?php the_permalink();?>" class="btn-floating social-btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="noopener"  href = "https://plus.google.com/share?url=<?php the_permalink();?>" class="btn-floating social-btn-google-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                        </div>
                      <?php } ?>

                      <div class = "card-content">
                        <?php if (has_post_thumbnail() == false) {?>
                          <!-- Sharing Button -->
                          <div style = "position: relative; margin-top:10px;" class="fixed-action-btn horizontal click-to-toggle pull-right <?php if (has_post_thumbnail()) echo "social-btn-thumbnail"?>">
                              <a rel="noopener"  class="btn-floating btn-large social-btn-share">
                                <i class="fa fa-share-alt"></i>
                              </a>
                              <ul>
                                <li><a rel="noopener"  href = "https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="btn-floating social-btn-facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a rel="noopener"  href = "https://twitter.com/home?status=<?php the_permalink();?>" class="btn-floating social-btn-twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="noopener"  href = "https://plus.google.com/share?url=<?php the_permalink();?>" class="btn-floating social-btn-google-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                        <?php } ?>
                        <h1><a rel="noopener"  class = "link-no-colour link-no-decorate" href = "<?php the_permalink() ?>"><?php the_title();?></a></h1>
                        <p><?php the_excerpt();?></p>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>
                </div>
          <?php
            } else {
          ?>
            <h1 class = "not-found-result">We can't found what you are looking for...</h1>
            <h3 class = "not-found-result-subtext">Try other keyword or <a rel="noopener"  href = "<?php echo home_url('/')?>">Go Home?</a></h3>
          <?php
            }
          ?>
    </div>

    <!-- Pagination -->
    <div class = "row">
      <?php previous_posts_link('Newer Posts');?>
      <?php next_posts_link('Older Posts');?>
    </div>

  </div>
</main>

<!-- Footer Goes Here -->
<?php get_footer()?>
