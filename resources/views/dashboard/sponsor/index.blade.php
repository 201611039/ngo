@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Sponsors List</h3>
                <a href="{{ route('sponsors.create') }}" class="btn btn-primary pull-right">Create Sponsor</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="datatable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Short Name</th>
                        <th>Type</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sponsors as $key => $sponsor)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><img src="{{ $sponsor->filePath() }}" alt="logo" width="30"></td>
                            <td>{{ $sponsor->name }}</td>
                            <td>{{ $sponsor->short_name }}</td>
                            <td>{{ $sponsor->type }}</td>
                            <td class="text-center">
                                <a href="{{ route('sponsors.edit', $sponsor->slug) }}"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="deleteSponsor({{ $sponsor }})" style="margin-left: 10px;" class="text-danger"><i class="fa fa-trash"></i></a>

                                <form id="{{ $sponsor->slug }}" action="{{ route('sponsors.destroy', $sponsor->slug) }}" method="post">@csrf @method('DELETE')</form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.box-body -->
        </div>
      <!-- /.box -->

    </div>
</div>

@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('js')
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
    $('#datatable').DataTable()

    function deleteSponsor(sponsor) {
        if (confirm('Delete '+ sponsor.name)) {
            $('#'+sponsor.slug).submit();
        }
    }
</script>
@endsection
