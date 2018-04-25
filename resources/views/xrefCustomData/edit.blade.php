@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit xref_custom_datum</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefCustomDatum, ['route' => ['xrefCustomData.update', $xrefCustomDatum->id], 'method' => 'patch']) !!}

            @include('xrefCustomData.fields')

            {!! Form::close() !!}
        </div>
@endsection
