<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}{{ isset($title) ? ' | '.$title : '' }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">

    @stack('stylesheet')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- Content Wrapper --}}
    <div class="content-wrapper">

        @hasSection('title-content')
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title-content')</h1>
                    </div>
                </div>
            </div>
        </section>
        @endif

        {{-- Main Content --}}
        <section class="content">
            @yield('content')
        </section>

    </div>

    {{-- Footer --}}
    @include('layouts.footer')

</div>

@stack('modals')

<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>

@stack('scripts')

</body>
</html>