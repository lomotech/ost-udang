@extends('layouts.app')

@section('content')
    @include('xrefCountries.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefCountries.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
