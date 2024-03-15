@extends('layouts.backend')

@section('title', 'Criar Categoria')

@section('content')

<div class="card">
    <form action="{{ route('productCategory.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h4>{{ $page_title }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome da Categoria">
                </div>
            </div>
            <div class="form-group row">
                <label for="thumbnail" class="col-sm-3 col-form-label">Imagem</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                </div>
            </div>
            <div claszps="card-footer">
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </div>
    </form>
</div>


@endsection
