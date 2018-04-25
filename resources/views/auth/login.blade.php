@extends('layouts.public')
@section('content')
    <div class="col-md-10 col-md-offset-1 main-div">
        <div class="row">
            <div class="col-md-6">
                <img src="#" alt="" width="40%" alt="logo" style="padding-bottom: 10px">
                <h4><b>Dermaga</b></h4>
                <h6>Boilerplate untuk OST</h6>
                <p style="text-align: justify" class="hidden-sm hidden-xs">

                    Cupcake ipsum dolor sit amet chocolate cake lemon drops bonbon macaroon. Candy tiramisu biscuit
                    powder. Cotton candy cupcake sweet roll sesame snaps lollipop. Tart lollipop chocolate dragée
                    chocolate cake sesame snaps donut. Bear claw pastry chocolate pudding. Candy canes candy liquorice
                    donut cookie lemon drops chocolate bar candy canes bonbon. Croissant jujubes icing wafer.
                </p>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default panel-form">
                    <img src="img/logo.png" width="50%"
                         style="padding: 20px 0; margin-left: auto; margin-right: auto; display: block"
                         class="text-center" alt="logo">
                    <form class="m-t" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">{{__('Email')}}</label>
                                <input id="email" type="text"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">{{__('Password')}}</label>
                                <input type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       placeholder="Kata Laluan" name="password"
                                       required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           name="remember" {{old('remember') ? 'checked': ''}}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block"><b>{{ __('Login') }}</b></button>
                        </div>

                        <div class="form-group text-center">
                            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
