<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Styles -->
<link href="{{ mix('css/test.css') }}" rel="stylesheet">

<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!-- Styles -->
</head>
<body>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: ;">
                                        @csrf
    <button type="submit">Logout</button>                                    
</form>
@yield('scripts')

@yield('content')
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>