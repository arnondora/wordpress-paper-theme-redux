<?php
  if (post_password_required()) return; //If Post has Password so Hide for everyone else
?>

<div class = "row comment-area">
  <?php
    $comment_form_args = array(
      'title_reply'     => 'Leave a comment?',
      'label_submit'    => 'Leave a comment',
      'title_reply_to'  => 'Replying to %s',
      'comment_field'   => '<div class = "input-field"><label>Comment</label><textarea name = "comment" id = "comment" class = "materialize-textarea"></textarea></div>',
      'class_submit'    => 'btn post-pagination-btn'
    );
    comment_form($comment_form_args)
  ?>

  <?php
    if (have_comments())
    {
  ?>
    <h3 class = "comment-title">
      <?php
        printf(
          esc_html(_nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'papertheme')) ,
          number_format_i18n( get_comments_number() ),
          '<span>' . get_the_title() . '</span>'
        );
      ?>
    </h3>
    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) {?>
      <nav id="comment-nav-top" class = "comment-navigation" role = "comment-navigation">
        <h4><?php esc_html_e('Comment navigation', 'papertheme')?></h4>
        <div class = "row">
          <div><?php echo previous_comments_link()?></div>
          <div><?php echo next_comments_link()?></div>
        </div>
      </nav>
    <?php } ?>
    <ul class = "comment-list">
      <?php
        $comment_args = array (
          'walker'        => null,  //Walker Comment Customisation Part
          'max_depth'     => 2,     //Depth of comments
          'style'         => 'ul',  //style of each comment
          'callback'      => null,  //function will call of each comments
          'end-callback'  => null,  //function will call after run all comments
          'type'          => 'all',  //Type of comment
          'reply_text'    => 'Reply to this comment', //Reply Text
          'format'        => 'html5',
          'per_page'      => 5,
        );
        wp_list_comments($comment_args);
      ?>
    </ul>
    <?php
      if (!comments_open() && get_comments_number()) {
    ?>
      <h2><?php esc_html_e('Comments are closed', 'papertheme'); ?></h2>
    <?php
      }
    ?>
  <?php
    }
  ?>
</div>
