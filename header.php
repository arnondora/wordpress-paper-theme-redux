<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PaperTheme 3.0</title>
    <?php wp_head() ?>
  </head>
  <body <?php body_class()?> >
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
          <ul>
            <li>
              <a href = "#">
                <span><i class = "fa fa-home fa-2x"></i></span>
                <span>Home</span>
              </a>
            </li>
            <li>
              <a href = "#">
                <span><i class = "fa fa-user fa-2x"></i></span>
                <span>about:me</span>
              </a>
            </li>
            <li>
              <a href = "#">
                <span><i class = "fa fa-book fa-2x"></i></span>
                <span>Tutorial</span>
              </a>
            </li>
            <?php wp_nav_menu('primary');?>
          </ul>
        </center>
      </div>
    </section>
