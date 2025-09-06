<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="AuthProject v1.0.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', __('APP_NAME'))</title>

    <script src="{{ asset('/assets/js/color-modes.js') }}"></script>

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="theme-color" content="#712cf9">

    <link href="{{ asset('assets/css/navbars-offcanvas.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>

    <!-- Include Theme Toggle Component -->
    @include('components.theme-toggle')

    <main>

        <!-- Include Navigation Bar Component -->
        @include('layouts.navigation_bar')

        <!-- Include Alert Component -->
        @include('components.alert')

        <div class="bg-body-secondary container my-5">
            <div class="p-5 rounded">

                <!-- yield content here -->
                @yield('content')

            </div>
        </div>
    </main>

    <!--JQuery, Bootstrap JS, SweetAlert2-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('scripts')

</body>

</html>