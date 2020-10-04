<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom styles for this template -->
    <!-- <link href="dashboard.css" rel="stylesheet"> -->
  </head>
    <body>
        <x-nav> </x-nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <x-sidebar> </x-sidebar>
                </nav>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <!-- Page Content -->
                    {{ $slot }}
                </main>
        </div>


        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
    </body>
</html>
