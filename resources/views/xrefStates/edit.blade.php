@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit XrefStates</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefStates, ['route' => ['xrefStates.update', $xrefStates->id], 'method' => 'patch']) !!}

            @include('xrefStates.fields')

            {!! Form::close() !!}
        </div>
@endsection
