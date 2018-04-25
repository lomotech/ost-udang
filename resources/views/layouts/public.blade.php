<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Kebenaran Berkahwin Online oleh Jabatan Agama Islam Pahang">
    <meta name="author" content="Jabatan Agama Islam Pahang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token"/>
    <title>{{env('APP_NAME', 'Semut') . '-' . env('APP_DESCRIPTION', 'API')}} </title>

    <link rel="stylesheet" href="{{ mix('/css/public.css') }}"/>

</head>
<body>

<div class="container animated fadeIn">
    @yield('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1 ">
            <hr>
            <div class="text-center">
                <strong>Copyright</strong> Opensoft Technologies © {{date('Y')}}
            </div>
        </div>
    </div>
</div>

{{--<script src="landing/js/jquery-2.1.1.js"></script>--}}
{{--<script src="landing/js/pace.min.js"></script>--}}
{{--<script src="landing/js/bootstrap.min.js"></script>--}}
{{--<script src="landing/js/classie.js"></script>--}}
{{--<script src="landing/js/cbpAnimatedHeader.js"></script>--}}
{{--<script src="landing/js/wow.min.js"></script>--}}
<script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/inspinia.js') }}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
