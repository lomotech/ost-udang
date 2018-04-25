@extends('layouts.app')

@section('content')
    @include('xrefCustomCategories.show_fields')

    <div class="form-group">
           <a href="{!! route('xrefCustomCategories.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
