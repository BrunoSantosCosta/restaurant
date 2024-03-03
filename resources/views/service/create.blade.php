@extends('layouts.backend')

@section('title', 'Criar Serviço')

@section('content')

<div class="card">
    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
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
