@extends('layouts.app')

@section('content')
    @include('xrefCustomData.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefCustomData.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
