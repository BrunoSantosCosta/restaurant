@extends('layouts.frontend')
@section('title', 'Cart')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Order</h1>
        <p>Hamburgueria</p>
    </div>
@endsection
@section('content')

    @if (!$carts->isEmpty())
        <div class="bg_gray">
            <div class="container margin_60_40">
                <form action="{{ route('cart.update', auth()->user()->id) }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Produto</th>
                                                <th>Adicionais</th>
                                                <th>Detalhes</th>
                                                <th>Preço</th>
                                                <th>Subtotal</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($carts))
                                                @foreach ($carts as $cart)
                                                    <tr>
                                                        <td>
                                                            <div class="thumb_cart">
                                                                <img width="80" src="{{ asset($cart->product->thumbnail) }}"
                                                                    data-src="{{ asset($cart->product->thumbnail) }}" class="lazy" alt="Image">
                                                            </div>
                                                            <span class="item_cart">{{ $cart->quantity }}x - {{ $cart->product->title }}</span>
                                                        </td>
                                                        <th>
                                                            @foreach($cartProductAddon as $addon)
                                                                @if ($addon->id_product == $cart->product->id)
                                                                    @foreach ($addons as $item)
                                                                        @if ($addon->id_addon == $item->id)
                                                                            <p>{{ $item->name }} - R$ {{ $item->price }}</p>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </th>

                                                        <td>{{ $cart->details }}</td>
                                                        <td>
                                                            <strong>R$ <span>{{ $cart->product->price }}</span></strong>
                                                        </td>
                                                        <td>
                                                            <strong>R$ <span>{{ floatval($cart->product->price) * $cart->quantity }}</span></strong>
                                                        </td>
                                                        <td class="options">
                                                            <a href="{{ route('cart.delete', [$cart->id, auth()->user()->id]) }}" class="btn btn-link text-danger" type="submit"><i class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                </form>
            </div>
        </div>

        <div class="box_cart">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <ul>
                            <li>
                                <span>Entrega</span> Gratís
                            </li>
                            <li>
                                <span>Total</span> R${{ floatval($cart->product->price) * $cart->quantity }}
                            </li>
                        </ul>
                        @if ($carts->isEmpty())
                            <span class="btn_1 full-width cart" onclick="alert('Você Possuí Produto(s) vinculado(s) na Categoria');">Finalizar Pedido</span>
                        @else
                            <a href="{{ route('checkout', auth()->user()->id) }}" class="btn_1 full-width cart">Finalizar Pedido</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="box_cart">
            <div class="container">
                <div class="row text-center">
                    <h1>Carrinho vazio</h1>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('scripts')
    <script src="{{ asset('assets/frontend/js/specific_shop.js') }}"></script>
@endsection
