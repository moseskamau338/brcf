<nav class="bg-white shadow lg:hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="{{asset('images/logo-icon.svg')}}" alt="Beth Rapha Cancer Foundation">
          <img class="hidden lg:block h-8 w-auto" src="{{asset('images/logo.svg')}}" alt="Beth Rapha Cancer Foundation">
        </div>
        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
          @foreach($globalData->mainMenu as $menu)
            @if(\Request::route()->getName() === $menu->route)
             <a href="{{ route($menu->route) }}" class="border-pink-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"> {{ $menu->name }} </a>
             @else
               <a href="{{ route($menu->route) }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"> {{ $menu->name }} </a>
            @endif
          @endforeach

        </div>
      </div>

      <div class="-mr-2 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button x-on:click='showMobileMenu = !showMobileMenu' type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-500" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg x-show='!showMobileMenu' class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->

          <svg xmlns="http://www.w3.org/2000/svg" x-show='showMobileMenu' class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>

        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div
      x-transition:enter="duration-150 ease-out"
      x-transition:enter-start="opacity-0 scale-95"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="duration-100 ease-in"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95"
      x-show='showMobileMenu' class="sm:hidden" id="mobile-menu">
    <div class="pt-2 pb-3 space-y-1">

      @foreach($globalData->mainMenu as $menu)
        @if(\Request::route()->getName() === $menu->route)
          <a href="{{ route($menu->route) }}" class="bg-pink-50 border-pink-500 text-pink-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">{{ $menu->name }}</a>
          @else
            <a href="{{ route($menu->route) }}" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">{{ $menu->name }}</a>
        @endif
      @endforeach

    </div>
  </div>
</nav>
