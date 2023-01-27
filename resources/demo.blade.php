@extends('front.main')
@section('main-content')
    <div id="panel1" class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-12 order-md-2">
                    <div class="banner-right animate__animated animate__fadeInRight text-end">
                        <img src=" {{ asset('frontend/yesworld/banner-right.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-7 col-12 order-md-1">
                    <div class="banner-left animate__animated animate__fadeInLeft">
                        <h1>Say YES to the future of Unlimited Possibilities!</h1>
                        <p>Launched during the Spring of 2022, YES WORLD is the leading Utility Token that the world
                            wants to accept.</p>
                        <p>The most exciting thing to happen to cryptocurrency since Bitcoin allows users not only to
                            enjoy the capital gains but also utilize the digital currency for their regular purchases.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel2" class="hero-banner hero-banner-two position-relative">
        <div class="crypto-icon crypto-one position-absolute animated animate__pulse">
            <img src=" {{ asset('frontend/yesworld/images/crypto-icon1.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="crypto-icon crypto-two position-absolute animated animate__pulse">
            <img src=" {{ asset('frontend/yesworld/ images/crypto-icon2.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="crypto-icon crypto-three position-absolute animated animate__pulse">
            <img src="{{ asset('frontend/yesworld/images/crypto-icon3.png') }} " alt="" class="img-fluid" />
        </div>
        <div class="crypto-icon crypto-four position-absolute animated animate__pulse">
            <img src=" {{ asset('frontend/yesworld/images/crypto-icon4.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="crypto-icon crypto-five position-absolute animated animate__pulse">
            <img src="{{ asset('frontend/yesworld/images/crypto-icon5.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="crypto-icon crypto-six position-absolute animated animate__pulse">
            <img src="{{ asset('frontend/yesworld/images/crypto-icon6.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="crypto-icon crypto-seven position-absolute animated animate__pulse">
            <img src="{{ asset('frontend/yesworld/images/crypto-icon7.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-down">
                <h3 class="text-lg text-white">Crypto Revolution</h3>
            </div>
            <div class="banner-two-inner">
                <div class="row align-items-center">
                    <div class="order-1 col-md-8 col-12">
                        <div class="banner-left text-start aos-init" data-aos="fade-down-right">
                            <h1 class="text-start">The World's Biggest Crypto Revolution Is Underway</h1>
                            <p>YES WORLD is the leading option for those looking for an alternative to traditional
                                investment instruments and conventional payment methods.</p>
                        </div>
                    </div>
                    <div class="order-2 col-md-4 col-12 aos-init" data-aos="fade-up-left">
                        <div class="banner-right animated pulse text-end">
                            <img src="{{ asset('frontend/yesworld/images/revolution-img1.png') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel3" class="hero-banner hero-banner-three">
        <div class="container">
            <div class="text-center only-mobile section-heading">
                <h3 class="text-lg text-white">A New World Awaits</h3>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-4 col-12 aos-init" data-aos="fade-down-right">
                    <div class="banner-right animated pulse">
                        <img src="{{ asset('frontend/yesworld/images/world-img1.png') }}" alt=""
                            class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="banner-left banner-left-three aos-init" data-aos="fade-up-left">
                        <h1 class="mobile-none">A New World Awaits</h1>
                        <p>As digital technologies continue to change the way we live and do business, YES WORLD is at
                            the forefront of this exciting new frontier. With its innovative platform and world-class
                            services, YES WORLD represents a truly revolutionary approach to money and payments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel4" class="save-earth-main">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-left">
                <h3 class="text-lg text-white">SAVE EARTH MISSION</h3>
            </div>
            <div class="earth-outer">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="save-img mobile-only">
                            <img src="{{ asset('frontend/yesworld/images/earth-bg.jpg') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="earth-inner aos-init" data-aos="fade-right">
                            <h3 class="text-white title">The future of digital money and the planet</h3>
                            <p class="text-white">YES WORLD, the blockchain based Climate Tech, provides intelligence
                                on carbon emission data and tokenization of carbon offsets, as well as a vehicle to
                                democratize carbon reduction activities as part of SAVE EARTH MISSION</p>
                            <h3 class="text-white title mobile-none">Green is the future, and the future is now!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel5" class="about-main save-earth-main position-relative" id="about">
        <div class="bg-shape-one position-absolute">
            <img src="{{ asset('frontend/yesworld/images/about-shape1.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="bg-shape-two position-absolute aos-init" data-aos="fade-left">
            <img src="{{ asset('frontend/yesworld/images/about-shape3.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="bg-shape-three position-absolute aos-init" data-aos="fade-right">
            <img src="{{ asset('frontend/yesworld/images/about-shape3.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="flip-up">
                <h3 class="text-lg text-white">Empowering Sustainability</h3>
            </div>
            <div class="earth-outer aos-init" data-aos="fade-right">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12 order-md-2">
                        <div class="empowering-img">
                            <img src="{{ asset('frontend/yesworld/images/empowering-img.jpg') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-7 col-12 order-md-1">
                        <div class="earth-inner">
                            <h4 class="text-white">Democratizing Sustainable behavior toward the environment, promoting
                                responsible stewardship, and empowering people through blockchain technology that's what
                                we're all about.</h4>
                            <p class="text-white">We are passionate about protecting our planet and promoting
                                environmental sustainability. With innovative solutions and a mission-driven approach,
                                we are leading the charge towards a greener future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel6" class="vision-main save-earth-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-12">
                    <div class="vision-left aos-init" data-aos="fade-down-right">
                        <img src="{{ asset('frontend/yesworld/images/vision-img1.jpg') }}" alt=""
                            class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-7 col-12">
                    <div class="earth-inner aos-init" data-aos="fade-up-left">
                        <h3 class="text-white title">REDUCING THE CARBON FOOTPRINTS</h3>
                        <h5 class="text-white">The world is rapidly moving towards a low-carbon future, and YES WORLD
                            is at the forefront of this transition.</h5>
                        <p class="text-white">We envision a world where everyone has the opportunity to contribute to
                            environmental sustainability and make a positive impact on the planet. At YES WORLD, we are
                            dedicated to leveraging the power of community to create a more sustainable future for all.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel7" class="about-main value-main position-relative">
        <div class="bg-shape-two position-absolute">
            <img src="{{ asset('frontend/yesworld/images/about-shape3.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="bg-shape-three position-absolute">
            <img src="{{ asset('frontend/yesworld/images/about-shape3.png') }}" alt="" class="img-fluid" />
        </div>
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white">VALUES</h3>
            </div>
            <div class="value-outer">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="value-inner position-relative aos-init" data-aos="fade-right">
                            <div class="flex-wrap value-top d-flex align-items-center">
                                <div class="value-heading">
                                    <h5>Change</h5>
                                </div>
                                <div class="img-outer">
                                    <img src="{{ asset('frontend/yesworld/images/value-icon1.png') }}" alt=""
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="text-center content-outer">
                                <p>We are committed to driving positive change in the world through innovative,
                                    sustainable solutions.</p>
                            </div>
                            <div class="value-shape shape-one position-absolute">
                                <img src="{{ asset('frontend/yesworld/images/triangle.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="value-inner position-relative aos-init" data-aos="fade-up">
                            <div class="flex-wrap value-top d-flex align-items-center">
                                <div class="value-heading">
                                    <h5>Community</h5>
                                </div>
                                <div class="img-outer">
                                    <img src="{{ asset('frontend/yesworld/images/value-icon2.png') }}" alt=""
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="text-center content-outer">
                                <p>At YES WORLD, we believe in the power of community to help build a better future for
                                    all.</p>
                            </div>
                            <div class="value-shape shape-two position-absolute">
                                <img src="{{ asset('frontend/yesworld/images/round.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="value-inner position-relative aos-init" data-aos="fade-left">
                            <div class="flex-wrap value-top d-flex align-items-center">
                                <div class="value-heading">
                                    <h5>Collaboration</h5>
                                </div>
                                <div class="img-outer">
                                    <img src="{{ asset('frontend/yesworld/images/value-icon3.png') }}" alt=""
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="text-center content-outer">
                                <p>We are dedicated to working collaboratively with our partners, clients, and users
                                    around the globe to achieve our shared vision for a greener future.</p>
                            </div>
                            <div class="value-shape shape-three position-absolute">
                                <img src="{{ asset('frontend/yesworld/images/square.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="value-inner position-relative aos-init" data-aos="fade-right">
                            <div class="flex-wrap value-top d-flex align-items-center">
                                <div class="value-heading">
                                    <h5>Innovation</h5>
                                </div>
                                <div class="img-outer">
                                    <img src="{{ asset('frontend/yesworld/images/value-icon4.png') }}" alt=""
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="text-center content-outer">
                                <p>We are always at the forefront of technological and digital innovation, pushing the
                                    boundaries to create a better tomorrow.</p>
                            </div>
                            <div class="value-shape shape-four position-absolute">
                                <img src="{{ asset('frontend/yesworld/images/hexagon.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="value-inner position-relative aos-init" data-aos="fade-left">
                            <div class="flex-wrap value-top d-flex align-items-center">
                                <div class="value-heading">
                                    <h5>Integrity</h5>
                                </div>
                                <div class="img-outer">
                                    <img src="{{ asset('frontend/yesworld/images/value-icon5.png') }}" alt=""
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="text-center content-outer">
                                <p>We pride ourselves on our commitment to ethical business practices and transparency,
                                    building trust with all those we work with.</p>
                            </div>
                            <div class="value-shape shape-six position-absolute">
                                <img src="{{ asset('frontend/yesworld/images/diamond.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="panel8" class="carbon-credit">
            <div class="container">
                <div class="text-center section-heading">
                <h3 class="text-white title">CLIMATE CHANGE</h3>
                </div>
                <div class="credit-outer">
                <div class="row">
                    <div class="col-md-6 col-12">
                    <div class="credit-inner credit-left position-relative">
                        <div class="credit-one">
                        <div class="count">
                            <span class="number">01</span>
                        </div>
                        <div class="credit-content">
                            <h4>Helping to safeguard our planet and protect the environment for future generations</h4>
                            <p>Addressing climate change is not only an moral imperative, but also a trillion dollar opportunity. The United Nations has allocated hundreds of billions of dollars to climate change mitigation and adaptation, and there are billions more being invested by governments, corporations, and individuals around the world. This is creating a multi-trillion dollar market for green technologies like renewable energy and carbon reduction activities.</p>
                        </div>
                        <div class="credit-img text-end">
                            <img src="images/climate-img1.png" alt="" class="img-fluid"/>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-12">
                    <div class="credit-inner credit-right position-relative">
                        <div class="credit-two">
                        <div class="count">
                            <span class="number">02</span>
                        </div>
                        <div class="credit-content text-end">
                            <h4>Change begins with you</h4>
                            <p>YES WORLD is leading the charge in climate change mitigation and carbon reduction.</p>
                            <p>The world is uniquely positioned to take advantage of the crypto revolution. With YES WORLD technology, we can capture carbon emission data and standardize it. This will allow us to create a datawarehouse of intelligence that can be used to tokenize carbon emission data.</p>
                        </div>
                        <div class="credit-img">
                            <img src="images/climate-img2.png" alt="" class="img-fluid"/>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div> -->
    <div id="panel8" class="connecting-dot connect-two">
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2">
                    <div class="banner-right animated pulse text-end">
                        <img src="{{ asset('frontend/yesworld/images/ttft.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <div class="flex-wrap connect-inner d-flex">
                        <div class="content-outer aos-init w-100" data-aos="fade-up">
                            <h5 class="text-lg text-white">TECHNOLOGY TO FIGHT THE BIGGEST CHALLENGE</h5>
                            <p>As climate change becomes an increasingly urgent issue, there is increased pressure on
                                companies and individuals alike to find ways to mitigate their carbon footprint. One of
                                the most effective strategies for doing so is by purchasing carbon credits through YES
                                WORLD Carbon MarketPlace.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel9" class="connecting-dot connect-one">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-md-5">
                    <div class="vision-left aos-init aos-animate animated " data-aos="fade-down-right">
                        <img src="{{ asset('frontend/yesworld/images/ttft2.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-8 ">
                    <div class="connect-inner ">
                        <div class=" aos-init" data-aos="fade-up">
                            <h5 class="text-white title">At the heart of our platform is a powerful blockchain-based
                                ecosystem.</h5>
                            <p>YES WORLD Marketplace for carbon trading designed to connect global demand and supply
                                with the aim of driving down emissions and helping to combat climate change. We believe
                                that this marketplace has the potential to become the world's first truly sustainable
                                economy, and we are proud to be leading the way in making it a reality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel10" class="paradigm-shift">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-white title">YES WORLD - A paradigm shift</h3>
            </div>
            <div class="paradigm-main position-relative">
                <div class="paradigm-image position-absolute animated pulse">
                    <img src="{{ asset('frontend/yesworld/images/paradigm-bg2.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="paradigm-outer paradigm-left">
                            <div class="paradigm-one paradigm-inner aos-init" data-aos="fade-down-right">
                                <div class="content-outer">
                                    <p>Some people see utility tokens as the future, while others believe that
                                        asset-based tokens are the way to go. YES WORLD Token is trying to bridge the
                                        gap between these two categories.</p>
                                </div>
                            </div>
                            <div class="paradigm-two paradigm-inner aos-init" data-aos="fade-down-right">
                                <div class="content-outer">
                                    <p>The YES Token is unique because it serves as both an asset-based token and a
                                        utility token. This means that it has real-world value due to the assets it
                                        holds, but it can also be used to access a wide range of utility services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="paradigm-outer paradigm-right text-end">
                            <div class="paradigm-three paradigm-inner aos-init" data-aos="fade-up-left">
                                <div class="content-outer">
                                    <p>One of the top travel portals is going to start accepting YES Tokens soon, and
                                        there are also plans to use them for carbon credits from heat barrier
                                        technology.</p>
                                </div>
                            </div>
                            <div class="paradigm-five paradigm-inner aos-init" data-aos="fade-up-left">
                                <div class="content-outer">
                                    <p>As more and more people start using the YES Token, its value will continue to
                                        rise. And with a constant supply and a growing demand.</p>
                                </div>
                            </div>
                            <div class="paradigm-six paradigm-inner aos-init" data-aos="fade-up-left">
                                <div class="content-outer">
                                    <p>YES is gearing up for its biggest airdrop in March 2023. This means that even
                                        more people will have access to this powerful token, and its value is only going
                                        to increase over time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel11" class="earn-main play-earn">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-right">
                <h3 class="text-lg">Play To Earn</h3>
            </div>
            <div class="earn-outer">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12 order-md-2">
                        <div class="earn-right animated animate__shakeX">
                            <img src="{{ asset('frontend/yesworld/images/play-earn.png') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-7 col-12 order-md-1">
                        <div class="earn-left aos-init" data-aos="fade-right">
                            <h5>The world of gaming is about to change forever</h5>
                            <p>YES WORLD’s Play2Earn allows users to play games, earn rewards, buy in-game items and
                                withdraw their earnings in YES WORLD Tokens. These Tokens can then be used to make real
                                life purchases.</p>
                            <!-- <a href="javascript:void(0)" class=""><u>Read More</u></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel12" class="earn-main move-earn">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-left">
                <h3 class="text-lg">Move to Earn</h3>
            </div>
            <div class="earn-outer">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12">
                        <div class="earn-right animated animate__shakeY">
                            <img src="{{ asset('frontend/yesworld/images/move-earn.png') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="earn-left aos" data-aos="fade-left">
                            <h5 class="title">Help the environment and earn rewards in the process</h5>
                            <p class="mb-2">The Move to Earn (M2E) program is one way we hope to encourage people to
                                live healthier lifestyles and get rewarded for it! With M2E, you can level up your
                                fitness by completing physical activity goals and earn YES tokens that can be used
                                toward exclusive merchandise, events, and experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel13" class="earn-main trade-earn">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-right">
                <h3 class="text-lg">Trade to Earn</h3>
            </div>
            <div class="earn-outer">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12 order-md-2">
                        <div class="earn-right animated animate__shakeX">
                            <img src="{{ asset('frontend/yesworld/images/trade-earn.png') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-7 col-12 order-md-1">
                        <div class="earn-left aos-init" data-aos="fade-down-right">
                            <p class="mb-2">With more than 200 tradable instruments available, YES WORLD’s Trade to
                                Earn platform offers the perfect opportunity for investors of all skill levels.</p>
                            <h5 class="title">Learn. Trade. Earn</h5>
                            <p>TRADE TO EARN offers users the opportunity to trade CFDs from their mobile devices and
                                earn a profit on their investments. Fund your account with YES Tokens and start trading
                                in a wide range of world markets, including commodities, currencies, Indices and Stocks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel14" class="earn-main shop-earn">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-left">
                <h3 class="text-lg">Accept to Earn and Shop to Earn</h3>
            </div>
            <div class="earn-outer">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12">
                        <div class="earn-right animated animate__shakeY">
                            <img src="{{ asset('frontend/yesworld/images/shop-earn.png') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="earn-left aos-init" data-aos="fade-up-left">
                            <h5 class="title">A revolutionary new way to shop and earn</h5>
                            <p class="mb-2">The YES WORLD Token is a revolutionary new way to shop and earn rewards.
                                By paying with YES WORLD Token, you can shop anywhere in the world without worrying
                                about conversion fees. And when you shop at encircled merchants, you'll earn rewards
                                that can be used to save money on future purchases.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel15" class="token-main">
        <div class="container">
            <div class="token-outer aos-init" data-aos="flip-up">
                <div class="section-heading">
                    <h3 class="text-lg">REAL TOKEN, REAL UTILITIES</h3>
                    <div class="toke-img-outer only-mobile">
                        <img src="{{ asset('frontend/yesworld/images/token-img1.png') }}" alt=""
                            class="img-fluid" />
                    </div>
                    <h6 class="title">The possibilities of YES WORLD Tokens are endless</h6>
                </div>
                <div class="token-inner">
                    <p>Pay for everyday expenses with ease, no matter where you are in the world.</p>
                    <p>Take advantage of exclusive merchant offers and discounts.</p>
                    <p>Use YES WORLD Tokens in vending machines and other physical locations.</p>
                    <p>Because YES Tokens are accepted at merchant POS terminals worldwide, they are a great way to make
                        your purchases more convenient and hassle-free. Whether you're shopping online or in a physical
                        store, YES WORLD Tokens give you complete freedom and control over your money.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="panel16" class="travel-main position-relative">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="flip-up">
                <h3 class="text-lg text-white">LET'S TRAVEL THE WORLD WITH YES WORLD</h3>
            </div>
            <div class="travel-outer">
                <div class="row">
                    <div class="col-12">
                        <div class="travel-inner aos-init" data-aos="fade-right">
                            <div class="travel-img mobile-only">
                                <img src="{{ asset('frontend/yesworld/images/travel-img1.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="content-outer">
                                <h5>Explore the world in a whole new way with YES WORLD Tokens</h5>
                                <p>The YES WORLD team is committed to breaking the barriers that have prevented crypto
                                    from being widely accepted in the travel industry, and they are doing so by offering
                                    the best offers and rates, along with payment with YES WORLD tokens.</p>
                                <p>Need to Flight or a Hotel or maybe a car? Looking for activities or excursions once
                                    you reach your destination? You can do all this and more using YES WORLD Tokens!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="airplane-outer airplane-one position-absolute animated animate__fadeInBottomRight">
            <img src="{{ asset('frontend/yesworld/images/airplane1.png') }}" alt="" class="img-fluid" />
        </div>
    </div>
    <div id="panel17" class="token-main shopping-main">
        <div class="container">
            <div class="token-outer shopping-outer">
                <div class="text-center section-heading only-mobile">
                    <h3 class="text-lg text-white">YES WORLD SHOPPING</h3>
                </div>
                <div class="token-inner">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-12">
                            <div class="shopping-left aos-init" data-aos="fade-down">
                                <imgshopping-img1.pn src="{{ asset('frontend/yesworld/images/shopping-img1.png') }}"
                                    alt="" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="shopping-right text-end aos-init" data-aos="fade-up">
                                <h3 class="text-lg mobile-none">YES WORLD SHOPPING</h3>
                                <h4>Say YES to more choices, better prices, and amazing deals With YES WORLD</h4>
                                <p>With the power of group buying, YES WORLD offers great discounts and deals on your
                                    favorite brands. You can shop online or offline with ease, knowing that you're
                                    getting the best possible prices. Start shopping today to unlock great deals and
                                    ease of payment with YES WORLD Token!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel18" class="crypto-loan">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="flip-down">
                <h3 class="text-lg text-white">LOAN AGAINST CRYPTO</h3>
            </div>
            <div class="loan-main">
                <div class="row align-items-center">
                    <div class="col-md-4 col-12 order-md-2">
                        <div class="loan-right aos-init" data-aos="fade-down-left">
                            <imgloan-img1.png" a src="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-8 col-12 order-md-1">
                        <div class="loan-left aos-init" data-aos="fade-down-right">
                            <h3 class="text-white title">Leveraging your investment</h3>
                            <p>At YES WORLD, we understand that sometimes you need extra cash to cover expenses or make
                                a big purchase. With low interest rates and flexible repayment terms, there's no better
                                way to get the money you need. Enjoy the price appreciation of YES WORLD Token, even
                                when you have collateralized it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel19" class="crypto-loan">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="flip-down">
                <h3 class="text-lg text-white">YES NFT Marketplace</h3>
            </div>
            <div class="loan-main">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12">
                        <div class="loan-right aos-init" data-aos="fade-down-left">
                            <imgyes-nft.png" alt src="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="loan-left aos-init" data-aos="fade-down-right">
                            <h3 class="text-white title">Discover digital art and collect NFTs</h3>
                            <p>YES NFT is a shared liquidity NFT marketplace for exciting NFTs that allows consumers to
                                trade their items freely, creators to launch new digital works, and developers to build
                                rich, integrated marketplaces for their digital items.</p>
                            <p>YES WORLD is proud to be the leading multi-chain marketplace that aggregates every NFT
                                into a single platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel20" class="earn-main yes-machine position-relative">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-right">
                <h3 class="text-lg">YES WORLD POS and Vending Machines</h3>
            </div>
            <div class="earn-mobile">
                <imgyes-machine.png" src="" alt="" class="img-fluid" />
            </div>
            <div class="earn-left aos-init" data-aos="fade-right">
                <h5 class="title">Use crypto in real life</h5>
                <p class="mb-2">YES WORLD is a preferred crypto payment method and supported POS Terminals and
                    Vending Machines are installed at numerous merchant locations worldwide.</p>
                <p>The Merchants Getting Ready for Crypto acceptance, millions of people worldwide want to pay in crypto
                    YES WORLD Merchant solutions provides the missing technology and a unified solution for crypto
                    acceptance.</p>
            </div>
        </div>
        <div class="earn-right position-absolute mobile-none">
            <imgyes-machine.png" src="" alt="" class="img-fluid" />
        </div>
    </div>
    <div id="panel21" class="crypto-card">
        <div class="row m-0 h-100">
            <div class="col-md-6 col-12 p-0">
                <div class="card-img-inner">
                    <img src="{{ asset('frontend/yesworld/images/card-img1.jpg') }}" alt="" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6 col-12 p-0">
                <div class="card-content-inner content-right">
                    <h3 class="aos-init title" data-aos="fade-left">YES Crypto Card - Once only dreamed of... now a
                        reality!</h3>
                    <p class="aos-init" data-aos="fade-left">YES WORLD is proud to offer our innovative crypto card
                        service, which allows you to use your cryptocurrencies in everyday life. With this awesome digital
                        card, you can make purchases at any retail location or restaurant just like you would with regular
                        credit or debit cards.</p>
                </div>
            </div>
            <div class="col-md-6 col-12 p-0 order-md-4">
                <div class="card-img-inner">
                    <img src="{{ asset('frontend/yesworld/images/card-img2.jpg') }}" alt="" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6 col-12 p-0 order-md-3">
                <div class="card-content-inner content-left">
                    <h3 class="aos-init title" data-aos="fade-right">With the YES CRYPTO CARD, there are no limits</h3>
                </div>
            </div>
        </div>
    </div>

    <div id="panel22" class="crypto-loan yes-token">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="flip-down">
                <h3 class="text-lg text-white">YES WORLD Token - The World Record Holder</h3>
            </div>
            <div class="loan-main">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12">
                        <div class="loan-right aos-init" data-aos="fade-down-left">
                            <img src="{{ asset('frontend/yesworld/images/yes-token.png') }}" alt=""
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="loan-left aos-init" data-aos="fade-down-right">
                            <p>YES NFT is a shared liquidity NFT marketplace for exciting NFTs that allows consumers to
                                trade their items freely, creators to launch new digital works, and developers to build
                                rich, integrated marketplaces for their digital items.</p>
                            <p>YES WORLD is proud to be the leading multi-chain marketplace that aggregates every NFT into a
                                single platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel23" class="venture-fund">
        <div class="container">
            <div class="text-center section-heading aos-init" data-aos="fade-up">
                <h3 class="text-lg text-white">YES WORLD VENTURE FUND</h3>
            </div>
            <div class="venture-outer">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="text-center venture-inner aos-init" data-aos="fade-right">
                            <div class="img-outer animated animate__shakeX">
                                <img src="{{ asset('frontend/yesworld/images/connect-icon1.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="content-outer">
                                <h6>Fueling innovation with cryptocurrency</h6>
                                <p>At YES WORLD, we're committed to helping individuals and businesses succeed by providing
                                    access to the latest innovations in cryptocurrency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="text-center venture-inner aos-init" data-aos="fade-up">
                            <div class="img-outer animated animate__shakeY">
                                <img src="{{ asset('frontend/yesworld/images/value-icon4.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="content-outer">
                                <h6>We're on the lookout for the next world-changing idea</h6>
                                <p>At YES WORLD, we are always looking for innovative ideas that can help make our planet a
                                    better place to live.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="text-center venture-inner aos-init" data-aos="fade-left">
                            <div class="img-outer animated animate__shakeX">
                                <img src="{{ asset('frontend/yesworld/images/venture-icon3.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="content-outer">
                                <h6>Join us at YES WORLD and help make a difference!</h6>
                                <p>YES WORLD Venture Fund is the premier platform for funding cutting-edge projects that are
                                    working to improve our planet and build a better future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel24" class="presence-main position-relative">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white title">YES WORLD PRESENCE</h3>
            </div>
            <div class="presence-outer presence-outer-one">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coinmarketcap.com/currencies/yes-world-token/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img4.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coingecko.com/en/coins/yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img5.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.forbes.com/digital-assets/assets/yes-world-yes6/?sh=7da1942f197c"
                                target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/forbes.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="presence-inner no-bg text-start animated animate__shakeX">
                            <a href="https://www.binance.com/en-IN/price/yes-world-token" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img2.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coinbase.com/price/yes-world-token" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img3.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="presence-inner no-bg text-end animated animate__shakeX">
                            <a href="https://nomics.com/assets/yes6-yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/') }}images/presence-img6.png" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.marketbeat.com/cryptocurrencies/yes-world/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/marketbeat.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://crypto.com/price/yes-world-token" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img1.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coincarp.com/currencies/yes-world-token/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img11.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.livecoinwatch.com/price/YesWorld-_YES" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img12.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coindataflow.com/en/prediction/yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img13.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coinlore.com/coin/yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img14.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coinstats.app/coins/yes-world/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img15.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.bitdegree.org/cryptocurrency-prices/yes-world-token-yes-price/price-history"
                                target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img16.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://cryptorank.io/price/yesworld" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img17.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coincost.net/en/currency/yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img18.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://cryptopredictions.com/yes-world/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img19.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://finbold.com/cryptocurrency/yes-world/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img20.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coincodex.com/convert/yes-world-token/usd/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img21.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel25" class="presence-main position-relative presence-main22">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white title">YES WORLD EXCHANGES</h3>
            </div>
            <div class="presence-outer presence-outer-one">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.xt.com/trade/yes_usdt" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img7.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coinsbit.io/trade_classic/YES_USDT" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img8.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://pancakeswap.finance/swap?inputCurrency=0x55d398326f99059fF775485246999027B3197955&outputCurrency=0xB9d35811424600fa9E8cD62A0471fBd025131cb8"
                                target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/presence-img9.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel26" class="presence-main presence-main-two">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white title">YES WORLD in Media</h3>
            </div>
            <div class="news-outer">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="text-center news-inner">
                            <div class="img-outer">
                                <img src="{{ asset('frontend/yesworld/images/news-img0.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="text-center news-inner">
                            <div class="img-outer">
                                <img src="{{ asset('frontend/yesworld/images/news-img1.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="text-center news-inner">
                            <div class="img-outer">
                                <img src="{{ asset('frontend/yesworld/images/news-img2.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="text-center news-inner">
                            <div class="img-outer">
                                <img src="{{ asset('frontend/yesworld/images/news-img3.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="text-center news-inner">
                            <div class="img-outer">
                                <img src="{{ asset('frontend/yesworld/images/news-img18.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 more-space">
                        <div class="text-center news-inner">
                            <div class="img-outer">
                                <img src="{{ asset('frontend/yesworld/images/news-img19.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="more-news text-end">
                            <a href="news.html" class="text-white">More News</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="presence-outer">
            <div class="mb-0 presence-slider slick-carousel">
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img4.png') }}" alt="" class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img5.png') }}" alt="" class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img6.png') }}" alt="" class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img7.png') }}" alt="" class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img8.png') }}" alt="" class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img9.png') }}" alt="" class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img10.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img11.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img12.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img13.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img14.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img15.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img16.png') }}" alt=""
                        class="img-fluid" />
                </div>
                <div class="presence-inner">
                    <img src="{{ asset('frontend/yesworld/images/news-img17.png') }}" alt=""
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <div id="panel27" class="presence-main featured-main position-relative">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white title">Featured in Crypto Media</h3>
            </div>
            <div class="presence-outer presence-outer-one">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coinmarketcap.com/currencies/yes-world-token/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img1.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coingecko.com/en/coins/yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img2.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.forbes.com/digital-assets/assets/yes-world-yes6/?sh=7da1942f197c"
                                target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img3.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="presence-inner no-bg text-start animated animate__shakeX">
                            <a href="https://www.binance.com/en-IN/price/yes-world-token" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img4.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coinbase.com/price/yes-world-token" target="_blank">
                                <img src="{{ asset('frontend/yesworld/}images/featured-img5.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="presence-inner no-bg text-end animated animate__shakeX">
                            <a href="https://nomics.com/assets/yes6-yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img6.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.marketbeat.com/cryptocurrencies/yes-world/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img7.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://crypto.com/price/yes-world-token" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img8.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coincarp.com/currencies/yes-world-token/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img9.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.livecoinwatch.com/price/YesWorld-_YES" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img10.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coindataflow.com/en/prediction/yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img11.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://www.coinlore.com/coin/yes-world" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img12.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="text-center presence-inner no-bg animated animate__shakeX">
                            <a href="https://coinstats.app/coins/yes-world/" target="_blank">
                                <img src="{{ asset('frontend/yesworld/images/featured-img13.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center more-news">
                            <a href="javascript:void(0)" class="btn btn-primary">VIEW ALL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="panel28" class="presence-main presence-main-three position-relative">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white title">YES WORLD TV News Coverage</h3>
            </div>
            <div class="presence-outer">
                <div class="mb-0 video-sliders">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-12">
                                <div class="flex-wrap video-inner news-box position-relative d-flex">
                                    <div class="news-logo-outer">
                                        <img src="{{ $blog->logo }}" alt="" class="img-fluid" />
                                    </div>
                                    <div class="content-outer">
                                        <h4 class="text-white">{{ $blog->title }}</h4>
                                        <p class="date">&#128197;
                                            {{ Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</p>
                                        <p>{!! $blog->short_des !!}</p>
                                    </div>
                                    <div class="img-outer">
                                        <img src="{{ $blog->image }}" alt="" class="img-fluid" />
                                    </div>
                                    <a href="{{ url('newsCoverage/detail', $blog->id) }}"
                                        class="full-link position-absolute"></a>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-12">
                            <div class="more-news text-end">
                                <a href="{{ url('newsCoverage/detail') }}" class="text-white">More News</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="panel29" class="presence-main yes-video position-relative">
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="title text-white text-lg">YES WORLD BRANDING</h3>
            </div>
            <div class="presence-outer">
                <div class="video-sliders youtube-news mb-0">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <iframe src="https://www.youtube.com/embed/8CDRp9dLAj8" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <iframe src="https://www.youtube.com/embed/YzAngCNOfbg?start=6"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <iframe src="https://www.youtube.com/embed/8CDRp9dLAj8" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <iframe src="https://www.youtube.com/embed/YzAngCNOfbg?start=6"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <img src="{{ asset('frontend/yesworld/images/card-img1.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <img src="{{ asset('frontend/yesworld/images/card-img2.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <img src="{{ asset('frontend/yesworld/images/card-img1.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="video-inner position-relative">
                                <img src="{{ asset('frontend/yesworld/images/card-img2.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="more-news text-end">
                                <a href="javascript:void(0)" class="btn btn-primary">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="panel30" class="presence-main yes-video yes-music-main position-relative">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white title">YES WORLD MUSIC</h3>
            </div>
            <div class="presence-outer">
                <div class="mb-0 video-sliders youtube-news">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="video-inner yes-music position-relative">
                                <iframe src="https://www.youtube.com/embed/1Em7C_khN_Q?start=29"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="video-inner yes-music position-relative">
                                <iframe src="https://www.youtube.com/embed/JdtH2DhFmlg?start=24"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="video-inner yes-music position-relative">
                                <iframe src="https://www.youtube.com/embed/JECARPIoNFA?start=26"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listen-main">
                <div class="listen-heading text-center">
                    <h3 class="text-white">Listen On</h3>
                </div>
                <div class="listen-outer">
                    <ul class="nav align-items-center justify-content-center">
                        <li>
                            <a target="_blank"
                                href="https://music.apple.com/in/album/yes-world-hindi-single/1650240595">
                                <img src="{{ asset('frontend/yesworld/images/apple-music.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a target="_blank"
                                href="https://www.jiosaavn.com/album/yes-world-instrumental/,J-jRBOgc6s_">
                                <img src="{{ asset('frontend/yesworld/images/jio-saavn.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://wynk.in/music/song/yes-world-instrumental/pc_INH512008440">
                                <img src="{{ asset('frontend/yesworld/images/wynk-music.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="panel31" class="presence-main yes-video yes-video-youtube position-relative">
        <div class="container">
            <div class="text-center section-heading">
                <h3 class="text-lg text-white title">YES WORLD Video Coverage</h3>
            </div>
            <div class="presence-outer">
                <div class="mb-0 video-sliders youtube-news">
                    <div class="row">
                        @foreach ($videos as $video)
                            <div class="col-sm-6 col-12">
                                <div class="video-inner position-relative">
                                    <iframe src="{{ $video->link }}" title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-12">
                            <div class="more-video text-end">
                                <a href="{{ route('videoCoverage') }}" class="text-white">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="panel32" class="faq-main">
        <div class="container">
            <div class="faq-inner">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="accordion aos-init" data-aos="fade-down" id="accordionExample">
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Q: What is the goal of YES WORLD?
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A: The goal of YES WORLD is to create a marketplace for carbon credits that
                                            connects global demand and supply, driving down emissions and helping to
                                            combat climate change. We believe that this platform has the potential to
                                            become the world's first truly sustainable economy, and we are committed to
                                            leading the way in making it a reality.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: How does YES WORLD work?
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A: At the heart of our platform is a blockchain-based ecosystem that allows
                                            users to create, buy, and sell carbon credits. Users can purchase credits
                                            through our tokenized system, which enables them to offset their emissions
                                            and drive down their carbon footprint. In addition, a portion of the revenue
                                            generated from these transactions is used to buy back YES tokens, providing
                                            value for token holders.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Q: Who can use YES WORLD?
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A: YES WORLD is open to anyone who is interested in driving down their carbon
                                            footprint and helping to combat climate change. Whether you are an
                                            individual or a company, we have tools and resources that can help you take
                                            meaningful action on this critical issue. So sign up today and start making
                                            a difference!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: What makes YES WORLD different than other cryptocurrencies?
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A: Unlike other digital currencies, YES WORLD is backed by real assets that
                                            increase in value over time. It also offers a variety of innovative services
                                            and features that make it easy to use and store your money securely. With
                                            its fast, convenient, and secure platform, YES WORLD is quickly becoming the
                                            leading choice for those looking for an alternative to traditional banking.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: What is TRADE TO EARN?
                                </h6>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A: TRADE TO EARN is a platform that allows users to trade CFD assets and earn
                                            a profit on their investments. Whether you're an experienced trader or just
                                            starting out, our intuitive platform makes it easy to get started with this
                                            popular investing method.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Q: How does MOVE TO EARN work?
                                </h6>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A: Move to Earn is a new platform from YES WORLD that allows users to earn
                                            rewards by moving around in their everyday lives. Move to Earn is designed
                                            for anyone who wants to earn rewards while helping the environment.</p>
                                        <p>Whether you're a casual walker, a daily bike commuter, or someone who takes
                                            public transportation every day, you can earn rewards on Move to Earn just
                                            by doing what you already do.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="accordion aos-init" data-aos="fade-up" id="accordionExampleTwo">
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    Q: How do I get started with MOVE TO EARN?
                                </h6>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        <p>A: To start earning rewards on Move to Earn, simply download the app and
                                            connect it to your GPS. From there, you can start logging your movements and
                                            earning tokens. With easy tracking and flexible movement goals, you can
                                            quickly get started on your path to financial success.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    Q: What is the YES CRYPTO CARD?
                                </h6>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        <p>A: The YES CRYPTO CARD is a digital payment card that allows you to make
                                            purchases using your cryptocurrency holdings, anywhere in the world where
                                            VISA is accepted. Whether you're buying groceries at the store or paying
                                            your rent online, the YES CRYPTO CARD makes it easy to use your crypto
                                            assets for everyday transactions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Q: How secure is the YES CRYPTO CARD?
                                </h6>
                                <div id="collapseNine" class="accordion-collapse collapse"
                                    aria-labelledby="headingNine" data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        <p>A: The YES CRYPTO CARD features advanced security features and protocols to
                                            keep your money and information safe at all times. Whether you're shopping
                                            in-store or online, you can rest assured that your transactions will be
                                            secure and protected. So if security is a concern for you, the YES CRYPTO
                                            CARD is the perfect payment method for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Q: How does the YES WORLD Venture Fund work?
                                </h6>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        <p>A: The YES WORLD Venture Fund is designed to support projects and businesses
                                            related to cryptocurrency, blockchain technology, sustainability, and
                                            environmental conservation. This could include things like research,
                                            development, marketing, and more.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEleven" aria-expanded="false"
                                    aria-controls="collapseEleven">
                                    Q: Who can participate in the YES WORLD Venture Fund?
                                </h6>
                                <div id="collapseEleven" class="accordion-collapse collapse"
                                    aria-labelledby="headingEleven" data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        <p>A: Anyone can participate in the YES WORLD Venture Fund as long as they are
                                            working on an innovative project related to our mission of saving the
                                            planet. We encourage applications from businesses, researchers,
                                            entrepreneurs, and anyone else with a good idea that can help make a
                                            positive impact.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwelve" aria-expanded="false"
                                    aria-controls="collapseTwelve">
                                    Q: How do I apply for funding from the YES WORLD Venture Fund?
                                </h6>
                                <div id="collapseTwelve" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwelve" data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        <p>A: To apply for funding, simply visit our website and fill out the online
                                            application form. Our team will review your submission and get back to you
                                            with more information about next steps.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
