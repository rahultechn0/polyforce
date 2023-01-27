<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }} images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }} " />
    <title>POLYFORCE | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/fontawesome/css/font-awesome.min.css') }}" />
    {{--
    <link rel="stylesheet" href="{{asset('backend/assets/app/bootstrap/css/bootstrap.css')}}">
    --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/flaticon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="//fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    <meta name="csrf-token" content="@php echo csrf_token(); @endphp">
  </head>
  <body id="bg">
    <div class="page-wraper">
      <!-- HEADER START -->
      <nav class="navbar position-fixed register-header">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
          <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}"
            alt="" class="img-fluid"></a>
        </div>
      </nav>
      <div class="page-content">
        <div class="register-main position-relative">
          <video class="position-absolute" width="100%" loop muted autoplay played>
            <source src="{{ asset('frontend/assets/images/login-video.mp4') }}" type="video/mp4">
            <source src="{{ asset('frontend/assets/images/login-video.ogg') }}" type="video/ogg">
          </video>
          <div class="container">
            <div class="register-outer">
              <div class="flip-card-3D-wrapper">
                <div id="flip-card">
                  <div class="flip-card-front">
                    <h2>Register</h2>
                    <form>
                      <div class="form-group">
                        <label>Sponser Id</label>
                        <input type="text"
                          value="@php if(isset($registerId) && !empty($registerId)) { echo $registerId; } else { echo '100000'; } @endphp"
                          name="registerId" id="registerId" placeholder="Refferal Code"
                          class="form-control" />
                      </div>
                      <div class="connect-btn">
                        <button type="button" onclick="registeration();"
                          class="btn btn-primary">Register</button>
                      </div>
                    </form>
                    <button class="btn btn-primary" id="flip-card-btn-turn-to-back">Login</button>
                  </div>
                  <div class="flip-card-back">
                    <h2>Login</h2>
                    <a onclick="login();" href="javascript:void(0);" class="btn btn-primary">Connect Wallet</a>
                    <button class="btn btn-secondry" id="flip-card-btn-turn-to-front">Register</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/js/tickerNews.min.js') }}"></script><!-- TICKERNEWS-->
    <script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}?</php echo time(); ?>"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js"
      integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/assets/js/idoTest.js') }}?</php echo time(); ?>"></script>
    <script src="{{ asset('backend/assets/js/jquery.toaster.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      jQuery(function() {
          var timer = !1;
          _Ticker = jQuery("#T1").newsTicker();
          _Ticker.on("mouseenter", function() {
              var __self = this;
              timer = setTimeout(function() {
                  __self.pauseTicker();
              }, 200);
          });
          _Ticker.on("mouseleave", function() {
              clearTimeout(timer);
              if (!timer) return !1;
              this.startTicker();
          });
      });
    </script>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function(event) {
      document.getElementById('flip-card-btn-turn-to-back').style.visibility = 'visible';
      document.getElementById('flip-card-btn-turn-to-front').style.visibility = 'visible';
      document.getElementById('flip-card-btn-turn-to-back').onclick = function() {
      document.getElementById('flip-card').classList.toggle('do-flip');
      };
      document.getElementById('flip-card-btn-turn-to-front').onclick = function() {
      document.getElementById('flip-card').classList.toggle('do-flip');
      };
      });
    </script>
    <script type="text/javascript">
      $(window).scroll(function() {
          if ($(this).scrollTop() > 1) {
              $('.navbar').addClass('bg-dark');
          } else {
              $('.navbar').removeClass('bg-dark');
          }
      });
    </script>
  </body>
</html>
