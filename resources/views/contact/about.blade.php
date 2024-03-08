<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link rel="shortcut icon" href="assets/upload/TG-Thumb.png" />

    <title>Grand Blog | Responsive Blog Template</title>

    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/wordpress.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/app.css" type="text/css" media="all" />
    <link rel="stylesheet" href={{ asset('assets/css/magnific-popup.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/jqueryui/custom.css') }}"  type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/flexslider/flexslider.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/tooltipster.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/styleNEW.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}" type="text/css" media="all" />

</head>

<body data-rsssl="1" class="home blog">
<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="" />
<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="" />
<input type="hidden" id="pp_image_path" name="pp_image_path" value="images/" />
<input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html" />
<input type="hidden" id="pp_ajax_search" name="pp_ajax_search" value="1" />
<input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
<input type="hidden" id="pp_topbar" name="pp_topbar" value="" />
<input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="1" />
<input type="hidden" id="tg_blog_slider_layout" name="tg_blog_slider_layout" value="slider" />
<input type="hidden" id="pp_back" name="pp_back" value="Back" />

<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="0" />

<!-- Begin mobile menu -->
<a id="close_mobile_menu" href="javascript:;"></a>
<div class="mobile_menu_wrapper">
    <form role="search" method="get" name="searchform" id="searchform" action="index.html">
        <div>
            <input type="text" value="" name="s" id="s" autocomplete="off" placeholder="Search..." />
            <button>
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div id="autocomplete"></div>
    </form>

    <div class="menu-side-mobile-menu-container">
        <ul id="mobile_main_menu" class="mobile_main_nav">
            <li class="megamenu col3 menu-item  menu-item-home menu-item-has-children">
                <a href="index.html" aria-current="page">Home</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-has-children">
                        <a href="index.html">Layout 1</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-home">
                                <a href="index.html" aria-current="page">Fullwidth Slider</a>
                            </li>
                            <li class="menu-item"><a href="layout-fullwidth.html">3 Columns Slider</a></li>
                            <li class="menu-item"><a href="layout-fixedwidth.html">Fixed Width Slider</a></li>
                            <li class="menu-item"><a href="layout-list.html">List</a></li>
                            <li class="menu-item"><a href="layout-full_list.html">Full Post + List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="index.html">Layout 2</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="layout-full_right_sidebar.html">Full Post + Grid Right Sidebar</a></li>
                            <li class="menu-item"><a href="layout-full_left_sidebar.html">Full Post + Grid Left Sidebar</a></li>
                            <li class="menu-item"><a href="layout-full_fullwidth.html">Full Post + Grid Fullwidth</a></li>
                            <li class="menu-item"><a href="layout-right_sidebar.html">Right Sidebar</a></li>
                            <li class="menu-item"><a href="layout-left_sidebar.html">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="index.html">Layout 3</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="layout-2cols.html">Grid 2 Columns</a></li>
                            <li class="menu-item"><a href="layout-3cols.html">Grid 3 Columns</a></li>
                            <li class="menu-item"><a href="layout-2cols_infinite.html">Grid 2 Columns + Infinite Scroll</a></li>
                            <li class="menu-item"><a href="layout-3cols_infinite.html">Grid 3 Columns + Infinite Scroll</a></li>
                            <li class="menu-item"><a href="layout-fullwidth.html">Fullwidth</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="singleblog.html">Single Posts</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="single-right_sidebar.html">Right Sidebar Post</a></li>
                    <li class="menu-item"><a href="single-fullwidth.html">Single Fullwidth</a></li>
                    <li class="menu-item"><a href="single-left_sidebar.html">Single Left Sidebar Post</a></li>
                    <li class="menu-item"><a href="beauty-of-nature.html">Gallery Post</a></li>
                    <li class="menu-item"><a href="city-center-bridge.html">Review Post</a></li>
                    <li class="menu-item"><a href="golden-snow-land.html">Video Post</a></li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="page-fullwidth.html">Pages</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="page-fullwidth.html">Fullwidth Page</a></li>
                    <li class="menu-item"><a href="page-right-sidebar.html">Right Sidebar Page</a></li>
                    <li class="menu-item"><a href="page-left-sidebar.html">Left Sidebar Page</a></li>
                    <li class="menu-item"><a href="page-background-header.html">Background Header Page</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="blog-post-gallery.html">Gallery</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="gallery-2-columns.html">Gallery 2 Columns</a></li>
                            <li class="menu-item"><a href="gallery-3-columns.html">Gallery 3 Columns</a></li>
                            <li class="menu-item"><a href="gallery-4-columns.html">Gallery 4 Columns</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="typography.html">Typography</a></li>
                    <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="travel.html">Category</a></li>
            <li class="menu-item"><a href="about.html">About</a></li>
            <li class="menu-item"><a href="contact-me.html">Contact Me</a></li>
        </ul>
    </div>
    <!-- Begin side menu sidebar -->
    <div class="page_content_wrapper">
        <div class="sidebar_wrapper">
            <div class="sidebar">
                <div class="content">
                    <ul class="sidebar_widget">
                        <li id="text-2" class="widget widget_text">
                            <h2 class="widgettitle">About Me</h2>
                            <div class="textwidget">
                                <p>
                                    <img src="assets/upload/aboutme.jpg" alt="" style="margin-bottom: 10px;" /><br />
                                    Aliquam et elit eu nunc rhoncus viverra quis at felis et netus et malesuada fames ac turpis egestas. Aenean commodo ligula eget dolor.
                                </p>
                                <div style="margin-top: 20px; text-align: center;"><img src="assets/upload/signature.png" style="width: 173px; height: auto;" alt="" /></div>
                            </div>
                        </li>
                        <li id="grand_blog_instagram-5" class="widget Grand_Blog_Instagram">
                            <h2 class="widgettitle"><span>Instagram</span></h2>
                            <ul class="flickr">
                                <li>
                                    <a target="_blank" href="https://www.instagram.com">
                                        <img
                                            src="assets/upload/insta1.jpg"
                                            width="75"
                                            height="75"
                                            alt=""
                                        />
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com">
                                        <img
                                            src="assets/upload/insta2.jpg"
                                            width="75"
                                            height="75"
                                            alt=""
                                        />
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com">
                                        <img
                                            src="assets/upload/insta3.jpg"
                                            width="75"
                                            height="75"
                                            alt=""
                                        />
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com">
                                        <img
                                            src="assets/upload/insta4.jpg"
                                            width="75"
                                            height="75"
                                            alt=""
                                        />
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com">
                                        <img
                                            src="assets/upload/insta5.jpg"
                                            width="75"
                                            height="75"
                                            alt=""
                                        />
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com">
                                        <img
                                            src="assets/upload/insta6.jpg"
                                            width="75"
                                            height="75"
                                            alt=""
                                        />
                                    </a>
                                </li>
                            </ul>
                            <br class="clear" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End side menu sidebar -->
