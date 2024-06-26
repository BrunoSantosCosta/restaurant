@extends('layouts.frontend')
@section('title', 'Video Gallery')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Loja Demonstrativa</h1>
        <p>Hamburgueria</p>
    </div>
@endsection

@section('content')

    <div class="container margin_60_40">
        <div class="grid">
            <ul class="magnific-gallery" data-cues="zoomIn">
                <div class="row">
                    @if (!empty($data))
                        @foreach ($data as $item)
                            <div class="col-xl-3">
                                <div class="item">
                                    <div class="item-img" data-cue="slideInUp">
                                        <img src="{{ $item->thumbnail }}" alt="" />
                                        <div class="content">
                                            <a href="{{ $item->video_link }}" class="video" title="Video Vimeo"><i
                                                    class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </ul>
        </div>
    </div>

@endsection
