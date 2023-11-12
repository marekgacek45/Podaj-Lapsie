

 <div id="default-carousel" class="relative max-w-[300px] xs:max-w-[500px] md:max-w-screen-md mx-auto px-6" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative  overflow-hidden rounded-lg h-[300px] md:h-[500px]">
         <!-- Item 1 -->
             
         @foreach (File::files(public_path('assets/certificates/')) as $image)

         <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="{{ asset('/assets/certificates/' . $image->getFilename()) }}" data-fancybox="gallery">
            <img src="{{ asset('/assets/certificates/' . $image->getFilename()) }}" alt="Obraz" loading="lazy" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " ></a>
        </div>

        
         @endforeach
        
    </div>
   
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-mainColor-400 group-hover:bg-mainColor-600  group-focus:ring-4 group-focus:ring-mainColor-400  group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Poprzedni</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-mainColor-400 group-hover:bg-mainColor-600  group-focus:ring-4 group-focus:ring-mainColor-400 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Następny</span>
        </span>
    </button>
</div>
