@extends('layouts.backend')

@section('title', 'Editar Categoria')

@section('content')

<div class="card">
    <form action="{{ route('productCategory.update', $productCategory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-header">
            <h4>{{ $page_title }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ $productCategory->name }}">
                </div>
            </div>
            <div claszps="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>


@endsection
