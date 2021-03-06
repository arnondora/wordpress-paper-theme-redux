<!DOCTYPE html>
<html <?php body_class()?>>
  <head>
    <meta charset="utf-8">
    <title>Error 404 - Page Not Found</title>
    <?php wp_head();?>
  </head>
  <body>
    <main>

      <div class = "main">
        <div class = "colContainer leftSlide">
          <svg width="120px" height="100px" viewBox="0 0 120 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="404" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Desktop" transform="translate(-333.000000, -376.000000)" fill-rule="nonzero" fill="#FFFFFF">
                      <g id="Content">
                          <g transform="translate(333.000000, 373.000000)">
                              <path d="M80,56.7596814 L64.545,56.7596814 C61.835,56.7596814 60.445,55.8213451 59.27,54.1992212 L53.05,45.8440354 L42.905,56.8195752 L47.945,64.6157522 C49.68,67.3509027 49.81,69.2175929 49.81,71.7031858 L49.81,92.840708 L40,92.840708 L40,72.9709381 C39.92,67.4806726 31.525,62.2749027 28.435,66.7170265 L22.555,74.9973451 C21.25,76.8540531 19.025,77.4829381 16.86,77.4829381 L0,77.4829381 L0,67.9698053 L12.66,67.9648142 C14.645,67.9648142 16.365,67.2660531 17.3,65.04 L22.93,51.3143363 C23.91,49.2679646 25.23,47.4112566 26.84,45.8140885 L39.965,32.8370973 L36.26,29.607823 C35.145,28.6345487 33.655,28.2252743 32.2,28.4748319 L21.295,30.3764602 L19.585,22.3956106 L34.545,19.5456637 C37.35,19.0116106 39.755,19.92 41.85,21.8515752 L56.26,35.1280354 C58.54,37.1943717 60.88,40.7979823 64.53,46.1834336 C65.205,47.1766726 66.145,48.5642124 68.36,48.5642124 L80,48.5642124 L80,56.7596814 L80,56.7596814 Z M65.09,31.5943009 C70.19,30.6210265 73.53,25.6947611 72.555,20.6087788 C71.695,16.1117522 67.755,12.9823009 63.33,12.9823009 C57.4,12.9823009 52.98,18.3627611 54.08,24.132531 C55.06,29.2284956 59.985,32.5675752 65.09,31.5943009 L65.09,31.5943009 Z M90,3 L90,77.8672566 L120,102.823009 L120,3 L90,3 L90,3 Z" id="Icon"></path>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </div>

        <div class = "colContainer rightSlide">
            <div class = "rightItem"><h1 class = "rightText">Error 404</h1></div>
            <div class = "rightItem"><h2 class = "rightText">Not Found what are you looking for...</h2></div>
            <div class = "rightItem"><a class = "rightText" rel="noopener"  href = "<?php echo home_url('/')?>">Go to home ?</a></div>
        </div>
      </div>

    </main>
  </body>
  <?php wp_footer(); ?>
</html>
