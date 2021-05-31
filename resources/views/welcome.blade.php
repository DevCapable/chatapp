<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link rel="shortcut icon" href="image/png/favicon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="{{ asset('/homepage/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage/fonts/icon-font/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage/fonts/typography-font/typo.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage/fonts/typography-font/lucida-grande/typo.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage/fonts/fontawesome-5/css/all.css') }}">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{ asset('/homepage/plugins/aos/aos.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage/plugins/fancybox/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage/plugins/nice-select/nice-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('//plugins/slick/slick.min.css') }}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href=".{{ asset('/plugins/theme-mode-switcher/switcher-panel.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage/css/main.css') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }
    }
  </style>

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
   
    <div class="site-wrapper overflow-hidden">
      <!-- Header start  -->
      <!-- Header Area -->
      <header
        class="site-header site-header--menu-left sticky-bg-white light-mode-texts menu-link-hover-dodgerblue site-header--absolute site-header--sticky">
        <div class="container">
          <nav class="navbar site-navbar offcanvas-active navbar-expand-lg px-0">
            <!-- Brand Logo-->
            <div class="brand-logo d-inline-block">
              <a href="index.html">
                <!-- light version logo (logo must be black)-->
                <img src="./image/png/logo-blue.png" alt="">
                <!-- Dark version logo (logo must be White)-->
              </a>
            </div>
            <div class="collapse navbar-collapse" id="mobile-menu">
              <div class="navbar-nav-wrapper">
                <ul class="navbar-nav main-menu">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="#features"
                      role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos <i
                        class="icon icon-small-down"></i></a>
                    <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                     
                      <li class="drop-menu-item">
                        @if (Route::has('login'))
                        @auth
                        <li class="drop-menu-item">
                          <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        @else
                        <li class="drop-menu-item">
                          <a href="{{ route('login') }}" >Log in</a>
                        </li>
                  
                        @if (Route::has('register'))
                        <li class="drop-menu-item">
                          <a href="{{ route('register') }}" >Register</a>
                        </li>
                        @endif
                        @endauth
                     
                      @endif
                      </li>
                      <li class="drop-menu-item">
                        <a href="#">
                          Dropdown 03
                        </a>
                      </li>
                      <li class="drop-menu-item">
                        <a href="#">
                          Dropdown 04
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://finestdevs.com/product-support/" role="button"
                      aria-expanded="false">Support</a>
                  </li>
                </ul>
              </div>
              <button class="d-block d-lg-none offcanvas-btn-close" type="button" data-toggle="collapse"
                data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true"
                aria-label="Toggle navigation">
                <i class="gr-cross-icon"></i>
              </button>
            </div>
            <div class="header-btns ml-auto pr-2 ml-lg-9 d-none d-xs-flex">
             
              @if (Route::has('login'))
                      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
                        <a class="btn btn-transparent btn-small border border-mineshaft font-size-5 letter-spacing-n1 font-weight-normal heading-default-color focus-reset mr-lg-6 mr-lg-0 mr-6"
                        href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                  
                        @if (Route::has('register'))
                        <a class="btn btn-transparent btn-small border border-mineshaft font-size-5 letter-spacing-n1 font-weight-normal heading-default-color focus-reset mr-lg-6 mr-lg-0 mr-6"
                        href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                        @endauth
                      </div>
                      @endif
             
            </div>
            <!-- Mobile Menu Hamburger-->
            <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button"
              data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false"
              aria-label="Toggle navigation">
              <!-- <i class="icon icon-simple-remove icon-close"></i> -->
              <span class="hamburger hamburger--squeeze js-hamburger">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </span>
            </button>
            <!--/.Mobile Menu Hamburger Ends-->
          </nav>
        </div>
      </header>
      <!-- navbar- -->
     
      <!-- Header start end -->
      <!-- hero area -->
      <div class="pt-21 pt-sm-24 pt-md-25 pt-lg-30 pb-lg-0 pb-md-9 pb-11 position-relative z-index-1 overflow-hidden">
        <div class="container position-relative">
          <div class="row position-relative justify-content-center">
            <!-- hero area content start -->
            <div class="col-xl-8 col-lg-9 col-md-12 pb-lg-21 pb-md-17 pb-sm-15 pb-10 pr-0" data-aos="fade-left"
              data-aos-duration="800" data-aos-once="true">
              <!-- hero area section title start -->
              <h1
                class="font-size-18 font-family-1 font-wieght-extra-bold heading-default-color letter-spacing-n3 line-height-1p228 mb-11 ">
                Landing page <br> built for software.</h1>
              <!-- hero area section title end -->
              <div class="row">
                <!-- hero area content start -->
                <div class="col-lg-8 col-md-8 col-sm-10 pr-md-6 pr-sm-0">
                  <p
                    class="font-size-9 letter-spacing-np4 line-height-1p714 position-relative pr-xl-14 pr-lg-0 pr-md-9 pl-lg-11 pl-9">
                    Create custom landing pages with Shades that convert more visitors than any website—no coding
                    required. <span class="pos-abs-tl px-1 h-50 bg-selago-2"></span> </p>
                </div>
                <!-- hero area content end -->
                <!-- btn start -->
                <div class="col-lg-4 col-md-4 col-sm-6 pl-md-0 pl-sm-12 flex-y-center">
                  <a class="btn btn-xl btn-dodgerblue rounder-5 font-size-7 letter-spacing-np9 btn-lg px-lg-9 px-7 py-5 mb-md-0 mb-sm-8"
                    href="#">Download free trial</a>
                </div>
                <!-- btn end -->
              </div>
              <!-- compatible-icon start -->
              <div class="row">
                <div class="col-xl-3 col-lg-4 pr-0 pl-lg-15 pl-sm-12">
                  <div class="pt-7 mt-sm-1 mt-8 border-top d-inline-block">
                    <p class="font-size-5 line-height-reset letter-spacing-np4">Compitable with:</p>
                    <!-- compatible-icon list start -->
                    <div class="compatible-icon flex-y-center img-grayscale">
                      <a href="#" class="font-size-13 mr-7"><img src="image/l2/svg/windows.svg" alt=""></a>
                      <a href="#" class="font-size-13 mr-7"><img src="image/l2/svg/apple.svg" alt=""></a>
                      <a href="#" class="font-size-13"><img src="image/l2/svg/penguine.svg" alt=""></a>
                    </div>
                    <!-- compatible-icon list end -->
                  </div>
                </div>
              </div>
              <!-- compatible-icon end -->
            </div>
            <!-- hero area content end -->
          </div>
          <!-- shape-1 start -->
          <div class="pos-abs-bl mb-28 ml-xl-n18 ml-lg-n10 ml-sm-n10 translate-n50 z-index-n1">
            <img src="./image/l2/svg/hero-shape-1.svg" alt="" class="animate-1">
          </div>
          <!-- shape-1 end -->
          <!-- shape-2 start -->
          <div class="pos-abs-br mb-lg-5 mr-lg-n18 z-index-n1">
            <img src="./image/l2/png/hero-shape-2.png" alt="" class="animate-1">
          </div>
          <!-- shape-2 end -->
        </div>
      </div>
      <!-- hero area img start -->
      <div class="pt-21pb-lg-0 pb-md-9 pb-11 position-relative z-index-1 overflow-hidden">
        <div class="container">
          <div class="row position-relative justify-content-center">
            <!-- hero-area content-img start -->
            <div class="col-lg-9" data-aos="zoom-in-left" data-aos-duration="800" data-aos-once="true">
              <img src="image/l2/png/laptop-screen.png" alt="" class="w-100">
            </div>
            <!-- hero-area content-img end -->
          </div>
        </div>
      </div>
      <!-- hero area img end -->
      <!-- brand-area start -->
      <div class="pt-lg-15 pt-sm-9 pt-15 pb-lg-15 pb-15">
        <div class="container">
          <!-- brand-logos start -->
          <div
            class="brand-logos row justify-content-center justify-content-lg-between align-items-center img-grayscale px-12">
            <!-- single-brand start -->
            <div class="single-brand mx-7 py-4" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
              <img src="image/l2/svg/brand-logo.svg" alt="">
            </div>
            <!-- single-brand end -->
            <!-- single-brand start -->
            <div class="single-brand mx-7 py-4" data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
              <img src="image/l2/svg/brand-logo-1.svg" alt="">
            </div>
            <!-- single-brand end -->
            <!-- single-brand start -->
            <div class="single-brand mx-7 py-4" data-aos="fade-right" data-aos-duration="900" data-aos-once="true">
              <img src="image/l2/svg/brand-logo-2.svg" alt="">
            </div>
            <!-- single-brand end -->
            <!-- single-brand start -->
            <div class="single-brand mx-7 py-4" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
              <img src="image/l2/svg/brand-logo-3.svg" alt="">
            </div>
            <!-- single-brand end -->
            <!-- single-brand start -->
            <div class="single-brand mx-7 py-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
              <img src="image/l2/svg/brand-logo-4.svg" alt="">
            </div>
            <!-- single-brand end -->
          </div>
          <!-- brand-logos end -->
        </div>
      </div>
      <!-- brand-area end -->
      <!-- content-1 section start -->
      <div class=" py-lg-27 pb-md-15">
        <div class="container px-xl-12">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-md-5 col-sm-10 flex-y-center" data-aos="fade-right" data-aos-duration="800"
              data-aos-once="true">
              <!-- content-img start -->
              <div class="content-img pl-lg-9 pr-xl-17 position-relative z-index-1">
                <img src="image/l2/png/content-img1.png" alt="" class="w-100">
                <div class="abs-img pos-abs-tl ml-xxl-n29 ml-n10 mt-5 z-index-n1 h-lg-75 h-100">
                  <img src="image/l2/svg/shape1.svg" alt="" class="h-lg-auto h-100">
                </div>
              </div>
              <!-- content-img end -->
            </div>
            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-10 pr-lg-6 pr-md-0" data-aos="fade-left"
              data-aos-duration="800" data-aos-once="true">
              <!-- content-1 start -->
              <div class="d-flex flex-column justify-content-center h-100 pl-lg-17 pl-0 pt-md-0 pt-15">
                <!-- content-1 section-title start -->
                <h2
                  class="font-size-14 font-family-1 letter-spacing-n2p53 line-height-1p3 font-wieght-bold mb-lg-13 mb-7 pr-xl-0 pr-lg-9 pr-md-9 pr-sm-19">
                  Build Beautiful Landing Pages Faster.
                </h2>
                <p class="font-size-9 letter-spacing-np4 mb-10 mb-lg-11 pr-lg-12">Create custom landing pages with
                  Shades that convert more visitors than any website, no coding required.</p>
                <!-- content-1 section-title end -->
              </div>
              <!-- content-1 end -->
            </div>
          </div>
        </div>
      </div>
      <!-- content-1 section end -->
      <!-- content-2 section start -->
      <div class=" pb-lg-28 pb-md-15 py-9">
        <div class="container px-xl-12">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-7 col-sm-9" data-aos="fade-right" data-aos-duration="800"
              data-aos-once="true">
              <!-- content-2 start -->
              <div class="d-flex flex-column justify-content-center h-100 pl-lg-10 pr-lg-7">
                <!-- content-2 section-title start -->
                <h2
                  class="font-size-14 font-family-1 letter-spacing-n2p53 line-height-1p3 font-wieght-bold mb-13 pr-xl-4 pr-lg-13 pr-md-22 pr-sm-22">
                  Completely Free for Everyone.
                </h2>
                <!-- content-2 section-title end -->
                <!-- media start -->
                <div
                  class="media bg-default border border-murcery-2 rounded-5 py-7 pl-lg-10 pl-sm-8 pl-6 pr-lg-10 pr-sm-8 pr-6 mb-3">
                  <!-- media img start -->
                  <!-- <img src="image/l2/svg/users-icon-2.svg" class="align-self-start mr-3 mt-1" alt="..."> -->
                  <img src="image/l2/svg/settings.svg" />
                  <!-- media img end -->
                  <div class="media-body pl-sm-8 pl-5">
                    <h5 class="font-size-7 font-family-1 line-height-1p7 mt-0 mb-5">Easy setup process</h5>
                    <p class="font-size-5 letter-spacing-np4 line-height-1p86 mb-0">Editing and customizing Essential
                      Landing is easy and fast.</p>
                  </div>
                </div>
                <!-- media end -->
                <!-- media start -->
                <div
                  class="media bg-default border border-murcery-2 rounded-5 py-7 pl-lg-10 pl-sm-8 pl-6 pr-lg-10 pr-sm-8 pr-6 mb-3">
                  <!-- media img start -->
                  <!-- <img src="image/l2/svg/users-icon-2.svg" class="align-self-start mr-3" alt="..."> -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27" viewBox="0 0 32 27">
                    <g>
                      <g>
                        <g>
                          <path class="mypath1" fill="none" stroke="#258aff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2"
                            d="M25.528 25.615v0h5.47v0-5.911c0-.56-.341-1.062-.86-1.27l-5.118-2.05a1.367 1.367 0 0 1-.86-1.267v-1.2a5.445 5.445 0 0 0 2.735-4.711V6.471a5.47 5.47 0 0 0-8.205-4.738" />
                        </g>
                        <g>
                          <path class="mypath1" fill="none" stroke="#258aff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2"
                            d="M19.367 19.846l-5.14-2.036a1.358 1.358 0 0 1-.864-1.257v-1.192a5.394 5.394 0 0 0 2.747-4.676V7.97c0-2.999-2.46-5.43-5.495-5.43-3.034 0-5.494 2.431-5.494 5.43v2.715a5.394 5.394 0 0 0 2.747 4.676v1.192c0 .555-.342 1.054-.864 1.26l-5.14 2.036c-.52.206-.863.703-.864 1.257v4.51h19.23v0-4.51c0-.555-.342-1.054-.863-1.26z" />
                        </g>
                      </g>
                    </g>
                  </svg>
                  <!-- media img end -->
                  <div class="media-body pl-sm-8 pl-5">
                    <h5 class="font-size-7 font-family-1 line-height-1p7 mt-0 mb-5">Built for real users</h5>
                    <p class="font-size-5 letter-spacing-np4 line-height-1p86 mb-0">Editing and customizing Essential
                      Landing is easy and fast.</p>
                  </div>
                </div>
                <!-- media end -->
              </div>
              <!-- content-2 end -->
            </div>
            <div class="col-xl-5 offset-xl-2 col-lg-5 col-md-5 col-sm-8 flex-y-center" data-aos="fade-left"
              data-aos-duration="800" data-aos-once="true">
              <!-- content img start -->
              <div class="content-img pl-lg-5 pr-lg-15 position-relative z-index-1 pt-lg-0 pt-10">
                <img src="image/l2/png/content-img2.png" alt="" class="w-lg-auto w-100">
              </div>
              <!-- content img end -->
            </div>
          </div>
        </div>
      </div>
      <!-- content-2 section end -->
      <!-- content-3 section start -->
      <div class=" pb-lg-28 pb-md-15 py-9 pb-sm-10">
        <div class="container px-xl-12">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-4 col-sm-8 flex-y-center" data-aos="fade-right" data-aos-duration="800"
              data-aos-once="true">
              <!-- content img start -->
              <div class="content-img pl-lg-5 pr-lg-7 position-relative z-index-1">
                <img src="image/l2/png/content-img3.png" alt="" class="w-lg-auto w-100">
              </div>
              <!-- content img end -->
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-7 col-md-8 col-sm-11" data-aos="fade-left" data-aos-duration="800"
              data-aos-once="true">
              <!-- content-3 start -->
              <div class="d-flex flex-column justify-content-center h-100 pl-lg-9 pr-lg-10 pl-0 pt-md-0 pt-15">
                <!-- content-3 section-title start -->
                <h2
                  class="font-size-14 font-family-1 letter-spacing-n2p53 line-height-1p3 font-wieght-bold mb-lg-13 mb-7 pr-xl-0 pr-lg-9 pr-md-16 pr-sm-19">
                  Build Beautiful Landing Pages Faster.
                </h2>
                <p class="font-size-9 letter-spacing-np4 mb-10 mb-lg-15 pr-xl-7 pr-lg-0 pr-md-0 pr-sm-6">Event is not
                  like most tech conferences. We want our presentations to engage the audience, spark discussion and
                  inspire new ideas. </p>
                <!-- content-3 section-title end -->
                <!-- content-3 list start -->
                <ul class="list-unstyled pl-0">
                  <li class="font-weight-normal font-size-10 text-default-color-2 border-0 d-flex mb-5">
                    <i class="fas fa-check font-size-7 text-dodgerblue mr-6"></i>Unlimited design possibility
                  </li>
                  <li class="font-weight-normal font-size-10 text-default-color-2 border-0 d-flex mb-5">
                    <i class="fas fa-check font-size-7 text-dodgerblue mr-6"></i>Completely responsive
                  </li>
                  <li class="font-weight-normal font-size-10 text-default-color-2 border-0 d-flex mb-0">
                    <i class="fas fa-check font-size-7 text-dodgerblue mr-6"></i>Easy to customize
                  </li>
                </ul>
                <!-- content-3 list end -->
              </div>
              <!-- content-3 end -->
            </div>
          </div>
        </div>
      </div>
      <!-- content-3 section end -->
      <!-- features-section start -->
      <div class="bg-bigstone pt-lg-25 pt-15 pb-lg-20 pb-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10 px-lg-12 col-md-12 col-sm-9">
              <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                  <!-- content-1 section-title start -->
                  <div class="section-title mb-lg-25 mb-15">
                    <h2
                      class="font-size-14 font-family-1 line-height-1p3 font-wieght-bold text-white mb-7 pr-lg-0 pr-md-22">
                      One Software, Every Solution
                    </h2>
                    <p class="font-size-9 letter-spacing-np4 gr-color-white-opacity-9 mb-lg-15 px-lg-9">We designed and
                      tested prototypes that helped identify pain points in the account creation process. Together, we
                      shaped the new standard.</p>
                  </div>
                  <!-- content-1 section-title end -->
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                  <!-- media start -->
                  <div class="media rounded-5 mb-3 pl-lg-9 pr-xl-9 mb-14 ">
                    <!-- media img start -->
                    <div class="square-60 bg-dodgerblue rounded-5">
                      <!-- <img src="image/l2/svg/pencil@2x.svg" class="" alt="..."> -->
                      <i class="icon icon-pen-01 text-white font-size-12"></i>
                    </div>
                    <!-- media img end -->
                    <!-- media-body start -->
                    <div class="media-body pl-sm-8 pl-5">
                      <h5 class="font-size-9 font-family-1 font-wieght-bold text-white line-height-reset mt-0 mb-5">Easy
                        to Use</h5>
                      <p class="font-size-5 letter-spacing-np4 line-height-1p86 text-heather mb-0">Whether it’s a small
                        internal app or a new for millions of customers, our design and development teams.</p>
                    </div>
                    <!-- media-body end -->
                  </div>
                  <!-- media end -->
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                  <!-- media start -->
                  <div class="media rounded-5 mb-3 pl-lg-9 pr-xl-9 mb-14 ">
                    <!-- media img start -->
                    <div class="square-60 bg-dodgerblue rounded-5">
                      <!-- <img src="image/l2/svg/layers-3@2x.svg" class="" alt="..."> -->
                      <i class="icon icon-layers-3 text-white font-size-12"></i>
                    </div>
                    <!-- media img end -->
                    <!-- media-body start -->
                    <div class="media-body pl-sm-8 pl-5">
                      <h5 class="font-size-9 font-family-1 font-wieght-bold text-white line-height-reset mt-0 mb-5">300+
                        Blocks</h5>
                      <p class="font-size-5 letter-spacing-np4 line-height-1p86 text-heather mb-0">Whether it’s a small
                        internal app or a new for millions of customers, our design and development teams.</p>
                    </div>
                    <!-- media-body end -->
                  </div>
                  <!-- media end -->
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                  <!-- media start -->
                  <div class="media rounded-5 mb-3 pl-lg-9 pr-xl-9 mb-14 ">
                    <!-- media img start -->
                    <div class="square-60 bg-dodgerblue rounded-5">
                      <!-- <img src="image/l2/svg/responsive@2x.svg" class="" alt="..."> -->
                      <i class="icon icon-office text-white font-size-12"></i>
                    </div>
                    <!-- media img end -->
                    <!-- media-body start -->
                    <div class="media-body pl-sm-8 pl-5">
                      <h5 class="font-size-9 font-family-1 font-wieght-bold text-white line-height-reset mt-0 mb-5">100%
                        Responsive</h5>
                      <p class="font-size-5 letter-spacing-np4 line-height-1p86 text-heather mb-0">Whether it’s a small
                        internal app or a new for millions of customers, our design and development teams.</p>
                    </div>
                    <!-- media-body end -->
                  </div>
                  <!-- media end -->
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                  <!-- media start -->
                  <div class="media rounded-5 mb-3 pl-lg-9 pr-xl-9 mb-14 ">
                    <!-- media img start -->
                    <div class="square-60 bg-dodgerblue rounded-5">
                      <!-- <img src="image/l2/svg/book-open-2@2x.svg" class="" alt="..."> -->
                      <i class="icon icon-book-open-2 text-white font-size-12"></i>
                    </div>
                    <!-- media img end -->
                    <!-- media-body start -->
                    <div class="media-body pl-sm-8 pl-5">
                      <h5 class="font-size-9 font-family-1 font-wieght-bold text-white line-height-reset mt-0 mb-5">Rich
                        Documentation</h5>
                      <p class="font-size-5 letter-spacing-np4 line-height-1p86 text-heather mb-0">Whether it’s a small
                        internal app or a new for millions of customers, our design and development teams.</p>
                    </div>
                    <!-- media-body end -->
                  </div>
                  <!-- media end -->
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                  <!-- media start -->
                  <div class="media rounded-5 mb-3 pl-lg-9 pr-xl-9 mb-14 ">
                    <!-- media img start -->
                    <div class="square-60 bg-dodgerblue rounded-5">
                      <!-- <img src="image/l2/svg/window-paragraph@2x.svg" class="" alt="..."> -->
                      <i class="icon icon-pen-01 text-white font-size-12"></i>
                    </div>
                    <!-- media img end -->
                    <!-- media-body start -->
                    <div class="media-body pl-sm-8 pl-5">
                      <h5 class="font-size-9 font-family-1 font-wieght-bold text-white line-height-reset mt-0 mb-5">50+
                        Ready Pages</h5>
                      <p class="font-size-5 letter-spacing-np4 line-height-1p86 text-heather mb-0">Whether it’s a small
                        internal app or a new for millions of customers, our design and development teams.</p>
                    </div>
                    <!-- media-body end -->
                  </div>
                  <!-- media end -->
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                  <!-- media start -->
                  <div class="media rounded-5 mb-3 pl-lg-9 pr-xl-9 mb-14 ">
                    <!-- media img start -->
                    <div class="square-60 bg-dodgerblue rounded-5">
                      <!-- <img src="image/l2/svg/l-settings@2x.svg" class="" alt="..."> -->
                      <i class="icon icon-settings-gear-64-2 text-white font-size-12"></i>
                    </div>
                    <!-- media img end -->
                    <!-- media-body start -->
                    <div class="media-body pl-sm-8 pl-5">
                      <h5 class="font-size-9 font-family-1 font-wieght-bold text-white line-height-reset mt-0 mb-5">
                        Quick Setup</h5>
                      <p class="font-size-5 letter-spacing-np4 line-height-1p86 text-heather mb-0">Whether it’s a small
                        internal app or a new for millions of customers, our design and development teams.</p>
                    </div>
                    <!-- media-body end -->
                  </div>
                  <!-- media end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- features-section end -->
      <!-- Testimonial Section -->
      <div class="pt-lg-24 pt-md-15 pt-13 pb-lg-26 pb-md-19 pb-13">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
              <!-- section-title start -->
              <div class="section-title text-center mb-15">
                <h2
                  class="font-size-14 font-family-1 line-height-1p3 font-wieght-bold heading-default-color mb-9 pr-lg-0 pr-md-22">
                  30,000+ Customers Trust Us
                </h2>
                <p class="font-size-9 letter-spacing-np4 line-height-1p714 heading-default-color px-lg-19">We designed
                  and tested prototypes that helped
                  identify pain points in the account creation process. Together, we shaped the new standard.</p>
              </div>
              <!-- section-title end -->
            </div>
          </div>
          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <div class="col-xl-10 col-lg-12 col-sm-11 col-md-8">
              <div class="testimonial-slider mx-lg-9">
                <!-- single slider start -->
                <div class="single-slide mx-6 focus-reset">
                  <!-- testimonial-card start -->
                  <div class="testimonial-card rounded pt-8 pb-9">
                    <p
                      class="font-size-7 letter-spacing-np4 line-height-1p7 text-default-color-3 mb-lg-11 pb-5 pr-lg-7 pr-sm-9">
                      <span class="d-inline-block quote-size-1">“</span>You made it so simple. My new site is so much
                      faster
                      and easier to work with than my old site. I just choose the page, make the change and click save.
                      Thanks, guys!”
                    </p>
                    <!-- media start -->
                    <div class="media ml-1 align-items-center">
                      <!-- customer-img start -->
                      <div class="customer-img mr-4">
                        <img src="image/l2/png/client-img-2.png" alt="" class="circle-size-41 w-100">
                      </div>
                      <!-- customer-img end -->
                      <!-- media-body start -->
                      <div class="media-body pl-4">
                        <h5
                          class="font-size-5 font-family-1 line-height-1p86 font-weight-bold text-default-color-2 mb-0">
                          Sallie Lawson</h5>
                        <p
                          class="font-size-4 letter-spacing-np64 line-height-1p86 font-weight-normal text-dovegray mb-0">
                          Founder of Crips</p>
                      </div>
                      <!-- media-body end -->
                    </div>
                    <!-- media end -->
                  </div>
                  <!-- testimonial-card end -->
                </div>
                <!-- single slider end -->
                <!-- single slider start -->
                <div class="single-slide mx-6 focus-reset">
                  <!-- testimonial-card start -->
                  <div class="testimonial-card rounded pt-8 pb-9">
                    <p
                      class="font-size-7 letter-spacing-np4 line-height-1p7 text-default-color-3 mb-lg-11 pb-5 pr-lg-7 pr-sm-9">
                      <span class="d-inline-block quote-size-1">“</span>You made it so simple. My new site is so much
                      faster
                      and easier to work with than my old site. I just choose the page, make the change and click save.
                      Thanks, guys!”
                    </p>
                    <!-- media start -->
                    <div class="media ml-1 align-items-center">
                      <!-- customer-img start -->
                      <div class="customer-img mr-4">
                        <img src="image/l2/png/client-img-1.png" alt="" class="circle-size-41 w-100">
                      </div>
                      <!-- customer-img end -->
                      <!-- media-body start -->
                      <div class="media-body pl-4">
                        <h5
                          class="font-size-5 font-family-1 line-height-1p86 font-weight-bold text-default-color-2 mb-0">
                          Ella Brooks</h5>
                        <p
                          class="font-size-4 letter-spacing-np64 line-height-1p86 font-weight-normal text-dovegray mb-0">
                          Founder of Crips</p>
                      </div>
                      <!-- media-body end -->
                    </div>
                    <!-- media end -->
                  </div>
                </div>
                <!-- single slider end -->
                <!-- single slider start -->
                <div class="single-slide mx-6 focus-reset">
                  <!-- testimonial-card start -->
                  <div class="testimonial-card rounded pt-8 pb-9">
                    <p
                      class="font-size-7 letter-spacing-np4 line-height-1p7 text-default-color-3 mb-lg-11 pb-5 pr-lg-7 pr-sm-9">
                      <span class="d-inline-block quote-size-1">“</span> You made it so simple. My new site is so much
                      faster
                      and easier to work with than my old site. I just choose the page, make the change and click save.
                      Thanks, guys!”
                    </p>
                    <!-- media start -->
                    <div class="media ml-1 align-items-center">
                      <!-- customer-img start -->
                      <div class="customer-img mr-4">
                        <img src="image/l2/png/client-img-2.png" alt="" class="circle-size-41 w-100">
                      </div>
                      <!-- customer-img end -->
                      <!-- media-body start -->
                      <div class="media-body pl-4">
                        <h5
                          class="font-size-5 font-family-1 line-height-1p86 font-weight-bold text-default-color-2 mb-0">
                          Sallie Lawson</h5>
                        <p
                          class="font-size-4 letter-spacing-np64 line-height-1p86 font-weight-normal text-dovegray mb-0">
                          Founder of Crips</p>
                      </div>
                      <!-- media-body end -->
                    </div>
                    <!-- media end -->
                  </div>
                  <!-- testimonial-card end -->
                </div>
                <!-- single slider end -->
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial Section end -->
      </div>
      <!-- newsletter-area start -->
      <div class="pb-lg-15 pb-9">
        <div class="container">
          <div
            class="row justify-content-center pt-lg-24 pt-15 pb-lg-23 pb-15 bg-black position-relative rounded-5 z-index-1">
            <div class="pos-abs-tl w-100 h-100 bg-dodgerblue rotate-n4 rounded-5 " data-aos="newsletter-animaion"
              data-aos-once="true"></div>
            <div class="col-lg-7 text-center px-lg-0">
              <!-- features-1 section-title start -->
              <span
                class="tagline font-size-3 font-weight-bold letter-spacing-2p63 text-uppercase text-white line-height-reset mb-6">Try
                our free software!</span>
              <h2
                class="font-size-17 font-family-1 font-weight-bold letter-spacing-n2p53 line-height-48 text-white mb-7">
                Try our free software!</h2>
              <p class="text-white font-size-7 letter-spacing-np4 line-height-1p7 mb-13 px-md-12">We designed and tested
                prototypes that helped identify pain points in the account creation process. Together, we shaped the new
                standard.</p>
              <!-- features-1 section-title end -->
              <div class="btn-area">
                <a href="#"
                  class="btn btn-xxl font-size-7 text-white letter-spacing-n1 font-weight-bold border-white border-width-2 text-capitalize mb-3"><i
                    class="fas fa-download d-inline-block mr-6 font-size-3"></i> Download Free Trial</a>
              </div>
              <p class="text-white font-size-3 text-center d-inline-block">No credit card required</p>
            </div>
          </div>
        </div>
      </div>
      <!-- newsletter-area end -->
      <!-- footer-header start -->
      <div class=" position-relative site-header--menu-center scrolling reveal-header pt-6 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 px-0">
              <nav class="navbar site-navbar d-md-flex d-block text-center px-0">
                <!-- Brand Logo start-->
                <div class="brand-logo">
                  <a href="landing-1.html">
                    <!-- light version logo (logo must be black)-->
                    <img src="image/png/logo-blue.png" alt="" class="light-version-logo">
                    <!-- Dark version logo (logo must be White)-->
                  </a>
                </div>
                <!-- Brand Logo start-->
                <!-- footer-menu start-->
                <div class="footer-menu">
                  <!-- navbar-nav-wrapper start-->
                  <div class="navbar-nav-wrapper">
                    <!-- main-menu start-->
                    <ul class="navbar-nav main-menu flex-row justify-content-center">
                      <li class="nav-item mx-lg-0 mx-3">
                        <a class="nav-link" href="#features">About</a>
                      </li>
                      <li class="nav-item mx-lg-0 mx-3">
                        <a class="nav-link" href="#features">Features</a>
                      </li>
                      <li class="nav-item mx-lg-0 mx-3">
                        <a class="nav-link" href="#features"> Works</a>
                      </li>
                      <li class="nav-item mx-lg-0 mx-3">
                        <a class="nav-link" href="#career">Career</a>
                      </li>
                      <li class="nav-item mx-lg-0 mx-3">
                        <a class="nav-link" href=" https://grayic.com/html-support/" role="button"
                          aria-expanded="false">Contact</a>
                      </li>
                    </ul>
                    <!-- main-menu end-->
                  </div>
                  <!-- navbar-nav-wrapper end-->
                </div>
                <!-- footer-menu end-->
                <div class="ml-auto pr-2 ml-lg-12 ml-md-0">
                  <!-- widget social icon start -->
                  <div class="social-icons">
                    <!-- widget social icon list start -->
                    <ul class="pl-0 list-unstyled mb-lg-6 mb-0">
                      <li class="d-inline-block px-3 ml-3"><a href="#" class="hover-color-primary text-mineshaft"><i
                            class="fab fa-facebook-f font-size-3 pt-2"></i></a></li>
                      <li class="d-inline-block px-3 ml-3"><a href="#" class="hover-color-primary text-mineshaft"><i
                            class="fab fa-twitter font-size-3 pt-2"></i></a></li>
                      <li class="d-inline-block px-3 ml-3"><a href="#" class="hover-color-primary text-mineshaft"><i
                            class="fab fa-linkedin-in font-size-3 pt-2"></i></a></li>
                    </ul>
                    <!-- widget social icon list end -->
                  </div>
                  <!-- widget social icon end -->
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- cta section -->
      <footer class="footerpt-lg-8 pb-9">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <!-- DO NOT DELETE THIS CREDIT. TO DELETE, PLEASE BUY PRO LICENSE -->
              <p class="font-size-4 letter-spacing-np64 line-height-reset mb-0"> &copy; Grayic 2021 All right reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Vendor Scripts -->
  <script src="{{ asset('/homepage/js/vendor.min.js') }}"></script>
  <!-- Plugin's Scripts -->
  <script src="{{ asset('/homepage/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('/homepage/plugins/nice-select/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('/homepage/plugins/aos/aos.min.js') }}"></script>
  <script src="{{ asset('/homepage/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('/homepage/plugins/counter-up/jquery.waypoints.js') }}"></script>
  <script src="{{ asset('/homepage/plugins/counter-up/jquery.counterup.js') }}"></script>
  <script src="{{ asset('/homepage/plugins/theme-mode-switcher/gr-theme-mode-switcher.js') }}"></script>
  <!-- Activation Script -->
  <script src="{{ asset('/homepage/js/custom.js') }}"></script>
</body>

</html>