<!DOCTYPE html>
<html>
<head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/admin/css/materialize.min.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/admin/css/style.css') }}"  media="screen"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>

<body>


@yield('content')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="{{ asset('/assets/admin/js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/admin/js/materialize.min.js') }}"></script>
</body>
</html>