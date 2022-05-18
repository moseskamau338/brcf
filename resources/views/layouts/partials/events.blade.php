    <section x-data="events" class="relative w-full bg-white">
    <div class="absolute w-full h-32 bg-gradient-to-b from-gray-100 to-white"></div>
    <div class="relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl">

        <h1 class="mb-1 text-4xl font-extrabold leading-none text-cyan-900 lg:text-5xl xl:text-6xl sm:mb-3"><a
                href="#_">Upcoming Events</a></h1>
        <p class="text-lg font-medium text-gray-500 sm:text-2xl">This is a list of the upcoming events. We'll update it as needed.</p>

        <div id="wrapper" x-data="events">
            <div @keydown.right="next" @keydown.left="prev" x-ref="slider" class="flex items-center overflow-x-auto pb-10 mt-8 mb-2 sm:mt-16 space-x-2 snap-x snap-mandatory">
                @foreach($globalData->events as $event)
                    <div class="relative flex flex-col flex-shrink-0 items-start justify-end col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4 w-[350px]">
                        <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-48 hover:scale-110" style="background-image:url('{{$event->image}}')">
                        </a>
                        <div class="relative z-50 w-full h-64 overflow-hidden py-8 text-white bg-white bg-gradient-to-br from-cyan-900 via-cyan-800 to-pink-400 border-t-0 border-yellow-200 px-7">

                            <h2 class="mb-5 text-2xl font-bold"><a href="#_">{{\Str::limit($event->title, 25)}}</a></h2>
                            <p class="mb-2 text-lg font-normal text-purple-100 opacity-100">{{$event->description}}</p>

                        </div>
                    </div>
                @endforeach


            </div>
            {{--buttons--}}
            <button @click="prev" class="px-3 py-1 bg-gray-700 text-white rounded-sm hover:bg-gray-800 focus:ring focus:ring-sky-600 rounded-sm">&leftarrow;</button>
            <button @click="next" class="px-3 py-1 bg-gray-700 text-white rounded-sm hover:bg-gray-800 focus:ring focus:ring-sky-600 rounded-sm">&rightarrow;</button>
        </div>
    </div>
</section>
