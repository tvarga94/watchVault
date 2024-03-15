<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
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


    <!-- Begin logo -->
    @include('banner')

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
                    <p>
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

