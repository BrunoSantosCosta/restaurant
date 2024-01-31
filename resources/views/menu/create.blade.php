@extends('layouts.backend')

@section('title', 'Menu Create')

@section('content')

<div class="card">
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h4>{{ $page_title }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                <div class="col-sm-12 col-md-7">
                <select class="form-control selectric">
                    <option>Tech</option>
                    <option>News</option>
                    <option>Political</option>
                </select>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                <div class="col-sm-12 col-md-7">
                <textarea class="summernote-simple"></textarea>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                <div class="col-sm-12 col-md-7">
                <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="image" id="image-upload" />
                </div>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control inputtags">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                <div class="col-sm-12 col-md-7">
                <select class="form-control selectric">
                    <option>Publish</option>
                    <option>Draft</option>
                    <option>Pending</option>
                </select>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Create Post</button>
                </div>
            </div>
        </div>
        <div claszps="card-footer">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>


@endsection
@section('scripts')
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endsection
