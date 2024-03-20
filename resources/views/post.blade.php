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
<!-- Begin mobile menu -->
@include('menu')

@if (NULL === $post)
    @include('404')
@else
<div class="section_2" style="padding-top: 5%">
    <div class="container">
        <h1>{{ $post['title'] }}</h1>
        <h5> Written By: {{ $post['user_id'] }}
        <h5> {{ $post['read_time'] }}

        {!! $post['body'] !!}
    </div>
</div>
@endif

@include('instagram')
@include('footer')
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

