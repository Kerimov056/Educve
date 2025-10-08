@extends('layouts.app')

<!-- Start Header Section -->
<header class="td_site_header td_style_1 td_type_2 td_sticky_header td_medium td_heading_color">
  <div class="td_top_header td_heading_bg td_white_color">
    <div class="container">
      <div class="td_top_header_in">
        <div class="td_top_header_left">
          <ul class="td_header_contact_list td_mp_0 td_normal">
            <li>
              <img src="{{ asset('assets/img/icons/call.svg') }}" alt="">
              <span>
                Call: <a href="tel:99066789768">990 66789 768</a>
              </span>
            </li>
            <li>
              <img src="{{ asset('assets/img/icons/envlop.svg') }}" alt="">
              <span>
                Email: <a href="mailto:support@educat.com">support@educat.com</a>
              </span>
            </li>
          </ul>
        </div>
        <div class="td_top_header_right">
          <span>
            <a href="signin.html" class="">Login</a> /
            <a href="signup.html" class="">Register</a>
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
          <a class="td_site_branding td_accent_color" href="index.html">
            <!-- SVG logo unchanged -->
          </a>
          <div class="td_header_category_wrap position-relative">
            <button class="td_header_dropdown_btn td_medium td_heading_color">
              <img src="{{ asset('assets/img/icons/menu-square.svg') }}" alt="" class="td_header_dropdown_btn_icon">
              <span>All Category</span>
              <span class="td_header_dropdown_btn_tobble_icon td_center">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 4.99997C9 4.99997 6.05404 1.00001 4.99997 1C3.94589 0.999991 1 5 1 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <ul class="td_header_dropdown_list td_mp_0">
              <li><a href="courses-grid-view.html">Data Science</a></li>
              <li><a href="courses-grid-view.html">Design</a></li>
              <li><a href="courses-grid-with-sidebar.html">Development</a></li>
              <li><a href="courses-grid-view.html">Architecture</a></li>
              <li><a href="courses-grid-with-sidebar.html">Life Style</a></li>
              <li><a href="courses-grid-with-sidebar.html">Marketing</a></li>
              <li><a href="courses-grid-with-sidebar.html">Photography</a></li>
              <li><a href="courses-grid-with-sidebar.html">Motivation</a></li>
            </ul>
          </div>
        </div>
        <div class="td_main_header_right">
          <nav class="td_nav">
            <div class="td_nav_list_wrap">
              <div class="td_nav_list_wrap_in">
                <ul class="td_nav_list">
                  <li class="menu-item-has-children">
                    <a href="index.html">Home</a>
                    <ul>
                      <li><a href="index.html">University</a></li>
                      <li><a href="home-v2.html">Online Educations</a></li>
                      <li><a href="home-v3.html">Education</a></li>
                      <li><a href="home-v4.html">Kindergarten</a></li>
                      <li><a href="home-v5.html">Modern Language</a></li>
                      <li><a href="home-v6.html">Al-Quran Learning</a></li>
                      <li><a href="home-v7.html">Motivation Speaker</a></li>
                      <li><a href="home-v8.html">Kitchen Coach</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="products.html">Courses</a>
                    <ul>
                      <li><a href="courses-grid-view.html">Courses Grid View</a></li>
                      <li><a href="courses-list-view.html">Courses List View</a></li>
                      <li><a href="courses-grid-with-sidebar.html">Courses Grid With Sidebar</a></li>
                      <li><a href="course-details.html">Course Details</a></li>
                    </ul>
                  </li>
                  <li><a href="about.html">About</a></li>
                  <li class="menu-item-has-children td_mega_menu">
                    <a href="#">Pages</a>
                    <!-- Inner menus unchanged -->
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Blogs</a>
                    <ul>
                      <li><a href="blog.html">Blogs</a></li>
                      <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header Section -->




