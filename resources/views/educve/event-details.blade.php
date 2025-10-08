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
            <svg width="142" height="50" viewBox="0 0 142 50" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                      <li>
                        <h4>Inner Pages</h4>
                        <ul>
                          <li><a href="event.html">Upcoming Event</a></li>
                          <li><a href="event-details.html">Event Details</a></li>
                          <li><a href="team-members.html">Team Members</a></li>
                          <li><a href="team-member-details.html">Team Details</a></li>
                        </ul>
                      </li>
                      <li>
                        <h4>Registration</h4>
                        <ul>
                          <li><a href="students-registrations.html">Students Registrations</a></li>
                          <li><a href="instructor-registrations.html">Instructor Registrations</a></li>
                          <li><a href="signup.html">Signup</a></li>
                          <li><a href="signin.html">Signin</a></li>
                        </ul>
                      </li>
                      <li>
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
<section 
  class="td_page_heading td_center td_bg_filed td_heading_bg text-center td_hobble" 
  data-src="{{ asset('assets/img/others/page_heading_bg.jpg') }}">
  <div class="container">
    <div class="td_page_heading_in">
      <h1 class="td_white_color td_fs_48 td_mb_10">Event Details</h1>
      <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold td_white_color">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Event Details</li>
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




<!-- Start Event Details -->
<section>
  <div class="td_height_120 td_height_lg_80"></div>
  <div class="container">
    <div class="row td_gap_y_50">
      <div class="col-lg-8">
        <div class="td_card td_style_1 td_type_3">
          <img src="{{ asset('assets/img/home_1/event_thumb_1.jpg') }}" alt="" class="w-100 td_radius_10 td_mb_30">
          <div class="td_card_info">
            <div class="td_card_info_in">
              <div class="td_mb_30">
                <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                  <li>
                    <svg class="td_accent_color" width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.3308 11.7869H19.0049C19.3833 11.7869 19.6913 11.479 19.6913 11.1005V9.42642C19.6913 9.04795 19.3833 8.74003 19.0049 8.74003H17.3308C16.9523 8.74003 16.6444 9.04795 16.6444 9.42642V11.1005C16.6444 11.479 16.9523 11.7869 17.3308 11.7869Z" fill="currentColor"/>
                    </svg>
                    <span>Jan 23 , 2024</span>
                  </li>
                  <li>
                    <svg class="td_accent_color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.4992 15.8209C15.6472 15.9408 15.8232 15.9969 15.9992 15.9969C16.2352 15.9969 16.4672 15.8929 16.6232 15.6969C16.8992 15.3529 16.8431 14.8489 16.4992 14.5729L12.7992 11.6129V5.59686C12.7992 5.15686 12.4392 4.79688 11.9992 4.79688C11.5592 4.79688 11.1992 5.15686 11.1992 5.59686V11.9969C11.1992 12.2409 11.3112 12.4689 11.4992 12.6209L15.4992 15.8209Z" fill="currentColor"/>
                    </svg>
                    <span>10.00 am - 11.30 am</span>
                  </li>
                </ul>
              </div>

              <h2 class="td_card_title td_fs_38 td_mb_50">Education, Research & Innovate (ICERI 2024)</h2>
              <h3 class="td_fs_32 td_mb_20">About The Event</h3>
              <p class="td_mb_30 td_fs_18">Eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia.</p>
              <p class="td_mb_30 td_fs_18">Eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions.</p>

              <div class="td_mb_40">
                <ul class="td_list td_style_2 td_type_2 td_fs_18 td_medium td_heading_color td_mp_0">
                  <li>100% Better results</li>
                  <li>Building a Bright Future Together</li>
                  <li>Budget Friendly Education Theme</li>
                  <li>Empowering Children Through Education</li>
                  <li>Unlocking Potential Educations</li>
                  <li>Growing Genius Elementary School</li>
                </ul>
              </div>

              <h3 class="td_fs_32 td_mb_20">Event Locations</h3>
              <div class="td_mb_40">
                <ul class="td_card_meta td_type_2 td_mp_0 td_heading_color">
                  <li>
                    <svg class="td_accent_color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.5 1C8.98046 1 6.56411 1.96928 4.78252 3.69461C3.00094 5.41994 2.00005 7.75999 2.00005 10.2C1.99223 12.4895 2.87394 14.698 4.47004 16.387L11.0488 23.7987C11.1045 23.8618 11.1737 23.9125 11.2516 23.9473C11.3295 23.982 11.4142 24 11.5 24C11.5858 24 11.6705 23.982 11.7484 23.9473C11.8263 23.9125 11.8955 23.8618 11.9512 23.7987L18.53 16.387C20.1261 14.698 21.0078 12.4895 20.9999 10.2C20.9999 7.75999 19.9991 5.41994 18.2175 3.69461C16.4359 1.96928 14.0195 1 11.5 1Z" fill="currentColor"/>
                    </svg>
                    <span class="td_opacity_7">256, Mark Street, Newyork City</span>
                  </li>
                  <li>
                    <svg class="td_accent_color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.4992 15.8209C15.6472 15.9408 15.8232 15.9969 15.9992 15.9969C16.2352 15.9969 16.4672 15.8929 16.6232 15.6969C16.8992 15.3529 16.8431 14.8489 16.4992 14.5729L12.7992 11.6129V5.59686C12.7992 5.15686 12.4392 4.79688 11.9992 4.79688C11.5592 4.79688 11.1992 5.15686 11.1992 5.59686V11.9969C11.1992 12.2409 11.3112 12.4689 11.4992 12.6209L15.4992 15.8209Z" fill="currentColor"/>
                    </svg>
                    <span class="td_opacity_7">10.00 am - 11.30 am</span>
                  </li>
                </ul>
              </div>

              <div class="td_map">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="td_card td_style_6 td_white_bg td_radius_10">
          <img src="{{ asset('assets/img/home_1/event_thumb_5.jpg') }}" alt="" class="td_radius_10 td_mb_20 w-100">
          <h3 class="td_fs_20 td_semibold td_mb_10">Event Info</h3>
          <p class="td_mb_10 td_fs_18 td_mb_20">Eed a little help from our friends from time to time. Although we offer the one-stop</p>

          <div class="td_mb_30">
            <ul class="td_card_list td_mp_0 td_fs_18 td_semibold">
              <li><span class="td_heading_color">Cost:</span> <span class="td_accent_color">$260.00</span></li>
              <li><span class="td_heading_color">Total Slots:</span> <span class="td_accent_color">250</span></li>
              <li><span class="td_heading_color">Booked Slots:</span> <span class="td_accent_color">2</span></li>
            </ul>
          </div>

          <a href="courses-grid-view.html" class="td_btn td_style_1 td_radius_10 td_medium w-100 td_mb_20">
            <span class="td_btn_in td_white_color td_accent_bg"><span>Buy Now</span></span>
          </a>

          <p class="text-center td_fs_18 td_heading_color td_opacity_7 td_mb_15">Remaining Time For Event</p>

          <div class="td_countdown td_style_1" data-countdate="2024-04-02T03:45:26">
            <div class="td_countdown_box" title="Days"><span class="td_count_days"></span>Days</div>
            <div class="td_countdown_box" title="Hour"><span class="td_count_hours"></span>Hours</div>
            <div class="td_countdown_box" title="Minute"><span class="td_count_minutes"></span>Min</div>
            <div class="td_countdown_box" title="Second"><span class="td_count_seconds"></span>Sec</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="td_height_120 td_height_lg_80"></div>
</section>
<!-- End Event Details -->
















