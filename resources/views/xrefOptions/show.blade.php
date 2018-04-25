@extends('layouts.app')

@section('content')
    @include('xrefOptions.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefOptions.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
