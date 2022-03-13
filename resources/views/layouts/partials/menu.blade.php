<div class="mx-auto container">
        @include('layouts.partials.mobile_menu')
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

         <div data-key='bla' class="absolute right-0 z-50 flex flex-col items-end w-10 h-10 p-2 mr-4 rounded-full cursor-pointer md:hidden hover:bg-gray-900 hover:bg-opacity-10 text-gray-100">
            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </div>