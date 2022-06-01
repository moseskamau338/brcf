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
                <a href="{{route('donate')}}" class="py-3 px-6 bg-white bg-linear-button-about-us text-white text-lg font-bold flex items-center justify-center">
                    Donate
                    <i class="ml-2 fa fa-box-heart"></i>
                </a>
            </div>

        </div>
    </nav>
