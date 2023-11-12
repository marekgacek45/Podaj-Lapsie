<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podaj Łapsie - Behawiorysta Psów w Nowym Targu i na Podhalu</title>
    <meta name="description"
        content="Podaj Łapsie - Profesjonalny behawiorysta psów i zoopsycholog w Nowym Targu i na Podhalu. Pomogę zrozumieć i rozwiązać problemy behawioralne Twojego pupila. Skontaktuj się już teraz!">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col justify-between min-h-screen">
    <!-- NAVIGATION -->
    <x-navigation.nav />

    <main class="flex flex-col items-center justify-center flex-grow max-w-screen-xl mx-auto px-12 md:px-0 text-center">
        <img src="{{ asset('images/assets/logo.png') }}" alt="" width="100px">
        <h2 class="text-2xl md:text-3xl mb-6">Niestety nie ma takiej strony</h2>
        
        
           <img src="{{asset('images/assets/404.png')}}" alt="" width="150px">
        
       
        <a href="{{ route('home') }}" class="text-sm text-mainColor-400 mt-12">Powrót na stronę główną</a>
    </main>
    <!-- FOOTER -->
    <x-footer />
</body>

</html>