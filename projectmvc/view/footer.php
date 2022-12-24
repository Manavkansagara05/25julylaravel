<!-- footer-66 -->
<footer class="w3l-footer-66">
  <section class="footer-inner-main">
    <div class="footer-hny-grids py-5">
      <div class="container py-lg-4">
        <div class="text-txt">

          <div class="right-side">
            <div class="row sub-columns">
              <div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
                <h2><a class="navbar-brand" href="home">
                    <span>C</span>arserving
                  </a></h2>
                <!-- if logo is image enable this   
										<a class="navbar-brand" href="#index.html">
											<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
										</a> -->
                <p class="pr-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Consequuntur hic odio voluptatem tenetur consequatur.Lorem ipsum dolor sit amet
                  consectetur adipisicing elit. </p>
                <div class="columns-2">
                  <ul class="social">
                    <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                    </li>
                    <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                    </li>
                    <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </li>
                    <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                    </li>
                    <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
             
              <div class="col-lg-4 col-md-6 sub-one-left">
                <h6>Contact Info</h6>
                <div class="sub-contact-info">
                  <p>Address: 8436 Jasmine Parkway, Mountain View, CA 84043, United States.</p>
                  <p class="my-3">Phone: <strong><a href="tel:+24160033999">+24 1600-33-999</a></strong></p>
                  <p>E-mail:<strong> <a href="mailto:info@example.com">info@example.com</a></strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- copyright -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->

  </section>
</footer>
<!--//footer-66 -->
<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!--//-->
<script src="assets/js/theme-change.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function() {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<script>
  $(document).ready(function() {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function() {
    $('.navbar-toggler').click(function() {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->
<!--/MENU-JS-->
<script>
  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function() {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function() {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>