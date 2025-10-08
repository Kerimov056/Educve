@extends('layouts.app')

@section('content')
    <!-- Start Header Section -->
    <header class="td_site_header td_style_1 td_type_2 td_sticky_header td_medium td_heading_color">
      <div class="td_top_header td_heading_bg td_white_color">
        <div class="container">
          <div class="td_top_header_in">
            <div class="td_top_header_left">
              <ul class="td_header_contact_list td_mp_0 td_normal">
                <li>
                  <img src="{{ asset('assets/img/icons/call.svg') }}" alt="Call">
                  <span>
                    Call: <a href="tel:99066789768">990 66789 768</a>
                  </span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/envlop.svg') }}" alt="Envelope">
                  <span>
                    Email: <a href="mailto:support@educat.com">support@educat.com</a>
                  </span>
                </li>
              </ul>
            </div>
            <div class="td_top_header_right">
              <span>
                <a href="{{ route('auth.show','login') }}" class="">Login</a> /
                <a href="{{ route('auth.show','register') }}" class="">Register</a>
              </span>
              <a href="#" class="td_btn td_style_1 td_medium">
                <span class="td_btn_in td_white_color td_accent_bg">
                  <span>Apply Now</span>
                  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="td_main_header">
        <div class="container">
          <div class="td_main_header_in">
            <div class="td_main_header_left">
              <a class="td_site_branding td_accent_color" href="{{ route('home') }}">
                {{-- LOGO SVG buradadır (toxunmadım) --}}
                <svg width="142" height="50" viewBox="0 0 142 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M59.896 34V16.96H70.504V20.272H63.376V23.776H69.064V27.088H63.376V30.688H70.504V34H59.896Z" fill="#00001B"/>
                  <circle cx="25" cy="25" r="25" fill="currentColor"/>
                  <!-- qısaltdım -->
                </svg>
              </a>

              <div class="td_header_category_wrap position-relative">
                <button class="td_header_dropdown_btn td_medium td_heading_color">
                  <img src="{{ asset('assets/img/icons/menu-square.svg') }}" alt="Menu" class="td_header_dropdown_btn_icon">
                  <span>All Category</span>
                  <span class="td_header_dropdown_btn_tobble_icon td_center">
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 5C9 5 6.054 1 5 1C3.946 1 1 5 1 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
                      <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">Home</a>
                        <ul>
                          <li><a href="{{ route('home') }}">University</a></li>
                          <li><a href="{{ route('home') }}">Online Educations</a></li>
                          <li><a href="{{ route('home') }}">Education</a></li>
                          <li><a href="{{ route('home') }}">Kindergarten</a></li>
                          <li><a href="{{ route('home') }}">Modern Language</a></li>
                          <li><a href="{{ route('home') }}">Al-Quran Learning</a></li>
                          <li><a href="{{ route('home') }}">Motivation Speaker</a></li>
                          <li><a href="{{ route('home') }}">Kitchen Coach</a></li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a href="{{ route('courses-grid-view') }}">Courses</a>
                        <ul>
                          <li><a href="{{ route('courses-grid-view') }}">Courses Grid View</a></li>
                          <li><a href="#">Courses List View</a></li>
                          <li><a href="{{ route('courses-grid-view') }}">Courses Grid With Sidebar</a></li>
                          <li><a href="{{ route('course-details') }}">Course Details</a></li>
                        </ul>
                      </li>

                      <li><a href="{{ route('about') }}">About</a></li>

                      <li class="menu-item-has-children td_mega_menu">
                        <a href="#">Pages</a>
                        <ul class="td_mega_wrapper">
                          <li class="menu-item-has-children">
                            <h4>Inner Pages</h4>
                            <ul>
                              <li><a href="{{ route('event') }}">Upcoming Event</a></li>
                              <li><a href="{{ route('event-details') }}">Event Details</a></li>
                              <li><a href="#">Team Members</a></li>
                              <li><a href="#">Team Details</a></li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children">
                            <h4>Inner Pages</h4>
                            <ul>
                              <li><a href="#">Students Registrations</a></li>
                              <li><a href="#">Instructor Registrations</a></li>
                              <li><a href="{{ route('auth.show','register') }}">Signup</a></li>
                              <li><a href="{{ route('auth.show','login') }}">Signin</a></li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children">
                            <h4>Shop Pages</h4>
                            <ul>
                              <li><a href="{{ route('faqs') }}">Faqs</a></li>
                              <li><a href="#">Cart</a></li>
                              <li><a href="#">Checkout</a></li>
                              <li><a href="{{ route('error') }}">Error</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a href="{{ route('blog') }}">Blogs</a>
                        <ul>
                          <li><a href="{{ route('blog') }}">Blogs</a></li>
                          <li><a href="#">Blog With Sidebar</a></li>
                          <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                        </ul>
                      </li>

                      <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                  </div>
                </div>
              </nav>

              <div class="td_hero_icon_btns position-relative">
                <div class="position-relative">
                  <button class="td_circle_btn td_center td_search_tobble_btn" type="button">
                    <img src="{{ asset('assets/img/icons/search_2.svg') }}" alt="Search">
                  </button>
                  <div class="td_header_search_wrap">
                    <form action="#" class="td_header_search">
                      <input type="text" class="td_header_search_input" placeholder="Search For Anything">
                      <button class="td_header_search_btn td_center">
                        <img src="{{ asset('assets/img/icons/search_2.svg') }}" alt="Search">
                      </button>
                    </form>
                  </div>
                </div>
                <button class="td_circle_btn td_center td_wishlist_btn" type="button">
                  <img src="{{ asset('assets/img/icons/love.svg') }}" alt="Love">
                  <span class="td_circle_btn_label">0</span>
                </button>
                <button class="td_circle_btn td_center" type="button">
                  <img src="{{ asset('assets/img/icons/cart.svg') }}" alt="Cart">
                  <span class="td_circle_btn_label">0</span>
                </button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Section -->

    <!-- Start Page Heading Section -->
    <section class="td_page_heading td_center td_bg_filed td_heading_bg text-center td_hobble"
             data-src="{{ asset('assets/img/others/page_heading_bg.jpg') }}">
      <div class="container">
        <div class="td_page_heading_in">
          <h1 class="td_white_color td_fs_48 td_mb_10">{{ $tab === 'register' ? 'Signup' : 'Signin' }}</h1>
          <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold td_white_color">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">{{ $tab === 'register' ? 'Signup' : 'Signin' }}</li>
          </ol>
        </div>
      </div>
      <div class="td_page_heading_shape_1 position-absolute td_hover_layer_3"></div>
      <div class="td_page_heading_shape_2 position-absolute td_hover_layer_5"></div>
      <div class="td_page_heading_shape_3 position-absolute">
        <img src="{{ asset('assets/img/others/page_heading_shape_3.svg') }}" alt="Shape 3">
      </div>
      <div class="td_page_heading_shape_4 position-absolute">
        <img src="{{ asset('assets/img/others/page_heading_shape_4.svg') }}" alt="Shape 4">
      </div>
      <div class="td_page_heading_shape_5 position-absolute">
        <img src="{{ asset('assets/img/others/page_heading_shape_5.svg') }}" alt="Shape 5">
      </div>
      <div class="td_page_heading_shape_6 position-absolute td_hover_layer_3"></div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Auth (Login/Register) Section -->
    <section>
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="container">

        {{-- Tab switcher --}}
        <div class="td_center td_mb_40">
          <a href="{{ route('auth.show','login') }}"
             class="td_btn td_style_1 td_radius_10 td_medium"
             style="margin-right:10px; {{ $tab==='login' ? '' : 'opacity:.6' }}">
            <span class="td_btn_in td_white_color {{ $tab==='login' ? 'td_accent_bg' : 'td_heading_bg' }}">
              <span>Sign In</span>
            </span>
          </a>

          <a href="{{ route('auth.show','register') }}"
             class="td_btn td_style_1 td_radius_10 td_medium"
             style="{{ $tab==='register' ? '' : 'opacity:.6' }}">
            <span class="td_btn_in td_white_color {{ $tab==='register' ? 'td_accent_bg' : 'td_heading_bg' }}">
              <span>Sign Up</span>
            </span>
          </a>
        </div>

        <div class="row td_gap_y_40 align-items-center">
          <div class="col-lg-6">
            <div class="td_form_card td_style_1 td_radius_10 td_gray_bg_5">
              <div class="td_form_card_in">

                {{-- REGISTER FORM --}}
                @if($tab === 'register')
                  <h2 class="td_fs_36 td_mb_20">SIGN UP</h2>
                  <hr>
                  <div class="td_height_30 td_height_lg_30"></div>

                  <form method="POST" action="{{ route('register.post') }}">
                    @csrf

                    <input type="text" name="name" value="{{ old('name') }}"
                           class="td_form_field td_mb_20 td_medium td_white_bg"
                           placeholder="Full Name *">
                    @error('name')<div class="text-danger td_mb_10">{{ $message }}</div>@enderror

                    <input type="text" name="phone" value="{{ old('phone') }}"
                           class="td_form_field td_mb_20 td_medium td_white_bg"
                           placeholder="Phone">
                    @error('phone')<div class="text-danger td_mb_10">{{ $message }}</div>@enderror

                    <input type="email" name="email" value="{{ old('email') }}"
                           class="td_form_field td_mb_20 td_medium td_white_bg"
                           placeholder="Email *">
                    @error('email')<div class="text-danger td_mb_10">{{ $message }}</div>@enderror

                    <input type="password" name="password"
                           class="td_form_field td_mb_20 td_medium td_white_bg"
                           placeholder="Password *">
                    @error('password')<div class="text-danger td_mb_10">{{ $message }}</div>@enderror

                    <input type="password" name="password_confirmation"
                           class="td_form_field td_mb_30 td_medium td_white_bg"
                           placeholder="Confirm Password *">

                    <div class="td_form_card_bottom td_mb_25 d-flex align-items-center gap-3">
                      <button type="submit" class="td_btn td_style_1 td_radius_10 td_medium">
                        <span class="td_btn_in td_white_color td_accent_bg">
                          <span>Sign Up</span>
                        </span>
                      </button>

                      <p class="td_fs_18 mb-0 td_medium td_heading_color">or sign up with</p>
                      <div class="td_form_social td_fs_20">
                        <a href="#" class="td_center"><i class="fa-brands fa-apple"></i></a>
                        <a href="#" class="td_center"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="td_center"><i class="fa-brands fa-facebook-f"></i></a>
                      </div>
                    </div>

                    <p class="td_form_card_text td_fs_18 td_medium td_heading_color mb-0">
                      Already have an account?
                      <a href="{{ route('auth.show','login') }}">Sign in</a>
                    </p>
                  </form>
                @endif

                {{-- LOGIN FORM --}}
                @if($tab === 'login')
                  <h2 class="td_fs_36 td_mb_20">SIGN IN</h2>
                  <hr>
                  <div class="td_height_30 td_height_lg_30"></div>

                  <form method="POST" action="{{ route('login.post') }}">
                    @csrf

                    <input type="email" name="email" value="{{ old('email') }}"
                           class="td_form_field td_mb_20 td_medium td_white_bg"
                           placeholder="Email *">
                    @error('email')<div class="text-danger td_mb_10">{{ $message }}</div>@enderror

                    <input type="password" name="password"
                           class="td_form_field td_mb_20 td_medium td_white_bg"
                           placeholder="Password *">
                    @error('password')<div class="text-danger td_mb_10">{{ $message }}</div>@enderror

                    <label class="d-flex align-items-center gap-2 td_mb_30">
                      <input type="checkbox" name="remember" value="1">
                      <span class="td_fs_16">Remember me</span>
                    </label>

                    <div class="td_form_card_bottom td_mb_25 d-flex align-items-center gap-3">
                      <button type="submit" class="td_btn td_style_1 td_radius_10 td_medium">
                        <span class="td_btn_in td_white_color td_accent_bg">
                          <span>Sign In</span>
                        </span>
                      </button>

                      <p class="td_fs_18 mb-0 td_medium td_heading_color">or sign in with</p>
                      <div class="td_form_social td_fs_20">
                        <a href="#" class="td_center"><i class="fa-brands fa-apple"></i></a>
                        <a href="#" class="td_center"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="td_center"><i class="fa-brands fa-facebook-f"></i></a>
                      </div>
                    </div>

                    <p class="td_form_card_text td_fs_18 td_medium td_heading_color mb-0">
                      Don’t have an account?
                      <a href="{{ route('auth.show','register') }}">Sign up</a>
                    </p>
                  </form>
                @endif

              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="td_sign_thumb">
              <img src="{{ asset('assets/img/others/login.jpg') }}" alt="Login" class="w-100 td_radius_10">
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Auth Section -->
@endsection
