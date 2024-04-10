@extends('layouts.frontend')
@section('title', 'Blog')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Loja Demonstrativa</h1>
        <p>Hamburgueria</p>
    </div>
@endsection

@section('content')
    <div class="container margin_60_40">
        <div class="row">
            <div class="col-lg-6 magnific-gallery">
                <p class="shop_setails_img">
                    <a href="../{{ $product->thumbnail }}" title="{{ $product->title }}" data-effect="mfp-zoom-in"><img
                            src="../{{ $product->thumbnail }}" alt="" class="img-fluid"></a>
                </p>
            </div>
            <div class="col-lg-6" id="sidebar_fixed">
                <form method="POST" action="{{ route('cart.add', [$product, auth()->user()->id]) }}">
                    @csrf
                    <div class="prod_info">
                        <h1>{{ $product->title }}</h1>
                        <p>{{ $product->description }}</p>
                        <div class="prod_options">
                            @foreach ($addons as $addon)
                                <div class="row">
                                    <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>{{ $addon->name }} - R$ {{ $addon->price }}</strong></label>
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                        <div class="numbers-row">
                                            <input type="number" value="0" id="quantity_{{ $addon->id }} qtd_addon" class="qty2" name="quantity_{{ $addon->id }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="detalhes" class="form-label">Detalhes do Pedido:</label>
                            <textarea class="form-control" id="detalhes" name="detalhes" rows="50s" cols="50" style="min-height: 150px" placeholder="Ex: Sem Alface, tomate, queijo, cebola..."></textarea>
                        </div>
                        <div class="prod_options">
                            <div class="row">
                                <label class="col-xl-5 col-lg-5  col-md-6 col-6"><h2>Quantidade</h2></label>
                                <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="quantity_product" class="qty2" name="quantity_product" min="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <input type="hidden" name="update_price" value="{{ $product->price }}">
                                <div class="price_main"><span class="new_price" id="total_price">R${{ $product->price }}</span> <span class="old_price">$16.00</span></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="btn_add_to_cart">
                                    @auth
                                        <button type="submit" class="btn_1">Adicionar ao Carrinho</button>
                                    @else
                                        <a  href="javascript:void(0)" class="btn_1" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar ao Carrinho</a>
                                    @endauth

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var productInitialPrice = parseFloat($("#total_price").text().replace(/[^\d,.]/g, '').replace(',', '.'));
        $(".numbers-row").append('<div class="inc button_inc">+</div><div class="dec button_inc">-</div>');

        $(".button_inc").on("click", function () {
        var $button = $(this);
        var oldValue = $button.siblings("input").val();
        var isProductQuantity = $button.siblings("input").attr('id') === 'quantity_product';
        var isAddonQuantity = $button.siblings("input").attr('id') === 'qtd_addon';
        if (isProductQuantity && oldValue <= 1 && $button.text() == '-') {
            return;
        }

        var addonPriceText = $button.closest(".row").find("strong").text().split(" - ")[1];
        if (addonPriceText != undefined) {
            var addonPrice = parseFloat(addonPriceText.replace(',', '.').replace(/[^\d.]/g, ''));
            var productPriceText = $(".price_main .new_price").text();
            var productPrice = parseFloat(productPriceText.replace(/[^\d,.]/g, '').replace(',', '.'));
        }

        var currentTotal = parseFloat($("#total_price").text().replace(/[^\d,.]/g, '').replace(',', '.'));

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
            if (addonPriceText != undefined) {
                currentTotal += addonPrice;
            } else {
                currentTotal += productInitialPrice;
            }
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
                if (addonPriceText != undefined) {
                    currentTotal -= addonPrice;
                } else {
                    currentTotal -= productInitialPrice;
                }
            } else {
                newVal = 0;
            }
        }

        if (isProductQuantity) {
            $button.siblings("input").val(newVal);
        } else {
            $button.siblings("input").val(newVal < 0 ? 0 : newVal);
        }

        $("#total_price").text("  R$" + currentTotal.toFixed(2).replace('.', ','));
    });

    </script>
@endsection