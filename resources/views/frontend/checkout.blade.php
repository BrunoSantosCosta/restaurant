@extends('layouts.frontend')
@section('title', 'Checkout')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>CheckOut</h1>
        <p>Hamburgueria</p>
    </div>
@endsection
@section('content')
<form action="{{ route('order', auth()->user()->id) }}" method="POST">
    @csrf
    <div class="pattern_2">
        <div class="container margin_60_40">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="box_booking_2 style_2">
                        <div class="head">
                            <div class="title">
                                <h3>Dados Do Cliente</h3>
                            </div>
                        </div>
                        <div class="main">
                            <div class="form-group">
                                <label>Nome e Sobrenome</label>
                                <input class="form-control" name="name" placeholder="Nome e Sobrenome">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Endereço de Email</label>
                                        <input class="form-control" name="email" placeholder="Endereço de Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Número</label>
                                        <input class="form-control" name="phone" placeholder="Número">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Endereço Completo</label>
                                <input class="form-control" name="address" placeholder="Endereço Completo">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input class="form-control" name="city" placeholder="Cidade">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CEP</label>
                                        <input class="form-control" name="postal_code">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_booking_2 style_2">
                        <div class="head">
                            <div class="title">
                                <h3>Método de Pagamento</h3>
                            </div>
                        </div>
                        <div class="main">
                            <div class="payment_select">
                                <label class="container_radio">Dinheiro
                                    <input type="radio" value="3" checked name="payment_method">
                                    <span class="checkmark"></span>
                                </label>
                                <i class="icon_creditcard"></i>
                            </div>
                            <div class="payment_select">
                                <label class="container_radio">Cartão
                                    <input type="radio" value="3" checked name="payment_method">
                                    <span class="checkmark"></span>
                                </label>
                                <i class="icon_wallet"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4" id="sidebar_fixed">
                    <div class="box_booking">
                        <div class="head">
                            <h3>Produtos</h3>
                        </div>
                        <div class="main">
                            <ul class="clearfix">
                                @foreach ($carts as $cart)
                                    <input type="hidden" name="menu_id[]" value="{{ $cart->menu_id }}">
                                    <input type="hidden" name="quantity[]"  value="{{ $cart->quantity }}">
                                    <li>{{ $cart->quantity }}x - {{ strlen($cart->title) > 25 ? substr($cart->title, 0, 25) . '...' : $cart->title }}<span>R${{ $subtotal }}</span></li>
                                @endforeach
                            </ul>
                            <ul class="clearfix">
                                <li>Subtotal<span>R${{ $subtotal }}</span></li>
                                <li>Taxa de Entrega<span> GRÁTIS </span></li>
                                <li>TOTAL<span>R${{ $total }}</span></li>
                                <input type="hidden" name="total" value="{{ $total }}">
                            </ul>
                            <button type="submit" class="btn_1 full-width mb_5">Finalizar Pedido</button>
                            <div class="text-center"><small>Ou nos Ligue <strong>{{ $general ? $general->primary_phone:'' }}</strong></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('scripts')
    <script src="{{ asset('assets/frontend/js/sticky_sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/shop_order_func.js') }}"></script>
@endsection
