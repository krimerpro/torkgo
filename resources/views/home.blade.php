@extends('layouts.default')
@section('content')

<!-- connect wallet modal start -->
<div class="wallet-modal modal fade" id="wallet-option" tabindex="-1" aria-labelledby="choose-wallet"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="choose-wallet">Connect Your Wallet</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please select a wallet from below to connect!</p>
                <ul class="wallet__list">
                    <li class="wallet__list-item"><a href="#"> <span><img src="{{ asset('images/wallet/metamask.svg') }}" alt="metamask">
                            </span> </a></li>
                    <li class="wallet__list-item"><a href="#"> <span><img src="{{ asset('images/wallet/coinbase.svg') }}" alt="coinbase">
                            </span> </a></li>
                    <li class="wallet__list-item"><a href="#"> <span><img src="{{ asset('images/wallet/bitski.svg') }}" alt="bitski">
                            </span></a></li>
                    <li class="wallet__list-item"><a href="#"> <span><img src="{{ asset('images/wallet/venly.svg') }}" alt="venly Wallet">
                            </span></a></li>
                    <li class="wallet__list-item"><a href="#"> <span><img src="{{ asset('images/wallet/wallet-connect.svg') }}" alt=" Wallet connect">
                            </span></a></li>
                </ul>
                <p>By connecting your wallet, you agree to our <a href="#">Terms of Service</a> and our <a
                        href="#">Privacy Policy</a> .</p>
            </div>
        </div>
    </div>
</div>
<!-- connect wallet modal end -->



<!-- ==========>> Banner Section start Here <<========== -->
<section class="banner" id="home" style="background-image: url({{ asset('images/banner/bg.png') }});">
    <div class="container">
        <div class="banner__wrapper">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
                        <h1 class="text-uppercase">TORKGO CHAIN</h1>
                        <p>The next generation Blockchain ecosystem </p>
                        <a href="https://t.me/TorkGoChain" class="default-btn"><span class="fab fa-telegram"></span> <span>JOIN US</span></a>
                        <a href="https://pancakeswap.finance/swap?outputCurrency=0x96Bad641Ff1c67De45280D4185737C679447efdB" class="default-btn"><span class="fas fa-cart-plus"></span> <span>BUY TORKGO</span></a>
                        <a href="https://poocoin.app/tokens/0x96Bad641Ff1c67De45280D4185737C679447efdB" class="default-btn"><span class="fa fa-bar-chart"></span> <span>CHART</span></a>
                        <div class="row"></div>
                        Contract Address : <b>0x96Bad641Ff1c67De45280D4185737C679447efdB</b>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner__thumb" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('images/banner/banner-thumb/01.png') }}" alt="banner Image">

                        <div class="shape-2">
                            <img src="{{ asset('images/banner/banner-thumb/shape3.png') }}" alt="Banner Shape">
                        </div>
                        <div class="shape-3">
                            <img src="{{ asset('images/banner/banner-thumb/shape1.png') }}" alt="Banner Shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ==========>> Banner Section Ends Here <<========== -->

<!-- ==========>> benifits Section start Here <<========== -->
<section class="benifit padding-top padding-bottom bg--primary-color">
    <div class="container">
        <div class="section-header section-header--middle">
            <div class="section-header__content">
                <div class="section-header__titlebar">
                    <p class="section-header__subtitle"> Features</p>
                    <h2 class="section__header__title">What We Offer</h2>
                </div>
            </div>
        </div>
        <div class="benifit__wrapper">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="benifit__item">
                        <div class="benifit__item-inner">
                            <div class="benifit__item-thumb">
                                <img src="{{ asset('images/benifit/01.png') }}" alt="Benifit image">
                            </div>
                            <div class="benifit__item-content">
                                <h4>Cross Chain / Bridge</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="benifit__item">
                        <div class="benifit__item-inner">
                            <div class="benifit__item-thumb">
                                <img src="{{ asset('images/benifit/02.png') }}" alt="Benifit image">
                            </div>
                            <div class="benifit__item-content">
                                <h4>Smart Contract Ecosystem</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="benifit__item">
                        <div class="benifit__item-inner">
                            <div class="benifit__item-thumb">
                                <img src="{{ asset('images/benifit/03.png') }}" alt="Benifit image">
                            </div>
                            <div class="benifit__item-content">
                                <h4>Wallet & Staking</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="benifit__item">
                        <div class="benifit__item-inner">
                            <div class="benifit__item-thumb">
                                <img src="{{ asset('images/benifit/04.png') }}" alt="Benifit image">
                            </div>
                            <div class="benifit__item-content">
                                <h4>Launchpad</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========>> benifits Section Ends Here <<========== -->

