@extends('layouts.frontend')

@section('content')

<div id="carousel-home">
    <div class="owl-carousel owl-theme">
        @if(!empty($sliders))
            @foreach ($sliders as $slider)
                <div class="owl-slide cover lazy" data-bg="url({{ asset($slider->thumbnail) }})">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 m-auto static">
                                    <div class="slide-text white text-center">
                                        <h2 class="owl-slide-animated owl-slide-title">{{ $slider->title }}</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            {{ $slider->sub_title }}
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll"
                                                href="#" role="button">Ver Cardápio</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div id="icon_drag_mobile"></div>
</div>

<div class="pattern_2">
    <div class="container margin_120_100 home_intro">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
                <figure>
                    <img src="{{ $general->story_image }}" data-src="{{ $general->story_image }}" width="354" height="440"
                        alt="" class="img-fluid lazy">
                </figure>
            </div>
            <div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>Sobre nós</h2>
                    <p>{{ $general ? $general->story_title : '' }}</p>
                </div>
                <p>{!! $general ? $general->story_description : '' !!}</p>
            </div>
        </div>
    </div>
</div>

{{--
<section class="container margin_120_100">
    <div class="row">
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_1.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>Our Menu</h3>
                    <p>View Our Specialites</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_2.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>DELIVERY</h3>
                    <p>Home delivery or take away food</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_3.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>INSIDE FOORES</h3>
                    <p>View the Gallery</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_4.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>Our Menu</h3>
                    <p>View Our Specialites</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_5.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>BOOK A TABLE</h3>
                    <p>View Our Specialites</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_6.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>GALLERY</h3>
                    <p>Home delivery or take away food</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_1.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>EVENTS</h3>
                    <p>View the Gallery</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3">
            <a href="#" class="img_container">
                <img src="{{ asset('assets/frontend/img/banner_2.jpg' )}}" class="lazy">
                <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <h3>EVENTS</h3>
                    <p>View the Gallery</p>
                </div>
            </a>
        </div>
    </div>
</section>
 --}}

<div class="bg_gray">
    <div class="container margin_120_100" data-cue="slideInUp">
        <div class="main_title center mb-5">
            <span><em></em></span>
            <h2>Destaques</h2>
        </div>
        <div class="row homepage add_bottom_25">
            <div class="col-xl-8">
                <div class="row">
                    @if (!empty($menus))
                        @foreach ($menus as $menu)
                        <div class="col-lg-6">
                            <div class="menu_item">
                                <figure class="magnific-gallery" data-cue="slideInUp">
                                    <a href="{{ $menu->thumbnail }}" title="{{ $menu->title }}"
                                        data-effect="mfp-zoom-in">
                                        <img src="{{ $menu->thumbnail }}"
                                            data-src="{{ $menu->thumbnail }}" class="lazy" alt="">
                                    </a>
                                </figure>
                                <div class="menu_title">
                                    <h3>{{ $menu->title }}</h3><em>${{ $menu->price }}</em>
                                </div>
                                <p>Raspberries, Blackberries</p>
                                @guest
                                <a href="javascript:void(0)" class="btn_1" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar ao Carrinho</a>
                                @else
                                <a class="btn_1" href="{{ route('cart.add', [$menu->id, auth()->user()->id]) }}">Adicionar ao Carrinho</a>
                                @endguest
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-xl-4">
                <div class="banner lazy" data-bg="url({{ asset('assets/frontend/img/banner_bg.jpg') }})">
                    <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="text">
                            <small>Veja nosso Cardápio</small>
                            <p>Hamburgher, Chips, Mix Sausages, Beer, Muffin</p>
                            <a href="reservations.html" class="btn_1">Ver Mais</a>
                        </div>
                        <!-- <figure class="d-none d-lg-block"><img src="img/banner.svg" alt="" width="200"
                                height="200" class="img-fluid"></figure> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
        {{-- <p class="text-center"><a href="#0" class="btn_1 outline" data-cue="zoomIn">Download Menu (PDF)</a></p> --}}
    </div>
    <!-- /container -->
</div>
<!-- /bg_gray -->

<div class="call_section lazy">

@endsection
