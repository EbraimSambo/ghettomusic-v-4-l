<!DOCTYPE html>
<html lang="pt-Ao">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ? $title . ' - Ghetto Music' : 'Ghetto Music' }}</title>
    <!-- Fonts -->

    <!-- Styles -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ url('assets/styles/css/global.css') }}" media="screen" rel="stylesheet" />

    <!-- Scripts -->

    <script src="{{ asset('assets/scripts/main.js') }}"></script>

</head>

<body x-data="{ menu: false, download: false}">
    <div id="appLayout">
        <x-app.sidebar />
        <div id="leftLayout">
            <livewire:components.navegation>
                <div id="centerLayout">
                    <main id="main">
                        {{ $slot }}
                    </main>
                    <x-app.footer-global />
                </div>
        </div>

    </div>
</body>

</html>
