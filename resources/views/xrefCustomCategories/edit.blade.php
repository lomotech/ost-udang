@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit xref_custom_category</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefCustomCategory, ['route' => ['xrefCustomCategories.update', $xrefCustomCategory->id], 'method' => 'patch']) !!}

            @include('xrefCustomCategories.fields')

            {!! Form::close() !!}
        </div>
@endsection
