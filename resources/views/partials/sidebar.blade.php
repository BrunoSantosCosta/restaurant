<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/frontend/img/favicon-backend.png') }}" alt="logo" width="45">
            <a href="{{ route('admin.home') }}">Siteentrega</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->routeIs('admin.home') ? 'active':'' }}">
                <a href="{{ route('admin.home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Conteúdo</li>
            <li class="dropdown {{ request()->routeIs('menu.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Produto</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('product.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('product.index') }}">Produto - Lista</a></li>
                    <li class="{{ request()->routeIs('productCategory.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('productCategory.index') }}">Produto - Categorias</a></li>
                    <li class="{{ request()->routeIs('productAddon.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('productAddon.index') }}">Produto - Adicionais</a></li>
                    <li class="{{ request()->routeIs('productHighlight.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('productHighlight.index') }}">Produtos em Destaque</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('blog.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Blog</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('blog.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('blog.index') }}">Blog - Lista</a></li>
                    <li class="{{ request()->routeIs('blogCategory.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('blogCategory.index') }}">Blog - Categorias</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('gallery.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Galeria</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request('type') == 'photo'? 'active' : '' }}"><a class="nav-link" href="{{ route('gallery.index').'?type=photo' }}">Galeria de Fotos</a></li>
                    <li class="{{ request('type') == 'video'? 'active' : '' }}"><a class="nav-link" href="{{ route('gallery.index').'?type=video' }}">Galeria de Videos</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('slider.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Slider</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('slider.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('slider.index') }}">Slider - Lista</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('service.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Serviço</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('service.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('service.index') }}">Serviços - Lista</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('staff.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Funcionários</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('staff.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('staff.index') }}">Funcionários - Listar</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('layout.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layouts e Conteúdos</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('styles.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('styles.index') }}">Estilos</a></li>
                </ul>
            </li>
            <li class="{{ request()->routeIs('admin.order') ? 'active':'' }}">
                <a href="{{ route('admin.order') }}" class="nav-link"><i class="fas fa-fire"></i><span>Pedidos</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.general') ? 'active':'' }}">
                <a href="{{ route('admin.general') }}" class="nav-link"><i class="fas fa-fire"></i><span>Informaçoes Gerais</span></a>
            </li>
            <li class="{{ request()->routeIs('schedules.index') ? 'active':'' }}">
                <a href="{{ route('schedules.index') }}" class="nav-link"><i class="fas fa-clock"></i><span>Horários</span></a>
            </li>
        </ul>


    </aside>
</div>
