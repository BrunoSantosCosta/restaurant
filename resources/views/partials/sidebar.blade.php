<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">SITEENTREGA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->routeIs('admin.home') ? 'active':'' }}">
                <a href="{{ route('admin.home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Conteúdo</li>
            {{-- <li class="dropdown {{ request()->routeIs('category.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Categoria</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request('type') == 'menu'? 'active' : '' }}"><a class="nav-link" href="{{ route('category.index').'?type=menu' }}">Categorias - Produto</a></li>
                    <li class="{{ request('type') == 'blog'? 'active' : '' }}"><a class="nav-link" href="{{ route('category.index').'?type=blog' }}">Categorias - Blog</a></li>
                    <li class="{{ request()->routeIs('category.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('category.create') }}">Criar Categoria</a></li>
                </ul>
            </li> --}}
            <li class="dropdown {{ request()->routeIs('menu.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Produto</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('menu.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('menu.index') }}">Produto - Lista</a></li>
                    <li class="{{ request()->routeIs('menu.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('menu.create') }}">Criar Produto</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('blog.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Blog</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('blog.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('blog.index') }}">Lista - Blog</a></li>
                    <li class="{{ request()->routeIs('blog.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('blog.create') }}">Criar Blog</a></li>
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
                    <li class="{{ request()->routeIs('gallery.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('gallery.create') }}">Adicionar Galeria</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('slider.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Slider</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('slider.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('slider.index') }}">Slider - Lista</a></li>
                    <li class="{{ request()->routeIs('slider.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('slider.create') }}">Criar Slider</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('service.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Serviço</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('service.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('service.index') }}">Serviços - Lista</a></li>
                    <li class="{{ request()->routeIs('service.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('service.create') }}">Criar Serviço</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->routeIs('staff.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Funcionários</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('staff.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('staff.index') }}">Funcionários - Listar</a></li>
                    <li class="{{ request()->routeIs('staff.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('staff.create') }}">Funcionários - Criar</a></li>
                </ul>
            </li>
            <li class="{{ request()->routeIs('admin.order') ? 'active':'' }}">
                <a href="{{ route('admin.order') }}" class="nav-link"><i class="fas fa-fire"></i><span>Pedidos</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.general') ? 'active':'' }}">
                <a href="{{ route('admin.general') }}" class="nav-link"><i class="fas fa-fire"></i><span>Informaçoes Gerais</span></a>
            </li>
        </ul>


    </aside>
</div>
