<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }} images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }} " />
    <title>POLYFORCE - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
      href="{{ asset('frontend/assets/css/fontawesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/flaticon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="//fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body id="bg">
    <div class="page-wraper">
    <!-- HEADER START -->
    <nav class="navbar navbar-expand-lg position-fixed">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/images/logo.png') }}"
          alt="" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feature">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tokenomic">Tokenomic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#roadmap">Roadmap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" href="{{ route('indexNew') }}">Login / Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page-content">
      <!--main-banner-->
      <div class="main-banner">
        <video class="position-absolute" width="100%" loop muted autoplay played>
          <source src="{{ asset('frontend/assets/images/login-video.mp4') }}" type="video/mp4">
          <source src="{{ asset('frontend/assets/images/login-video.ogg') }}" type="video/ogg">
        </video>
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-md-7 col-12">
              <div class="banner-left">
                <h1><span>JSS Coin</span> IS THE #1 CRYPTOCURRENCY GAMING COMMUNITY</h1>
                <p>JSS Coin is the one-stop gaming coin that will facilitate all forms of gaming with a
                  transparent, provably fair and widely used mechanism for funding and integrating to
                  disparate gaming opportunities.
                </p>
                <div class="banner-btn btn-group">
                  <a href="{{ asset('jss-white.pdf') }}" target="_blank" class="btn btn-primary">Whitepaper</a>
                  <a href="{{ asset('jss.pdf') }}" target="_blank" class="btn btn-primary">Presentation</a>
                  <a href="https://bscscan.com/token/0x6be0490ada0c8197fc9ed421c73e3f8b1938b1d8" target="_blank" class="btn btn-primary">Contract</a>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-12">
              <div class="banner-right position-relative">
                <img src="{{ asset('frontend/assets/images/earth.png') }}" class="spin-city img-fluid">
                <div class="bitcoin-img position-absolute">
                  <img src="{{ asset('frontend/assets/images/banner-bitcoin.png') }}"
                    class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- MARQUEE SCROLL -->
      <div class="bg-black marquee">
        <div class="TickerNews" id="T1">
          <div class="ti_wrapper">
            <div class="ti_slide">
              <div class="ti_content">
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/bitcoin.png') }}"
                  alt=""><span>BTC: </span><span>$ 10,633.1</span><span
                  class="text-yellow p-lr5">0.97 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/bitcoin.png') }}"
                  alt=""><span>BTC: </span><span>¥ 68,008.1</span><span
                  class="text-danger p-lr5">0.00 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/bitcoin.png') }}"
                  alt=""><span>BTC: </span><span>€ 8,699.23</span><span
                  class="text-white p-lr5">1.08 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/Ethereum.png') }}"
                  alt=""><span>ETH: </span><span>Ƀ 0.08160</span><span
                  class="text-green p-lr5">-0.28 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/Ethereum.png') }}"
                  alt=""><span>ETH: </span><span>$ 867.93</span><span
                  class="text-danger p-lr5">-0.60 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/Ethereum.png') }}"
                  alt=""><span>ETH: </span><span>¥ 5,549.46</span><span
                  class="text-white p-lr5">-0.28 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/Ethereum.png') }}"
                  alt=""><span>ETH: </span><span>€ 709.94</span><span
                  class="text-gray p-lr5">0.26 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/monero.png') }}"
                  alt=""><span>XMR: </span><span>Ƀ 0.0276</span><span
                  class="text-green p-lr5">1.25 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/monero.png') }}"
                  alt=""><span>XMR: </span><span>$ 295.33</span><span
                  class="text-light-blue p-lr5">0.89 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/monero.png') }}"
                  alt=""><span>XMR: </span><span>¥ 1,883.14</span><span
                  class="text-green p-lr5">0.25 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/monero.png') }}"
                  alt=""><span>XMR: </span><span>€ 240.56</span><span
                  class="text-red p-lr5">-0.40 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/litecoin.png') }}"
                  alt=""><span>LTC: </span><span>Ƀ 0.01956</span><span
                  class="text-danger p-lr5">-0.20 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/litecoin.png') }}"
                  alt=""><span>LTC: </span><span>$ 208.06</span><span
                  class="text-green p-lr5">-1.97 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/litecoin.png') }}"
                  alt=""><span>LTC: </span><span>¥ 1,330.24</span><span
                  class="text-white p-lr5">-0.20 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/litecoin.png') }}"
                  alt=""><span>LTC: </span><span>€ 169.91</span><span
                  class="text-yellow p-lr5">-1.29 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/DigitalCash.png') }}"
                  alt=""><span>DASH: </span><span>Ƀ 0.05590</span><span
                  class="text-white p-lr5">0.26 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/DigitalCash.png') }}"
                  alt=""><span>DASH: </span><span>$ 594.64</span><span
                  class="text-green p-lr5">0.37 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/DigitalCash.png') }}"
                  alt=""><span>DASH: </span><span>¥ 3,801.65</span><span
                  class="text-red p-lr5">0.99 %</span></a></div>
                <div class="ti_news"><a href="#"><img
                  src="{{ asset('frontend/assets/images/DigitalCash.png') }}"
                  alt=""><span>DASH: </span><span>€ 486.29</span><span
                  class="text-yellow p-lr5">-10.18 %</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- OUR VALUE SECTION START -->
      <div class="section-full bg-primary">
        <div class="container">
          <div class="section-content ">
            <!-- COLL-TO ACTION START -->
            <div class="wt-subscribe-box">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-9 col-sm-8">
                    <div class="call-to-action-left p-tb20 ">
                      <h4 class="text-uppercase m-b10 font-weight-600">Invest in Cryptocurrency
                        Jsscoin Mining & Easy Way to Trade Jsscoin.
                      </h4>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="call-to-action-right p-tb30">
                      <a href="{{ route('indexNew') }}"
                        class="site-button-secondry text-uppercase font-weight-600">
                      Register
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ABOUT COMPANY SECTION START -->
      <div id="about" class="section-full home-about-section p-t80 bg-no-repeat bg-bottom-right"
        style="background-image:url({{ asset('frontend/assets/images/bg-coin.png') }})">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4">
              <div class="wt-box position-relative">
                <img src="{{ asset('frontend/assets/images/bg-laptop.png') }}" alt=""
                  class="img-fluid" />
                <div class="jsscoin-image position-absolute">
                  <img src="{{ asset('frontend/assets/images/jss-coin.png') }}" alt=""
                    class="floating img-fluid" />
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="wt-right-part p-b80">
                <!-- TITLE START -->
                <div class="section-head text-left">
                  <span class="wt-title-subline font-16 text-gray-dark m-b15">What is Jsscoin</span>
                  <h2 class="text-uppercase">New Currency Jsscoin</h2>
                  <div class="wt-separator-outer">
                    <div class="wt-separator bg-primary"></div>
                  </div>
                </div>
                <!-- TITLE END -->
                <div class="section-content">
                  <div class="wt-box">
                    <p class="text-black"><b><em>JSS : A reflection of Future towards the virtual
                      World yielding real Cash !</em></b>
                    </p>
                    <p>The coin aims at developing a successive position in the decentralized
                      exchange market. It will undergo the introduction of the NFT’s and establish
                      homes in the real estate metaverse. Thus, it will be a real use case for the
                      blockchain industry. The coin will revamp the industry and make the games
                      more immersive than ever. Blockchain will remain hidden here which will make
                      gaming in crypto a fun activity.
                    </p>
                    <a href="#" class="site-button text-uppercase m-r15">Read More</a>
                    <a href="#" class="site-button-secondry text-uppercase">Contact us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- WHY CHOOSE US SECTION START  -->
      <div id="feature" class="section-full  p-t80 p-b80 bg-gray">
        <div class="container">
          <!-- TITLE START-->
          <div class="section-head text-center">
            <span class="wt-title-subline font-16 text-gray-dark m-b15">Buy and Sell Jsscoin</span>
            <h2 class="text-uppercase">Why Choose Jsscoin</h2>
            <div class="wt-separator-outer">
              <div class="wt-separator bg-primary"></div>
            </div>
            <p>A reflection of Future towards the virtual World yielding real Cash !</p>
          </div>
          <!-- TITLE END-->
          <div class="section-content no-col-gap">
            <div class="row justify-content-center">
              <div class="col-md-4 col-sm-6 animate_line">
                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                  <div class="icon-lg text-primary m-b20">
                    <a href="#" class="icon-cell"><img
                      src="{{ asset('frontend/assets/images/pick-29.png') }}"
                      alt=""></a>
                  </div>
                  <div class="icon-content">
                    <h4 class="wt-tilte text-uppercase font-weight-500">FAST</h4>
                    <p>Maximize your playing time with rapid wallet-to-wallet transactions.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 animate_line">
                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                  <div class="icon-lg text-primary m-b20">
                    <a href="#" class="icon-cell"><img
                      src="{{ asset('frontend/assets/images/pick-28.png') }}"
                      alt=""></a>
                  </div>
                  <div class="icon-content ">
                    <h4 class="wt-tilte text-uppercase font-weight-500">SECURE</h4>
                    <p>Ownership of JSSCoin is secured by non-custodial wallets and anonymous.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 animate_line">
                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                  <div class="icon-lg text-primary m-b20">
                    <a href="#" class="icon-cell"><img
                      src=" {{ asset('frontend/assets/images/pick-17.png') }}"
                      alt=""></a>
                  </div>
                  <div class="icon-content">
                    <h4 class="wt-tilte text-uppercase font-weight-500">SEAMLESS</h4>
                    <p>JSSCoin are ERC20 tokens. The blockchain makes processes faster and easier.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 animate_line">
                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                  <div class="icon-lg text-primary m-b20">
                    <a href="#" class="icon-cell"><img
                      src="{{ asset('frontend/assets/images/pick-19.png') }}"
                      alt=""></a>
                  </div>
                  <div class="icon-content">
                    <h4 class="wt-tilte text-uppercase font-weight-500">OPEN</h4>
                    <p>Users, communities and developers: everyone can harness JSSCoin power.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 animate_line">
                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                  <div class="icon-lg text-primary m-b20">
                    <a href="#" class="icon-cell"><img
                      src="{{ asset('frontend/assets/images/pick-12.png') }}"
                      alt=""></a>
                  </div>
                  <div class="icon-content">
                    <h4 class="wt-tilte text-uppercase font-weight-500">TRANSPARENT</h4>
                    <p>Transactions are decentralized, publicly recorded, and traceable.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- COMPANY DETAIL SECTION START -->
      <div id="tokenomic" class="section-full overlay-wraper bg-parallax clouds1 bg-repeat awesome-facts-outer"
        data-stellar-background-ratio="0.5">
        <div class="overlay-main bg-secondry opacity-05"></div>
        <div class="container ">
          <div class="section-heading text-center text-white">
            <h2>Tokenomics</h2>
            <p>Jsscoin is fully tokenized, extremely reliable, impossible to change after deployment, and
              has no chance of human involvement. It is simultaneously transparent, authentic, and
              private. no command over any group or individual. Thus, it's the simplest method of running
              the software.
            </p>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="rocket-pic">
                <div class="rocket-animation ">
                  <img src="{{ asset('frontend/assets/images/rocket.png') }}" alt=""
                    class="floating" />
                  <div class="rocket-fire"> <img
                    src="{{ asset('frontend/assets/images/fire.gif') }}" alt=""
                    class="floating" /></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="token-right rocket-animation position-relative">
                <img src="{{ asset('frontend/assets/images/tokenomics-right-img.png') }}"
                  alt="" class="img-fluid" />
                <div class="token-detail token-detail-one position-absolute">
                  <p>If 6 direct referral with in 6 hours (every 6 hours cut off : daily 5 cut-off )
                  </p>
                </div>
                <div class="token-detail token-detail-two position-absolute">
                  <p>Every 24 Hours cut off and distribution</p>
                </div>
                <div class="token-detail token-detail-three position-absolute">
                  <p>A WILL GET 50% Matrix INCOME FROM C1 & C2 PACKAGE AMOUNT</p>
                </div>
                <div class="token-detail token-detail-four position-absolute">
                  <p>UP 1 WILL GET 35% DIRECT INCOME FROM A PACKAGE AMOUNT ( IF DIRECT SPONSER )</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--ROADMAP START-->
      <div id="roadmap" class="roadmap-outer">
        <div class="container">
          <div class="section-heading text-center">
            <h2 class="text-uppercase">ROADMAP</h2>
            <div class="wt-separator-outer">
              <div class="wt-separator bg-primary"></div>
            </div>
          </div>
          <div class="roadmap-inner text-center">
            <img src="{{ asset('frontend/assets/images/roadmap-img.png') }}" alt=""
              class="img-fluid" />
          </div>
        </div>
      </div>
      <div id="faq" class="faq-main">
        <div class="container">
          <div class="section-heading text-center">
            <h2 class="text-uppercase">FAQ</h2>
            <div class="wt-separator-outer">
              <div class="wt-separator bg-primary"></div>
            </div>
          </div>
          <div class="faq-outer">
            <div class="row justify-content-center">
              <div class="col-md-8 col-12">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                      What is JSS Coin ?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                      aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        JSS Coin is the one-stop gaming coin that will facilitate all forms of gaming with a transparent, provably fair and widely used mechanism for funding and integrating to disparate gaming opportunities.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                      From Where we can purchase JSS Coin ?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse"
                      aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Any One can purchase JSS Coin from Sun Swap.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                      Is this trustable ?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse"
                      aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes you can trust on JSS Coin as it is 100 % transparent. 100% liquidity is on sun swap.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- HOW IT WORK SECTION START  -->
      <!-- <div class="section-full  p-t80 p-b80 bg-gray">
        <div class="container">
          <div class="section-head text-center">
            <span class="wt-title-subline font-16 text-gray-dark m-b15">Three steps jsscoin</span>
            <h2 class="text-uppercase">How It Work</h2>
            <div class="wt-separator-outer">
              <div class="wt-separator bg-primary"></div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga eos optio ducimus odit, labore hic fugiat iusto veniam necessitatibus quas doloremque sapiente maiores.</p>
          </div>
          <div class="section-content no-col-gap">
            <div class="row">
              <div class="col-md-4 col-sm-4 step-number-block">
                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                  <div class="icon-lg text-primary m-b20">
                    <a href="#" class="icon-cell"><img src="images/pick-4.png" alt=""></a>
                  </div>
                  <div class="icon-content">
                    <div class="step-number">1</div>
                    <h4 class="wt-tilte text-uppercase font-weight-500">Create your wallet</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 step-number-block">
                <div class="wt-icon-box-wraper  p-a30 center bg-primary m-a5 ">
                  <div class="icon-lg m-b20">
                    <a href="#" class="icon-cell"><img src="images/pick-28.png" alt=""></a>
                  </div>
                  <div class="icon-content text-white">
                    <div class="step-number active">2</div>
                    <h4 class="wt-tilte text-uppercase font-weight-500">Make payments</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 step-number-block">
                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                  <div class="icon-lg text-primary m-b20">
                    <a href="#" class="icon-cell"><img src="images/pick-12.png" alt=""></a>
                  </div>
                  <div class="icon-content">
                    <div class="step-number">3</div>
                    <h4 class="wt-tilte text-uppercase font-weight-500">Buy or Sell Orders</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div> -->
    </div>
    <!-- FOOTER START -->
    <footer class="site-footer footer-dark bg-no-repeat bg-full-height bg-center "
      style="background-image:url({{ asset('frontend/assets/images/footer-bg.jpg') }});">
      <!-- FOOTER BLOCKES START -->
      <div class="footer-top overlay-wraper">
        <div class="overlay-main bg-black opacity-05"></div>
        <div class="container">
          <div class="row">
            <!-- ABOUT COMPANY -->
            <div class="col-md-4 col-sm-6">
              <div class="widget widget_about">
                <h4 class="widget-title text-white">About Company</h4>
                <div class="logo-footer clearfix p-b15">
                  <a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}"
                    width="230" height="67" alt="" /></a>
                </div>
                <p>JSS Coin is the one-stop gaming coin that will facilitate all forms of gaming with a
                  transparent, provably fair and widely used mechanism for funding and integrating to
                  disparate gaming opportunities.
                </p>
              </div>
            </div>
            <!-- USEFUL LINKS -->
            <div class="col-md-4 col-sm-6">
              <div class="widget widget_services">
                <h4 class="widget-title text-white">Useful links</h4>
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <!-- NEWSLETTER -->
            <div class="col-md-4 col-sm-6">
              <div class="widget widget_social_inks">
                <h4 class="widget-title text-white">Social Links</h4>
                <ul class="social-icons social-square social-darkest">
                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                  <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                  <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                  <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FOOTER COPYRIGHT -->
      <div class="footer-bottom  overlay-wraper">
        <div class="overlay-main"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="wt-footer-bot-left">
                <span class="copyrights-text">© 2018 JSSCOIN. All Rights Reserved.</span>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="wt-footer-bot-right">
                <ul class="copyrights-nav pull-right">
                  <li><a href="javascript:void(0);">Terms & Condition</a></li>
                  <li><a href="javascript:void(0);">Privacy Policy</a></li>
                  <li><a href="contact-1.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script  src="{{ asset('frontend/assets/js/tickerNews.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.toaster.js')}}"></script>
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
