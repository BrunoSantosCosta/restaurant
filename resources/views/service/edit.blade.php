@extends('layouts.backend')
@section('title', 'Editar Serviço')
@section('content')
    <div class="card">
        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h4>{{ $page_title }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" value="{{ $service->title }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="description" value="{{ $service->description }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imagem</label>
                    <div class="col-sm-12 col-md-7">
                        <div style="background-image: url({{ asset($service->thumbnail) }});background-size: cover; background-position: center;" id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Escolher Arquivo</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endsection
