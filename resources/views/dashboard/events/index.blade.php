@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Events List</h3>
                <a href="{{ route('events.create') }}" class="btn btn-primary pull-right">Create Event</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="datatable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Address</th>
                        <th>Organizer</th>
                        <th>Venue</th>
                        <th>When</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $key => $event)
                        <tr>
                        <td>{{ $key+1 }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->address }}</td>
                            <td>{{ $event->organizer }}</td>
                            <td>{{ $event->venue }}</td>
                            <td>{{ $event->start_date->format('j F Y - H:i') }}</td>
                            <td class="text-center">
                                <a href="{{ route('events.edit', $event->slug) }}"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="deleteEvent({{ $event->id  }})" style="margin-left: 10px;" class="text-danger"><i class="fa fa-trash"></i></a>
                                <form action="{{ route('events.destroy', $event->slug) }}" id="delete{{ $event->id }}" method="post">@csrf @method('DELETE')</form>
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

    function deleteEvent(id) {
        if (confirm('Are you sure?')) {
            $('#delete'+id).submit();
        }
    }
</script>
@endsection
