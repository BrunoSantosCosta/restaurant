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
                <form method="POST"
                      id="cartForm"
                    @if (auth()->user() && auth()->user()->id)
                        action="{{ route('cart.add', [$product, auth()->user()->id])}}
                    @endif
                ">
                    @csrf
                    <div class="prod_info">
                        <h1>{{ $product->title }}</h1>
                        <p>{{ $product->description }}</p>
                        <div class="prod_options">
                            @foreach ($addons as $addon)
                                <div class="row addon_row">
                                    <label class="col-xl-5 col-lg-5 col-md-6 col-6" data-price="{{ $addon->price }}"><strong>{{ $addon->name }} - R$ {{ number_format($addon->price, 2, ',', '.') }}</strong></label>
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                        <div class="numbers-row">
                                            <input type="number" value="0" class="qty2" name="quantity_{{ $addon->id }}" readonly>
                                            <div class="inc button_inc">+</div>
                                            <div class="dec button_inc">-</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Detalhes do Pedido:</label>
                            <textarea class="form-control" id="details" name="details" rows="50s" cols="50" style="min-height: 150px" placeholder="Ex: Sem Alface, tomate, queijo, cebola..."></textarea>
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
                                <input type="hidden" name="base_price" value="{{ $product->price }}">
                                <input type="hidden" name="total_price" id="hidden_total_price">
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
    $(document).ready(function() {
        function updateTotalPrice() {
            var basePrice = parseFloat($('[name="base_price"]').val().replace(',', '.'));
            var productQuantity = parseInt($('#quantity_product').val());
            var totalAddonsPrice = 0;

            $('.addon_row').each(function() {
                var addonQuantity = parseInt($(this).find('.qty2').val());
                var addonPrice = parseFloat($(this).find('label').attr('data-price'));
                totalAddonsPrice += addonQuantity * addonPrice;
            });

            var total = (basePrice + totalAddonsPrice) * productQuantity;
            $('#total_price').text(`R$${total.toFixed(2).replace('.', ',')}`);
        }

        $('.numbers-row').append('<div class="inc button_inc">+</div><div class="dec button_inc">-</div>');

        $('.numbers-row').on('click', '.inc, .dec', function() {
            var $button = $(this);
            var $input = $button.siblings("input.qty2");
            var oldValue = parseInt($input.val());
            var newVal = $button.hasClass('inc') ? oldValue + 1 : Math.max(oldValue - 1, 0);
            $input.val(newVal);
            updateTotalPrice();
        });

        updateTotalPrice();

        $('#quantity_product').on('change', function() {
            updateTotalPrice();
        });

        $('.prod_options').on('change', '.qty2', function() {
            updateTotalPrice();
        });
    });

      document.getElementById('cartForm').addEventListener('submit', function() {
        var totalPriceElement = document.getElementById('total_price');
        var hiddenTotalPriceElement = document.getElementById('hidden_total_price');
        hiddenTotalPriceElement.value = totalPriceElement.innerText.replace('R$', '').trim();
    });
    </script>
@endsection
