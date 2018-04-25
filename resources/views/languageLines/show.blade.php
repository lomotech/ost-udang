@extends('layouts.app')

@section('content')
    @include('languageLines.show_fields')

    <div class="form-group">
           <a href="{!! route('languageLines.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
