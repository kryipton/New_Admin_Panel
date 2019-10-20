<?php $this->load->view("front/includes/header_home")?>







<!-- Slider -->
<div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First Slide -->
        <div class="item active">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-1.jpg" alt="slider_01" />
            <!-- Left Slide Text Layer -->
            <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                <h3>Welcome To Padhai</h3>
                <h1>Explore the World of Our Graduates</h1>
                <a class="mt_btn_white-bor" href="#">Read More</a>
                <a class="mt_btn_yellow" href="#">Contact Us</a>
            </div><!-- /Left Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

        <!-- Second Slide -->
        <div class="item">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-2.jpg" alt="slider_02" />
            <!-- Right Slide Text Layer -->
            <div class="caption_slide1 caption_slide1_right wow fadeInLeft" data-animation="animated fadeInLeft">
                <h3>Welcome To Padhai</h3>
                <h1>Better education for a better world</h1>
                <a class="mt_btn_white-bor" href="#">Read More</a>
                <a class="mt_btn_yellow" href="#">Contact Us</a>
            </div><!-- /Right Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

        <!-- Third Slide -->
        <div class="item">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-4.jpg" alt="slider_04" />
            <!-- Center Slide Text Layer -->
            <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                <h3>Welcome To Padhai</h3>
                <h1>Exceptional People, Exceptional Care</h1>
                <a class="mt_btn_white-bor" href="#">Read More</a>
                <a class="mt_btn_yellow" href="#">Contact Us</a>
            </div><!-- /Center Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

    </div><!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> <!-- End Slider -->

<!-- About Courses -->
<div class="edu-courses">
    <div class="container">
        <div class="row panel-grid-banner">
            <div class="col-md-4 col-sm-12">
                <div class="inner-grid text-center">
                    <div class="text-courses">
                        <i class="fa fa-laptop mar-bottom-20"></i>
                        <h3>Learn Courses Online</h3>
                    </div>
                    <div class="courses-content">
                        <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                        <a href="#" class="mt_btn_yellow">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="inner-grid text-center">
                    <div class="text-courses">
                        <i class="fa fa-users mar-bottom-20"></i>
                        <h3>Highly Qualified Teachers</h3>
                    </div>
                    <div class="courses-content">
                        <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                        <a href="#" class="mt_btn_yellow">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="inner-grid text-center">
                    <div class="text-coursesa">
                        <i class="fa fa-book mar-bottom-20"></i>
                        <h3>Book Library & Stores</h3>
                    </div>
                    <div class="courses-content">
                        <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                        <a href="#" class="mt_btn_yellow ">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Courses -->

<!--*About*-->
<section id="mt_about">
    <div class="container">
        <div class="about_services">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-items">
                        <div class="inner-heading">
                            <h3><?php echo $this->lang->line("haqqimizda"); ?></h3>
                        </div>
                        <?php

                        if ($this->session->userdata("dil") == "az"){
                            echo $about["desc_az"];
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo $about["desc_en"];
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo $about["desc_ru"];
                        }

                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-edu-bg">
                        <img src="<?php echo base_url("public/front/")?>images/education/about.png" alt="About">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--*EndAbout*-->

<!-- Find Courses -->
<section class="selected-course">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="find-course">
                    <h3>Find your course</h3>
                    <p>Fill in below form to find your courses</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" placeholder="Course Name">
                        </div>
                        <div class="form-group">
                            <select id="sel1">
                                <option>Category</option>
                                <option>Computer</option>
                                <option>Science</option>
                                <option>History</option>
                                <option>Economics</option>
                            </select>
                        </div>
                        <button type="submit" class="mt_btn_yellow">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="all-courses">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item mar-bottom-30">
                                <i class="fa fa-male"></i>
                                <p>Socioligy</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item mar-bottom-30">
                                <i class="fa fa-suitcase"></i>
                                <p>Business</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item mar-bottom-30">
                                <i class="fa fa-code"></i>
                                <p>Web Dev</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item mar-bottom-30">
                                <i class="fa fa-flask"></i>
                                <p>Science</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item">
                                <i class="fa fa-money"></i>
                                <p>Ecomomics</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item">
                                <i class="fa fa-gg"></i>
                                <p>Biology</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item">
                                <i class="fa fa-desktop"></i>
                                <p>Computing</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="courses-item">
                                <i class="fa fa-mouse-pointer"></i>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Find Courses -->

