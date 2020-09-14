

<DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="base_url" content="{{ url('') }}">
    <title>wishlist</title>

    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">

    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js') }}"></script>
    @include('include.navbar')

    <div class="content-body">
        @yield('content')
    </div>
</head>

</html>
</DOCTYPE>
