<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pull-left hidden-xs">Pusat Bisnis UIN Sunan Ampel Surabaya</p>
                <p class="pull-right"><i class="fa fa-phone"></i>Contact For Bussiness +62</p>
            </div>
        </div>
    </div>
</div>

<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/logo_uinsa_food.png') }}" alt="logo" class="img-responsive"></a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ route('homepage') }}">Home</a>
                                </li>
                                @auth
                                <li><a href="{{ route('menu_user') }}">Menu</a></li>
                                <li><a href="{{ route('about_user') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('contact_user') }}">Kontak</a></li>
                                <li>
                                    <a href="{{ route('shopping.order') }}"><i class="icon-shopping-cart"></i>Cart<span class="badge text-bg-danger">{{ count((array) session('order')) }}</span>
                                    </a>
                                </li>
                                <li>
                                <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LogOut</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                </li>
                                <li><a href="#" class="no-hover">Halo {{ Auth::user()->nama_lengkap }}</a></li>
                                @endauth

                                @guest
                                <li><a href="{{ route('menu') }}">Menu</a></li>
                                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('contact') }}">Kontak</a></li>
                                <li><a href="{{ route('auth') }}">Login</a></li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @yield('scripts')
</header>