<!--*Features-one*-->
<section class="features-one">
    <div class="container">
        <div class="inner-heading">
            <h3>Featured courses</h3>
            <h2>Various courses to choose from</h2>
        </div>
        <div class="row  slider slider-ft-course">
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="featured-item">
                    <div class="feat-img">
                        <img src="<?php echo base_url("public/front/")?>images/education/ft-1.jpg" alt="">
                        <div class="th-name">
                            <img src="<?php echo base_url("public/front/")?>images/blog/cmnt-1.jpg" alt="">
                            <h5>Mark Ronson</h5>
                        </div>
                        <div class="overlayPort">
                            <ul class="info text-center list-inline">
                                <li>
                                    <a href="courses-detail.html">View Detail</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="feat-inn">
                        <span>(20 Reviws)</span>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <a href="#"><h3>Economy from start for beginner</h3></a>
                        <div class="course-feat">
                            <div class="price-ft pull-left">
                                <span>$90</span>
                            </div>
                            <div class="admin-ft pull-right">
                                <ul>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="featured-item">
                    <div class="feat-img">
                        <img src="<?php echo base_url("public/front/")?>images/education/ft-2.jpg" alt="">
                        <div class="th-name">
                            <img src="<?php echo base_url("public/front/")?>images/blog/cmnt-2.jpg" alt="">
                            <h5>Mark Ronson</h5>
                        </div>
                        <div class="overlayPort">
                            <ul class="info text-center list-inline">
                                <li>
                                    <a href="courses-detail.html">View Detail</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="feat-inn">
                        <span>(20 Reviws)</span>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <a href="#"><h3>Economy from start for beginner</h3></a>
                        <div class="course-feat">
                            <div class="price-ft pull-left">
                                <span>$90</span>
                            </div>
                            <div class="admin-ft pull-right">
                                <ul>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="featured-item">
                    <div class="feat-img">
                        <img src="<?php echo base_url("public/front/")?>images/education/ft-3.jpg" alt="">
                        <div class="th-name">
                            <img src="<?php echo base_url("public/front/")?>images/blog/cmnt-3.jpg" alt="">
                            <h5>Mark Ronson</h5>
                        </div>
                        <div class="overlayPort">
                            <ul class="info text-center list-inline">
                                <li>
                                    <a href="courses-detail.html">View Detail</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="feat-inn">
                        <span>(20 Reviws)</span>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <a href="#"><h3>Economy from start for beginner</h3></a>
                        <div class="course-feat">
                            <div class="price-ft pull-left">
                                <span>$90</span>
                            </div>
                            <div class="admin-ft pull-right">
                                <ul>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="featured-item">
                    <div class="feat-img">
                        <img src="<?php echo base_url("public/front/")?>images/education/ft-4.jpg" alt="">
                        <div class="th-name">
                            <img src="<?php echo base_url("public/front/")?>images/blog/cmnt-1.jpg" alt="">
                            <h5>Mark Ronson</h5>
                        </div>
                        <div class="overlayPort">
                            <ul class="info text-center list-inline">
                                <li>
                                    <a href="courses-detail.html">View Detail</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="feat-inn">
                        <span>(20 Reviws)</span>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <a href="#"><h3>Economy from start for beginner</h3></a>
                        <div class="course-feat">
                            <div class="price-ft pull-left">
                                <span>$90</span>
                            </div>
                            <div class="admin-ft pull-right">
                                <ul>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="featured-item">
                    <div class="feat-img">
                        <img src="<?php echo base_url("public/front/")?>images/education/ft-1.jpg" alt="">
                        <div class="th-name">
                            <img src="<?php echo base_url("public/front/")?>images/blog/cmnt-1.jpg" alt="">
                            <h5>Mark Ronson</h5>
                        </div>
                        <div class="overlayPort">
                            <ul class="info text-center list-inline">
                                <li>
                                    <a href="courses-detail.html">View Detail</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="feat-inn">
                        <span>(20 Reviws)</span>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <a href="#"><h3>Economy from start for beginner</h3></a>
                        <div class="course-feat">
                            <div class="price-ft pull-left">
                                <span>$90</span>
                            </div>
                            <div class="admin-ft pull-right">
                                <ul>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>
