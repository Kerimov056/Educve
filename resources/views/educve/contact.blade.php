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
              <span>Call: <a href="tel:99066789768">990 66789 768</a></span>
            </li>
            <li>
              <img src="{{ asset('assets/img/icons/envlop.svg') }}" alt="">
              <span>Email: <a href="mailto:support@educat.com">support@educat.com</a></span>
            </li>
          </ul>
        </div>
        <div class="td_top_header_right">
          <span>
            <a href="signin.html">Login</a> / 
            <a href="signup.html">Register</a>
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
            <svg width="142" height="50" viewBox="0 0 142 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <!-- SVG Content Omitted for Brevity -->
            </svg>
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
                    <ul class="td_mega_wrapper">
                      <li class="menu-item-has-children">
                        <h4>Inner Pages</h4>
                        <ul>
                          <li><a href="event.html">Upcoming Event</a></li>
                          <li><a href="event-details.html">Event Details</a></li>
                          <li><a href="team-members.html">Team Members</a></li>
                          <li><a href="team-member-details.html">Team Details</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <h4>Inner Pages</h4>
                        <ul>
                          <li><a href="students-registrations.html">Students Registrations</a></li>
                          <li><a href="instructor-registrations.html">Instructor Registrations</a></li>
                          <li><a href="signup.html">Signup</a></li>
                          <li><a href="signin.html">Signin</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <h4>Shop Pages</h4>
                        <ul>
                          <li><a href="faqs.html">Faqs</a></li>
                          <li><a href="cart.html">Cart</a></li>
                          <li><a href="checkout.html">Checkout</a></li>
                          <li><a href="error.html">Error</a></li>
                        </ul>
                      </li>
                    </ul>
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
      <h1 class="td_white_color td_fs_48 td_mb_10">Contact</h1>
      <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold td_white_color">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Contact</li>
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


<!-- Start Contact Section -->
<section>
  <div class="td_height_120 td_height_lg_80"></div>
  <div class="container">
    <div class="row">
      <div class="col-xxl-10 offset-xxl-1">
        <div class="row align-items-center td_gap_y_40">
          <div class="col-lg-7">
            <img src="{{ asset('assets/img/others/contact_img.jpg') }}" alt="" class="w-100">
          </div>
          <div class="col-xl-4 offset-xl-1 col-lg-5">
            <div class="td_contact_info">
              <div class="td_section_heading td_style_2 td_mb_20">
                <h2 class="td_contact_info_title td_fs_36 mb-0">Our Office Address</h2>
              </div>
              <div class="td_mb_40">
                <h2 class="td_fs_24 td_semibold td_mb_20">USA Campus</h2>
                <p class="td_fs_18 td_heading_color td_medium td_mb_10">100 Wilshire Blvd, Suite 700 Santa Monica, CA 90401, USA</p>
                <p class="td_fs_18 td_heading_color td_medium td_mb_10 td_opacity_7">
                  <a href="tel:+1(310)620-8565">+1 (310) 620-8565</a>
                </p>
                <p class="td_fs_18 td_heading_color td_medium mb-0 td_opacity_7">
                  <a href="mailto:info@gmail.com">info@gmail.com</a>
                </p>
              </div>
              <div>
                <h2 class="td_fs_24 td_semibold td_mb_20">Monica Campus</h2>
                <p class="td_fs_18 td_heading_color td_medium td_mb_10">100 Wilshire Blvd, Suite 700 Santa Monica, CA 90401, USA</p>
                <p class="td_fs_18 td_heading_color td_medium td_mb_10 td_opacity_7">
                  <a href="tel:+1(310)620-8565">+1 (310) 620-8565</a>
                </p>
                <p class="td_fs_18 td_heading_color td_medium mb-0 td_opacity_7">
                  <a href="mailto:info@gmail.com">info@gmail.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="td_height_120 td_height_lg_80"></div>
  <div class="td_map">
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen=""></iframe>
  </div>
</section>
<!-- End Contact Section -->

