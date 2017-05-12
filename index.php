<?php get_header()?>

<main <?php body_class()?>>
  <!-- Content Goes Here -->
  <div class = "container">

    <!-- Search Box  -->
    <div class = "row">
      <div class = "searchbox-outer">
        <form method = "post">
          <div class="input-field">
            <i class = "fa fa-search search-font-color prefix" style = "margin-top:8px"></i>
            <input type = "text" placeholder="Search something new!">
          </div>
        </form>
      </div>
    </div>

    <?php if (is_home()):?>
    <h1 class = "scale-transition">Hello PaperTheme 3.0 !</h1>
    <blockquote>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </blockquote>
    <?php endif?>

    <?php
      if(have_posts() ):
        while(have_posts() ): the_post();?>
          <h3><?php the_title();?></h3>
          <small>Posted on <?php the_time('F j, Y') ?> | <?php the_category()?></small>
          </p><?php the_content();?></p>
          <hr>
        <?php endwhile;
      endif;?>
  </div>
</main>

<!-- Footer Goes Here -->
<?php get_footer()?>
