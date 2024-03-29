
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-md lg:hidden bg-actionColor-400 hover:bg-actionColor-600 focus:outline-none focus:ring-2 focus:ring-gray-200 absolute right-5 top-5">
   <span class="sr-only">Otwórz sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>


<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-52 md:w-60 h-screen transition-transform -translate-x-full lg:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-mainColor-400 flex flex-col justify-between">
        <ul class="space-y-2 font-medium">
            <li class="flex justify-center items-center ">
               <a href="{{route('home')}}" class="flex items-center">
                  <img src="{{ asset('/assets/logo.png') }}" class="h-16 mr-2" alt="Gameend Logo" />
                  
              </a>
            </li>


            <x-admin.sidebar.aside-item class="uil uil-desktop" name="Dashboard" href="{{ route('admin.index') }}" />
            <x-admin.sidebar.aside-item class="uil uil-edit" name="Posty" href="{{ route('admin.index') }}" />
           
        </ul>
        <ul class="space-y-2 font-medium ">
         <hr class="border-1 border-actionColor-400">
            <x-admin.sidebar.aside-item class="uil uil-user" name="Moje Konto" href="#" />
            <x-admin.sidebar.aside-item class="uil uil-sign-out-alt" name="Wyloguj" href="#" />
        </ul>
    </div>
</aside>