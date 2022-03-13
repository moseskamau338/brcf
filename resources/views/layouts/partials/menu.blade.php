<div class="mx-auto container">
               <nav  x-show="showMobileMenu" class="lg:hidden relative z-50">
                <div class="flex py-2 justify-between items-center px-4">
                    <div>
                        <img src="{{asset('images/logo.png')}}" class="w-1/4" alt="">
                    </div>
                    <div  x-show="showMobileMenu" class="visible flex items-center">
                        <div
                         x-show="showMobileMenu"
                            x-transition:enter="duration-150 ease-out"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="duration-100 ease-in"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute  z-10 top-0 inset-x-0 p-2 transition transform origin-top-right lg:hidden">
                          <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                              <div>
                                <img src="{{asset('images/logo.svg')}}" class="w-1/4" alt="">
                              </div>
                              <div class="-mr-2">
                                <button type="button" x-on:click="showMobileMenu = false; alert('Closing')" class="bg-white rounded-md p-2
                                inline-flex
                                items-center
                                justify-center
                                text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                  <span class="sr-only">Close mobile menu</span>
                                  <!-- Heroicon name: outline/x -->
                                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                            <div class="px-2 pt-2 pb-3 space-y-1">
                              <a href="{{route('home')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                              hover:text-gray-900
                              hover:bg-gray-50">Home</a>

                              <a href="{{route('about')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                              hover:text-gray-900 hover:bg-gray-50">About Us</a>

                              <a href="{{route('contact')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                              hover:text-gray-900 hover:bg-gray-50">Contact Us</a>

                              <a href="{{route('blog')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                              hover:text-gray-900 hover:bg-gray-50">News</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </nav>
                <nav class="f-f-l relative z-10">
                    <div class="relative z-10 mx-auto hidden container w-full lg:px-4 xl:px-0 lg:flex justify-between items-center py-11">
                        <div>
                            <img src="{{asset('images/logo.png')}}" class="w-1/4 absolute" alt="">
                        </div>
                        <div class="flex items-center text-lg font-bold">
                            <ul class="flex items-center pr-12">
                                 @foreach($globalData->mainMenu as $menu)
                                    @if($loop->first)
                                         <li class="cursor-pointer text-color-1"><a href="{{route($menu->route)
                                    }}">{{$menu->name}}</a></li>
                                    @else
                                         <li class="xl:pl-8 lg:pl-5 cursor-pointer text-color-1"><a href="{{route($menu->route)
                                         }}">{{$menu->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                            <button class="py-3 px-6 bg-white bg-linear-button-about-us text-white text-lg font-bold flex items-center justify-center">
                                Donate
                                <i class="ml-2 fa fa-box-heart"></i>
                            </button>
                        </div>
                    </div>
                </nav>