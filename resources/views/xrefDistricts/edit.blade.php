@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit XrefDistrict</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefDistrict, ['route' => ['xrefDistricts.update', $xrefDistrict->id], 'method' => 'patch']) !!}

            @include('xrefDistricts.fields')

            {!! Form::close() !!}
        </div>
@endsection
