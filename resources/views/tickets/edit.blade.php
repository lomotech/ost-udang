@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Ticket</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($ticket, ['route' => ['tickets.update', $ticket->id], 'method' => 'patch']) !!}

            @include('tickets.fields')

            {!! Form::close() !!}
        </div>
@endsection
