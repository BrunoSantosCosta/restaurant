@extends('layouts.backend')
@section('title', 'Lista - Serviços')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="col-6">{{ $page_title }}</h4>
                    <a class="btn btn-success" href="{{ route('service.create') }}">Adicionar Serviço +</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imagem</th>
                                <th>Título</th>
                                <th>Pequena Descrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="60" style="padding-bottom:5px;padding-top:5px;">
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! Str::limit($item->description, 50) !!}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('service.edit', $item->id) }}">Editar</a>
                                        <button class="btn btn-danger delete" type="button" id="{{ $item->id }}" class="btn btn-primary"
                                            data-toggle="modal" data-target="#exampleModal">Excluir</button>
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
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
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
            $('#deleteModal').attr('action', "{{ route('service.destroy', '') }}" + '/' + id);
        });
    </script>
@endsection
