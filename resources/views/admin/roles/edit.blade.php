@extends('admin.layouts.master')
@section('page-header')
    <section class="content-header">
        <h1>
           Edit Role
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.role.index') !!}">Users</a></li>
            <li class="active">Roles</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form action="{!! route('admin.role.update', [$role->id]) !!}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box box-primary">
                        <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" name="name" class="form-control"
                                            value="{!! $role->name !!}">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Name</label>
                                        <textarea id="description" name="description" class="form-control">
                                            {!! $role->description !!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Save Role</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection