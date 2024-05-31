@extends('adminlte::page')

@section('title', 'News')

@section('content')
<div class="container">
        <h2>Edit</h2>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label> 
                <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}"> 
            </div>
            <div class="mb-3">
                <label for="new_description" class="form-label">Description</label> 
                <input type="text" name="new_description" id="new_description" class="form-control" value="{{ $news->description }}"> 
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images[]" id="images" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

@section('css')

@stop

@section('js')

@stop
