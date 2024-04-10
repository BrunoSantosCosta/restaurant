@extends('layouts.frontend')
@section('title', 'Sobre nós')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Loja Demonstativa</h1>
        <p>Hamburgueria</p>
    </div>
@endsection
@section('content')
<div class="pattern_2">
    <div class="container margin_120_100 home_intro">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7" data-cue="slideInUp" data-delay="500">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>{{ $general ? $general->story_title:'' }}</h2>
                </div>
                <p>{!! $general ? $general->story_description:'' !!}</p>
            </div>
        </div>
    </div>
</div>

<div class="bg_gray">
    <div class="container margin_120_100">
        <div class="row flex-lg-row-reverse">
            <div class="col-lg-5 offset-lg-1 align-self-center mb-4 mb-md-0">
                <div class="intro_txt" data-cue="slideInUp" data-delay="500">
                    <div class="main_title">
                        <span><em></em></span>
                        <h2>Por que nos escolher</h2>
                    </div>
                    <p class="lead">{!! $general ? $general->why_choose_us:'' !!}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        @if (!empty($services))
                            @foreach ($services as $item)
                                @if ($loop->index < 2)
                                <div class="box_how services-box" data-cue="slideInUp">
                                    <figure><img src="{{asset($item->thumbnail)}}" data-src="{{asset($item->thumbnail)}}"
                                            alt="" width="100" height="110" class="lazy"></figure>
                                    <h3>{{ $item->title }}</h3>
                                    <p>{!! $item->description !!}</p>
                                </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="col-lg-6 align-self-center">
                        @if (!empty($services))
                            @foreach ($services as $item)
                                @if ($loop->index > 1)
                                <div class="box_how services-box" data-cue="slideInUp">
                                    <figure><img src="{{asset($item->thumbnail)}}" data-src="{{asset($item->thumbnail)}}"
                                            alt="" width="100" height="110" class="lazy"></figure>
                                    <h3>{{ $item->name }}</h3>
                                    <p>{!! $item->description !!}</p>
                                </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pattern_2">
    <div class="container margin_120_100">
        <div class="main_title center mb-5">
            <span><em></em></span>
            <h2>Colaboradores</h2>
        </div>
        <div id="staff" class="owl-carousel owl-theme">
            @if (!empty($staffs))
                @foreach ($staffs as $item)
                <div class="item image-staffs">
                    <a href="#0">
                        <div class="title">
                            <h4>{{ $item->name }}<em>{{ $item->designation }}</em></h4>
                        </div><img src="{{ $item->thumbnail }}" alt="" >
                    </a>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
