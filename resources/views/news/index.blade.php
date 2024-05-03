@extends('adminlte::page')

@section('title', 'News')

@section('content_header')
    <h1>News</h1>
@stop

@section('content')
    <div class="mb-3">
        <a href="{{ route('news.create') }}" class="btn btn-outline-dark">New</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Month, Year</th>
                <th>Images</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @forelse($news as $new)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $new->created_at->format('F j, Y') }}</td>
                    <td>
                        <div class="d-flex">
                            @foreach($new->images()->get() as $image)
                                <img src="{{ asset(env('UPLOADS_IMAGE'). "/" . $image->name) }}" alt="" class="w-25 border">
                            @endforeach
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No news available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@stop

@section('css')

@stop

@section('js')

@stop
