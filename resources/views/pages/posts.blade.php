<x-layouts.master>
    @section('title', 'Podaj Łapsie - Blog dla Miłośników Czworonogów')
    @section('description', 'Zapraszam do odkrywania tajemnic psiego zachowania i oraz poznawania ciekawostek na moim blogu.')

    <main class="pt-16 md:pt-24 container max-w-screen-xl flex flex-col justify-between mx-auto p-10 xl:pt-32">

        <section class="space-y-8 mb-12">
            <h2 class="text-3xl font-semibold">Najnowsze posty</h2>
            <x-posts.latestPosts :newestPost='$newestPost' :latestPosts="$latestPosts" />
        </section>

        <hr class="border border-mainColor-400">

        <section class="mt-2">
            
            <x-posts.postsGrid :posts="$posts" />
        </section>
        {{$posts->links()}}

    </main>
</x-layouts.master>
