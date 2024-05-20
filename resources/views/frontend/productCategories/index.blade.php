
@extends('layouts.frontend')
@section('title', 'Produtos')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Loja Demontrativa</h1>
        <p>Hamburgueria</p>
    </div>
@endsection

@section('content')
    <div class="pattern_2">
        <div class="container margin_60_40" data-cues="slideInUp">
            @foreach ($productCategories as $category)
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>{{ $category->name }}</h2>
                </div>
                <div class="row justify-content-center mb-5">
                    @foreach($category->products as $product)
                        @if ($product->status == 1)
                            <div class="col-md-4 col-xl-3" data-cue="slideInUp">
                                <div class="item menu_item_grid card-product">
                                    <div class="item-img" data-cue="slideInUp">
                                        <img src="{{ $product->thumbnail }}" alt="">
                                    </div>
                                    <h3>{{ $product->name }}</h3>
                                    <p>{{ strlen($product->description) > 150 ? substr($product->description, 0, 150) . '...' : $product->description }}</p>
                                    <div class="price-product">
                                        <div class="price_box">
                                            <span class="new_price">{{ $product->price }}</span>
                                            <span class="old_price">$12.00</span>
                                        </div>
                                        <a class="btn_1 add_to_cart"  href="{{ route('product.details', $product->id) }}">Ver Produto</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
