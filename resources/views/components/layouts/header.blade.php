@section('header')
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/vital.png') }}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet">
    <script defer src="{{ mix('js/custom.js') }}"></script>
    <script defer src="{{ mix('js/ajax.js') }}"></script>
</head>
@endsection
