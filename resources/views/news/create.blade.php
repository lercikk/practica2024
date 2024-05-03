@extends('adminlte::page')

@section('title', 'News')

@section('content_header')
    <h1>Create news</h1>
@stop

@section('content')
    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control"> 
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-outline-dark">Save</button>
    </form>
@stop

@section('css')

@stop

@section('js')

@stop

