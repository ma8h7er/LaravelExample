@extends('admin.layouts.master')
@section('page-header')
    <section class="content-header">
        <h1>
            Categories
            <a href="{!! route('admin.category.create') !!}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>
                Create Category
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Categories</li>
        </ol>
    </section>
@endsection
@section('content')
    <section class="content">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                {!! Session::get('message') !!}
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="category-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{!! $category->name !!}</td>
                                    <td>{!! $category->description !!}</td>
                                    <td>{!! $category->created_at !!}</td>
                                    <td>{!! $category->updated_at !!}</td>
                                    <td>
                                        <a href="{!! route('admin.category.edit', [$category->id]) !!}">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                        <a href="{!! route('admin.category.delete', [$category->id]) !!}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <!-- DataTables -->
    <script src="{!! URL::asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('admin/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
    <script>
        $(function () {
            $('#category-table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            });
        });
    </script>
@endsection