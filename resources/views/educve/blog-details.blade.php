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
            <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
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
      <h1 class="td_white_color td_fs_48 td_mb_10">Blog Details</h1>
      <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold td_white_color">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Blog Details</li>
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


<!-- Start Blog Details -->
<section>
  <div class="td_height_120 td_height_lg_80"></div>
  <div class="container">
    <div class="row td_gap_y_50">
      <div class="col-lg-8">
        <div class="td_blog_details_head td_mb_40">
          <img src="{{ asset('assets/img/others/blog_details_1.jpg') }}" alt="">
          <div class="td_blog_details_head_meta">
            <div class="td_blog_details_avatar">
              <img src="{{ asset('assets/img/home_1/avatar_1.png') }}" alt="">
              <p class="mb-0 td_heading_color td_bold">
                <span class="td_normal td_opacity_5">By</span> Alexis Dowson
              </p>
            </div>
            <ul class="td_blog_details_head_meta_list td_mp_0 td_heading_color">
              <li>
                <div class="td_icon_btns">
                  <span class="td_icon_btn td_center td_heading_color">
                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.4375 0.75C3.65625 0.75 3.875 0.96875 3.875 1.1875V2.5H9.125V1.1875C9.125 0.96875 9.31641 0.75 9.5625 0.75C9.78125 0.75 10 0.96875 10 1.1875V2.5H10.875C11.832 2.5 12.625 3.29297 12.625 4.25V13C12.625 13.9844 11.832 14.75 10.875 14.75H2.125C1.14062 14.75 0.375 13.9844 0.375 13V4.25C0.375 3.29297 1.14062 2.5 2.125 2.5H3V1.1875C3 0.96875 3.19141 0.75 3.4375 0.75Z" fill="currentColor"/>
                    </svg>
                  </span>
                </div>
                January 21, 2023
              </li>
              <li>
                <div class="td_icon_btns">
                  <button type="button" class="td_icon_btn td_center td_heading_color">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                </div>
                22 Likes
              </li>
              <li>
                <div class="td_icon_btns">
                  <a href="#" class="td_icon_btn td_center td_heading_color">
                    <i class="fa-solid fa-share-nodes"></i>
                  </a>
                </div>
                8 Share
              </li>
            </ul>
          </div>
        </div>

        <div class="td_blog_details">
          <h2>University Campus Student Teachers Playing Enjoy this Time</h2>
          <p>When an unknown printer took ar galley offer type year anddey scrambled make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time.</p>
          <blockquote>
            “Urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”
          </blockquote>
          <h3>Speed Optimized</h3>
          <p>When an unknown printer took a galley of type and scrambled it to make a type specimen bookhas not only five centuries...</p>

          <div class="row">
            <div class="col-xxl-5">
              <div class="td_video_block td_style_1 td_accent_bg td_bg_filed td_center text-center" data-src="{{ asset('assets/img/home_1/video_bg.jpg') }}">
                <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="td_player_btn_wrap_2 td_video_open">
                  <span class="td_player_btn td_center"><span></span></span>
                </a>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="td_blog_details_inside_box">
                <h3>We Always Provide a Good Friendly Weather</h3>
                <p>When an unknown printer took a galley of type remaining essentially unchanged...</p>
                <ul class="td_list td_style_2 td_fs_18 td_medium td_heading_color td_mp_0">
                  <li>Online Educations Platform</li>
                  <li>Daily News Update</li>
                  <li>Budget Friendly Theme</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="td_height_50"></div>
        <div class="td_post_share">
          <div class="td_categories">
            <h4 class="mb-0 td_fs_18">Tags:</h4>
            <a href="#" class="td_category">Motion</a>
            <a href="#" class="td_category">Graphic</a>
            <a href="#" class="td_category">Video</a>
          </div>
          <div class="td_footer_social_btns td_fs_18 td_accent_color">
            <a href="#" class="td_center"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="td_center"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" class="td_center"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="td_center"><i class="fa-brands fa-pinterest-p"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="td_left_sidebar">
          <div class="td_sidebar_widget">
            <h3 class="td_sidebar_widget_title td_fs_20 td_mb_30">Search Here</h3>
            <form action="#" class="td_sidebar_search">
              <input type="text" placeholder="Keywords" class="td_sidebar_search_input">
              <button type="submit" class="td_sidebar_search_btn td_center">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>

          <div class="td_sidebar_widget">
            <h3 class="td_sidebar_widget_title td_fs_20 td_mb_30">Recent Post</h3>
            <ul class="td_recent_post_list td_mp_0">
              <li>
                <a href="blog-details.html"><img src="{{ asset('assets/img/home_1/post_1.jpg') }}" alt=""></a>
                <p>Need to avoid redirect couple our design</p>
              </li>
              <li>
                <a href="blog-details.html"><img src="{{ asset('assets/img/home_1/post_2.jpg') }}" alt=""></a>
                <p>Comprehensive student guide for new educations</p>
              </li>
              <li>
                <a href="blog-details.html"><img src="{{ asset('assets/img/home_1/post_3.jpg') }}" alt=""></a>
                <p>Overview of the new education system for students</p>
              </li>
            </ul>
          </div>

          <div class="td_sidebar_widget">
            <h3 class="td_sidebar_widget_title td_fs_20 td_mb_30">Tags</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">Educations</a>
              <a href="#" class="tag-cloud-link">University</a>
              <a href="#" class="tag-cloud-link">School</a>
              <a href="#" class="tag-cloud-link">Agency</a>
              <a href="#" class="tag-cloud-link">Travel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="td_height_120 td_height_lg_80"></div>
</section>
<!-- End Blog Details -->

