<div class="relative flex flex-col lg:flex-row m-2 xs:m-6 md:m-12 mb-6 lg:mb-0 bg-mainColor-400 lg:bg-transparent rounded-md text-black ">
    <div class="w-full lg:w-1/2 "></div>

    <div class="lg:absolute lg:top-1/2 lg:left-20 lg:transform lg:-translate-y-1/2 w-full lg:w-1/2 md:px-6 md:mb-12 lg:mb-0 lg:p-6 bg-mainColor-400 rounded-md z-10 md:opacity-0 animation-trigger order-2 ">
        <h3 class="mt-6 lg:mt-0 lg:mb-3 text-2xl xs:text-3xl lg:text-4xl font-semibold">{{$title}}</h3>
        <div class="p-4 sm:px-8 lg:px-2 xl:px-6 space-y-2 sm:space-y-3 lg:space-y-5 text-left text-base font-light">
            {{$slot}}
        </div>
    </div>
    <div class="lg:self-end lg:w-1/2 m-4 sm:m-6 lg:border-4 border-mainColor-400 rounded-md overflow-hidden md:opacity-0 animation-trigger--2">
        <img src="{{$src}}"
            alt="{{$alt}}" class="w-full h-[400px] lg:h-[700px] object-cover" loading="lazy" />
    </div>
</div>