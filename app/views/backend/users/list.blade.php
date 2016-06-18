@extends('backend.layouts.default')

@section('title'){{ trans('users.users-list') }} @stop

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header"></div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ trans('users.fullname') }}</th>
                            <th>{{ trans('users.email') }}</th>
                            <th>{{ trans('users.privileges') }}</th>
                            <th>{{ trans('common.status') }}</th>
                            <th>{{ trans('common.update') }}</th>
                            <th>{{ trans('common.delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($allUsers as $user)
                        <tr>
                            <td>{{ $user->us_fullname }}</td>
                            <td>{{ $user->us_email }}</td>
                            <td>{{ $user->us_usertype }}</td>
                            <td><img src="{{ asset('assets/admin/img/status_'.$user->us_status.'.png') }}" /></td>
                            <td><a href="{{ URL::to('admincp/updateUser/'.$user->us_id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> <th>{{ trans('common.update') }}</th></a></td>
                            <td><a href="{{ URL::to('admincp/deleteUser/'.$user->us_id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i> <th>{{ trans('common.delete') }}</th></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>{{ trans('users.fullname') }}</th>
                            <th>{{ trans('users.email') }}</th>
                            <th>{{ trans('users.privileges') }}</th>
                            <th>{{ trans('common.status') }}</th>
                            <th>{{ trans('common.update') }}</th>
                            <th>{{ trans('common.delete') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

@stop

@section('scripts')
{{ HTML::style('assets/admin/css/datatables/dataTables.bootstrap.css'); }}
{{ HTML::script('assets/admin/js/plugins/datatables/jquery.dataTables.js'); }}
{{ HTML::script('assets/admin/js/plugins/datatables/dataTables.bootstrap.js'); }}
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
    });
</script>
@stop