<!-- ==========>> Upcoming Project Section start Here <<========== -->
<section class="project padding-top padding-bottom">
    <div class="container">
        <div class="section-header section-header--left" id="wallet">
            <div class="section-header__content">
                <div class="section-header__titlebar">
                    <p class="section-header__subtitle">
                        Wallet App
                    </p>
                    <h2 class="section__header__title">Upcoming TorkGo Wallet</h2>
                </div>
            </div>
        </div>

        <div class="project__wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    TorkGo Wallet will help you to track your crypto assets
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('images/wallet.png') }}" alt="TorkGo Wallet">
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    &nbsp;
                </div>

            </div>
        </div>

        <div class="section-header section-header--left" style="margin-top:100px" id="launchpad">
            <div class="section-header__content">
                <div class="section-header__titlebar">
                    <p class="section-header__subtitle">
                        LAUNCHPAD LIST
                    </p>
                    <h2 class="section__header__title">Upcoming Projects Will be Listed Here</h2>
                </div>
                <a href="#" class="default-btn default-btn--small"><span>View all</span> </a>
            </div>
        </div>

        <div class="project__wrapper">
            <div class="swiper project__slider py-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="project__item">
                            <div class="project__item-inner">
                                <div class="project__item-thumb">
                                    <img src="{{ asset('images/igo/item/01.jpg') }}" alt="IGO cover">
                                    <span class="badge"><img src="{{ asset('images/favicon.png') }}"
                                            alt="chain logo"></span>
                                </div>
                                <div class="project__item-content">
                                    <div class="project__item-top">
                                        <div class="project__item-author">
                                            <a href="#"><img src="{{ asset('images/favicon.png') }}"
                                                    alt="author image"></a>
                                            <h4>Project #1</h4>
                                        </div>

                                    </div>
                                    <div class="project__item-middle">
                                        <ul class="project__infolist">
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Round Name:</p>
                                                <p class="project__infolist-data">Public</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Participent</p>
                                                <p class="project__infolist-data">0</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Project Start</p>
                                                <p class="project__infolist-data">TBA</p>
                                            </li>
                                        </ul>

                                        <div class="project__item-amount">
                                            <p>Raised Ammount</p>
                                            <h6><span class="color--theme-color">0</span> / <span>0
                                                    TORKGO</span>
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="project__item-bottom">

                                        <a href="#" class="default-btn default-btn--small">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project__item">
                            <div class="project__item-inner">
                                <div class="project__item-thumb">
                                    <img src="{{ asset('images/igo/item/02.jpg') }}" alt="IGO cover">
                                    <span class="badge"><img src="{{ asset('images/favicon.png') }}"
                                            alt="chain logo"></span>
                                </div>
                                <div class="project__item-content">
                                    <div class="project__item-top">
                                        <div class="project__item-author">
                                            <a href="#"><img src="{{ asset('images/favicon.png') }}"
                                                    alt="author image"></a>
                                            <h4>Project #2</h4>
                                        </div>

                                    </div>
                                    <div class="project__item-middle">
                                        <ul class="project__infolist">
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Round Name:</p>
                                                <p class="project__infolist-data">Public</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Participent</p>
                                                <p class="project__infolist-data">0</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Project Start</p>
                                                <p class="project__infolist-data">TBA</p>
                                            </li>
                                        </ul>

                                        <div class="project__item-amount">
                                            <p>Raised Ammount</p>
                                            <h6><span class="color--theme-color">0</span> / <span>0
                                                    TORKGO</span>
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="project__item-bottom">

                                        <a href="#" class="default-btn default-btn--small">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project__item">
                            <div class="project__item-inner">
                                <div class="project__item-thumb">
                                    <img src="{{ asset('images/igo/item/03.jpg') }}" alt="IGO cover">
                                    <span class="badge"><img src="{{ asset('images/favicon.png') }}"
                                            alt="chain logo"></span>
                                </div>
                                <div class="project__item-content">
                                    <div class="project__item-top">
                                        <div class="project__item-author">
                                            <a href="#"><img src="{{ asset('images/favicon.png') }}"
                                                    alt="author image"></a>
                                            <h4>Project #3</h4>
                                        </div>

                                    </div>
                                    <div class="project__item-middle">
                                        <ul class="project__infolist">
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Round Name:</p>
                                                <p class="project__infolist-data">Public</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Participent</p>
                                                <p class="project__infolist-data">0</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Project Start</p>
                                                <p class="project__infolist-data">TBA</p>
                                            </li>
                                        </ul>

                                        <div class="project__item-amount">
                                            <p>Raised Ammount</p>
                                            <h6><span class="color--theme-color">0</span> / <span>0
                                                    TORKGO</span>
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="project__item-bottom">

                                        <a href="#" class="default-btn default-btn--small">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project__item">
                            <div class="project__item-inner">
                                <div class="project__item-thumb">
                                    <img src="{{ asset('images/igo/item/04.jpg') }}" alt="IGO cover">
                                    <span class="badge"><img src="{{ asset('images/favicon.png') }}"
                                            alt="chain logo"></span>
                                </div>
                                <div class="project__item-content">
                                    <div class="project__item-top">
                                        <div class="project__item-author">
                                            <a href="#"><img src="{{ asset('images/favicon.png') }}"
                                                    alt="author image"></a>
                                            <h4>Project #4</h4>
                                        </div>

                                    </div>
                                    <div class="project__item-middle">
                                        <ul class="project__infolist">
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Round Name:</p>
                                                <p class="project__infolist-data">Public</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Participent</p>
                                                <p class="project__infolist-data">0</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Project Start</p>
                                                <p class="project__infolist-data">TBA</p>
                                            </li>
                                        </ul>

                                        <div class="project__item-amount">
                                            <p>Raised Ammount</p>
                                            <h6><span class="color--theme-color">0</span> / <span>0
                                                    TORKGO</span>
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="project__item-bottom">

                                        <a href="#" class="default-btn default-btn--small">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project__item">
                            <div class="project__item-inner">
                                <div class="project__item-thumb">
                                    <img src="{{ asset('images/igo/item/05.jpg') }}" alt="IGO cover">
                                    <span class="badge"><img src="{{ asset('images/favicon.png') }}"
                                            alt="chain logo"></span>
                                </div>
                                <div class="project__item-content">
                                    <div class="project__item-top">
                                        <div class="project__item-author">
                                            <a href="#"><img src="{{ asset('images/favicon.png') }}"
                                                    alt="author image"></a>
                                            <h4>Project #5</h4>
                                        </div>

                                    </div>
                                    <div class="project__item-middle">
                                        <ul class="project__infolist">
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Round Name:</p>
                                                <p class="project__infolist-data">Public</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Participent</p>
                                                <p class="project__infolist-data">0</p>
                                            </li>
                                            <li class="project__infolist-item">
                                                <p class="project__infolist-name">Project Start</p>
                                                <p class="project__infolist-data">TBA</p>
                                            </li>
                                        </ul>

                                        <div class="project__item-amount">
                                            <p>Raised Ammount</p>
                                            <h6><span class="color--theme-color">0</span> / <span>0
                                                    TORKGO</span>
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="project__item-bottom">

                                        <a href="#" class="default-btn default-btn--small">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project__slider-pagination mt-4 text-center"></div>
            </div>
        </div>
    </div>
