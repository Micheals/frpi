<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('assets/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">

<!-- Custom styling plus plugins -->
<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/maps/jquery-jvectormap-2.0.3.css')}}" />
<link href="{{asset('assets/css/icheck/flat/green.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/floatexamples.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/mycss.css')}}" rel="stylesheet">
@yield('link_css')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/nprogress.js')}}"></script>
<script src="{{asset('assets/js/ie8-responsive-file-warning.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{{--<script src="{{asset("assets/js/myjs.js")}}"></script>--}}