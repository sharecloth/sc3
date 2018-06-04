<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>FitBuy – the most personal shopping experience in one app</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="/assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="/assets/vendor/animate.css">
  <link rel="stylesheet" href="/assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="/assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="/assets/css/unify-core.css">
  <link rel="stylesheet" href="/assets/css/unify-components.css">
  <link rel="stylesheet" href="/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body class="g-bg-gray-light-v5">
  <main>
	<header id="js-header" class="u-header u-header--static">
        <div class="u-header__section u-header__section--light g-bg-gray-light-v5 g-transition-0_3 g-py-10">
            <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
                <div class="container g-mt-20">
                    <!-- Logo -->
                    <a href="/" class="navbar-brand">
                        <img src="/assets/sc/fitbuy-logo.png" alt="FitBuy Logo">
                    </a>
                    <!-- End Logo -->

                </div>
            </nav>
        </div>
    </header>
    <!-- Promo Block - Parallax -->
    <section class="g-bg-gray-light-v5">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-5 align-self-center">
            <h2 class="g-color-black g-font-size-36 text-uppercase g-line-height-1_2 g-mb-30">One app for
              <br><span class="g-font-weight-700">the most personal fashion shopping experience</span></h2>
            <p class="g-color-gray-dark-v5 g-font-size-16 g-mb-35">
            	Use FitBuy app to discover, customize and shop styles that definitely will fits you the best. 
            </p>
			<ul class="list list-inline">
				<li class="list-inline-item"><img src="/assets/sc/appstore.png" style="max-width: 200px;"></li>
				<li class="list-inline-item"><a href="https://www.instagram.com/fitbuyco/"><img src="/assets/sc/instagram.png" style="max-width: 80px;"></a></li>
			</ul>
          </div>
	      <div class="col-md-6 align-self-end g-overflow-hidden">
            <img class="img-fluid" src="/assets/sc/inline10_v7.png" alt="Image description" data-animation="fadeInUp" data-animation-delay="1200" data-animation-duration="1500">
          </div>
        </div>
      </div>
    </section>
    <!-- End Promo Block - Parallax -->

    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <!-- JS Global Compulsory -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="/assets/vendor/popper.min.js"></script>
  <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="/assets/vendor/appear.js"></script>
  <script src="/assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
  <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Unify -->
  <script src="/assets/js/hs.core.js"></script>
  <script src="/assets/js/components/hs.header.js"></script>
  <script src="/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="/assets/js/helpers/hs.height-calc.js"></script>
  <script src="/assets/js/components/hs.onscroll-animation.js"></script>
  <script src="/assets/js/components/hs.carousel.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).ready(function () {
      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // initialization of scroll animation
      $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

      // initialization of header's height equal offset
      $.HSCore.helpers.HSHeightCalc.init();
    });

    $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });
    });
  </script>
</body>

</html>