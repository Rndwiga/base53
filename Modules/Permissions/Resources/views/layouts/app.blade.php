<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} </title>
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
@yield('css')
</head>
<body class="gray-bg"`>
<!--Content-->
@yield('content')
<!--Content-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@yield('scripts')
</body>
</html>
