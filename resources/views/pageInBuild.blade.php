<!DOCTYPE html>
<html lang="pl">

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
        <h2 class="text-2xl md:text-3xl mb-6">Strona w budowie</h2>
        
        
            <div class=" w-40 md:w-96 bg-gray-200 rounded-full mb-6">
                <div class="loading-bar bg-mainColor-400 text-xs font-medium text-black text-center p-2 leading-none rounded-full"
                    style="width: 0%"><span id="percentage" class="font-bold">0%</span></div>
            </div>
        
        <span class="mb-2 text-sm md:text-base">Pracujemy nad czymś wyjątkowym!</span>
        <span class="mb-12 text-sm md:text-base">Prosimy o jescze chwilę cierpliwości!</span>
        <a href="{{ route('home') }}" class="text-sm text-mainColor-400">Powrót na stronę główną</a>
    </main>
    <!-- FOOTER -->
    <x-footer />
</body>

</html>
