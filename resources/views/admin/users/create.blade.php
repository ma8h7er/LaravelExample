@extends('admin.layouts.master')
@section('page-header')
    <section class="content-header">
        <h1>
            Create New User
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.user.index') !!}">Users</a></li>
            <li class="active">Users</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        @if(Session::has('message'))
            @if(Session::has('errors'))
                <div class="alert alert-danger" role="alert">
                    {!! Session::get('message') !!}
                </div>
                @endif
            <div class="alert alert-success" role="alert">
                {!! Session::get('message') !!}
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <form action="{!! route('admin.user.store') !!}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box box-primary">
                        <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @foreach($roles as $role)
                                            <div class="form-group has-success">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="role[]" class="custom-control-input" value="{!! $role->id !!}">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">{!! $role->name !!}</span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                   {{-- <div class="col-md-6">

                                            <div class="custom-controls-stacked">
                                                @foreach($roles as $role)
                                                <label class="custom-control custom-radio">
                                                    <input id="role{!! $role->id !!}" name="role_id" type="radio" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">{!! $role->name !!}</span>
                                                </label>
                                                @endforeach
                                            </div>

                                    </div>--}}
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email" name="email" class="form-control">
                                </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Save User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection