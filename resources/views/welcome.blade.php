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

<!-- Begin logo -->
@include('slider')

<!-- Popular Articles -->

@if($canvasPosts && 4 == count($canvasPosts))
<div class="section_2">
    <div class="line_settings"><h3 class="text_line"><span>POPULAR ARTICLES</span></h3></div>
    <div class="container">
        <div class="main-div">
            <img src="{{ $canvasPosts[0]['featured_image'] }}" alt="featured_image" />
            <div class="card_body">
                <div class="card-content">
                    <h3 class="card-title"><a href="{{ route('post', ['id' => $canvasPosts[0]['id']]) }}"> {{ $canvasPosts[0]['title']}}</h3>
                    <p class="card-text">{{ $canvasPosts[0]['summary']}}</p>
                </div>
                <footer class="card-meta">
                    <dt>
                        <svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <title>Last Updated Date</title>
                            <path style="fill:#5c7099;"
                                  d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z">
                            </path>
                            <path style="fill:#5c7099;"
                                  d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                            </path>
                        </svg>
                    </dt>
                    <dd>{{ date('Y-m-d', strtotime($canvasPosts[0]['created_at'] ))}}</dd>
                </footer>
            </div>
        </div>
        <div class="other-divs">
            @foreach($canvasPosts as $key => $canvasPost)
                @if($key > 0)
                    <div class="innercolumns">
                        <img src="{{ $canvasPost['featured_image'] }}" alt="featured_image" />
                        <div class="card-body">
                            <div class="card-content">
                                <h3 class="card-title"><a href="{{ route('post', ['id' => $canvasPost['id']]) }}">{{ $canvasPost['title']}}</a></h3>
                            </div>
                            <footer class="card-meta">
                                <dt>
                                    <svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 512 512">
                                        <title>Last Updated Date</title>
                                        <path style="fill:#5c7099;"
                                              d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z"></path>
                                        <path style="fill:#5c7099;"
                                              d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                                        </path>
                                    </svg>
                                </dt>
                                <dd>{{ date('Y-m-d', strtotime($canvasPost['created_at']))}}</dd>
                            </footer>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- Latest Articles -->
<div id= "second" class="section_1">
    <div class="line_settings"><h3 class="text_line"><span>LATEST ARTICLES</span></h3></div>
    <div class="container">
        <div class="columns">
            <img src="{{ $latestPosts[0]['featured_image'] }}" alt="featured_image" />
            <div class="card_body">
                <div class="card-content">
                    <h3 class="card-title"><a href="{{ route('post', ['id' => $latestPosts[0]['id']]) }}">
                            {{ $latestPosts[0]['title'] ?? ''}}
                        </a></h3>
                    <p class="card-text">{{ $latestPosts[0]['summary'] ?? ''}}</p>
                </div>
                <footer class="card-meta">
                    <dt><svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <title>Last Updated Date</title>
                            <path style="fill:#5c7099;"
                                  d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z">
                            </path>
                            <path style="fill:#5c7099;"
                                  d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                            </path>
                        </svg></dt>
                    <dd>{{ date('Y-m-d', strtotime($latestPosts[0]['created_at'])) ?? ''}}</dd>
                </footer>
            </div>
        </div>
        <div class="columns">
            @foreach($latestPosts as $key => $latestPost)
                @if($key > 0)
                    <div class="innercolumns">
                        <img src="{{ $latestPost['featured_image'] }}" alt="featured_image" />
                        <div class="card-body">
                            <div class="card-content">
                                <h3 class="card-title"><a href="{{ route('post', ['id' => $latestPost['id']]) }}">{{ $latestPost['title'] ?? ''}}</a></h3>
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
                                <dd>{{ date('Y-m-d', strtotime($latestPost['created_at'])) ?? ''}}</dd>
                            </footer>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Latest Brand Articles -->
<div id= "first" class="section_1">
    <div class="line_settings"><h3 class="text_line"><span>LATEST BRAND ARTICLES</span></h3></div>
    <div class="container">
        <div class="columns">
            <img src="{{ $brandPosts[0]['featured_image'] }}" alt="featured_image" />
            <div class="card_body">
                <div class="card-content">
                    <h3 class="card-title"><a href="{{ route('post', ['id' => $brandPosts[0]['id']]) }}">{{ $brandPosts[0]['title'] ?? ''}}</a></h3>
                    <p class="card-text">{{ $brandPosts[0]['summary'] ?? ''}}</p>
                </div>
                <footer class="card-meta">
                    <dt><svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <title>Last Updated Date</title>
                            <path style="fill:#5c7099;"
                                  d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z">
                            </path>
                            <path style="fill:#5c7099;"
                                  d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                            </path>
                        </svg></dt>
                    <dd>{{ date('Y-m-d', strtotime($brandPosts[0]['created_at'])) ?? ''}}</dd>
                </footer>
            </div>
        </div>
        <div class="columns">
            @foreach($brandPosts as $key => $brandPost)
                @if($key > 0)
                    <div class="innercolumns">
                        <img src="{{ $brandPost['featured_image'] }}" alt="featured_image" />
                        <div class="card-body">
                            <div class="card-content">
                                <h3 class="card-title"><a href="{{ route('post', ['id' => $brandPost['id']]) }}"> {{ $brandPost['title'] ?? ''}}</a></h3>
                            </div>
                            <footer class="card-meta">
                                <dt>
                                    <svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 512 512">
                                        <title>Last Updated Date</title>
                                        <path style="fill:#5c7099;"
                                              d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z"></path>
                                        <path style="fill:#5c7099;"
                                              d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                                        </path>
                                    </svg>
                                </dt>
                                <dd>{{ date('Y-m-d', strtotime($brandPost['created_at'])) ?? ''}}</dd>
                            </footer>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Latest Class Articles -->
