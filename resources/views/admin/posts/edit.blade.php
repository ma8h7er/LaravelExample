@extends('admin.layouts.master')
@section('page-header')
    <section class="content-header">
        <h1>
            Edit Post
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.post.index') !!}">Posts</a></li>
            <li class="active">Edit Posts</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form action="{!! route('admin.post.update', [$post->id]) !!}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" name="title" class="form-control"
                                value="{!! $post->title !!}">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="content" name="content" class="form-control">
                                    {!! $post->content !!}
                                </textarea>
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