</div>
<!-- End mobile menu -->

<!-- Begin template wrapper -->
<div id="wrapper">
    <div class="header_style_wrapper">
        <!-- End top bar -->

        <div class="top_bar">
            <div id="menu_wrapper">
                <div class="social_wrapper">
                    <ul>
                        <li class="facebook">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="pinterest">
                            <a title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li class="instagram">
                            <a title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div id="nav_wrapper">
                    <div class="nav_wrapper_inner">
                        <div id="menu_border_wrapper">
                            <div class="menu-main-menu-container">
                                <ul id="main_menu" class="nav">
                                    <li class="megamenu col3 menu-item menu-item-home menu-item-has-children arrow menu-item-7"
                                    >
                                        <a href="index.html" aria-current="page">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children">
                                                <a href="index.html">Layout 1</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-home">
                                                        <a href="index.html" aria-current="page">Fullwidth Slider</a>
                                                    </li>
                                                    <li class="menu-item"><a href="layout-fullwidth.html">3 Columns Slider</a></li>
                                                    <li class="menu-item"><a href="layout-fixedwidth.html">Fixed Width Slider</a></li>
                                                    <li class="menu-item"><a href="layout-list.html">List</a></li>
                                                    <li class="menu-item"><a href="layout-full_list.html">Full Post + List</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="index.html">Layout 2</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="layout-full_right_sidebar.html">Full Post + Grid Right Sidebar</a></li>
                                                    <li class="menu-item"><a href="layout-full_left_sidebar.html">Full Post + Grid Left Sidebar</a></li>
                                                    <li class="menu-item"><a href="layout-full_fullwidth.html">Full Post + Grid Fullwidth</a></li>
                                                    <li class="menu-item"><a href="layout-right_sidebar.html">Right Sidebar</a></li>
                                                    <li class="menu-item"><a href="layout-left_sidebar.html">Left Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="index.html">Layout 3</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="layout-2cols.html">Grid 2 Columns</a></li>
                                                    <li class="menu-item"><a href="layout-3cols.html">Grid 3 Columns</a></li>
                                                    <li class="menu-item"><a href="layout-2cols_infinite.html">Grid 2 Columns + Infinite Scroll</a></li>
                                                    <li class="menu-item"><a href="layout-3cols_infinite.html">Grid 3 Columns + Infinite Scroll</a></li>
                                                    <li class="menu-item"><a href="layout-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children arrow">
                                        <a href="singleblog.html">Single Posts</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="single-right_sidebar.html">Right Sidebar Post</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="single-fullwidth.html">Single Fullwidth</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="single-left_sidebar.html">Single Left Sidebar Post</a>
                                            </li>
                                            <li class="menu-item"><a href="beauty-of-nature.html">Gallery Post</a></li>
                                            <li class="menu-item"><a href="city-center-bridge.html">Review Post</a></li>
                                            <li class="menu-item"><a href="golden-snow-land.html">Video Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children arrow">
                                        <a href="page-fullwidth.html">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="page-fullwidth.html">Fullwidth Page</a></li>
                                            <li class="menu-item"><a href="page-right-sidebar.html">Right Sidebar Page</a></li>
                                            <li class="menu-item"><a href="page-left-sidebar.html">Left Sidebar Page</a></li>
                                            <li class="menu-item"><a href="page-background-header.html">Background Header Page</a></li>
                                            <li class="menu-item menu-item-has-children arrow">
                                                <a href="blog-post-gallery.html">Gallery</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="gallery-2-columns.html">Gallery 2 Columns</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="gallery-3-columns.html">Gallery 3 Columns</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="gallery-4-columns.html">Gallery 4 Columns</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="typography.html">Typography</a></li>
                                            <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="travel.html">Category</a></li>
                                    <li class="menu-item current-menu-item current_page_item"><a href="about.html">About</a></li>
                                    <li class="menu-item"><a href="contact-me.html">Contact</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End main nav -->

                <!-- Begin right corner buttons -->
                <div id="logo_right_button">
                    <!-- Begin search icon -->
                    <a href="javascript:;" id="search_icon"><i class="fa fa-search"></i></a>
                    <!-- End side menu -->

                    <!-- Begin search icon -->
                    <a href="javascript:;" id="mobile_nav_icon"></a>
                    <!-- End side menu -->
                </div>
                <!-- End right corner buttons -->
            </div>
        </div>
    </div>


    <!-- Begin logo -->
    <div id="logo_wrapper">
        <div id="logo_normal" class="logo_container">
            <div class="logo_align">
                <a id="custom_logo" class="logo_wrapper default" href="../index.htm">
                    <img src="assets/images/logo@2x.png" alt="" width="252" height="108" />
                </a>
            </div>
        </div>
        <!-- End logo -->
    </div>

    <div id="page_caption" class="hasbg parallax">
        <div id="bg_regular" style="background-image: url(assets/upload/photo-1437915015400-137312b61975.jpg);"></div>
    </div>

    <div class="page_title_wrapper">
        <div class="page_title_inner">
            <h1>About</h1>
            <hr class="title_break" />
            <div class="page_tagline">
                Blogger Photographer Designer
            </div>
        </div>
    </div>

    <!-- Begin content -->
    <div id="page_content_wrapper" class="hasbg">
        <div class="inner">
            <!-- Begin main content -->
            <div class="inner_wrapper">
                <div class="sidebar_content full_width">
                    <div class="post_excerpt">
                        <blockquote>
                            <p>
                                Good design is making something intelligible and memorable.<br />
                                Great design is making something memorable and meaningful.
                            </p>
                        </blockquote>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>
                    </div>
                    <div id="attachment_483" style="width: 1450px;" class="wp-caption alignnone">
                        <img aria-describedby="caption-attachment-483" loading="lazy" src="assets/upload/22.jpg" alt="Silver Lake" width="1440" height="960" class="size-full wp-image-483" />
                        <p id="caption-attachment-483" class="wp-caption-text">Silver Lake</p>
                    </div>
                    <div class="one_half" style="">
                        Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut
                        synth art party deep v chillwave. <i>Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party</i> Pitchfork selfies master cleanse Kickstarter seitan
                        retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                    </div>
                    <div class="one_half last" style="">
                        Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut
                        synth art party deep v chillwave. <i>Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party</i> Pitchfork selfies master cleanse Kickstarter seitan
                        retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                    </div>
                    <p><br class="clear" /></p>
                </div>
            </div>
            <!-- End main content -->
        </div>
    </div>



    <br class="clear" />
    <div id="footer_photostream" class="footer_photostream_wrapper ri-grid ri-grid-size-3">
        <h2 class="widgettitle photostream"><i class="fa fa-instagram marginright"></i>themegoodsphotography</h2>
        <ul>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream1.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream2.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream3.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream4.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream5.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream6.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream7.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream8.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream9.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream10.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream11.jpg"
                        alt=""
                    />
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/">
                    <img
                        src="assets/upload/photostream12.jpg"
                        alt=""
                    />
                </a>
            </li>
        </ul>
    </div>

    <div class="footer_bar noborder">
        <div class="footer_bar_wrapper">
            <div class="social_wrapper">
                <ul>
                    <li class="facebook">
                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="pinterest">
                        <a target="_blank" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li class="instagram">
                        <a target="_blank" title="Instagram" href="index.html"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div id="copyright">© Copyright GrandBlog Template Demo - Template by Max Themes</div>
            <a id="toTop"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
</div>

<div id="overlay_background"></div>


<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.magnific-popup.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.tooltipster.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/custom_plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/flexslider/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/script-slider-flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.gridrotator.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/script-gridrotator.js') }}"></script>


</body>
</html>


