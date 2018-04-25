@extends('layouts.app')

@section('content')
    @include('xrefSubdistricts.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefSubdistricts.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
