<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png')  }}" />

    <title>The Watch Vault</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/wordpress.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/jqueryui/custom.css') }}"  type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/flexslider/flexslider.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/tooltipster.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/styleNEW.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}" type="text/css" media="all" />

</head>

<body data-rsssl="1" class="home blog">

<!-- Begin template wrapper -->
<div id="wrapper">
    @include('menu')
    @include('banner')


    <div class="page_title_wrapper">
        <div class="page_title_inner">
            <h1>Contact Me About Business</h1>
            <hr class="title_break" />
            <div class="page_tagline">
                Lets get intouch
            </div>
        </div>
    </div>

    <!-- Begin content -->
    <div id="page_content_wrapper" class="hasbg">
        <div class="sidebar_content full_width nopadding">
            <div class="sidebar_content page_content">
                <p>
                    Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl
                    aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur adipisicing elit at leo dignissim congue. Mauris
                    elementum accumsan leo vel tempor.
                </p>
                <p>
                    Aliquam et elit eu nunc rhoncus viverra quis at felis et netus et malesuada fames ac turpis egestas. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                    montes
                </p>

                <form method="post" action="contactform/contactengine.php" class="forms-input">
                    <label for="Name">Name:</label>
                    <input type="text" name="Name" class="input1" id="Name" style="width:100%" />

                    <label for="City">Subject:</label>
                    <input type="text" name="City" class="input1" id="City" style="width:100%" />

                    <label for="Email">Email:</label>
                    <input type="text" name="Email" class="input1" id="Email" style="width:100%" />

                    <label for="Message">Message:</label><br />
                    <textarea name="Message" rows="20" cols="20" class="input1" id="Message"></textarea>

                    <input type="submit" name="submit" value="Send" class="submit-button" />
                </form>
            </div>
        </div>
        <!-- End main content -->
    </div>
    @include('instagram')
    @include('footer_menu')
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

