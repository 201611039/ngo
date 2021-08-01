@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Create Event</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf

                    <div class="col-sm-6">
                        <div class="form-group @error('title') has-error @enderror">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" value="{{ old('title') }}" type="text" name="title">
                        </div>
                        @error('title')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="venue">Venue</label>
                            <input id="venue" class="form-control" type="text" name="venue">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="organizer">Organizer</label>
                            <input id="organizer" class="form-control" type="text" name="organizer">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Address</label>
                            <textarea name="address" class="form-control" id="address" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" class="form-control select2" style="width: 100%;" name="category_id">
                                <option disabled selected>Select category</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <select id="tags" multiple class="form-control select2" style="width: 100%;" name="tags_id">
                                <option disabled></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="body">Body</label>
                        <textarea id="body" class="form-control" name="body">{{ old('body') }}</textarea>
                    </div>

                    <!-- Date and time range -->
                    <div class="form-group col-sm-12">
                        <label>Event date and time range:</label>

                        <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" name="event-date" class="form-control" id="event-date">
                        </div>
                        <!-- /.input group -->
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">

<style>
    /* Make Select2 boxes match Bootstrap3 heights: */
    /* .select2-selection__rendered {
        line-height: 32px !important;
    }
    .select2-selection {
        height: 34px !important;
    }
    .select2-selection__arrow {
        height: 34px !important;
    }
    .select2-choices {min-height: 150px !important; max-height: 150px !important; overflow-y: auto !important; }
    .select2-results {max-height: 200px !important;} */
</style>
@endsection

@section('js')
<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

<!-- date-range-picker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script>
    $(function () {
        $('#category').select2()
        $('#tags').select2({
            placeholder: 'Select tags'
        })

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );


        //Date range picker with time picker
        $('#event-date').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }, drops: 'up', minDate: new Date(),})

    });
</script>
@endsection
