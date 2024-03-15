@extends('layouts.backend')
@section('title', 'Todos Pedidos')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $page_title }}</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Número</th>
                                <th>Endereço</th>
                                <th>Cidade</th>
                                <th>CEP</th>
                                <th>Método de Pagamento</th>
                                <th>Status do Pagamento</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->postal_code }}</td>
                                    <td><span class="badge badge-primary">{{ $item->payment_method === 1 ? 'Cash On Delivery':($item->payment_method === 2 ? 'Paypal':'Stripe') }}</span></td>
                                    <td><span class="badge {{ $item->payment_status === 0 ? 'badge-danger':'badge-success' }}">{{ $item->payment_status === 0 ? 'Em Espera':'Concluido' }}</span></td>
                                    <td><span class="badge {{ $item->order_status === 0 ? 'badge-warning':($item->order_status === 1 ? 'badge-success':'badge-danger') }}">{{ $item->order_status === 0 ? 'Em Andamento':($item->order_status === 1 ? 'Completo':'Cancelado') }}</span></td>
                                    <td style="white-space: nowrap">
                                        <a class="btn btn-primary" href="{{ route('admin.order.confirmation',['accept', $item->id] ) }}">Completo</a>
                                        <a class="btn btn-warning" href="{{ route('admin.order.confirmation',['decline', $item->id] ) }}">Cancelar</a>
                                        <button class="btn btn-danger delete" type="button" id="{{ $item->id }}" class="btn btn-primary"
                                            data-toggle="modal" data-target="#exampleModal">Excluir</button>
                                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#order_{{ $item->id }}" >Detalhes</button>
                                    </td>
                                </tr>
                                <tr class="collapse" id="order_{{ $item->id }}">
                                    <td colspan="11">
                                        <table class="w-100">
                                            <thead>
                                                <th>#</th>
                                                <th>Imagem</th>
                                                <th>Quantidade</th>
                                                <th>Preço</th>
                                                <th>Total</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $total = 0;
                                                @endphp
                                                @foreach ($item->details as $order)
                                                    @php
                                                        $total += $order->price * $order->quantity;
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>
                                                            <img width="60" style="padding-bottom:5px;padding-top:5px;" src"" alt="thumbnail">
                                                        </td>
                                                        <td>{{ $order->quantity }}</td>
                                                        <td>{{ $order->price }}</td>
                                                        <td>{{ $order->price * $order->quantity }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <th colspan="4">Total</th>
                                                <th>R$ {{ $total }}</th>
                                            </tfoot>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="deleteModal" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem certeza de que deseja excluir este item?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('.delete').on('click', function () {
            const id = this.id;
            $('#deleteModal').attr('action', "{{ route('admin.order.delete', '') }}" + '/' + id);
        });
    </script>
@endsection