<!--*EndFeatures-one*-->

<!--* Fun And Facts*-->
<section id="mt_fun">
    <div class="container">
        <div class="mt-statts">
            <div class="inner-heading">
                <h3>Why choose us</h3>
                <h2>Various courses to choose from</h2>
            </div>
            <div class="row facts_row">
                <div class="col-md-8 col-sm-8 col-xs-12 facts_col">
                    <div class="fun-facts-main">
                        <div class="fun-facts_wrapper">
                            <i class="fa fa-trophy"></i>
                            <p class="fun-facts_figure timer" data-to="275" data-speed="3000"></p>
                            <span class="fun-facts_title"> AWARDS </span>
                        </div>
                        <div class="fun-facts_wrapper">
                            <i class="fa fa-graduation-cap"></i>
                            <p class="fun-facts_figure timer" data-to="3282" data-speed="3000"></p>
                            <span class="fun-facts_title"> STUDENTS </span>
                        </div>
                        <div class="fun-facts_wrapper">
                            <i class="fa fa-university"></i>
                            <p class="fun-facts_figure timer" data-to="120" data-speed="3000"></p>
                            <span class="fun-facts_title"> YEARS OF HISTORY </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="nets-facts">
                        <h2>Take a tour</h2>
                        <div class="pulses">
                            <button type="button" class="play-btn js-video-button" data-video-id='176543782' data-channel="vimeo"><i class="fa fa-play"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Fun And Facts*-->

<!--Education Event-->
<section class="edu-events">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("gelecek_tedbirler"); ?></h3>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="event-left">
                    <img src="https://pbs.twimg.com/profile_images/656255050184945664/zLPbe1Bj_400x400.png" style="width: 500px" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="event-main">
                    <h2><?php echo $this->lang->line("gelecek_tedbirler"); ?></h2>
                    <?php  $i =0;
                    foreach ($events as $event){ if ($i++ > 3) { break ;}
                    ?>
                    <div class="event-item">
                        <div class="event-date text-center text-uppercase">
                            <h4 class="mar-0"><span> <i class="fa fa-arrow-right"></i></span></h4>
                        </div>
                        <div class="event-details">
                            <h3 class="mar-bottom-10">
                                <a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url("az/Event_single/").$event['id'];
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url("en/Event_single/").$event['id'];
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url("ru/Event_single/").$event['id'];
                                }



                                ?>">

                                    <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo strlen($event["name_az"]) < 45 ? $event["name_az"]  : substr($event["name_az"], 0,45).'...' ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo strlen($event["name_en"]) < 45 ? $event["name_en"]  : substr($event["name_en"], 0,45).'...' ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo strlen($event["name_ru"]) < 45 ? $event["name_ru"]  : substr($event["name_ru"], 0,45).'...' ;
                                    }

                                    ?>
                                </a>
                            </h3>
                        </div>
                    </div>

                    <?php } ?>


                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Events');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Events');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Events');
                    }

                    ?>"><?php echo $this->lang->line("butun_tedbirler"); ?>  <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--End Education Event-->


