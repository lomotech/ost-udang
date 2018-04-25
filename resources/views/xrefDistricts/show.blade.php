@extends('layouts.app')

@section('content')
    @include('xrefDistricts.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefDistricts.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
