@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit XrefStatus</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefStatus, ['route' => ['xrefStatuses.update', $xrefStatus->id], 'method' => 'patch']) !!}

            @include('xrefStatuses.fields')

            {!! Form::close() !!}
        </div>
@endsection
