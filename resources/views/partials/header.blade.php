<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeDox">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Site Title -->
    <title>Educve | Online Education Platform</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>




  <body>
    <!-- Start Preloader -->
    <div class="td_preloader">
      <div class="td_preloader_in">
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- End Preloader -->


    {{-- resources/views/partials/header.blade.php --}}
<header class="td_site_header td_style_1 td_type_2 td_sticky_header td_medium td_heading_color">
  <div class="td_top_header td_heading_bg td_white_color">
    <div class="container">
      <div class="td_top_header_in">
        <div class="td_top_header_left">
          <ul class="td_header_contact_list td_mp_0 td_normal">
            <li>
              <img src="{{ asset('assets/img/icons/call.svg') }}" alt="">
              <span>Call: <a href="tel:99066789768">990 66789 768</a></span>
            </li>
            <li>
              <img src="{{ asset('assets/img/icons/envlop.svg') }}" alt="">
              <span>Email: <a href="mailto:support@educat.com">support@educat.com</a></span>
            </li>
          </ul>
        </div>

        <div class="td_top_header_right">
          @guest
            <span>
              <a href="{{ route('auth.show','login') }}" class="">Login</a> /
              <a href="{{ route('auth.show','register') }}" class="">Register</a>
            </span>
          @endguest

          @auth
            <div class="d-inline-flex align-items-center gap-3">
              <span class="td_medium">{{ Auth::user()->name }}</span>
              <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="td_btn td_style_1 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Logout</span>
                  </span>
                </button>
              </form>
            </div>
          @endauth
        </div>
      </div>
    </div>
  </div>

  <div class="td_main_header">
    <div class="container">
      <div class="td_main_header_in">
        <div class="td_main_header_left">
          <a class="td_site_branding td_accent_color" href="{{ route('home') }}">
            {{-- LOGO --}}
            <svg width="142" height="50" viewBox="0 0 142 50" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Educve">
              <path d="M59.896 34V16.96H70.504V20.272H63.376V23.776H69.064V27.088H63.376V30.688H70.504V34H59.896Z" fill="#00001B"/>
              <circle cx="25" cy="25" r="25" fill="currentColor"/>
            </svg>
          </a>

          <div class="td_header_category_wrap position-relative">
            <button class="td_header_dropdown_btn td_medium td_heading_color">
              <img src="{{ asset('assets/img/icons/menu-square.svg') }}" alt="" class="td_header_dropdown_btn_icon">
              <span>All Category</span>
              <span class="td_header_dropdown_btn_tobble_icon td_center">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 5C9 5 6.054 1 5 1S1 5 1 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <ul class="td_header_dropdown_list td_mp_0">
              <li><a href="{{ route('courses-grid-view') }}">Data Science</a></li>
              <li><a href="{{ route('courses-grid-view') }}">Design</a></li>
              <li><a href="{{ route('courses-grid-view') }}">Development</a></li>
              <li><a href="{{ route('courses-grid-view') }}">Architecture</a></li>
              <li><a href="{{ route('courses-grid-view') }}">Life Style</a></li>
              <li><a href="{{ route('courses-grid-view') }}">Marketing</a></li>
              <li><a href="{{ route('courses-grid-view') }}">Photography</a></li>
              <li><a href="{{ route('courses-grid-view') }}">Motivation</a></li>
            </ul>
          </div>
        </div>

        <div class="td_main_header_right">
          <nav class="td_nav">
            <div class="td_nav_list_wrap">
              <div class="td_nav_list_wrap_in">
                <ul class="td_nav_list">
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="{{ route('courses-grid-view') }}">Courses</a></li>
                  <li><a href="{{ route('about') }}">About</a></li>
                  <li><a href="{{ route('event') }}">Events</a></li>
                  <li><a href="{{ route('faqs') }}">Faqs</a></li>
                  <li><a href="{{ route('blog') }}">Blogs</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="td_hero_icon_btns position-relative">
            <div class="position-relative">
              <button class="td_circle_btn td_center td_search_tobble_btn" type="button">
                <img src="{{ asset('assets/img/icons/search_2.svg') }}" alt="">
              </button>
              <div class="td_header_search_wrap">
                <form action="#" class="td_header_search">
                  <input type="text" class="td_header_search_input" placeholder="Search For Anything">
                  <button class="td_header_search_btn td_center">
                    <img src="{{ asset('assets/img/icons/search_2.svg') }}" alt="">
                  </button>
                </form>
              </div>
            </div>

            <button class="td_circle_btn td_center td_wishlist_btn" type="button">
              <img src="{{ asset('assets/img/icons/love.svg') }}" alt="">
              <span class="td_circle_btn_label">0</span>
            </button>

            <button class="td_circle_btn td_center" type="button">
              <img src="{{ asset('assets/img/icons/cart.svg') }}" alt="">
              <span class="td_circle_btn_label">0</span>
            </button>

            {{-- İstəsən profil menyusu (auth üçün) --}}
            @auth
              <div class="position-relative ms-2">
                <button class="td_circle_btn td_center" type="button" aria-label="Profile">
                  <img src="{{ asset('assets/img/icons/user.svg') }}" alt="User">
                </button>
                <div class="td_header_search_wrap" style="right:0;left:auto;">
                  <div class="p-3 td_white_bg td_radius_10 td_shadow" style="min-width:200px">
                    <div class="td_mb_10 td_medium">{{ Auth::user()->name }}</div>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="td_btn td_style_1 td_medium w-100">
                        <span class="td_btn_in td_white_color td_accent_bg">
                          <span>Logout</span>
                        </span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
