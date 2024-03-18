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

@if(null == $filteredValues)
<h1 style="padding-top:4%;text-align: center">NO POSTS YET</h1>
@else
<div class="section_2">
    <div class="container">
        <div class="other-divs">
            @foreach($filteredValues as $filteredValue)
                <div class="innercolumns">
                    <img src="https://cdn.proprivacy.com/storage/images/proprivacy/2016/11/cheapvpn_social-featured_image-recommened_webp.webp">
                    <div class="card-body">
                        <div class="card-content">
                            <h3 class="card-title"><a
                                    href="{{ route('post', ['id' => $filteredValue['id']]) }}">{{ $filteredValue['title'] }}</a></h3>
                        </div>
                        <footer class="card-meta">
                            <dt><svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512">
                                    <title>Last Updated Date</title>
                                    <path style="fill:#5c7099;"
                                          d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z"></path>
                                    <path style="fill:#5c7099;"
                                          d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                                    </path>
                                </svg></dt>
                            <dd>{{ $filteredValue['created_at']}}</dd>
                        </footer>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $filteredValues->links() }}
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

