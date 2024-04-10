<header class="header clearfix element_to_stick">
    <div class="layer"></div>
    <div class="container-fluid container-logo">
        <div id="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset($general ? $general->logo:'') }}" width="140" height="35" alt="" class="logo_normal">
                <img src="{{ asset($general ? $general->logo:'') }}" width="140" height="35" alt="" class="logo_sticky">
            </a>
        </div>
        <ul id="top_menu">
            <li><a href="#" class="search-overlay-menu-btn" style="cursor: default;"></a></li>
            @guest
                @else
                <li>
                    <div class="dropdown dropdown-cart">
                        <a href="{{ route('getcart', auth()->user()->id) }}" class="cart_bt"><i class="fas fa-cart-plus"></i> <strong>{{ App\Models\Cart::where('user_id', auth()->user()->id)->sum('quantity') }}</strong></a>
                    </div>
                </li>
            @endguest
        </ul>
        <!-- /top_menu -->
        <a href="#" class="open_close">
            <i class="icon_menu"></i><span>Ca</span>
        </a>
        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <a href="index.html"><img src="img/logo.svg" width="140" height="35" alt=""></a>
            </div>
            <ul>
                <li class="submenu">
                    <a href="{{ route('home') }}" class="show-submenu">Início</a>
                </li>
                <li class="submenu">
                    <a href="{{ route('about') }}" class="show-submenu">Sobre Nós</a>
                </li>
                <li class="submenu">
                    <a href="{{ route('product.categories') }}" class="show-submenu">Produtos</a>
                </li>
                <li class="submenu">
                    <a href="#" class="show-submenu">Galeria</a>
                    <ul>
                        <li><a href="{{ route('gallery', 'photo') }}">Galeria de fotos</a></li>
                        <li><a href="{{ route('gallery', 'video') }}">Galeria de vídeos</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ route('allblogs') }}" class="show-submenu">Blog</a>
                </li>
                <li class="submenu">
                    <a href="{{ route('contact') }}" class="show-submenu">Contato</a>
                </li>
                @guest
                <li><a href="javascript:void(0)" class="btn_top" data-bs-toggle="modal" data-bs-target="#exampleModal">Entrar</a></li>
                <li><a href="javascript:void(0)" class="btn_top" data-bs-toggle="modal" data-bs-target="#registerModal">Registrar</a></li>
                @else
                <li>
                    <a class="btn_top" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Sair') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><span class="closebt"><i class="icon_close"></i></span></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_search"></i></button>
        </form>
    </div>
</header>
