
<footer class="bg-black">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="flex items-center flex-col sm:flex-row sm:justify-between">
         <x-logo-title textClass="text-white"/>
            <ul class="flex flex-wrap items-center justify-center  text-sm font-medium text-gray-500 sm:mb-0 mt-6 sm:mt-0">
                <li>
                    <a href="{{route('home')}}#o_mnie" class="mr-4 hover:underline md:mr-6 ">O mnie</a>
                </li>
                <li>
                    <a href="{{route('home')}}#uslugi" class="mr-4 hover:underline md:mr-6">Usługi</a>
                </li>
                <li>
                    <a href="{{route('home')}}#kontakt" class="mr-4 hover:underline md:mr-6 ">Kontakt</a>
                </li>
                <li>
                    <a href="{{route('gallery')}}" class="mr-4 hover:underline md:mr-6 ">Galeria</a>
                </li>
                
                <li>
                    <a href="{{route('blog')}}" class="hover:underline ">Blog</a>
                </li>
               
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="flex flex-col justify-center items-center gap-1">
            <span class="text-sm text-white ">© <span class="footer-year"></span> <a href="{{route('home')}}" class="hover:underline text-white"> Podaj Łapsie</a></span>
            <span class="flex  justify-center items-center  text-sm text-gray-500 gap-1 flex-wrap"> wykonanie <a href="https://gorskastrona.pl" target="_blank" class="flex  justify-center items-center gap-1">Górska Strona <img src="{{asset('images/assets/gorska_logo.png')}}" alt="logo wykonwacy strony - Górska Strona" width="50px"></a></span>
    </div>
        </div>
       
    </div>
</footer>

