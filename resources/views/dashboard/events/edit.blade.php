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
                <form action="{{ route('events.update', $event->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-sm-6">
                        <div class="form-group @error('title') has-error @enderror">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input id="title" class="form-control" value="{{ old('title')??$event->title }}" type="text" name="title">
                            @error('title')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group  @error('venue') has-error @enderror">
                            <label for="venue">Venue <span class="text-danger">*</span></label>
                            <input id="venue" value="{{ old('venue')??$event->venue }}" class="form-control" type="text" name="venue">
                            @error('venue')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group  @error('organizer') has-error @enderror">
                            <label for="organizer">Organizer <span class="text-danger">*</span></label>
                            <input id="organizer" class="form-control" value="{{ old('organizer')??$event->organizer }}" type="text" name="organizer">
                            @error('organizer')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group  @error('address') has-error @enderror">
                            <label for="address">Address </label>
                            <textarea name="address" class="form-control" id="address" rows="5">{{ old('address')??$event->address }}</textarea>
                            @error('address')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="col-sm-6">
                        <div class="form-group  @error('title') has-error @enderror">
                            <label for="category">Category</label>
                            <select id="category" class="form-control select2" style="width: 100%;" name="category_id">
                                <option disabled selected>Select category</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group  @error('title') has-error @enderror">
                            <label for="tags">Tags</label>
                            <select id="tags" multiple class="form-control select2" style="width: 100%;" name="tags_id">
                                <option disabled></option>
                            </select>
                        </div>
                    </div> --}}

                    <div class="form-group  @error('body') has-error @enderror col-sm-12">
                        <label for="body">Body <span class="text-danger">*</span></label>
                        <textarea id="body" class="form-control" name="body">{{ old('body')??$event->body }}</textarea>
                        @error('body')
                            <span class="text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>

                    <!-- Date and time range -->
                    <div class="form-group  @error('event_date') has-error @enderror col-sm-6">
                        <label>Event date and time range <span class="text-danger">*</span></label>

                        <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" name="event_date" value="{{ old('event_date') }}" class="form-control" id="event_date">
                        </div>
                        <!-- /.input group -->
                        @error('event_date')
                            <span class="text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>

                    <div class="form-group  @error('sponsor') has-error @enderror col-sm-6">
                        <label for="sponsor">Sponsor</label>
                        <select id="sponsor" class="form-control" style="width: 100%;" multiple name="sponsor_id[]">
                            @foreach (App\Models\Sponsor::all() as $sponsor)
                                <option data-path="{{ $sponsor->filePath() }}" {{ old('sponsor_id'? ((collect(old('sponsor_id'))->contains($sponsor->id))? 'selected':''):(($event->sponsors->contains('sponsor_id', $sponsor->id))? 'selected':'')) }} value="{{ $sponsor->id }}">{{ $sponsor->name }}</option>
                            @endforeach
                        </select>
                        @error('sponsor')
                            <span class="text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="images">Images <span class="text-danger">*</span></label>
                            <input id="images" type="file" multiple name="images[]">
                            @error('images')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>

                    @livewire('images.view', ['event' => $event], key($event->id))

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Update</button>
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

        function formatSponsor (sponsor) {
            if (!sponsor.id) {
                return sponsor.text;
            }
            var $sponsor = $(
                '<span><img width="25" src="' + $(sponsor.element).data('path') + '" class="image-responsive" /> ' + sponsor.text + '</span>'
            );
            return $sponsor;
        };

        $('#category').select2()
        $('#sponsor').select2({
            placeholder: 'Select sponsors',
            templateResult: formatSponsor,
            templateSelection: formatSponsor,
        })
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
        $('#event_date').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }, drops: 'up', startDate: @json($event->start_date->format('m/d/Y h:i A')), endDate: @json($event->end_date->format('m/d/Y h:i A'))})

    });
</script>
@endsection
