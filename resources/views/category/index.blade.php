@extends('layouts.backend')

@section('title', 'Category List')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $page_title }}</h4>
                </div>

                <div claszps="card-body">
                    <table class="table table-spriped">
                        <thead>
                            <tr>
                                <th>sl no.</th>
                                <th>thumbnail</th>
                                <th>name</th>
                                <th>action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="75">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a  class="btn btn-primary" href="#">Edit</a>
                                        <a  class="btn btn-danger" href="#">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
