@extends('layouts.app')

@section('content')
    @include('tickets.show_fields')

    <div class="form-group">
           <a href="{!! route('tickets.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
