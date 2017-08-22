@extends('admin.layouts.master')
@section('page-header')
    <section class="content-header">
        <h1>
            Edit Category
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.category.index') !!}">Categories</a></li>
            <li class="active">Edit Categories</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form action="{!! route('admin.category.update', [$category->id]) !!}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control"
                                       value="{!! $category->name !!}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control">
                                    {!! $category->description !!}
                                </textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Save Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection