<!DOCTYPE html>
<html lang="pl">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Podaj Łapsie - Behawiorysta i Szkolenie Psów w Nowym Targu i na Podhalu')</title>
    <meta name="description" content="@yield('description', 'Podaj Łapsie - Profesjonalny behawiorysta psów i zoopsycholog w Nowym Targu i na Podhalu. Pomogę zrozumieć i rozwiązać problemy behawioralne Twojego pupila. Skontaktuj się już teraz!')">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property=”og:url” content=”https://podajlapsie.pl” />
    <meta property="og:type" content="website" />
    <meta property=”og:title” content='@yield('title')' />
    <meta property="og:description" content='@yield('description')' />
    <meta property="og:image" content='{{ asset('assets/logo.png') }}' />

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    <!--NAVIGATION -->
    <x-navigation.nav />
    
        {{ $slot }}

    
    <!--FOOTER -->
    <x-footer />
</body>

</html>
