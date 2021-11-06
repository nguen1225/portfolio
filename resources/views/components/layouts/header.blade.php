@section('header')
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet">
    <link href="{{ mix('css/calendar.css') }}" rel="stylesheet">
    <script src="{{ mix('js/calendar.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.3.0/main.js"></script> --}}
</head>
@endsection
