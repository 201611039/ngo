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
                <form action="{{ route('sponsors.update', $sponsor->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-sm-6 form-group @error('name') has-error @enderror">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input id="name" class="form-control" value="{{ old('name')??$sponsor->name }}" type="text" name="name">
                        @error('name')
                            <span class="text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group @error('short_name') has-error @enderror">
                            <label for="short_name">Short Name <span class="text-danger">*</span></label>
                            <input id="short_name" value="{{ old('short_name')??$sponsor->short_name }}" class="form-control" type="text" name="short_name">
                            @error('short_name')
                                <span class="help-block"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group @error('type') has-error @enderror">
                            <label for="type">Sponsor Type <span class="text-danger">*</span></label>
                            <select id="type" class="form-control" name="type">
                                <option disabled selected>Select type</option>
                                <option value="0" {{ old('type')?(old('type') == 0? 'selected':''):($sponsor->type == 0? 'selected':'') }}>Temporary for event</option>
                                <option value="1" {{ old('type')?(old('type') == 1? 'selected':''):($sponsor->type == 1? 'selected':'') }}>Permanent</option>
                            </select>
                            @error('type')
                                <span class="help-block"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group @error('logo') has-error @enderror">
                            <label for="logo">Logo <span class="text-danger">*</span></label>
                            <input style="margin-top: 6px" id="logo" class="" type="file" name="logo">
                            <img style="margin-top: 10px;" src="{{ $sponsor->filePath() }}" alt="logo" width="100" class="img-responsive">
                            @error('logo')
                                <span class="help-block"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>


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