<!-- Start Page Heading Section -->
<section class="td_page_heading td_center td_bg_filed td_heading_bg text-center td_hobble" data-src="{{ asset('assets/img/others/page_heading_bg.jpg') }}">
  <div class="container">
    <div class="td_page_heading_in">
      <h1 class="td_white_color td_fs_48 td_mb_10">Courses Grid View</h1>
      <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold td_white_color">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Courses Grid View</li>
      </ol>
    </div>
  </div>
  <div class="td_page_heading_shape_1 position-absolute td_hover_layer_3"></div>
  <div class="td_page_heading_shape_2 position-absolute td_hover_layer_5"></div>
  <div class="td_page_heading_shape_3 position-absolute">
    <img src="{{ asset('assets/img/others/page_heading_shape_3.svg') }}" alt="">
  </div>
  <div class="td_page_heading_shape_4 position-absolute">
    <img src="{{ asset('assets/img/others/page_heading_shape_4.svg') }}" alt="">
  </div>
  <div class="td_page_heading_shape_5 position-absolute">
    <img src="{{ asset('assets/img/others/page_heading_shape_5.svg') }}" alt="">
  </div>
  <div class="td_page_heading_shape_6 position-absolute td_hover_layer_3"></div>
</section>
<!-- End Page Heading Section -->




    <!-- Start Courses Grid View -->
 <section>
  <div class="td_height_120 td_height_lg_80"></div>
  <div class="container">
    <div class="td_section_head_2">
      <div class="td_section_head_2_left">
        <div class="td_view_btns">
          <a href="courses-grid-view.html" class="td_view_btn td_center active">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.99902 18.0016C1.99902 16.4611 1.99902 15.6909 2.34575 15.1251C2.53977 14.8085 2.80596 14.5423 3.12256 14.3483C3.68837 14.0016 4.45859 14.0016 5.99902 14.0016C7.53946 14.0016 8.30968 14.0016 8.87549 14.3483C9.19209 14.5423 9.45828 14.8085 9.65229 15.1251C9.99902 15.6909 9.99902 16.4611 9.99902 18.0016C9.99902 19.542 9.99902 20.3122 9.65229 20.8781C9.45828 21.1947 9.19209 21.4608 8.87549 21.6549C8.30968 22.0016 7.53946 22.0016 5.99902 22.0016C4.45859 22.0016 3.68837 22.0016 3.12256 21.6549C2.80596 21.4608 2.53977 21.1947 2.34575 20.8781C1.99902 20.3122 1.99902 19.542 1.99902 18.0016Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M13.999 18.0016C13.999 16.4611 13.999 15.6909 14.3458 15.1251C14.5398 14.8085 14.806 14.5423 15.1226 14.3483C15.6884 14.0016 16.4586 14.0016 17.999 14.0016C19.5395 14.0016 20.3097 14.0016 20.8755 14.3483C21.1921 14.5423 21.4583 14.8085 21.6523 15.1251C21.999 15.6909 21.999 16.4611 21.999 18.0016C21.999 19.542 21.999 20.3122 21.6523 20.8781C21.4583 21.1947 21.1921 21.4608 20.8755 21.6549C20.3097 22.0016 19.5395 22.0016 17.999 22.0016C16.4586 22.0016 15.6884 22.0016 15.1226 21.6549C14.806 21.4608 14.5398 21.1947 14.3458 20.8781C13.999 20.3122 13.999 19.542 13.999 18.0016Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M1.99902 6.00159C1.99902 4.46115 1.99902 3.69093 2.34575 3.12512C2.53977 2.80852 2.80596 2.54233 3.12256 2.34832C3.68837 2.00159 4.45859 2.00159 5.99902 2.00159C7.53946 2.00159 8.30968 2.00159 8.87549 2.34832C9.19209 2.54233 9.45828 2.80852 9.65229 3.12512C9.99902 3.69093 9.99902 4.46115 9.99902 6.00159C9.99902 7.54202 9.99902 8.31224 9.65229 8.87805C9.45828 9.19465 9.19209 9.46084 8.87549 9.65486C8.30968 10.0016 7.53946 10.0016 5.99902 10.0016C4.45859 10.0016 3.68837 10.0016 3.12256 9.65486C2.80596 9.46084 2.53977 9.19465 2.34575 8.87805C1.99902 8.31224 1.99902 7.54202 1.99902 6.00159Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M13.999 6.00159C13.999 4.46115 13.999 3.69093 14.3458 3.12512C14.5398 2.80852 14.806 2.54233 15.1226 2.34832C15.6884 2.00159 16.4586 2.00159 17.999 2.00159C19.5395 2.00159 20.3097 2.00159 20.8755 2.34832C21.1921 2.54233 21.4583 2.80852 21.6523 3.12512C21.999 3.69093 21.999 4.46115 21.999 6.00159C21.999 7.54202 21.999 8.31224 21.6523 8.87805C21.4583 9.19465 21.1921 9.46084 20.8755 9.65486C20.3097 10.0016 19.5395 10.0016 17.999 10.0016C16.4586 10.0016 15.6884 10.0016 15.1226 9.65486C14.806 9.46084 14.5398 9.19465 14.3458 8.87805C13.999 8.31224 13.999 7.54202 13.999 6.00159Z" stroke="currentColor" stroke-width="1.5"/>
            </svg>
          </a>
          <a href="courses-list-view.html" class="td_view_btn td_center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.5 4.5V8.25C22.5 9.90454 21.1545 11.25 19.5 11.25H15.75C14.0955 11.25 12.75 9.90454 12.75 8.25V4.5C12.75 2.84546 14.0955 1.5 15.75 1.5H19.5C21.1545 1.5 22.5 2.84546 22.5 4.5Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
        <span class="td_heading_color td_medium">Showing 12 Courses Of 50</span>
      </div>
      <div class="td_section_head_2_right">
        <div class="td_section_head_select td_fs_20">
          <b class="td_semibold td_heading_color">Sort By: </b>
          <select class="td_form_field td_medium">
            <option value="0">Featured</option>
            <option value="1">Popular</option>
            <option value="2">New</option>
          </select>
        </div>
      </div>
    </div>

    <div class="td_height_60 td_height_lg_40"></div>
    <div class="row td_gap_y_30 td_row_gap_30">

         {{-- ======= COURSE CARD 1 ======= --}}
      <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="col-lg-4 col-md-6">
        <div class="td_card td_style_3 d-block td_radius_10">
          <span class="td_card_label td_accent_bg td_white_color">New</span>
          <a href="course-details.html" class="td_card_thumb">
            <img src="{{ asset('assets/img/home_1/course_thumb_1.jpg') }}" alt="">
          </a>
          <div class="td_card_info td_white_bg">
            <div class="td_card_info_in">
              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                <li>
                  <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                  <span class="td_opacity_7">150 Seats</span>
                </li>
                <li>
                  <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                  <span class="td_opacity_7">12 Semesters</span>
                </li>
              </ul>
              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Data Analytics</span></a>
              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Starting Reputed Education & Build your Skills</a></h2>
              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Far far away, behind the word mountains, far from the Consonantia.</p>
              <div class="td_card_review">
                <div class="td_rating" data-rating="4.5">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <div class="td_rating_percentage">
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                    <i class="fa-solid fa-star fa-fw"></i>
                  </div>
                </div>
                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
              </div>
              <div class="td_card_btn">
                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>Enroll Now</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


      </div>

    <div class="td_height_60 td_height_lg_40"></div>
    <div class="text-center">
      <a href="courses-grid-view.html" class="td_btn td_style_1 td_radius_10 td_medium">
        <span class="td_btn_in td_white_color td_accent_bg">
          <span>More Courses</span>
          <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
      </a>
    </div>
  </div>
  <div class="td_height_120 td_height_lg_80"></div>
</section>
<!-- End Courses Grid View -->









