@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit XrefSubdistrict</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefSubdistrict, ['route' => ['xrefSubdistricts.update', $xrefSubdistrict->id], 'method' => 'patch']) !!}

            @include('xrefSubdistricts.fields')

            {!! Form::close() !!}
        </div>
@endsection
