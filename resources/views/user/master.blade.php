<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <title>SAFINDA</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/templatemo-edu-meeting.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/lightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/porto.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/magnific-popup.css') }}" />
   
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    @include('user.navbar')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    @yield('master')

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/pagination.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('user/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('user/assets/js/tabs.js') }}"></script>
    <script src="{{ asset('user/assets/js/video.js') }}"></script>
    <script src="{{ asset('user/assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('user/assets/js/custom.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.mixitup.min.js') }}"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
        $(".nav li:first").addClass("active");

        var showSection = function showSection(section, isAnimate) {
            var direction = section.replace(/#/, ""),
                reqSection = $(".section").filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $("body, html").animate({
                        scrollTop: reqSectionPos,
                    },
                    800
                );
            } else {
                $("body, html").scrollTop(reqSectionPos);
            }
        };

        var checkSection = function checkSection() {
            $(".section").each(function() {
                var $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var currentId = $this.data("section"),
                        reqLink = $("a").filter("[href*=\\#" + currentId + "]");
                    reqLink.closest("li").addClass("active").siblings().removeClass("active");
                }
            });
        };

        $(".main-menu, .responsive-menu, .scroll-to-section").on("click", "a", function(e) {
            e.preventDefault();
            showSection($(this).attr("href"), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
     
</body>

</html>
