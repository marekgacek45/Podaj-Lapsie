<x-layouts.master>


    
    <!--HEADER -->
    @include('home.partials.header')

    <main>
        <!--ABOUT -->
        @include('home.partials.about')



        <!--OFFER -->
        @include('home.partials.offer')


        <!--CONTACT -->
        @include('home.partials.contact')
        @if(isset($scrollTo))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToElement = document.querySelector("{{ $scrollTo }}");
            if (scrollToElement) {
                scrollToElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>
    @endif
    </main>
 
</x-layouts.master>