<div class="section_2">
    <div class="line_settings"><h3 class="text_line"><span>LATEST CLASS ARTICLES</span></h3></div>
    <div class="container">
        <div class="other-divs">
            @foreach($classPosts as $classPost)
            <div class="innercolumns">
                <img src="{{ $classPost['featured_image'] }} " alt="featured_image" />
                <div class="card-body">
                    <div class="card-content">
                        <h3 class="card-title"><a href="{{ route('post', ['id' => $classPost['id']]) }}">{{ $classPost['title'] ?? ''}}</a></h3>
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
                        <dd>{{ date('Y-m-d', strtotime($classPost['created_at'])) ?? ''}}</dd>
                    </footer>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Latest Movement Articles -->
<div class="section_2">
    <div class="line_settings"><h3 class="text_line"><span>LATEST MOVEMENT ARTICLES</span></h3></div>
    <div class="container">
        <div class="other-divs">
            @foreach($movementPosts as $movementPost)
                <div class="innercolumns">
                    <img src="{{ $movementPost['featured_image'] }}" alt="featured_image" />
                    <div class="card-body">
                        <div class="card-content">
                            <h3 class="card-title"><a href="{{ route('post', ['id' => $movementPost['id']]) }}">{{ $movementPost['title'] ?? ''}}</a></h3>
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
                            <dd>{{ date('Y-m-d', strtotime($movementPost['created_at'])) ?? ''}}</dd>
                        </footer>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Latest Functionality Articles -->
<div class="section_2">
    <div class="line_settings"><h3 class="text_line"><span>POPULAR FUNCTIONALITY ARTICLES</span></h3></div>
    <div class="container">
        <div class="main-div">
            <img src="{{ $functionalityPosts[0]['featured_image'] }}" alt="featured_image" />
            <div class="card_body">
                <div class="card-content">
                    <h3 class="card-title"><a href="{{ route('post', ['id' => $functionalityPosts[0]['id']]) }}"> {{ $functionalityPosts[0]['title'] ?? '' }}</a></h3>
                    <p class="card-text">{{ $functionalityPosts[0]['summary'] ?? ''}}</p>
                </div>
                <footer class="card-meta">
                    <dt><svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <title>Last Updated Date</title>
                            <path style="fill:#5c7099;"
                                  d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z">
                            </path>
                            <path style="fill:#5c7099;"
                                  d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                            </path>
                        </svg></dt>
                    <dd>{{ date('Y-m-d', strtotime($functionalityPosts[0]['created_at'])) ?? ''}}</dd>
                </footer>
            </div>
        </div>
        <div class="other-divs">
            @foreach($functionalityPosts as $key => $functionalityPost)
                @if($key > 0)
            <div class="innercolumns">
                <img src="{{ $functionalityPost['featured_image'] }}" alt="featured_image" />
                <div class="card-body">
                    <div class="card-content">
                        <h3 class="card-title"><a href="{{ route('post', ['id' => $functionalityPost['id']]) }}">{{ $functionalityPost['title'] ?? ''}}</a></h3>
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
                        <dd>{{ date('Y-m-d', strtotime($functionalityPost['created_at'])) ?? ''}}</dd>
                    </footer>
                </div>
            </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Latest Style Articles -->
<div class="section_2">
    <div class="line_settings"><h3 class="text_line"><span>POPULAR STYLE ARTICLES</span></h3></div>
    <div class="container">
        <div class="main-div">
            <img src="{{ $stylePosts[0]['featured_image'] }}" alt="featured_image" />
            <div class="card_body">
                <div class="card-content">
                    <h3 class="card-title"><a href="{{ route('post', ['id' => $stylePosts[0]['id']]) }}"> {{ $stylePosts[0]['title'] ?? ''}}</a></h3>
                    <p class="card-text">{{ $stylePosts[0]['summary'] ?? ''}}</p>
                </div>
                <footer class="card-meta">
                    <dt><svg width="15" height="15" class="icon-calendar" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <title>Last Updated Date</title>
                            <path style="fill:#5c7099;"
                                  d="M32,456a24,24,0,0,0,24,24H456a24,24,0,0,0,24-24V192H32Z">
                            </path>
                            <path style="fill:#5c7099;"
                                  d="M480,87.77A23.8,23.8,0,0,0,456,64H400.08V32h-48V64H159.92V32h-48V64H56A23.8,23.8,0,0,0,32,87.77V144H480Z">
                            </path>
                        </svg></dt>
                    <dd>{{ date('Y-m-d', strtotime($stylePosts[0]['created_at'])) ?? ''}}</dd>
                </footer>
            </div>
        </div>
        <div class="other-divs">
            @foreach($stylePosts as $key => $stylePost)
                @if($key > 0)
                    <div class="innercolumns">
                        <img src="{{ $stylePost['featured_image'] }}" alt="featured_image" />
                        <div class="card-body">
                            <div class="card-content">
                                <h3 class="card-title"><a href="{{ route('post', ['id' => $stylePost['id']]) }}">{{ $stylePost['title'] ?? ''}}</a></h3>
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
                                <dd>{{ date('Y-m-d', strtotime($stylePost['created_at'])) ?? ''}}</dd>
                            </footer>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

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

