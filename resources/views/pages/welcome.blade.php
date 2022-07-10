<x-site-layout>
        <div class="relative w-full h-full">
            <div class="hidden md:block">
                <img loading="lazy" class="absolute bg-cover bg-center w-full h-full inset-0" src="{{asset('images/background.png')}}" alt="" />
            </div>
            <div class="md:hidden">
                <!-- <img loading=lazy class="absolute bg-cover bg-center w-full h-full inset-0" src="https://cdn.tuk.dev/assets/templates/prodify/backgroundMobile.png" alt="" /> -->
            </div>
             @include('layouts.partials.mobile_menu')

            {{--Main desktop navigation--}}
            <nav class="f-f-l relative z-10">
                <div class="relative z-10 mx-auto container hidden w-full px-4 xl:px-0 lg:flex justify-between items-center py-11">
                    <div>
                        <img loading="lazy" src="{{asset('images/logo.svg')}}" class="w-1/4 absolute" alt="">
                    </div>
                    <div class="flex items-center text-white text-lg font-bold">
                        <ul class="flex items-center pr-12">
                            @foreach($globalData->mainMenu as $menu)
                                @if($loop->first)
                                <li class="cursor-pointer hover:text-gray-300 ease-in"><a href="{{route($menu->route)
                                }}">{{$menu->name}}</a></li>
                                @else
                                    <li class="pl-3 lg:pl-5 xl:pl-8 cursor-pointer hover:text-gray-300 ease-in"><a href="{{route
                                    ($menu->route)}}">{{$menu->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <a href="{{route('donate')}}" class="px-6 py-3 bg-white bg-linear-button text-white text-lg font-bold flex items-center justify-center">
                            Donate
                                <i class="ml-2 fa fa-box-heart"></i>
                        </a>
                    </div>
                </div>
            </nav>

            <div class="relative px-4 xl:px-0  container mx-auto md:flex items-center gap-8">
                <div class="text-cyan-900 w-full md:w-1/3 pt-16 lg:pt-36">
                    <h1 class="text-5xl w-1/2 xl:w-full xl:text-7xl font-black f-f-l">
                        We are a safe haven
                        <span class="text-gray-500">for cancer patients</span>

                    </h1>
                    <div class="f-f-r text-xl lg:text-3xl pt-10  xl:pt-20">
                        <h2>Help us provide a dignified and safe accommodation for cancer patients seeking treatment in Kenya.</h2>
                    </div>
                    <a href="{{route('donate')}}" class="text-xl w-full xl:text-3xl xl:w-11/12 mt-4 xl:mt-11 f-f-r py-6 bg-linear-button-home text-white
                    font-bold flex justify-center">Lend a hand
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 511.99906 511" style="enable-background:new 0 0 512 512"
                             xml:space="preserve" class="w-8 ml-4"><g><path xmlns="http://www.w3.org/2000/svg" d="m340.765625 348.707031
                              122.171875-42c13.109375-4.730469 28.636719-.261719 35.257812 11.988281 8.992188 16.628907 1.121094 34.96875-14.148437 41.082032l-186.847656 82.269531c-15.28125 6.949219-31.871094 10.546875-48.652344 10.546875-21.296875 0-42.199219-5.789062-60.457031-16.75l-52.300782-31.378906c-12.070312-7.238282-31.761718-11.300782-45.789062-11.808594 0-.019531 0-140.058594 0-140.058594h79.167969c10.3125 0 20.441406 2.648438 29.421875 7.707032l52.839844 29.722656c3 1.6875 6.367187 2.570312 9.808593 2.570312h64.757813c16.570312 0 30 13.429688 30 30 0 11.199219-6.128906 20.957032-15.230469 26.109375zm0 0" fill="#ffcebf" data-original="#ffcebf" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m361.507812 10.5c38.417969 0 64.898438 32.25 64.898438 70.449219 0 50.546875-47.660156 84.386719-128.609375 154.546875-76.980469-66.71875-131.007813-101.707032-131.007813-154.546875 0-38.199219 26.480469-70.449219 64.910157-70.449219 49.320312 0 64.898437 56.246094 64.898437 56.246094s15.578125-56.246094 64.910156-56.246094zm0 0" fill="#ff80ac" data-original="#ff80ac" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m90 252.597656v140.058594c-.03125 11.019531-8.96875 19.9375-20 19.9375h-60v-179.996094h60c11.050781 0 20 8.949219 20 20zm0 0" fill="#faecd8" data-original="#faecd8" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m50 262.597656c-5.519531 0-10 4.480469-10 10 0 5.519532 4.480469 10 10 10s10-4.480468 10-10c0-5.519531-4.480469-10-10-10zm0 0" fill="#fffdfd" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m459.617188 297.273438-94.273438 32.410156c.417969-2.320313.652344-4.6875.652344-7.089844 0-22.054688-17.941406-40-40-40h-64.757813c-1.71875 0-3.414062-.441406-4.910156-1.285156l-52.832031-29.714844c-10.445313-5.886719-22.316406-9-34.328125-9h-70.890625c-4.125-11.636719-15.242188-19.996094-28.277344-19.996094h-60c-5.523438 0-10 4.476563-10 10v179.996094c0 5.523438 4.476562 10 10 10h60c12.738281 0 23.660156-8.003906 27.996094-19.246094 11.320312 1.40625 24.417968 4.753906 32.648437 9.691406l52.296875 31.378907c19.8125 11.890625 42.496094 18.175781 65.605469 18.175781 18.3125 0 36.054687-3.84375 52.738281-11.421875l186.644532-82.183594c20.671874-8.386719 30.878906-33.1875 19.0625-55.046875-8.691407-16.085937-29.046876-23.242187-47.375-16.667968zm-379.617188 95.367187c-.023438 5.492187-4.503906 9.953125-10 9.953125h-50v-159.996094h50c5.511719 0 10 4.484375 10 10zm400.332031-42.148437c-.105469.039062-.210937.085937-.316406.128906 0 0-186.921875 82.304687-186.957031 82.320312-14.082032 6.40625-29.058594 9.652344-44.511719 9.652344-19.484375 0-38.609375-5.296875-55.3125-15.324219l-52.300781-31.378906c-11.195313-6.714844-27.226563-10.808594-40.933594-12.449219v-120.84375h69.167969c8.578125 0 17.054687 2.21875 24.519531 6.425782l52.832031 29.714843c4.476563 2.523438 9.570313 3.859375 14.71875 3.859375h64.757813c11.027344 0 20 8.96875 20 20 0 10.988282-8.976563 20-20 20h-101.65625c-5.523438 0-10 4.476563-10 10 0 5.519532 4.476562 9.996094 10 9.996094h101.65625c6.558594 0 13.015625-1.628906 18.746094-4.683594 0 0 121.542968-41.78125 121.589843-41.796875 8.960938-3.234375 19.09375-.015625 23.066407 7.335938 5.957031 11.019531 1.03125 23-9.066407 27.042969zm0 0" fill="#fffdfd" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m291.246094 243.054688c1.882812 1.628906 4.214844 2.441406 6.550781 2.441406s4.671875-.8125 6.550781-2.441406c81.589844-70.710938 132.058594-106.496094 132.058594-162.105469 0-43.992188-31.144531-80.449219-74.898438-80.449219-28.734374 0-50.738281 16.5625-64.910156 41.417969-14.140625-24.800781-36.121094-41.417969-64.898437-41.417969-33.496094 0-61.5 21.707031-71.34375 55.296875-1.554688 5.300781 1.484375 10.855469 6.785156 12.410156 5.300781 1.554688 10.855469-1.484375 12.40625-6.785156 7.285156-24.859375 27.753906-40.921875 52.152344-40.921875 28.527343 0 48.539062 25.332031 55.261719 48.917969 1.199218 4.332031 5.144531 7.332031 9.636718 7.332031 4.496094 0 8.4375-3 9.636719-7.332031.136719-.488281 14.027344-48.917969 55.273437-48.917969 31.296876 0 54.898438 25.984375 54.898438 60.449219 0 44.484375-43.484375 76.554687-118.617188 141.335937-45.777343-39.3125-82.140624-66.984375-102.808593-94.054687-3.351563-4.390625-9.625-5.234375-14.015625-1.882813-4.390625 3.351563-5.230469 9.625-1.882813 14.019532 23.296875 30.511718 62.625 59.746093 112.164063 102.6875zm0 0" fill="#fffdfd" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m169 88.597656c-5.519531 0-10 4.480469-10 10 0 5.519532 4.480469 10 10 10s10-4.480468 10-10c0-5.519531-4.480469-10-10-10zm0 0" fill="#fffdfd" data-original="#000000" class=""></path></g></svg>
                    </a>
                </div>
                <img loading="lazy" class="w-full mt-8 md:mt-0 object-fill md:w-2/3 md:-ml-4 lg:-ml-4 xl:ml-0 rounded-xl" src="{{asset('images/hero.jpg')}}" />
            </div>
        </div>
        <div class="mx-auto container px-4 xl:px-0 py-10 xl:py-40">
            <div class="">
                <div class="flex flex-wrap items-center">
                    <div class="lg:w-2/5 w-full">
                        <img loading="lazy" class="w-full rounded-lg shadow-xl" src="{{asset('images/treatment.png')}}" alt="" srcset="" />
                    </div>
                    <div class="lg:w-3/5 w-full">
                        <div class="lg:pl-8 py-2 text-color">
                            <h1 class="text-3xl text-cyan-900 xl:text-6xl leading-snug f-f-l font-black">Treatments should not be worse
                                than they already are
                            </h1>
                            <h2 class="text-xl text-cyan-900 lg:text-3xl leading-7 lg:leading-10 f-f-r py-4 lg:py-8">When a cancer patient has to
                                struggle with a place to find accommodation during treatment, then their burden with cancer becomes
                                tenfold. <b>Beth Rapha cancer foundation</b> seeks to alleviate this by providing <b>dignified
                                    accommodation</b> to cancer patients <b>who have no place to stay during their period of treatment</b> .</h2>
                            <div class="flex items-center">
                                <div class="pl-3">
                                    <h3 class="f-f-l text-xl italic lg:text-3xl">Management</h3>
                                    <h4 class="f-f-r text-lg italic pt-2">@BRCF</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-linear-pink">
            <div class="px-4 xl:px-0">
                <div class="container mx-auto">
{{--                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 lg:pb-10">--}}
{{--                        <div class="bg-white px-6 py-6 text-color f-f-l shadow-lg mt-10 xl:-mt-20">--}}
{{--                            <h1 class="text-3xl font-bold w-1/2">Download the app</h1>--}}
{{--                            <div class="flex justify-end w-full items-end">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">--}}
{{--                                    <path--}}
{{--                                        d="M26 26.0001V37.1701L29.656 33.5141L32.486 36.3441L24 44.8281L15.514 36.3441L18.344 33.5141L22 37.1701V26.0001H26ZM24 4.00012C27.434 4.00029 30.7482 5.26235 33.3124 7.54636C35.8767 9.83037 37.5122 12.977 37.908 16.3881C40.3966 17.0668 42.5675 18.5983 44.0414 20.7152C45.5152 22.832 46.1983 25.3995 45.9713 27.9689C45.7442 30.5383 44.6214 32.9462 42.7992 34.7718C40.9769 36.5973 38.571 37.7244 36.002 37.9561L36 34.0001C36.0032 30.8544 34.771 27.8332 32.5687 25.587C30.3665 23.3408 27.3702 22.0492 24.2251 21.9902C21.0799 21.9312 18.0374 23.1096 15.7524 25.2716C13.4675 27.4337 12.1228 30.4065 12.008 33.5501L12 34.0001V37.9561C9.43093 37.7248 7.02484 36.5979 5.2023 34.7725C3.37976 32.9471 2.25669 30.5392 2.02938 27.9698C1.80207 25.4003 2.48499 22.8327 3.95877 20.7157C5.43255 18.5987 7.60345 17.0669 10.092 16.3881C10.4874 12.9769 12.1228 9.82994 14.6872 7.54585C17.2515 5.26176 20.5659 3.99985 24 4.00012Z"--}}
{{--                                        fill="url(#paint0_linear)"--}}
{{--                                    />--}}
{{--                                    <defs>--}}
{{--                                        <linearGradient id="paint0_linear" x1="24.0003" y1="4.00012" x2="24.0003" y2="44.8281" gradientUnits="userSpaceOnUse">--}}
{{--                                            <stop stop-color="#F56565" />--}}
{{--                                            <stop offset="1" stop-color="#D53F8C" />--}}
{{--                                        </linearGradient>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white px-6 py-6 text-color f-f-l shadow-lg mt-10 xl:-mt-20">--}}
{{--                            <h1 class="text-3xl font-bold w-1/2">Effortless onboarding</h1>--}}
{{--                            <div class="flex justify-end w-full items-end">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">--}}
{{--                                    <path--}}
{{--                                        d="M40 40C40 40.5304 39.7893 41.0391 39.4142 41.4142C39.0391 41.7892 38.5304 42 38 42H10C9.46957 42 8.96086 41.7892 8.58579 41.4142C8.21071 41.0391 8 40.5304 8 40V22H2L22.654 3.22396C23.0222 2.88892 23.5022 2.70325 24 2.70325C24.4978 2.70325 24.9778 2.88892 25.346 3.22396L46 22H40V40ZM15 26C15 28.3869 15.9482 30.6761 17.636 32.3639C19.3239 34.0518 21.6131 35 24 35C26.3869 35 28.6761 34.0518 30.364 32.3639C32.0518 30.6761 33 28.3869 33 26H29C29 27.326 28.4732 28.5978 27.5355 29.5355C26.5979 30.4732 25.3261 31 24 31C22.6739 31 21.4021 30.4732 20.4645 29.5355C19.5268 28.5978 19 27.326 19 26H15Z"--}}
{{--                                        fill="url(#paint0_linear)"--}}
{{--                                    />--}}
{{--                                    <defs>--}}
{{--                                        <linearGradient id="paint0_linear" x1="24" y1="2.70325" x2="24" y2="42" gradientUnits="userSpaceOnUse">--}}
{{--                                            <stop stop-color="#F56565" />--}}
{{--                                            <stop offset="1" stop-color="#D53F8C" />--}}
{{--                                        </linearGradient>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white px-6 py-6 text-color f-f-l shadow-lg mt-10 xl:-mt-20">--}}
{{--                            <h1 class="text-3xl font-bold w-10/12">Access from anywhere</h1>--}}
{{--                            <div class="flex justify-end w-full items-end">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">--}}
{{--                                    <path--}}
{{--                                        d="M38 12H22C21.4696 12 20.9609 12.2107 20.5858 12.5858C20.2107 12.9609 20 13.4696 20 14V40H8C7.46957 40 6.96086 39.7893 6.58579 39.4142C6.21071 39.0391 6 38.5304 6 38V6C6 5.46957 6.21071 4.96086 6.58579 4.58579C6.96086 4.21071 7.46957 4 8 4H36C36.5304 4 37.0391 4.21071 37.4142 4.58579C37.7893 4.96086 38 5.46957 38 6V12ZM26 16H42C42.5304 16 43.0391 16.2107 43.4142 16.5858C43.7893 16.9609 44 17.4696 44 18V42C44 42.5304 43.7893 43.0391 43.4142 43.4142C43.0391 43.7893 42.5304 44 42 44H26C25.4696 44 24.9609 43.7893 24.5858 43.4142C24.2107 43.0391 24 42.5304 24 42V18C24 17.4696 24.2107 16.9609 24.5858 16.5858C24.9609 16.2107 25.4696 16 26 16Z"--}}
{{--                                        fill="url(#paint0_linear)"--}}
{{--                                    />--}}
{{--                                    <defs>--}}
{{--                                        <linearGradient id="paint0_linear" x1="25" y1="4" x2="25" y2="44" gradientUnits="userSpaceOnUse">--}}
{{--                                            <stop stop-color="#F56565" />--}}
{{--                                            <stop offset="1" stop-color="#D53F8C" />--}}
{{--                                        </linearGradient>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white px-6 py-6 text-color f-f-l shadow-lg mt-10 xl:-mt-20">--}}
{{--                            <h1 class="text-3xl font-bold w-9/12">Build & ship rapidly</h1>--}}
{{--                            <div class="flex justify-end w-full items-end">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">--}}
{{--                                    <path d="M12.91 38L4 45V8C4 7.46957 4.21071 6.96086 4.58579 6.58579C4.96086 6.21071 5.46957 6 6 6H42C42.5304 6 43.0391 6.21071 43.4142 6.58579C43.7893 6.96086 44 7.46957 44 8V36C44 36.5304 43.7893 37.0391 43.4142 37.4142C43.0391 37.7893 42.5304 38 42 38H12.91ZM22.586 24.242L17.636 19.292L14.808 22.122L22.586 29.9L33.9 18.586L31.072 15.758L22.586 24.242Z" fill="url(#paint0_linear)" />--}}
{{--                                    <defs>--}}
{{--                                        <linearGradient id="paint0_linear" x1="24" y1="6" x2="24" y2="45" gradientUnits="userSpaceOnUse">--}}
{{--                                            <stop stop-color="#F56565" />--}}
{{--                                            <stop offset="1" stop-color="#D53F8C" />--}}
{{--                                        </linearGradient>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="pt-10 lg:pt-40">
                        <div class="container mx-auto">
                            <div class="flex flex-col-reverse flex-col lg:flex-row  items-center">
                                <div class="lg:w-2/3 mt-24 lg:mt-0 w-full xl:pr-20">
                                    <div class="py-2 text-color">
                                        <h1 class="text-2xl text-cyan-900 lg:text-6xl lg:leading-snug tracking-tighter f-f-l font-black">What drives
                                            us?</h1>
                                        <h2 class="text-lg lg:text-3xl leading-7 text-cyan-900 lg:leading-10 f-f-r py-4 lg:py-8"><b>
                                                Compassion and brotherly love.
                                            </b> We are there because others are there. No one should carry their  burden alone.
                                            We believe that we  are all brothers and sisters in Christ and have one Father, the Lord who loves all.
                                        </h2>
                                        <a class="flex items-center" href="/about-us">
                                            <h3 class="f-f-r text-2xl font-semibold underline text-color-pink">More about us</h3>
                                            <div class="pl-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M13.1719 12L8.22192 7.04999L9.63592 5.63599L15.9999 12L9.63592 18.364L8.22192 16.95L13.1719 12Z" fill="#D53F8C" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="lg:w-1/3 w-full relative min-height-images flex items-end justify-center">
                                    <img loading="lazy" class="absolute w-full h-full inset-0 object-cover object-center rounded-xl" src="{{asset
                                    ('images/visitation_slum.jpg')}}" alt="" />
                                    <div class="relative z-10 bg-white rounded shadow-lg p-6 w-10/12 -mb-20">
                                        <div class="flex items-center justify-between w-full sm:w-full mb-4">
                                            <div class="flex items-center">

                                                <div class="ml-6">
                                                    <h3 class="mb-1 leading-5 text-cyan-900 font-bold text-2xl">We do visits to needy
                                                        cancer patients every month
                                                    </h3>
                                                </div>
                                            </div>

                                        </div>
                                                <a href="/contact-us" class="text-sm w-1/2 mt-4 py-2 px-4
                                                bg-linear-button-home text-white font-bold">Become a volunteer</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="relative py-20 overflow-hidden bg-transparent">
                        <span class="absolute top-0 right-0 flex flex-col items-end mt-0 -mr-16 opacity-60">
                            <span class="container hidden w-screen h-32 max-w-xs mt-20 transform rounded-full rounded-r-none md:block md:max-w-xs lg:max-w-lg 2xl:max-w-3xl bg-blue-50"></span>
                        </span>

                        <span class="absolute bottom-0 left-0"> </span>

                        <div class="relative px-16 mx-auto max-w-7xl">
                            <p class="font-medium tracking-wide text-blue-500 uppercase">OUR TEAM</p>
                            <h2 class="relative max-w-lg mt-5 mb-10 text-4xl text-cyan-900 font-semibold leading-tight lg:text-5xl">An incredibly
                                dedicated<br> team of individuals</h2>
                            <div class="grid w-full grid-cols-2 gap-10 sm:grid-cols-3 lg:grid-cols-4">

                                @foreach($globalData->members as $member)

                                    <div class="flex flex-col items-center justify-center col-span-1">
                                        <div class="relative p-5">
                                            <div class="absolute shadow-xl z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none
                                            bg-pink-400"></div>
                                            <img loading="lazy" class="relative z-20 w-full rounded-full" src="{{asset($member['image'])}}">
                                        </div>
                                        <div class="mt-3 space-y-2 text-center">
                                            <div class="space-y-1 text-lg font-medium leading-6">
                                                <h3>{{$member['name']}}</h3>
                                                   <p class="text-color-pink">{{$member['description']}}</p>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </section>

                    <section class="flex items-center justify-center my-12 py-0 bg-white bg-gradient-to-br from-cyan-900 via-cyan-800
                    to-pink-400 min-w-screen">
                        <div class="relative flex flex-col items-center w-full max-w-6xl px-4 py-8 mx-auto text-center lg:text-left lg:block sm:px-6 md:pb-0 md:pt-12 lg:px-12 lg:py-12">
                            <h2 class="my-4 text-3xl font-extrabold tracking-tight text-white sm:text-4xl md:text-5xl lg:my-0 xl:text-4xl sm:leading-tight">
                                Volunteer today <span class="block text-indigo-200 xl:inline">and change the world</span>
                            </h2>
                            <p class="mt-1 mb-10 text-sm font-medium text-indigo-200 xl:text-base xl:tracking-wider lg:mb-0">
                                We have plenty of activities, to keep you engaged and fulfilled. Follow the link below to signup.
                            </p>
                            <div class="flex mb-8 lg:mt-6 lg:mb-0">
                                <div class="inline-flex">
                                    <a href="/contact-us" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300">
                                        Sign Up Today
                                    </a>
                                </div>
                            </div>
                            <div class="bottom-0 -right-20 mb-0 mr-3 lg:absolute lg:-mb-2 overflow-hidden">
                                <img loading="lazy" src="{{asset('images/hands.png')}}" class="max-w-xs mb-0 opacity-80 md:max-w-2xl lg:max-w-lg xl:mb-0
                                xl:max-w-md">
                            </div>
                        </div>
                    </section>

                    {{--events--}}
                   @include('layouts.partials.events')



                </div>
            </div>
        </div>
        <div class="mx-auto px-4 xl:px-0 container pt-10 lg:pt-56">
            <div class="text-color f-f-l">
                <h1 class="text-xl lg:text-6xl text-cyan-900 tracking-tighter leading-relaxed lg:leading-snug f-f-l font-black text-center">
                    "God bless Beth Rapha Cancer Foundation <br>
                    I had come from far for treatments and were <br>
                    it not for you guys, I could have spent several nights in the cold"
                </h1>
                <h1 class="text-color-gradient text-xl lg:text-6xl tracking-tighter leading-relaxed lg:leading-snug f-f-l font-black text-center pt-5 lg:pt-20">- Ben P.</h1>
            </div>
        </div>
        <div class="mx-auto container py-20 lg:pt-44 lg:pb-52">
            <div class="px-4 xl:px-0">
                <h4 class="text-cyan-900 text-5xl mb-8">Since 2021:</h4>
                <div class="xl:flex items-center justify-between w-full text-color">
                    <div class="flex flex-col items-center xl:block py-4 xl:py-0">
                        <h1 class="text-6xl text-cyan-900 font-black f-f-l">9+</h1>
                        <h2 class="f-f-r text-color-lighter text-3xl pt-5">Homes Visited</h2>
                    </div>
                    <div class="flex flex-col items-center xl:block py-4 xl:py-0">
                        <h1 class="text-6xl text-cyan-900 font-black f-f-l">30</h1>
                        <h2 class="f-f-r text-color-lighter text-3xl pt-5">Lives touched</h2>
                    </div>
                    <div class="flex flex-col items-center xl:block py-4 xl:py-0">
                        <h1 class="text-6xl text-cyan-900 font-black f-f-l">10</h1>
                        <h2 class="f-f-r text-color-lighter text-3xl pt-5">Regular events</h2>
                    </div>
                    <div class="flex flex-col items-center xl:block py-4 xl:py-0">
                        <h1 class="text-6xl text-cyan-900 font-black f-f-l">24</h1>
                        <h2 class="f-f-r text-color-lighter text-3xl pt-5">Team Members</h2>
                    </div>
                </div>
            </div>
        </div>

       <div class="py-0 bg-white md:py-8 lg:py-12">
          <div class="mx-auto max-w-7xl md:px-8">
            <div class="flex flex-col overflow-hidden shadow-xl md:h-auto md:flex-row bg-white bg-gradient-to-br from-cyan-900
             via-pink-500 to-pink-400 md:rounded-xl">
              <!-- Left Content -->
              <div class="flex flex-col w-full p-12 md:w-1/2 lg:w-2/5 md:p-16">
                <h2 class="text-3xl font-bold text-left text-white md:text-4xl lg:text-5xl mb-7">
                    Putting a smile on someone's face is our joy
                </h2>

                <p class="mb-12 text-2xl text-left text-white md:max-w-md">
                 That's why we wake up every day and do it!
                </p>

                <div class="mt-auto">
                  <a href="/contact-us" class="inline-block w-full px-10 py-5 text-lg font-semibold text-center text-gray-800 transition
                  duration-100 bg-white rounded-lg outline-none hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300
                  md:w-auto md:text-xl">Join the team</a>
                </div>
              </div>

              <!-- Start right image -->
              <div class="order-first w-full h-56 bg-gray-700 bg-center bg-cover md:w-1/2 lg:w-3/5 md:h-auto md:order-none"
                   style="background-image:url('images/happy.png')"></div>
            </div>
          </div>
        </div>

</x-site-layout>