</section>
<!-- ==========>> Upcoming Project Section Ends Here <<========== -->

<!-- ==========>> work Section start Here <<========== -->
<section class="work padding-top padding-bottom bg--primary-color">
    <div class="container">
        <div class="section-header section-header--middle">
            <div class="section-header__content">
                <div class="section-header__titlebar">
                    <p class="section-header__subtitle"> Upcoming Launchpad </p>
                    <h2 class="section__header__title"> Simple as 1,2,3</h2>
                </div>
            </div>
        </div>
        <div class="work__wrapper">
            <div class="row  justify-content-center g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="work__item">
                        <div class="work__item-inner">
                            <div class="work__item-thumb">
                                <img src="{{ asset('images/work/1.png') }}" alt="work Step 1 Image">
                            </div>
                            <div class="work__item-content">
                                <h4>1.Submit KYC</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="work__item">
                        <div class="work__item-inner">
                            <div class="work__item-thumb">
                                <img src="{{ asset('images/work/2.png') }}" alt="work Step 2 Image">
                            </div>
                            <div class="work__item-content">
                                <h4>2. Verify Project</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="work__item">
                        <div class="work__item-inner">
                            <div class="work__item-thumb">
                                <img src="{{ asset('images/work/3.png') }}" alt="work Step 3 Image">
                            </div>
                            <div class="work__item-content">
                                <h4>3. Start Launchpad</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#launchpad" class="default-btn"><span>Submit Your Project Here</span></a>
            </div>
        </div>
    </div>
