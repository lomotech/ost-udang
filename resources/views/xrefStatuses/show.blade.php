@extends('layouts.app')

@section('content')
    @include('xrefStatuses.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefStatuses.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
