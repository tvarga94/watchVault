<div class="header_style_wrapper">
    <!-- End top bar -->
    <div class="top_bar">
        <div id="menu_wrapper">
            <div class="social_wrapper">
                <ul>
                    <li class="facebook">
                        <a href="https://www.tiktok.com/@thewatchvault_official"><img src="{{ asset('assets/images/icon/tiktok.png') }}" /></a>
                    </li>
                    <li class="youtube">
                        <a href="https://youtube.com/@thewatchvault_official"><img src="{{ asset('assets/images/icon/youtube.png') }}" /></a>
                    </li>
                    <li class="pinterest">
                        <a title="Pinterest" href="https://pin.it/3B2TkrumK"><img src="{{ asset('assets/images/icon/pinterest.png') }}" /></a>
                    </li>
                    <li class="instagram">
                        <a title="Instagram" href="https://pin.it/3B2TkrumK"><img src="{{ asset('assets/images/icon/instagram.png') }}" /></a>
                    </li>
                </ul>
            </div>
            <div id="nav_wrapper">
                <div class="nav_wrapper_inner">
                    <div id="menu_border_wrapper">
                        <div class="menu-main-menu-container">
                            <button class="toggle_button">
                                <i class="material-icons" id="toggleicon">menu</i>
                            </button>
                            <ul id="main_menu" class="nav">
                                <li class="menu-item menu-item-has-children arrow">
                                    <a href="{{ route('content', ['filter' => 'Brands']) }}">Brands</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Rolex']) }}">Rolex</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Tudor']) }}">Tudor</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Seiko']) }}">Seiko</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Casio']) }}">Casio</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Hublot']) }}">Hublot</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Omega']) }}">Omega</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children arrow">
                                    <a href="{{ route('content', ['filter' => 'Classes']) }}">Classes</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Cheap']) }}">Cheap</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Affordable']) }}">Affordable</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Premium']) }}">Premium</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Luxory']) }}">Luxory</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children arrow">
                                    <a href="{{ route('content', ['filter' => 'Movement']) }}">Movement</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Mechanical']) }}">Mechanical</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Automatic']) }}">Automatic</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Quartz']) }}">Quartz</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Solar']) }}">Solar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children arrow">
                                    <a href="{{ route('content', ['filter' => 'Functionality']) }}">Functionality</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Analog']) }}">Analog</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Chronograph']) }}">Chronograph</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Digital']) }}">Digital</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Hybrid']) }}">Hybrid</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children arrow">
                                    <a href="{{ route('content', ['filter' => 'Style']) }}">Style</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Aviator']) }}">Aviator</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Racing']) }}">Racing</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Diver']) }}">Diver</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Skeleton']) }}">Skeleton</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Wood']) }}">Wood</a></li>
                                        <li class="menu-item"><a href="{{ route('list', ['filter' => 'Smart']) }}">Smart</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