</section>
<!-- ==========>> work Section Ends Here <<========== -->

<!-- ==========>> Roadmap Section start Here <<========== -->
<section class="roadmap  padding-bottom" id="roadmap">
    <div class="container">
        <div class="section-header section-header--middle">
            <div class="section-header__content">
                <div class="section-header__titlebar">
                    <p class="section-header__subtitle"> Explore</p>
                    <h2 class="section__header__title">Our Roadmap</h2>
                </div>
            </div>
        </div>
        <div class="roadmap__wrapper2">
            <div class="row gy-4 gy-md-0 gx-5">
                <div class="col-md-6 offset-md-6">
                    <div class=" roadmap__item2 ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
                        <div class="roadmap__item2-inner">
                            <div class="roadmap__item2-content">
                                <div class="roadmap__item2-header">
                                    <h4>Token Launch</h4>
                                    <p>01</p>
                                </div>
                                <ul >
                                    <li>Launch on Pancakeswap</li>
                                    <li>Website Released</li>
                                    <li>Whitepaper Creation</li>
                                    <li>Initial TG Calls Channel</li>
                                    <li>Shill Contest</li>
                                    <li>Biggest Buy Contest</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" roadmap__item2 ms-auto me-md-4 aos-init" data-aos="fade-right"
                        data-aos-duration="800">
                        <div class="roadmap__item2-inner">
                            <div class="roadmap__item2-content">
                                <div class="roadmap__item2-header">
                                    <h4>Marketing</h4>
                                    <p>02</p>
                                </div>
                                <ul >
                                    <li>Twitter Promotion</li>
                                    <li>Dextools Trending</li>
                                    <li>Poocoin Ads</li>
                                    <li>BscScan Token Update</li>
                                    <li>Trust Wallet Logo</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="roadmap__item2 ms-md-4  aos-init" data-aos="fade-left" data-aos-duration="800">
                        <div class="roadmap__item2-inner">
                            <div class="roadmap__item2-content">
                                <div class="roadmap__item2-header">
                                    <h4>Audit & KYC</h4>
                                    <p>03</p>
                                </div>
                                <ul >
                                    <li>Smart Contract Audit</li>
                                    <li>Team KYC</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="roadmap__item2 ms-auto me-md-4  aos-init" data-aos="fade-right"
                        data-aos-duration="800">
                        <div class="roadmap__item2-inner">
                            <div class="roadmap__item2-content">
                                <div class="roadmap__item2-header">
                                    <h4>Product Released</h4>
                                    <p>04</p>
                                </div>
                                <ul >
                                    <li>TORKGO WALLET</li>
                                    <li>TORKGO STAKING & FARMING</li>
                                    <li>TORKGO TESTNET</li>
                                    <li>TORKGO MAINNET</li>
                                    <li>TORKGO BRIDGE</li>
                                    <li>TORKGO CONTRACT GENERATOR</li>
                                    <li>TORKGO LAUNCHPAD</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="roadmap__item2 ms-md-4  aos-init" data-aos="fade-left" data-aos-duration="800">
                        <div class="roadmap__item2-inner">
                            <div class="roadmap__item2-content">
                                <div class="roadmap__item2-header">
                                    <h4>Final Phase</h4>
                                    <p>05</p>
                                </div>
                                <ul >
                                    <li>COINGECKO LISTING</li>
                                    <li>COINGECKO TRENDING</li>
                                    <li>COINMARKETCAP LISTING</li>
                                    <li>COINMARKETCAP TRENDING</li>
                                    <li>CEX LISTING</li>
                                    <li>VIRAL MEDIA CAMPAIGN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========>> Roadmap Section Ends Here <<========== -->

@stop
