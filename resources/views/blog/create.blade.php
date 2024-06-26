@extends('layouts.backend')

@section('title', 'Criar Blog')

@section('content')

<div class="card">
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h4>{{ $page_title }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título</label>
                <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Categoria</label>
                <div class="col-sm-12 col-md-7">
                    <select name="category_id" class="form-control selectric">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição</label>
                <div class="col-sm-12 col-md-7">
                <textarea name="description" class="summernote-simple"></textarea>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imagem</label>
                <div class="col-sm-12 col-md-7">
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Escolher Arquivo</label>
                        <input type="file" name="thumbnail" id="image-upload" />
                    </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="status">
                        <option value="1">Publicado</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
            </div>
            <div claszps="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>


@endsection
@section('scripts')
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endsection
