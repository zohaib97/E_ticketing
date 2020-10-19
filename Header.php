<?php
include_once('connection/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Travel - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/animateform.css">
  <link rel="stylesheet" href="css/styleform.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.php"><img src="images/logo.png" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Home pages</h4>
                            <ul>
                                <li><a href="booking-all.php">Home page 1</a></li>
                                <li><a href="booking-all.php">Home page 2</a></li>
                                <li><a href="booking-tour-package.php">Home page 3</a></li>
                                <li><a href="booking-hotel.php">Home page 4</a></li>
                                <li><a href="booking-car-rentals.php">Home page 5</a></li>
                                <li><a href="booking-flight.php">Home page 6</a></li>
                                <li><a href="booking-slider.php">Home page 7</a></li>
                            </ul>
                            <h4>Tour Packages</h4>
                            <ul>
                                <li><a href="all-package.php">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                                <li><a href="honeymoon-package.php">Honeymoon Package</a></li>
                                <li><a href="group-package.php">Group Package</a></li>
                                <li><a href="weekend-package.php">WeekEnd Package</a></li>
                                <li><a href="regular-package.php">Regular Package</a></li>
                                <li><a href="custom-package.php">Custom Package</a></li>
                            </ul>
                            <h4>Sighe Seeings Pages</h4>
                            <ul>
                                <li><a href="places.php">Seight Seeing 1</a></li>
                                <li><a href="places-1.php">Seight Seeing 2</a></li>
                                <li><a href="places-2.php">Seight Seeing 3</a></li>
                            </ul>
                            <h4>User Dashboard</h4>
                            <ul>
                                <li><a href="dashboard.php">My Bookings</a></li>
                                <li><a href="db-my-profile.php">My Profile</a></li>
                                <li><a href="db-my-profile-edit.php">My Profile edit</a></li>
                                <li><a href="db-travel-booking.php">Tour Packages</a></li>
                                <li><a href="db-hotel-booking.php">Hotel Bookings</a></li>
                                <li><a href="db-event-booking.php">Event bookings</a></li>
                                <li><a href="db-payment.php">Make Payment</a></li>
                                <li><a href="db-refund.php">Cancel Bookings</a></li>
                                <li><a href="db-all-payment.php">Prient E-Tickets</a></li>
                                <li><a href="db-event-details.php">Event booking details</a></li>
                                <li><a href="db-hotel-details.php">Hotel booking details</a></li>
                                <li><a href="db-travel-details.php">Travel booking details</a></li>
                            </ul>
                            <h4>Other pages:1</h4>
                            <ul>
                                <li><a href="tour-details.php">Travel details</a></li>
                                <li><a href="hotel-details.php">Hotel details</a></li>
                                <li><a href="all-package.php">All package</a></li><li><a href="hotels-list.html">All hotels</a></li>
                                <li><a href="booking.php">Booking page</a></li>
                            </ul>
                            <h4 class="ed-dr-men-mar-top">User login pages</h4>
                            <ul>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="login.php">Login and Sign in</a></li>
                                <li><a href="forgot-pass.php">Forgot pass</a></li>
                            </ul>
                            <h4>Other pages:2</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="testimonials.php">Testimonials</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="tips.php">Tips Before Travel</a></li>
                                <li><a href="price-list.php">Price List</a></li>
                                <li><a href="discount.php">Discount</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="sitemap.php">Site map</a></li>
                                <li><a href="404.php">404 Page</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="login.php">Sign In</a>
                                </li>
                                <li><a href="signup.php">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index.php"><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="index.php">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="family-package.php" class="mm-arr">Packages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="all-package.php">
                                                            <img src="images/sight/5.jpg" alt="">
                                                            <span>Popular Package</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                                    <a href="all-package.php" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="booking-all.php">All Booking</a></li>
                                                        <li><a href="booking-tour-package.php">Tour Package Booking</a></li>
                                                        <li><a href="booking-hotel.php">Hotel Booking</a></li>
                                                        <li><a href="booking-car-rentals.php">Car Rentals Booking</a></li>
                                                        <li><a href="booking-flight.php">Flight Booking</a></li>
                                                        <li><a href="booking-slider.php">Slider Booking</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="all-package.php">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                                                        <li><a href="honeymoon-package.php">Honeymoon Package</a></li>
                                                        <li><a href="group-package.php">Group Package</a></li>
                                                        <li><a href="weekend-package.php">WeekEnd Package</a></li>
                                                        <li><a href="regular-package.php">Regular Package</a></li>
                                                        <li><a href="custom-package.php">Custom Package</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="#" class="mm-arr">Seight Seeing</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places.php">
                                                            <img src="images/sight/1.jpg" alt="">
                                                            <span>Seight Seeing - 1</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places.php" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places-1.php">
                                                            <img src="images/sight/2.jpg" alt="">
                                                            <span>Seight Seeing - 2</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places-1.php" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places-2.php">
                                                            <img src="images/sight/3.jpg" alt="">
                                                            <span>Seight Seeing - 3</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places-2.php" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places-3.php">
                                                            <img src="images/sight/4.jpg" alt="">
                                                            <span>Seight Seeing - 4</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places-3.php" class="mm-r-m-btn">Read more</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="hotels-list.php">Hotels</a></li>
                                <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                                <li class="cour-menu">
                                    <a href="#!" class="mm-arr">All Pages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="cour-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>Home pages</h4>
                                                    <ul>
                                                        <li><a href="booking-all.php">Home page 1</a></li>
                                                        <li><a href="booking-all.php">Home page 2</a></li>
                                                        <li><a href="booking-tour-package.php">Home page 3</a></li>
                                                        <li><a href="booking-hotel.php">Home page 4</a></li>
                                                        <li><a href="booking-car-rentals.php">Home page 5</a></li>
                                                        <li><a href="booking-flight.php">Home page 6</a></li>
                                                        <li><a href="booking-slider.php">Home page 7</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>Tour Packages</h4>
                                                    <ul>
                                                        <li><a href="all-package.php">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                                                        <li><a href="honeymoon-package.php">Honeymoon Package</a></li>
                                                        <li><a href="group-package.php">Group Package</a></li>
                                                        <li><a href="weekend-package.php">WeekEnd Package</a></li>
                                                        <li><a href="regular-package.php">Regular Package</a></li>
                                                        <li><a href="custom-package.php">Custom Package</a></li>
                                                    </ul>
                                                    <h4 class="ed-dr-men-mar-top">Sighe Seeings Pages</h4>
                                                    <ul>
                                                        <li><a href="places.php">Seight Seeing 1</a></li>
                                                        <li><a href="places-1.php">Seight Seeing 2</a></li>
                                                        <li><a href="places-2.php">Seight Seeing 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>User Dashboard</h4>
                                                    <ul>
                                                        <li><a href="dashboard.php">My Bookings</a></li>
                                                        <li><a href="db-my-profile.php">My Profile</a></li>
                                                        <li><a href="db-my-profile-edit.php">My Profile edit</a></li>
                                                        <li><a href="db-travel-booking.php">Tour Packages</a></li>
                                                        <li><a href="db-hotel-booking.php">Hotel Bookings</a></li>
                                                        <li><a href="db-event-booking.php">Event bookings</a></li>
                                                        <li><a href="db-payment.php">Make Payment</a></li>
                                                        <li><a href="db-refund.php">Cancel Bookings</a></li>
                                                        <li><a href="db-all-payment.php">Prient E-Tickets</a></li>
                                                        <li><a href="db-event-details.php">Event booking details</a></li>
                                                        <li><a href="db-hotel-details.php">Hotel booking details</a></li>
                                                        <li><a href="db-travel-details.php">Travel booking details</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>Other pages:1</h4>
                                                    <ul>
                                                        <li><a href="tour-details.php">Travel details</a></li>
                                                        <li><a href="hotel-details.php">Hotel details</a></li>
                                                        <li><a href="all-package.php">All package</a></li><li><a href="hotels-list.html">All hotels</a></li>
                                                        <li><a href="booking.php">Booking page</a></li>
                                                    </ul>
                                                    <h4 class="ed-dr-men-mar-top">User login pages</h4>
                                                    <ul>
                                                        <li><a href="register.php">Register</a></li>
                                                        <li><a href="login.php">Login and Sign in</a></li>
                                                        <li><a href="forgot-pass.php">Forgot pass</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s4">
                                                    <h4>Other pages:2</h4>
                                                    <ul>
                                                        <li><a href="about.php">About Us</a></li>
                                                        <li><a href="testimonials.php">Testimonials</a></li>
                                                        <li><a href="events.php">Events</a></li>
                                                        <li><a href="blog.php">Blog</a></li>
                                                        <li><a href="tips.php">Tips Before Travel</a></li>
                                                        <li><a href="price-list.php">Price List</a></li>
                                                        <li><a href="discount.php">Discount</a></li>
                                                        <li><a href="faq.php">FAQ</a></li>
                                                        <li><a href="sitemap.php">Site map</a></li>
                                                        <li><a href="404.php">404 Page</a></li>
                                                        <li><a href="contact.php">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="events.php">Events</a>
                                </li>
                                <li><a href="dashboard.php">Profile</a>
                                </li>
                                <li><a href="contact.php">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section>
    <!--END HEADER SECTION-->

</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:46:26 GMT -->
</html>