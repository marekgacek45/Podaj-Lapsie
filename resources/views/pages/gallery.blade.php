
<x-layouts.master>
    @section('title', 'Podaj Łapsie -  Galeria | Behawiorysta i Szkolenie Psów w Nowym Targu i na Podhalu')
    @section('description', 'Zapraszam do przeglądania mojej galerii, gdzie znajdziesz zdjęcia z moich szkoleń, konsultacji behawiorystycznych oraz chwil spędzonych z ukochanymi zwierzakami. Zobacz, jakie postępy osiągają psy pod moją opieką. Daj się zainspirować harmonijnym światem relacji między ludźmi a psami!')
      <main class="pt-10 ">
  
        <x-sectionBg class="bg2 bg-gray-800">
            <x-sectionWrapper  id="galeria" :title="'Galeria'" class=" min-w-full  py-24 mb-0">
            
                <div class="grid-wrapper max-w-screen-2xl mx-auto mt-8" >

    
                    @php
                    $availableClasses = ['tall', 'wide', 'big',""];
                @endphp
                
                @foreach (File::files(public_path('assets/images/')) as $image)
                    @php
                        $randomClass = $availableClasses[array_rand($availableClasses)];
                    @endphp
                
                    <a href="{{ asset('/assets/images/' . $image->getFilename()) }}" data-fancybox="gallery" class="{{ $randomClass }}">
                        <img src="{{ asset('/assets/images/' . $image->getFilename()) }}" alt="Zdjęcie w galerii" loading="lazy">
                    </a>
                @endforeach
                
                
                
                </div>
                </x-sectionWrapper>
            </x-sectionBg>
                
            
            
            
            
  
  
      </main>
  </x-layouts.master>
  