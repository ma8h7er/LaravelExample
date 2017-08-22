@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            Posts
            <a href="{!! route('admin.post.create') !!}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>
                Create Post
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin.dashboard.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Posts</li>
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
                        <table id="post-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>content</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach($posts as $p)
                              <tr>
                                  <td>{{ $p->id }}</td>
                                  <td>{!! $p->title !!}</td>
                                  <td>{!! $p->content !!}</td>
                                  <td>{!! $p->created_at !!}</td>
                                  <td>{!! $p->updated_at !!}</td>
                                  <td>
                                      <a href="{!! route('admin.post.edit', [$p->id]) !!}">
                                          <i class="fa fa-edit"></i>
                                          Edit
                                      </a>
                                      <a href="{!! route('admin.post.delete', [$p->id]) !!}" class="btn btn-sm btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </a>
                                  </td>
                              </tr>
                           @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>content</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

    <!-- Modal -->
    <div class="modal modal-danger fade" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Danger Modal</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@section('script')
    <!-- DataTables -->
    <script src="{!! URL::asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('admin/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
    <script>
        $(function () {
            $('#post-table').DataTable({
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