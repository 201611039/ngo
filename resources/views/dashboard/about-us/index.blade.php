@extends('layouts.app')

@section('content')
    <div class="box">
        <form action="{{ route('about.store') }}" method="POST">
            <div class="box-body">
                @csrf

                <div class="form-group">
                    <label for="general">General</label>
                    <textarea id="general" class="form-control" name="general">{{ $about->general_info??'' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="mission">Mission</label>
                    <textarea id="mission" class="form-control" name="mission">{{ $about->mission??'' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="vision">Vision</label>
                    <textarea id="vision" class="form-control" name="vision">{{ $about->vision??'' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="value">Value</label>
                    <textarea id="value" class="form-control" name="value">{{ $about->value??'' }}</textarea>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection

@section('js')

<script>
    ClassicEditor
        .create( document.querySelector( '#value' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#mission' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#vision' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#general' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );
</script>

@endsection