<!--*Team*-->
<section id="educate-team">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3>Our Teachers</h3>
            <h2>Meet our expert teachers</h2>
        </div>
        <div class="row edu_team_slider slider-educteam">
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="team_member">
                    <figure class="effect-julia">
                        <img src="<?php echo base_url("public/front/")?>images/team/rmember-1.jpg" alt="team">
                        <div class="team-overlay">
                            <div class="about-tech">
                                <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <div class="member_name">
                        <h3>Adam Smith</h3>
                        <span>Language Teacher</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="team_member">
                    <figure class="effect-julia">
                        <img src="<?php echo base_url("public/front/")?>images/team/rmember-2.jpg" alt="team">
                        <div class="team-overlay">
                            <div class="about-tech">
                                <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <div class="member_name">
                        <h3>Adam Smith</h3>
                        <span>Language Teacher</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="team_member">
                    <figure class="effect-julia">
                        <img src="<?php echo base_url("public/front/")?>images/team/rmember-3.jpg" alt="team">
                        <div class="team-overlay">
                            <div class="about-tech">
                                <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <div class="member_name">
                        <h3>Adam Smith</h3>
                        <span>Language Teacher</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 item">
                <div class="team_member">
                    <figure class="effect-julia">
                        <img src="<?php echo base_url("public/front/")?>images/team/rmember-4.jpg" alt="team">
                        <div class="team-overlay">
                            <div class="about-tech">
                                <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <div class="member_name">
                        <h3>Adam Smith</h3>
                        <span>Language Teacher</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Team*-->

<!--* Testimonial*-->
<section id="const-testi" class="edu-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- section title -->
                <div class="inner-heading">
                    <h3 class="white">Testimonials</h3>
                    <h2 class="white">Hear what our students have to say</h2>
                    <div class="testimonial-abt">
                        <p class="white">Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et. Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row slider-eductestimo">
                    <div class="col-sm-4">
                        <div class="item">
                            <div class="testimonial_main">
                                <div class="client-pic"><img src="<?php echo base_url("public/front/")?>images/team/member-1.jpg" alt=""></div>
                                <h4>
                                    <a href="#" class="text-uppercase">Christ Daniel</a>
                                    <span>Biology</span>
                                </h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="testimonial_main">
                                <div class="client-pic"><img src="<?php echo base_url("public/front/")?>images/team/member-2.jpg" alt=""></div>
                                <h4>
                                    <a href="#" class="text-uppercase">John Wakson</a>
                                    <span>Science & Arts</span>
                                </h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="testimonial_main">
                                <div class="client-pic"><img src="<?php echo base_url("public/front/")?>images/team/member-3.jpg" alt=""></div>
                                <h4>
                                    <a href="#" class="text-uppercase">Tim Loran</a>
                                    <span>Web Developer</span>
                                </h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* EndTestimonial*-->




<!-- Gallery -->
<br>

<section id="the-gallery" class="wide-gallery">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3>Gallery</h3>
            <h2>See and feel it</h2>
        </div>
        <div class="row">
            <div class="col-sm-4 mix">
                <div class="item port-popup">
                    <a href="<?php echo base_url("public/front/")?>images/gallery/gl-02.jpg" title="">
                        <img src="<?php echo base_url("public/front/")?>images/gallery/gl-02.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="item port-popup">
                    <a href="<?php echo base_url("public/front/")?>images/gallery/gl-01.jpg" title="">
                        <img src="<?php echo base_url("public/front/")?>images/gallery/gl-01.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 mix">
                <div class="item port-popup">
                    <a href="<?php echo base_url("public/front/")?>images/gallery/gl-s1.jpg" title="">
                        <img src="<?php echo base_url("public/front/")?>images/gallery/gl-s1.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 mix">
                <div class="item port-popup">
                    <a href="<?php echo base_url("public/front/")?>images/gallery/gl-03.jpg" title="">
                        <img src="<?php echo base_url("public/front/")?>images/gallery/gl-03.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="item port-popup">
                    <a href="<?php echo base_url("public/front/")?>images/gallery/gl-04.jpg" title="">
                        <img src="<?php echo base_url("public/front/")?>images/gallery/gl-04.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 mix">
                <div class="last-item-g">
                    <div class="item port-popup">
                        <a href="<?php echo base_url("public/front/")?>images/gallery/gl-c1.jpg" title="">
                            <img src="<?php echo base_url("public/front/")?>images/gallery/gl-c1.jpg" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Gallery -->




<?php $this->load->view("front/includes/footer")?>
