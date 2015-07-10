@extends('layouts.backend')

@section('page-title')
    Create a Blog Post
@stop

@section('breadcrumb-title')
    New Blog Post
@stop

@section('content')
    <form role="form" action="{{ URL::route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="Slug" class="form-control">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="excerpt" placeholder="Excerpt" cols="30" rows="10">{{ old('excerpt') }}</textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="content" placeholder="Content" cols="30" rows="10">{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <div class="checkbox">
            <label>
                <input type="hidden" name="published" value="0">
                <input type="checkbox" name="published" value="1"{{ old('published') == 1 ? ' checked="checked"' : '' }}> Published?
            </label>
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop