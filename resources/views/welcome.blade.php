<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="layout-center">
        <div class="bg-white card shadow-sm border col-md-4">
            <div class="card-header text-center p-3">
                <h3 class="fw-bold m-0">Employee CRUD</h3>
            </div>
            <div class="card-body">
                @if (Route::has('login'))
                    <div class="text-center my-3">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-outline-primary">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 btn btn-primary">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
