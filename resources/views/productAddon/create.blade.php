@extends('layouts.backend')

@section('title', 'Criar Adicional')

@section('content')

<div class="card">
    <form action="{{ route('productAddon.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h4>{{ $page_title }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Adicional">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Preço</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="price" id="priceInput" onkeyup="formatCurrency()"  placeholder="Preço do Adicional">
                </div>
            </div>
            <div claszps="card-footer">
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </div>
    </form>
</div>

@endsection
