<!DOCTYPE html>
<html>

<head>
    <title>Yes World - Home</title>
    <link href="images/favicon.ico" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/yesworld/css/style.css') }}">
    <link href="css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
</head>
    

<body id="home">
    
    @include('front.body.header')
    
    @yield('main-content')
    
    @include('front.body.footer')
    
    <!-- Modal -->
    <div class="modal fade buy-now-popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buy Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav justify-content-between">
                        <li>
                            <p><b>Coinsbit</b></p>
                            <a target="_blank" href="https://coinsbit.io/trade_classic/YES_USDT"
                                class="btn btn-primary">Coinsbit</a>
                        </li>
                        <li>
                            <p><b>XT.com</b></p>
                            <a target="_blank" href="https://www.xt.com/trade/yes_usdt"
                                class="btn btn-primary">XT.com</a>
                        </li>
                        <li>
                            <p><b>PancakeSwap</b></p>
                            <a target="_blank"
                                href="https://pancakeswap.finance/swap?inputCurrency=0x55d398326f99059fF775485246999027B3197955&outputCurrency=0xB9d35811424600fa9E8cD62A0471fBd025131cb8"
                                class="btn btn-primary">PancakeSwap</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade video-popup" id="video-one" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/8CDRp9dLAj8?start=7" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade video-popup" id="video-two" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/YzAngCNOfbg?start=4" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade video-popup" id="video-three" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/tC_iRkLiMOk?start=6" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade video-popup" id="video-four" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/1Em7C_khN_Q?start=10" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade video-popup" id="video-five" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/JgKl8O-bvbQ?start=6" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--script-->
    <script src="{{ asset('frontend/yesworld/js/aos.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.min.js"
        type="text/javascript"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var alterClass = function() {
                var ww = document.body.clientWidth;
                if (ww < 768) {
                    $("#id").remove();
                    $('.hero-banner, .save-earth-main, .vision-main, .value-main, .connecting-dot, .paradigm-shift, .earn-main, .token-main, .travel-main, .token-main, .crypto-loan, .crypto-card, .venture-fund, .presence-main, .faq-main, .footer-main')
                        .removeAttr('id');
                }
            };
            $(window).resize(function() {
                alterClass();
            });
            //Fire it when the page first loads:
            alterClass();
        });
    </script>
    <script type="text/javascript">
        //--- DEFINE a reusable animation function: ---//
        function scrollThere(targetElement, speed) {
            // initiate an animation to a certain page element:
            $('html, body').stop().animate({
                    scrollTop: targetElement.offset().top
                }, // move window so target element is at top of window
                speed, // speed in milliseconds
                'linear' // easing
            ); // end animate
        } // end scrollThere function definition      
        //--- START SCROLL EVENTS ---//
        // detect a mousewheel event (note: relies on jquery mousewheel plugin):
        $(window).on('mousewheel', function(e) {
            // get Y-axis value of each div:
            var div1y = $('#panel1').offset().top,
                div2y = $('#panel2').offset().top,
                div3y = $('#panel3').offset().top,
                div4y = $('#panel4').offset().top,
                div5y = $('#panel5').offset().top,
                div6y = $('#panel6').offset().top,
                div7y = $('#panel7').offset().top,
                div8y = $('#panel8').offset().top,
                div9y = $('#panel9').offset().top,
                div10y = $('#panel10').offset().top,
                div11y = $('#panel11').offset().top,
                div12y = $('#panel12').offset().top,
                div13y = $('#panel13').offset().top,
                div14y = $('#panel14').offset().top,
                div15y = $('#panel15').offset().top,
                div16y = $('#panel16').offset().top,
                div17y = $('#panel17').offset().top,
                div18y = $('#panel18').offset().top,
                div19y = $('#panel19').offset().top,
                div20y = $('#panel20').offset().top,
                div21y = $('#panel21').offset().top,
                div22y = $('#panel22').offset().top,
                div23y = $('#panel23').offset().top,
                div24y = $('#panel24').offset().top,
                div25y = $('#panel25').offset().top,
                div26y = $('#panel26').offset().top,
                div27y = $('#panel27').offset().top,
                div28y = $('#panel28').offset().top,
                div29y = $('#panel29').offset().top,
                div30y = $('#panel30').offset().top,
                div31y = $('#panel31').offset().top,
                div32y = $('#panel32').offset().top,
                div33y = $('#panel33').offset().top,
                // get window's current scroll position:
                lastScrollTop = $(this).scrollTop(),
                // for getting user's scroll direction:
                scrollDirection,
                // for determining the previous and next divs to scroll to, based on lastScrollTop:
                targetUp,
                targetDown,
                // for determining which of targetUp or targetDown to scroll to, based on scrollDirection:
                targetElement;
            // get scroll direction:
            if (e.deltaY > 0) {
                scrollDirection = 'up';
            } else if (e.deltaY <= 0) {
                scrollDirection = 'down';
            } // end if
            // prevent default behavior (page scroll):
            e.preventDefault();
            // condition: determine the previous and next divs to scroll to, based on lastScrollTop:
            if (lastScrollTop === div1y) {
                targetUp = $('#panel1');
                targetDown = $('#panel2');
            } else if (lastScrollTop === div2y) {
                targetUp = $('#panel1');
                targetDown = $('#panel3');
            } else if (lastScrollTop === div3y) {
                targetUp = $('#panel2');
                targetDown = $('#panel4');
            } else if (lastScrollTop === div4y) {
                targetUp = $('#panel3');
                targetDown = $('#panel5');
            } else if (lastScrollTop === div5y) {
                targetUp = $('#panel4');
                targetDown = $('#panel6');
            } else if (lastScrollTop === div6y) {
                targetUp = $('#panel5');
                targetDown = $('#panel7');
            } else if (lastScrollTop === div7y) {
                targetUp = $('#panel6');
                targetDown = $('#panel8');
            } else if (lastScrollTop === div8y) {
                targetUp = $('#panel7');
                targetDown = $('#panel9');
            } else if (lastScrollTop === div9y) {
                targetUp = $('#panel8');
                targetDown = $('#panel10');
            } else if (lastScrollTop === div10y) {
                targetUp = $('#panel9');
                targetDown = $('#panel11');
            } else if (lastScrollTop === div11y) {
                targetUp = $('#panel10');
                targetDown = $('#panel12');
            } else if (lastScrollTop === div12y) {
                targetUp = $('#panel11');
                targetDown = $('#panel13');
            } else if (lastScrollTop === div13y) {
                targetUp = $('#panel12');
                targetDown = $('#panel14');
            } else if (lastScrollTop === div14y) {
                targetUp = $('#panel13');
                targetDown = $('#panel15');
            } else if (lastScrollTop === div15y) {
                targetUp = $('#panel14');
                targetDown = $('#panel16');
            } else if (lastScrollTop === div16y) {
                targetUp = $('#panel15');
                targetDown = $('#panel17');
            } else if (lastScrollTop === div17y) {
                targetUp = $('#panel16');
                targetDown = $('#panel18');
            } else if (lastScrollTop === div18y) {
                targetUp = $('#panel17');
                targetDown = $('#panel19');
            } else if (lastScrollTop === div19y) {
                targetUp = $('#panel18');
                targetDown = $('#panel20');
            } else if (lastScrollTop === div20y) {
                targetUp = $('#panel19');
                targetDown = $('#panel21');
            } else if (lastScrollTop === div21y) {
                targetUp = $('#panel20');
                targetDown = $('#panel22');
            } else if (lastScrollTop === div22y) {
                targetUp = $('#panel21');
                targetDown = $('#panel23');
            } else if (lastScrollTop === div23y) {
                targetUp = $('#panel22');
                targetDown = $('#panel24');
            } else if (lastScrollTop === div24y) {
                targetUp = $('#panel23');
                targetDown = $('#panel25');
            } else if (lastScrollTop === div25y) {
                targetUp = $('#panel24');
                targetDown = $('#panel26');
            } else if (lastScrollTop === div26y) {
                targetUp = $('#panel25');
                targetDown = $('#panel27');
            } else if (lastScrollTop === div27y) {
                targetUp = $('#panel26');
                targetDown = $('#panel28');
            } else if (lastScrollTop === div28y) {
                targetUp = $('#panel27');
                targetDown = $('#panel29');
            } else if (lastScrollTop === div29y) {
                targetUp = $('#panel28');
                targetDown = $('#panel30');
            } else if (lastScrollTop === div30y) {
                targetUp = $('#panel29');
                targetDown = $('#panel31');
            } else if (lastScrollTop === div31y) {
                targetUp = $('#panel30');
                targetDown = $('#panel32');
            } else if (lastScrollTop === div32y) {
                targetUp = $('#panel21');
                targetDown = $('#panel33');
            } else if (lastScrollTop === div33y) {
                targetUp = $('#panel32');
                targetDown = $('#panel33');
            } // end else if      
            // condition: determine which of targetUp or targetDown to scroll to, based on scrollDirection:
            if (scrollDirection === 'down') {
                // alert("down");
                targetElement = targetDown;
            } else if (scrollDirection === 'up') {
                // alert("up");
                targetElement = targetUp;
            } // end else if      
            // scroll smoothly to the target element:
            scrollThere(targetElement, 90);
        }); // end on mousewheel event
        //--- END SCROLL EVENTS ---//
    </script>
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 600) {
                $('.top-btn').addClass('active');
            } else {
                $('.top-btn').removeClass('active');
            }
        });
    </script>
    <script type="text/javascript">
        $('.presence-slider').slick({
            infinite: true,
            slidesToShow: 6,
            autoplay: true,
            autoplaySpeed: 800,
            speed: 800,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
        $('.video-slider').slick({
            infinite: true,
            slidesToShow: 3,
            autoplay: false,
            autoplaySpeed: 2000,
            speed: 500,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            responsive: [{
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }]
        });
    </script>
</body>

</html>
