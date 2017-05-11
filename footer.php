    <footer class = "page-footer">
      <div class = "container">
        <!-- Contacts -->
        <div class = "row footer-contact">
          <center>
            <ul class = "footer-contact-list">
              <li><a href = "https://www.facebook.com/arnondora" class = "link-no-decorate"><img src = "<?php echo get_template_directory_uri() . '/dist/img/social-icon/Facebook.svg'?>" class = "footer-font-colour"></a></li>
              <li><a href = "https://www.twitter.com/arnondora" class = "link-no-decorate"><img src = "<?php echo get_template_directory_uri() . '/dist/img/social-icon/Twitter.svg'?>" class = "footer-font-colour"></a></li>
              <li><a href = "https://www.plus.google.com/+arnonpuitrakul" class = "link-no-decorate"><img src = "<?php echo get_template_directory_uri() . '/dist/img/social-icon/GooglePlus.svg'?>" class = "footer-font-colour"></a></li>
              <li><a href = "mailto:me@arnondora.in.th" class = "link-no-decorate"><img src = "<?php echo get_template_directory_uri() . '/dist/img/social-icon/Email.svg'?>" class = "footer-font-colour"></a></li>
            </ul>
          </center>
        </div>

        <!-- Footer Text  -->
        <div class = "row footer-text">
          <p class = "pull-left footer-font-colour">© 2014-<?php echo date("Y")?> Arnon Puitrakul all right reserved.</p>
          <p class = "pull-right footer-font-colour">Paper Theme by <a class = "footer-font-colour link-no-decorate" href = "https://www.arnondora.in.th">@arnondora</a></p>
        </div>

      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
