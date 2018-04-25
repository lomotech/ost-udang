@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit XrefOption</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefOption, ['route' => ['xrefOptions.update', $xrefOption->id], 'method' => 'patch']) !!}

            @include('xrefOptions.fields')

            {!! Form::close() !!}
        </div>
@endsection
