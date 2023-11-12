<nav class=" fixed left-0 right-0 bg-mainColor-500 nav" >
    <!-- Container -->
    <div class="flex flex-wrap items-center justify-between mx-auto p-2 max-w-screen-xl">
        <!-- Logo -->
        <x-logo-title />
        <div class="flex md:order-2">
              <!-- Social -->
              <x-social class="hidden lg:flex" />
            <!-- Hamburger Btn -->
            <x-navigation.hamburgerBtn />
          
        </div>
        <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="navbar-cta">
            <!-- Nav List -->
            <ul
            class="flex flex-col md:flex-row gap-2 lg:gap-4 p-4 md:p-0 mt-4 md:mt-0 md:space-x-8 bg-mainColor-600 md:bg-transparent md:border-0 rounded-md font-medium ">
                <!-- Nav Item -->
                <x-navigation.nav-item href="{{route('about')}}">O mnie</x-navigation.nav-item>
                <li class="block md:p-0 text-lg  text-black " aria-current="page">
                    <!-- Dropdown button -->
                    <x-navigation.nav-dropdownBtn />
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class=" hidden w-44 bg-black rounded-md  font-normal text-white   z-10">
                        <ul class="py-2 " aria-labelledby="dropdownLargeButton">
                            <x-navigation.nav-dropdownItem href="{{route('consultations')}}">Konsultacje</x-navigation.nav-dropdownItem>
                            <x-navigation.nav-dropdownItem href="{{route('puppy')}}">Budowanie więzi</x-navigation.nav-dropdownItem>
                            <x-navigation.nav-dropdownItem href="{{route('choice')}}">Pomoc w wyborze</x-navigation.nav-dropdownItem>
                            <x-navigation.nav-dropdownItem href="{{route('petsitting')}}">Petsitting</x-navigation.nav-dropdownItem>
                        </ul>
                    </div>
                </li>
                <!-- Nav Item -->
                <x-navigation.nav-item href="{{route('contact')}}">Kontakt</x-navigation.nav-item>
                <!-- Nav Item -->
                <x-navigation.nav-item href="{{route('gallery')}}">Galeria</x-navigation.nav-item>
                <!-- Nav Item -->
                <x-navigation.nav-item href="{{route('blog')}}">Blog</x-navigation.nav-item>
                <!-- Nav Item -->
                <li>
                    <x-social class="flex md:hidden" />
                </li>
            </ul>
        </div>
    </div>
</nav>
