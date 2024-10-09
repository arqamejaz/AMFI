<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>AMFI - Automated Meta Finance</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ url('frontend/img/core-img/favicon.ico') }}">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    @viteReactRefresh
    @vite(['resources/js/app.jsx'])
</head>

<body class="darker-blue">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <img src="frontend/img/core-img/loader.gif" style="transform: scale(2);" alt="Loading..." id="dream-load" /></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="0.2s">
        <div id="top-banner" class="top-banner">
            <p style="text-align: center; font-size: 18px;"><strong>Join AMFI Token Seed Round! LIMITED SEEDS</strong></p>
            <span id="close-banner" class="close-button">&times;</span>
        </div>
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index-2.html"><img draggable="false"
                            src="{{ url('frontend/img/core-img/logo.png') }}" alt="logo"> AMFI</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#roadmap">Roadmap</a></li>
                                <li><a href="{{ url('frontend/img/pitchdeck.pdf') }}" target="_blank">Pitch Deck</a></li>
                                <li><a href="https://automated-meta-finance.gitbook.io/amfi-whitepaper" target="_blank">White Paper</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>

                            <!-- Button -->
                            <a href="#" class="btn login-btn ml-50">
                                Launch App
                                <span class="hover-text">Coming Soon!</span>
                            </a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area clearfix dzsparallaxer auto-init fullwidth" data-options='{direction: "normal"}'
        id="home">
        {{-- <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url(frontend/img/bg-img/bg-2.jpg)"></div> --}}
        <div class="divimage dzsparallaxer--target">
            <video autoplay muted loop
                style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                <source src="{{ url('frontend/img/bg-img/bg-1.mp4') }}" type="video/mp4">
            </video>
            <!-- Any additional content can be placed here -->
        </div>
        <!-- Hero Content -->
        <div class="hero-content dark-blue">
            <!-- blip -->
            <div class="dream-blip blip1"></div>
            <div class="dream-blip blip2"></div>
            <div class="dream-blip blip3"></div>
            <div class="dream-blip blip4"></div>

            <div class="container">
                <div class="row align-items-center mt-50">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content">
                            {{-- <div class="promo-section">
                                <div class="integration-link">
                                    <span class="integration-icon">
                                        <img draggable="false" src="{{ url('frontend/img/svg/img-dollar.svg') }}" width="24" height="24" alt="">
                                    </span>
                                    <span class="integration-text">Discover a new ways to enjoy your World!</span>
                                </div>
                            </div> --}}
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s">The World's 1st Automated Meta Finance (AMFI)
                                Platform</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Transforming the way you interact with digital
                                finance. Experience the power of AI, Metaverse and decentralized finance all in one
                                platform.</p>
                            <div class="dream-btn-group wow fadeInUp mb-30" data-wow-delay="0.4s">
                                <a href="https://automated-meta-finance.gitbook.io/amfi-whitepaper " class="btn dream-btn mr-3">White Paper</a>
                                <a href="{{ url('frontend/img/pitchdeck.pdf') }}" class="btn dream-btn" target="_blank">Pitch Deck</a>
                            </div>
                        </div>
                    </div>
                    <!-- Welcome Video Area -->
                    <div class="col-12 col-lg-6 col-md-12 mt-50">
                        {{-- <div class="main-ilustration main-ilustration-4 wow fadeInUp" data-wow-delay="0.5s"> --}}
                        <div class="ico-counter mb-30" id="wallet-connect">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->
    <div class="clearfix"></div>

    <div class="slider-container">
        <div class="slider">
        <h5 class="mt-40" style="color: white">AMFI Partners</h5>
          <img src="{{ url('frontend/img/slider/Thirdweb.png') }}" alt="Image 1">
          <img src="{{ url('frontend/img/slider/MetaMask.png') }}" alt="Image 2">
          <img src="{{ url('frontend/img/slider/Trustwallet.png') }}" alt="Image 3">
        </div>
      </div>
    <!-- ##### About AMFI Token start -->
    <section class="about-us-area section-padding-0-100 clearfix mt-100 full-bg-img" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6" style="padding-top: 50px;">
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s pt-5">
                        <img draggable="false" src="{{ url('frontend/img/amfi-tracker/bg-logo-circle.webp') }}"
                            class="" alt="">
                        <!-- client meta -->
                        {{-- <div class="growing-company text-center mt-30 wow fadeInUp" data-wow-delay="0.8s">
                            <p>* Already growing up <span class="counter">5236</span> company</p>
                        </div> --}}
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">

                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">About AMFI Token</h4>
                        <p class="wow fadeInUp text-justify" data-wow-delay="0.4s">Automated Meta Finance (AMFI) is pioneering a new era in digital finance by seamlessly blending the power of automation, artificial intelligence, and the immersive world of the metaverse. As the world's first platform to integrate these cutting-edge technologies, AMFI offers users an unparalleled experience in managing, interacting and growing their digital assets.
                            Our ecosystem is designed to be more than just a financial tool—it's a gateway to a future where AI-driven services, decentralized finance, and virtual reality converge to create limitless possibilities. Whether you're looking to automate your investments with AI bots, explore new opportunities in the metaverse, or unlock the potential of decentralized finance, AMFI is your ultimate destination.
                            </p>
                        {{-- <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molestiae facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tempora odit laborum iure inventore possimus laboriosam qui nam. Fugit!</p> --}}

                        {{-- <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="#">Read More</a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About AMFI Token end -->

    <!-- ##### Amfi Ecosystem Area Start ##### -->
    <section class="our_services_area section-padding-100-70 clearfix full-bg-img" id="services">
        <div class="container">

            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">AMFI Ecosystem</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">AMFI platform offers a diverse range of services
                    categorized into Automated, Meta, and Financial services.</p>
            </div>


            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4" id="item-heading-1">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.2s"
                        data-group="group1">
                        <h3>Automated</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-heading-2">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.2s"
                        data-group="group2">

                        <h3>Meta</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-heading-3">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.2s"
                        data-group="group3">
                        <h3>Finance</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-1">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.2s"
                        data-group="group1">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/aibot.gif') }}"
                                alt="">
                        </div>
                        <h6>AI Bots</h6>
                        <p>Advanced AI-driven bots designed to automate trading, market analysis, and financial
                            management.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-2">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow wow fadeInUp" data-wow-delay="0.3s"
                        data-group="group2">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/social.gif') }}"
                                alt="">
                        </div>
                        <h6>Web3 Social Media</h6>
                        <p>A decentralized social media platform where users can create, share, and monetize content
                            within AMFI ecosystem.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-3">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.4s"
                        data-group="group3">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/amfiwallet.gif') }}"
                                alt="">
                        </div>
                        <h6>AMFI Wallet</h6>
                        <p>A secure, multi-asset wallet supports various Cryptocurrencies & integrates seamlessly with
                            DeFi protocols.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.5s"
                        data-group="group1">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/aibot.gif') }}"
                                alt="">
                        </div>
                        <h6>Arbitrage Bots</h6>
                        <p>Bots that automatically identify and execute profitable arbitrage opportunities across
                            different markets.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-5">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.6s"
                        data-group="group2">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/arvr.gif') }}"
                                alt="">
                        </div>
                        <h6>AR/VR Services</h6>
                        <p>Immersive augmented & virtual reality experiences that offer new ways to interact with
                            digital assets & metaverse.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-6">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s"
                        data-group="group3">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/staking.gif') }}"
                                alt="">
                        </div>
                        <h6>AMFI Staking</h6>
                        <p>A platform where users can stake their AMFI tokens to earn rewards and participate in
                            governance.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-7">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s"
                        data-group="group1">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/aigames.gif') }}"
                                alt="">
                        </div>
                        <h6>AI Games</h6>
                        <p>AI-powered games that provide engaging, rewarding experiences while contributing to the AMFI
                            ecosystem</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-8">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s"
                        data-group="group2">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/ecomerce.gif') }}"
                                alt="">
                        </div>
                        <h6>Meta Commerce</h6>
                        <p>A virtual marketplace where users can buy, sell, and trade digital goods and services using
                            AMFI tokens.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-9">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s"
                        data-group="group3">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/dex.gif') }}" alt="">
                        </div>
                        <h6>AMFI DEX</h6>
                        <p>A decentralized exchange that allows users to trade tokens within the AMFI ecosystem without
                            intermediaries.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-10">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s"
                        data-group="group1">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/aiscanner.gif') }}"
                                alt="">
                        </div>
                        <h6>AI Scanner</h6>
                        <p>Tools that use AI to analyze market trends, detect security threats, and provide actionable
                            insights.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-11">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s"
                        data-group="group2">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/entertainment.png') }}"
                                alt="">
                        </div>
                        <h6>Meta Entertainment</h6>
                        <p>Entertainment services that leverage the metaverse to provide unique, interactive
                            experiences.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4" id="item-12">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s"
                        data-group="group3">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="{{ url('frontend/img/ecosystem/card.gif') }}"
                                alt="">
                        </div>
                        <h6>AMFI Cards</h6>
                        <p>Crypto debit cards that enable users to spend their AMFI tokens in the real world, with
                            cashback and rewards programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### AMFI Ecosystem Area End ##### -->

    <!-- ##### token-distribution Area start ##### -->
    <section class="token-distribution full-bg-img">
        <div class="container">

            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">AMFI Tokenomics</h2>
                {{-- <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> --}}
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="text-center mb-30">Allocation</h2>
                <div class="info-wrapper-img">
                    <img draggable="false" src="{{ url('frontend/img/core-img/allocation.webp') }}"
                        class="center-block" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-50">
                <div class="token-info-wapper"></div>
                <h2 class="text-center mb-30">More Token Info</h2>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon">
                        </div>
                        <div class="token-descr"><strong class="extra-space">Token Name: Automated Meta
                                Finance</strong></div>
                    </div>
                </div>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon">
                        </div>
                        <div class="token-descr"><strong class="extra-space">Token Symbol:</strong>AMFI</div>
                    </div>
                </div>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon">
                        </div>
                        <div class="token-descr"><strong class="extra-space">Network Chain:</strong>ETH (ERC-20)</div>
                    </div>
                </div>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon">
                        </div>
                        <div class="token-descr"><strong class="extra-space">Total Supply:</strong>777,000,000
                        </div>
                    </div>
                </div>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon">
                        </div>
                        <div class="token-descr"><strong class="extra-space">Pre-sale Initial Price:</strong>$0.03
                        </div>
                    </div>
                </div>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon">
                        </div>
                        <div class="token-descr"><strong class="extra-space">AMFI Listing Price:</strong>$0.06</div>
                    </div>
                </div>

            </div>

            <div class="styled-table-container ml-1 pt-5">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" data-bs-toggle="tab"
                            href="#token-allocation">Token Allocation</a>
                    </li>
                    <li class="nav-item" id="roadmap">
                        <a class="nav-link" data-bs-toggle="tab" href="#road-map">Roadmap</a>
                    </li>
                </ul>

                <div class="tab-content mt-3" >
                    <div class="tab-pane fade show active" id="token-allocation">
                        <div class="styled-table">
                            <h2 class="text-center mb-30">Allocation & Vesting</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Token Allocation</th>
                                        <th>%</th>
                                        <th>Amount</th>
                                        <th>TGE</th>
                                        <th>Cliff</th>
                                        <th>Vesting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- 11 rows of content -->
                                    <tr>
                                        <td>Seed Round</td>
                                        <td>3%</td>
                                        <td>23310000</td>
                                        <td>100%</td>
                                        <td>1 month</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Presale</td>
                                        <td>30%</td>
                                        <td>233100000</td>
                                        <td>100%</td>
                                        <td>3 months</td>
                                        <td>Linearly over 9 months</td>
                                    </tr>
                                    <tr>
                                        <td>Liquidity</td>
                                        <td>20%</td>
                                        <td>155400000</td>
                                        <td>100%</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td>10%</td>
                                        <td>77700000</td>
                                        <td>0%</td>
                                        <td>3 months</td>
                                        <td>Linearly over 12 months</td>
                                    </tr>
                                    <tr>
                                        <td>Advisor Share</td>
                                        <td>5%</td>
                                        <td>38850000</td>
                                        <td>0%</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Company</td>
                                        <td>12%</td>
                                        <td>93240000</td>
                                        <td>0%</td>
                                        <td>6 months</td>
                                        <td>Linearly over 9 months</td>
                                    </tr>
                                    <tr>
                                        <td>Foundation</td>
                                        <td>3%</td>
                                        <td>23310000</td>
                                        <td>0%</td>
                                        <td>6 months</td>
                                        <td>Linearly over 12 months</td>
                                    </tr>
                                    <tr>
                                        <td>Staking</td>
                                        <td>12%</td>
                                        <td>93240000</td>
                                        <td>0%</td>
                                        <td>3 months</td>
                                        <td>Linearly over 12 months</td>
                                    </tr>
                                    <tr>
                                        <td>Airdrop</td>
                                        <td>5%</td>
                                        <td>38850000</td>
                                        <td>0%</td>
                                        <td>3 months</td>
                                        <td>Linearly over 9 months</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <th>100%</th>
                                        <th>777,000,000</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <!-- Repeat similar rows for a total of 11 rows -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="road-map">
                        <h2 class="text-center mb-30">Road Map</h2>
                        <div class="timeline-new">
                            <div class="container-new left-new">
                                <div class="content-new fadeInUp-new">
                                    <h6 class="card-title">Q-1 (Oct-Dec 2024): Foundation & Initial Development</h6>
                                    <ul class="fa-ul">
                                        <li>• Website Launch</li>
                                        <li>• Whitepaper & Tokenomics </li>
                                        <li>• Whitlisting for Seed Round </li>
                                        <li>• Smart Contract Development</li>
                                        <li>• Seed Round Launch</li>
                                        <li>• Pre-Sale Launch (Round-1 &2)</li>
                                        <li>• Launch of Staking & Yield Farming</li>
                                        <li>• Marketing Campaign</li>
                                        <li>• Initial Development & Community Building</li>
                                        <li>• Smart Contract Audit</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="container-new right-new">
                                <div class="content-new fadeInUp-new">
                                    <h6 class="card-title">Q-2 (Dec 2024-Feb 2025): Alpha Testing & Presale
                                        Progress</h6>
                                    <ul class="fa-ul">
                                        <li>• Web App Development</li>
                                        <li>• UI/UX Design</li>
                                        <li>• Alpha Version Release</li>
                                        <li>• Bug Fixing & Feature Enhancements</li>
                                        <li>• Marketing Push & Ecosystem Growth</li>
                                        <li>• Pre-Sale (Round 3 & 4)</li>
                                        <li>• Launch of Staking & Yield Farming</li>
                                        <li>• Publish News Articles</li>
                                        <li>• Launch Community Incentive Programs</li>
                                        <li>• Influencers Partnerships</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="container-new left-new">
                                <div class="content-new fadeInUp-new">
                                    <h6 class="card-title">Q-3 (Mar-May 2025): Alpha Testing & Presale Progress
                                    </h6>
                                    <ul class="fa-ul">
                                        <li>• Platform Optimization</li>
                                        <li>• AI Features Integration</li>
                                        <li>• Expand AMFI Tracker Features</li>
                                        <li>• Beta Version Release</li>
                                        <li>• Presale (Final Round 5)</li>
                                        <li>• Listing on CMC/Coin Gecko</li>
                                        <li>• Public Launch of AMFI Tracker</li>
                                        <li>• Media Promotion</li>
                                        <li>• Expand Ecosystem Services</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="container-new right-new">
                                <div class="content-new fadeInUp-new">
                                    <h6 class="card-title">Q-4 (Jun-Aug 2025): Continued Growth & Development</h6>
                                    <ul class="fa-ul">
                                        <li>• Rollout of Meta Services</li>
                                        <li>• Aggressive Marketing Campaign</li>
                                        <li>• Expansion of Financial Services</li>
                                        <li>• AMFI Wallet (Testnet)</li>
                                        <li>• Release AMFI Wallet (Alpha Version)</li>
                                        <li>• Strategic Partnerships</li>
                                        <li>• Optimize Platform Performance</li>
                                        <li>• Token Generation Event (TGE)</li>
                                        <li>• Listing on CEX/DEX</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="container-new left-new">
                                <div class="content-new fadeInUp-new">
                                    <h6 class="card-title">Development Phases</h6>
                                    <ul class="fa-ul">
                                        <li><strong>• Phase 1<br> Core Infrastructure:</strong> Launch of AMFI
                                            token, wallet, and basic staking platform.</li>
                                        <li><strong>• Phase 2<br> AI Services:</strong> Deployment of AI Bots,
                                            Arbitrage Bots, AI Games, and AI Scanner.</li>
                                        <li><strong>• Phase 3<br> Meta Services:</strong> Integration of Web3 Social
                                            Meta, AR/VR services, Meta Commerce, and Meta Entertainment.</li>
                                        <li><strong>• Phase 4<br> Financial Services:</strong> Launch of AMFI DEX,
                                            AMFI Staking, and AMFI Cards.</li>
                                        <li><strong>• Phase 5<br> Expansion and Scaling:</strong> Cross-chain
                                            interoperability, global partnerships, and community-driven innovations.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </section>
    <!-- ##### token-distribution Area End ##### -->

    <!-- ##### Our presale roadmap Area start ##### -->
    <section class="roadmap section-padding-100 full-bg-img">

        <div class="container-fluid">
            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Presale</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Join the AMFI presale journey.</p>
            </div>
            <div class="row">
                <div class="section_5-content mt-2">
                    <div class="section_5-slider-trumb"></div>
                    <div id="section_5-slider-circle">
                        <div style="left:15%" class="data_cir cir_0" data-date="Stage 1">
                            <div class="data_cir-content">
                                <ul>
                                    <li><span>
                                            <h5>Price: $0.03</h5>
                                        </span></li>
                                    <li><span>
                                            Allocation: 38,850,000 AMFI
                                        </span></li>
                                    <li><span>Target: $1,165,500</span></li>
                                </ul>
                            </div>
                        </div>
                        <div style="left:30%" class="data_cir cir_1" data-date="Stage 2">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info">
                                        <ul>
                                            <li><span>
                                                    <h5>Price: $0.035 </h5>
                                                </span></li>
                                            <li><span>
                                                    Allocation: 38,850,000 AMFI
                                                </span></li>
                                            <li><span>Target: $1,359,750</span></li>
                                        </ul>
                                    </span><span class="roadmap_img"><img draggable="false"
                                            src="{{ url('frontend/img/roadmap-icons/2.svg') }}"
                                            alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:45%" class="data_cir cir_2" data-date="Stage 3">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info">
                                        <ul>
                                            <li><span>
                                                    <h5>Price: $0.04</h5>
                                                </span></li>
                                            <li><span>
                                                    Allocation: 38,850,000 AMFI
                                                </span></li>
                                            <li><span>Target: $1,554,000</span></li>
                                        </ul>
                                    </span><span class="roadmap_img"><img draggable="false"
                                            src="{{ url('frontend/img/roadmap-icons/3.svg') }}"
                                            alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:65%" class="data_cir cir_3" data-date="Stage 4">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info">
                                        <ul>
                                            <li><span>
                                                    <h5>Price: $0.045</h5>
                                                </span></li>
                                            <li><span>
                                                    Allocation: 38,850,000 AMFI
                                                </span></li>
                                            <li><span>Target: $1,748,250</span></li>
                                        </ul>
                                    </span><span class="roadmap_img"><img draggable="false"
                                            src="{{ url('frontend/img/roadmap-icons/4.svg') }}"
                                            alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:80%" class="data_cir cir_4 red_crc" data-date="Stage 5">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info">
                                        <ul>
                                            <li><span>
                                                    <h5>Price: $0.05</h5>
                                                </span></li>
                                            <li><span>
                                                    Allocation: 38,850,000 AMFI
                                                </span></li>
                                            <li><span>Target: $1,942,500</span></li>
                                        </ul>
                                    </span><span class="roadmap_img"><img draggable="false"
                                            src="{{ url('frontend/img/roadmap-icons/5.svg') }}"
                                            alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:93%" class="data_cir cir_4 red_crc" data-date="Stage 6">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info">
                                        <ul>
                                            <li><span>
                                                    <h5>Price: $0.055</h5>
                                                </span></li>
                                            <li><span>
                                                    Allocation: 38,850,000 AMFI
                                                </span></li>
                                            <li><span>Target: $2,136,750</span></li>
                                        </ul>
                                    </span><span class="roadmap_img"><img draggable="false"
                                            src="{{ url('frontend/img/roadmap-icons/5.svg') }}"
                                            alt=""></span></span>
                            </div>
                        </div>

                        {{-- <div style="left:60%" class="data_cir cir_5 next" data-date="Q3 2022">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>Crypto Wallet version release</span></li>
                                <li><span>Testnet launch</span></li>
                                <li><span> Platform ealier verhttps://codyhouse.co/gem/vertical-timelinesion development</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="{{ url('frontend/img/roadmap-icons/6.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:70%" class="data_cir cir_6 next" data-date="Q4 2022">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>Mobile App</span></li>
                                <li><span>Explorer</span></li>
                                <li><span>new partnerships and new marketplace support</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="{{ url('frontend/img/roadmap-icons/7.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:80%" class="data_cir cir_7 next" data-date="Q1 2022">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>Mainnet launch</span></li>
                                <li><span>Wallet beta-version release</span></li>
                                <li><span>Masternodes implementation</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="{{ url('frontend/img/roadmap-icons/8.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:90%" class="data_cir cir_8 next" data-date="Q2 2022">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span> Platform integration to electronic marketplaces</span></li>
                                <li><span>Zero Fee</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="{{ url('frontend/img/roadmap-icons/9.svg') }}" alt=""></span></span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center" style="padding-top: 80px;">
            <h2 class="wow fadeInUp " data-wow-delay="0.3s" >Listing Price: $0.06</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">AMFI will be listed on major DEX/CEX.</p>

        </div>
    </section>
    <!-- ##### Our presale roadmap Area End ##### -->

    <!-- ##### Service Cards start ##### -->
    <section class="features-section full-bg-img">
        <div class="feature-card">
            <img src="{{ url('frontend/img/amfi-tracker/meta.jpg') }}" alt="Feature 1">
            <div class="image-wrapper">
                <h3>Meta Services</h3>
            </div>
            <p>A suite of AI-driven tools, including arbitrage trading bots, personal assistant bots, and AI-powered
                content creation tools, designed to optimize user experience and financial outcomes.</p>
        </div>
        <div class="feature-card">
            <div class="image-wrapper">
                <img src="{{ url('frontend/img/amfi-tracker/aibot.jpg') }}" alt="Feature 3">
            </div>
            <h3>AI Bots</h3>
            <p>A suite of AI-driven tools, including arbitrage trading bots, personal assistant bots, and AI-powered
                content creation tools, designed to optimize user experience and financial outcomes.</p>
        </div>
        <div class="feature-card">
            <div class="image-wrapper">
                <img src="{{ url('frontend/img/amfi-tracker/studio.jpg') }}" alt="Feature 2">
            </div>
            <h3>AMFI Studio</h3>
            <p>Our AMFI Studio is an exclusive, premium feature where users can access a wide range of trading
                strategies; the studio is designed to elevate your knowledge and skills.</p>
        </div>
        <div class="feature-card">
            <div class="image-wrapper">
                <img src="{{ url('frontend/img/amfi-tracker/game.jpg') }}" alt="Feature 4">
            </div>
            <h3>AI Games</h3>
            <p>
                Play-to-Earn games that leverage AI to create dynamic, engaging, and rewarding experiences for users.
                Play-to-Earn games that leverage AI to create dynamic, engaging, and rewarding experiences for users.

            </p>
        </div>
    </section>
    <!-- ##### Service Cards End ##### -->

    <div class="vertical-social">
        <ul>
            <li><a href="http://x.com/amfi_official" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="http://t.me/amfi_official" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
            <li><a href="https://medium.com/@amfi.ai/amfi-the-future-of-digital-finance-7d67765927f9" target="_blank"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
            <li><a href="http://discord.com/channels/1290379401774628906/1290384602728497277" target="_blank"><img src="{{ url('frontend/img/discord.svg') }}" class="mr-2" style="height: 25px; width: 25px;"></a></li>
            <li><a href="http://youtube.com/@amfi_official?si=yQFV5SPdQ7bUu_2A" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    </div>
    @include('frontend.How_to_buy_modal')
    {{-- @include('frontend.seedround_form') --}}
    <section class="features section-padding-100-0 full-bg-img">

        <div class="section-heading text-center">

            <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Web App</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Empowering Crypto Traders
                with Real-Time Insights and Advanced Analysis.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="service-img-wrapper how col-lg-12 col-md-12 col-sm-12">
                    <div class="image-box">
                        <img draggable="false" src="{{ url('frontend/img/app.jpg') }}"
                            class="center-block img-responsive phone-img" alt="">
                    </div>
                </div>
                {{-- <div class="services-column col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-xs-10 offset-xs-1">
                    <!--Services Block Four-->
                    <div class="services-block-four how">
                        <div class="inner-box">
                            <div class="step">1</div>
                            <h3><a href="#">Powerfull Mobile and Online App</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident non hic eum dolores natus, vitae, quae, facere perferendis.</div>

                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four how">
                        <div class="inner-box">
                            <div class="step">2</div>
                            <h3><a href="#">Brings more Transparency and Speed</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident non hic eum dolores natus, vitae, quae, facere perferendis.</div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four how" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="step">3</div>
                            <h3><a href="#">Special for Multiple Use Capabilities</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident non hic eum dolores natus, vitae, quae, facere perferendis.</div>
                        </div>
                    </div>

                </div> --}}

            </div>
        </div>
    </section>


    <section class="demo-video section-before section-padding-100 full-bg-img full-bg-img">
        <div class="container">
            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">AMFI Brief Overview</h2>
                {{-- <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> --}}
            </div>
            <!-- Welcome Video Area -->

            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                <div class="welcome-thumb" style="width: 800px; height:450px">
                    <video controls autoplay muted loop style="width: 100%; height: auto;">
                        <source src="{{ url('frontend/img/bg-img/app-video.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                {{-- <div class="welcome-video-area wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Welcome Video -->
                    <!-- Video Icon (optional) -->
                    <div class="video-icon">
                        <a href="https://www.youtube.com/watch?v=gbXEPHsTkgU" class="btn dream-btn video-btn" id="videobtn">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div> --}}
            </div>

        </div>
    </section>

    <div class="clearfix"></div>

    <!-- ##### Core attributes Area Start ##### -->
    <div class="faq-timeline-area section-padding-100 full-bg-img">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 col-md-12">
                    <div class="section-heading">

                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2 class="fadeInUp" data-wow-delay="0.3s">Core Attributes of AMFI</h2>
                        {{-- <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-left:0">Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit
                                commodo.</p> --}}
                    </div>

                    <div class="dream-faq-area">
                        <dl>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.2s">
                                1. Automated Finance Integration <span class="toggle-icon">+</span>
                            </dt>
                            <dd class="wow fadeInUp" data-wow-delay="0.3s">
                                <p>AMFI leverages advanced automation to simplify and optimize financial processes,
                                    making digital finance accessible, efficient, and user-friendly.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.3s">
                                2. AI - Powered Ecosystem <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>AMFI stands out with its AI-based services, including AI Bots, Arbitrage Bots, AI
                                    Games, and AI Scanners, providing users with intelligent tools that enhance
                                    decision-making, boost productivity, and offer personalized financial insights.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.4s">
                                3. Web3 and Meta Integration <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>AMFI bridges the gap between traditional finance and the digital metaverse. By
                                    incorporating Web3 Social Media, AR/VR services, Meta Commerce, and Meta
                                    Entertainment in one ecosystem.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">
                                4. Comprehensive Financial Solutions <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>offering a wide range of financial services like AMFI Wallet, Staking, DEX, and AMFI
                                    Cards, AMFI provides a complete suite of tools that cater to the evolving needs of
                                    crypto users, traders, and investors.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">
                                5. Security and Transparency <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>With a focus on robust security measures, smart contract audits, and transparent
                                    tokenomics, AMFI ensures the safety of user assets while maintaining clarity in its
                                    operations and financial models.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">
                                6. Educational and Insightful <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>With a focus on robust security measures, smart contract audits, and transparent
                                    tokenomics, AMFI ensures the safety of user assets while maintaining clarity in its
                                    operations and financial models.</p>
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1" style="padding-top: 175px;">
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s">
                        <img draggable="false" src="{{ url('frontend/img/solutions.webp') }}" class="center-block"
                            alt="" style="transform: scale(1.2)">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Core attributes Area End ##### -->


    <!-- ##### About amfi tracker Area Start ##### -->
    <section class="about-us-area section-padding-0-100 clearfix full-bg-img" id="about">
        <div class="container">
            <div class="row align-items-center">

                <h4 class="wow fadeInUp text-center" data-wow-delay="0.3s">About AMFI Tracker</h4>

                <div class="col-12 col-lg-6">
                    <p class="wow fadeInUp" data-wow-delay="0.4s">AMFI Tracker is an AI-based, Web3-integrated
                        platform that offers a comprehensive suite of services for both novice & experienced traders
                        in the cryptocurrency market.</p>
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s pt-5" style="padding-top:50px;">
                        <img draggable="false" src="{{ url('frontend/img/amfi-tracker/tracker.webp') }}"
                        class="img-responsive center-block" alt="">
                        <!-- client meta -->
                        {{-- <div class="growing-company text-center mt-30 wow fadeInUp" data-wow-delay="0.8s">
                            <p>* Already growing up <span class="counter">5236</span> company</p>
                        </div> --}}
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">

                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>

                        {{-- <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molestiae facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tempora odit laborum iure inventore possimus laboriosam qui nam. Fugit!</p> --}}

                        <div class="token-info">
                            <div class="info-wrapper">
                                <div class="token-icon"
                                    style="background-image: url('frontend/img/amfi-tracker/cryptoinsights.png');">
                                </div>
                                <div class="token-descr">1. Live Rates & Insights</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper">
                                <div class="token-icon"
                                    style="background-image: url('frontend/img/amfi-tracker/2.webp');"></div>
                                <div class="token-descr">2. Advanced Charts & History</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper">
                                <div class="token-icon"
                                    style="background-image: url('frontend/img/amfi-tracker/3.webp');"></div>
                                <div class="token-descr">3. Listing of New Coins</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper">
                                <div class="token-icon"
                                    style="background-image: url('frontend/img/amfi-tracker/4.webp');"></div>
                                <div class="token-descr">4. Pre-Seed, Seed Rounds, ICO/IPO/IDO/IEO Tracking</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper">
                                <div class="token-icon"
                                    style="background-image: url('frontend/img/amfi-tracker/cryptostudio.png');"></div>
                                <div class="token-descr">5. AMFI Studio</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper">
                                <div class="token-icon"
                                    style="background-image: url('frontend/img/amfi-tracker/6.webp');"></div>
                                <div class="token-descr">6. Fundamental & Technical Analysis</div>
                            </div>
                        </div>

                        {{-- <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="#">Read More</a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About amfi tracker Area End ##### -->

    <!-- ##### trust Area Start ##### -->
    {{-- <div class="trust-section section-padding-100">
        <div class="section-heading text-center">

            <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">We are trusted</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit
                amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ url('frontend/img/ico-platforms/1.png') }}"
                                alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ url('frontend/img/ico-platforms/2.png') }}"
                                alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <div class="value">8.9</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ url('frontend/img/ico-platforms/3.png') }}"
                                alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ url('frontend/img/ico-platforms/4.png') }}"
                                alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ url('frontend/img/ico-platforms/5.png') }}"
                                alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <div class="value">7.4</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.7s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ url('frontend/img/ico-platforms/6.png') }}"
                                alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- ##### trust Area End ##### -->

    <!-- ##### FAQ & Timeline Area Start ##### -->
    <div class="faq-timeline-area section-padding-100 full-bg-img">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="section-heading">

                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Frequently Asked Questions</h2>
                        {{-- <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-left:0">Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit
                            commodo.</p> --}}
                    </div>

                    <div class="dream-faq-area">
                        <dl>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.2s">What is AMFI?
                                <span class="toggle-icon">+</span>
                            </dt>
                            <dd class="wow fadeInUp" data-wow-delay="0.3s">
                                <p>AMFI (Automated Meta Finance) is a revolutionary Web3 platform that integrates
                                    AI-powered services, Meta experiences, and advanced financial tools into one
                                    cohesive ecosystem. Our goal is to transform digital finance with automation and
                                    innovation, offering users a wide range of services, including AI Bots, Web3 Social
                                    Media, Meta Commerce, staking, yield farming, and more</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.3s">What is the native token of the AMFI
                                ecosystem? <span class="toggle-icon">+</span> </dt>
                            <dd>
                                <p>The native token of the AMFI ecosystem is the AMFI token. It plays a crucial role in
                                    powering the platform’s services, enabling staking, yield farming, payments, and
                                    governance, and rewarding users within the ecosystem.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.4s">How can I participate in the AMFI
                                presale? <span class="toggle-icon">+</span> </dt>
                            <dd>
                                <p>To participate in the AMFI presale, you will need to be whitelisted. Follow our
                                    official channels for announcements on the presale schedule, requirements, and how
                                    to get whitelisted. Make sure you have a compatible wallet and sufficient funds
                                    ready for purchasing.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">What is the total supply of AMFI
                                tokens? <span class="toggle-icon">+</span> </dt>
                            <dd>
                                <p>The total supply of AMFI tokens is 777 M. The distribution is structured to support
                                    the project’s long-term growth, community incentives, and ecosystem development.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">How will the AMFI tokens be used
                                within the ecosystem? <span class="toggle-icon">+</span> </dt>
                            <dd>
                                <p>AMFI tokens will be used for a variety of purposes within the ecosystem, including
                                    staking, yield farming, purchasing premium services, making payments in Meta
                                    Commerce, participating in governance, and accessing exclusive features on the
                                    platform.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">What services does AMFI offer?
                                <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>AMFI offers a diverse range of services divided into three main categories:</p>
                                <ul>
                                    <li>
                                        <p>• <strong>AI Services:</strong> AI Bots, Arbitrage Bots, AI Games, and AI
                                            Scanner.</p>
                                    </li>
                                    <li>
                                        <p>• <strong>Meta Services:</strong>Web3 Social Media, AR/VR Services, Meta
                                            Commerce, and Meta Entertainment.</p>
                                    </li>
                                    <li>
                                        <p>• <strong>Financial Services:</strong>AMFI Wallet, AMFI Staking, AMFI DEX,
                                            and AMFI Cards.</p>
                                    </li>
                                </ul>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">What makes AMFI unique compared to
                                other crypto platforms? <span class="toggle-icon">+</span> </dt>
                            <dd>
                                <p>AMFI is the world’s first Automated Meta Finance platform, combining AI, Meta, and
                                    advanced financial services in a single ecosystem. Our focus on automation,
                                    innovation, and Web3 integration sets us apart, offering users a holistic experience
                                    unlike any other platform in the market.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">How secure is the AMFI platform?
                                <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>Security is a top priority for AMFI. We employ industry-leading security measures,
                                    including smart contract audits, multi-layer encryption, and secure user
                                    authentication, to ensure the safety of our users’ assets and data.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">When will the AMFI token be listed on
                                exchanges? <span class="toggle-icon">+</span> </dt>
                            <dd>
                                <p>AMFI tokens will be listed on major decentralized and centralized exchanges shortly
                                    after the completion of the presale rounds and TGE (Token Generation Event). Follow
                                    our official channels for updates on listing dates.</p>
                            </dd>
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">How can I stake AMFI tokens?
                                <span class="toggle-icon">+</span>
                            </dt>
                            <dd>
                                <p>You can stake AMFI tokens directly on our platform through the AMFI Staking service.
                                    Simply connect your wallet, select the staking pool of your choice, and start
                                    earning rewards.</p>
                            </dd>
                        </dl>
                    </div>
                </div>

                {{-- <div class="col-12 col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">



                    <div class="ico-docs">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span
                                            class="title">WhitePaper</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span
                                            class="title">OnePager</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span
                                            class="title">Rating Review</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span
                                            class="title">Marketing Plan</span></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> --}}
            </div>
        </div>
    </div>
    <!-- ##### FAQ & Timeline Area End ##### -->

    <!-- ##### Subscribe Area start ##### -->
    {{-- <section class="container " style="padding-bottom: 0px" id="start">
        <div class="subscribe section-padding-100-0">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscribe-wrapper">
                        <div class="section-heading text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Don’t
                                Miss ICO News And Updates!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis
                                congue nisl hendrerit commodo.</p>
                        </div>
                        <div class="service-text">

                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 text-center">
                                <div class="group">
                                    <input type="text" name="subject" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>enter your email</label>
                                    <button class="dream-btn"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-lg-offset-1 col-sm-12 text-center">
                                <span class="telegram-text">Join our chat: </span>
                                <a href="" class="button"><i class="fa fa-telegram"></i>Telegram</a>
                            </div>
                            <div class="col-lg-5 col-sm-12 text-center">
                                <ul class="list-unstyled list-inline social-list">
                                    <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href=""><i class="fa fa-github-square"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-medium"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- ##### Subscribe Area End ##### -->




    <!-- ##### Team Area Start ##### -->
    {{-- <section class="our_team_area section-padding-0-0 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">

                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Awesome Team</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/1.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Sunny khan</h5>
                            <p>Executive Officer</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/2.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Ajoy Das</h5>
                            <p>Business Development</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/3.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Afroza Mou</h5>
                            <p>UX/UI Designer</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/4.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Lim Sarah</h5>
                            <p>Head of Marketing</p>
                        </div>
                        <!-- Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/1.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Sunny khan</h5>
                            <p>Executive Officer</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/2.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Ajoy Das</h5>
                            <p>Business Development</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/3.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Afroza Mou</h5>
                            <p>UX/UI Designer</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ url('frontend/img/team-img/4.png') }}"
                                class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Lim Sarah</h5>
                            <p>Head of Marketing</p>
                        </div>
                        <!-- Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- ##### Team Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area full-bg-img">

        <!-- ##### Contact Area Start ##### -->
        <div class="contact_us_area" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">

                            <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Contact With Us</h2>
                            {{-- <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> --}}
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="contact_form">
                            <form action="#" method="post" id="main_contact_form" novalidate>
                                <div class="row" style="padding-top:20px;">
                                    <div class="col-12">
                                        <div id="success_fail_info"></div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                            <input type="text" name="name" id="name" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="group wow fadeInUp" data-wow-delay="0.3s">
                                            <input type="text" name="email" id="email" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                            <input type="text" name="subject" id="subject" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                            <textarea name="message" id="message" required></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                        <button type="submit" class="btn dream-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Contact Area End ##### -->
        <div class="footer-content-area " style="background-image: url(frontend/img/core-img/footer-bg1.png);">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-12 col-md-5">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text wow fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="#"><img draggable="false"
                                            src="{{ url('frontend/img/core-img/logo.png') }}" alt="logo">
                                        Automated Meta Finance</a>
                                </div>
                                <p>At AMFI, we are not just innovating finance; we are redefining it for a world that's smarter, more connected and truly decentralized. Welcome to the future of finance. Welcome to AMFI.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-evenly">
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.2s">
                                <h5>Links</h5>
                                <a href="">
                                    <p>Home</p>
                                </a>
                                <a href="">
                                    <p>About</p>
                                </a>
                                <a href="">
                                    <p>Services</p>
                                </a>
                                <a href="">
                                    <p>Roadmap</p>
                                </a>
                                <a href="">
                                    <p>Whitepaper</p>
                                </a>
                            </div>
                            <!-- Content Info -->
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.3s">
                                <h5>Help</h5>
                                <a href="" data-bs-toggle="modal" data-bs-target="#largeModal">
                                    <p>How to buy?</p>
                                </a>
                                <a href="">
                                    <p>FAQ's</p>
                                </a>
                                <a href="">
                                    <p>Contact Us</p>
                                </a>
                            </div>
                            <!-- Content Info -->
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.4s">
                                <h5>Social Media</h5>
                                <a href="https://x.com/amfi_official" target="_blank"><p>X (Twitter)</p></a>
                                <a href=" https://t.me/amfi_official" target="_blank"><p><i class="fa fa-telegram mr-2" aria-hidden="true"></i>Telegram</p></a>
                                <a href="https://discord.com/channels/1290379401774628906/1290384602728497277" target="_blank"><p><img src="{{ url('frontend/img/discord.svg') }}" class="mr-2" style="height: 15px; width: 15px;">Discord</p></a>
                                <a href="https://youtube.com/@amfi_official?si=yQFV5SPdQ7bUu_2A" target="_blank"><p><i class="fa fa-youtube mr-2" aria-hidden="true"></i>Youtube</p></a>
                                <a href="https://medium.com/@amfi.ai/amfi-the-future-of-digital-finance-7d67765927f9" target="_blank"><p><i class="fa fa-medium mr-2"></i>Medium</p></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-end" style="background-color: black; border-top: 1px solid white">
            <div class="col-6 mt-2">
                <p class="text-center">
                    © 2024 AMFI, All rights reserved.
                </p>
            </div>
            <div class="col-6 mt-2">
                <p class="text-center">
                    <a href="https://automated-meta-finance.gitbook.io/amfi-whitepaper/privacy-policy" target="_blank">Privacy Policy</a>
                    <a href="https://automated-meta-finance.gitbook.io/amfi-whitepaper/terms-of-services" target="_blank" class="pl-5">Terms & Services</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js') }}"></script>


    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ url('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ url('frontend/js/plugins.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ url('frontend/js/dzsparallaxer.js') }}"></script>

    <script src="{{ url('frontend/js/jquery.syotimer.min.js') }}"></script>

    <!-- Active js -->
    <script src="{{ url('frontend/js/script.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fadeInElements = document.querySelectorAll('.container-new');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.querySelector('.content-new').classList.add('visible-new');
                        observer.unobserve(entry
                        .target); // Stop observing once the element is visible
                    }
                });
            }, {
                threshold: 0.1 // Trigger when at least 10% of the element is in view
            });

            fadeInElements.forEach(element => {
                observer.observe(element);
            });
        });
        document.getElementById('close-banner').onclick = function() {
        document.getElementById('top-banner').style.display = 'none';
        document.getElementById('navbar').style.top = '0'; // Restore navbar position
    };

    $(document).ready(function() {
    // Clone the first image to create a seamless effect
    const firstImage = $('.slider img:first-child').clone();
    $('.slider').append(firstImage);

    // Adjust the total width of the slider
    const imageCount = $('.slider img').length;
    const totalWidth = 100 * imageCount; // Total width in percentage
    $('.slider').css('width', totalWidth + '%');
});


    </script>

</body>

</html>
