@extends('admin.layouts.master')
@section('page-header')
    <section class="content-header">
        <h1>
            Create New Post
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.post.index') !!}">Posts</a></li>
            <li class="active">Posts</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form action="{!! route('admin.post.store') !!}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box box-primary">
                        <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input id="title" type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select id="category" name="category_id" class="form-control">
                                                 @foreach($categories as $category )
                                                    <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea id="content" name="content" class="form-control"></textarea>
                                </div>
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input id="meta_title" type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Save Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection