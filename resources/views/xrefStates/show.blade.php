@extends('layouts.app')

@section('content')
    @include('xrefStates.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefStates.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
