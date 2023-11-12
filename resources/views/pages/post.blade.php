<x-layouts.master>
    @section('title', $post->title . ' - Podaj Łapsie')
    @section('title', 'Podaj Łapsie -  Opieka nad Zwierzętami z Profesjonalistą | Petsitting w Nowym Targu i na Podhalu')
    @php
    $description = \Illuminate\Support\Str::limit($post->content, 157, '...');
@endphp

@section('description', $description)

    <div class="pt-32 mx-auto px-4 md:px-12 xl:pt-32 mb-8 max-w-screen-lg w-full ">
        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="miniaturka posta o tytule {{ $post->title }}"
            class="max-h-[600px] w-full object-cover">
    </div>
    <article class="">



        <div class="flex flex-col justify-center items-center px-4 lg:px-0">

            <div class="mb-5 flex flex-col justify-center items-center text-center">
                <h2 class="font-bold text-2xl md:text-4xl mb-5">{{ $post->title }}</h2>


                

                
                <span>{{ $post->created_at->diffForHumans() }}</span>
                <div id="postContent" class="my-6 max-w-screen-md">
                    {!! $post->content !!}
                </div>
                <p></p>
            </div>

        </div>
    </article>

</x-layouts.master>
