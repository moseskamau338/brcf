<x-site-layout>
    <x-slot name='title' >
      About Us
    </x-slot>

          <div class="bg-linear-pink lg:pb-0">
                @include('layouts.partials.menu')
                  <div class="mx-auto container w-full flex justify-center items-center flex-col">
                      <div class="flex flex-col w-full mx-auto container items-center justify-center pt-10 lg:pt-28 f-f-l">
                          <h1 class="text-2xl md:text-5xl xl:text-8xl text-center font-black text-color-gradient md:leading-tight xl:leading-snug">
                              Our Vision is to be a safe haven <br />
                                for cancer patients.
                          </h1>

                          <div class="relative py-4 sm:py-24">
                            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                              <div class="relative sm:py-16 lg:py-0">
                                <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                                  <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
                                  <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                                    <defs>
                                      <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                      </pattern>
                                    </defs>
                                    <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                                  </svg>
                                </div>
                                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                                  <!-- Testimonial card-->
                                  <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                                    <img class="absolute inset-0 h-full w-full object-cover" src="{{asset('images/about_help.jpg')}}" alt="">
                                    <div class="absolute inset-0 bg-pink-400 mix-blend-multiply"></div>
                                    <div class="absolute inset-0 bg-gradient-to-t from-cyan-800 via-cyan-500/70 opacity-70"></div>
                                    <div class="relative px-8">
                                      <div>
                                        <img class="h-20" src="{{asset('images/white-logo.png')}}" alt="Beth Rapha Cancer Foundation logo">
                                      </div>
                                      <blockquote class="mt-8">
                                        <div class="relative text-lg font-medium text-white md:flex-grow">
                                          <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                          </svg>
                                          <p class="relative">EVERY PERSON STRUGGLING WITH CANCER NEEDS SUPPORT, LOVE AND CARE</p>
                                        </div>

                                        <footer class="mt-4">
                                          <p class="text-base font-semibold text-indigo-200">~ Beth Rapha Cancer Foundation</p>
                                        </footer>
                                      </blockquote>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                                <!-- Content area -->
                                <div class="pt-12 sm:pt-16 lg:pt-20">
                                  <h2 class="text-3xl text-cyan-900 font-extrabold tracking-tight sm:text-4xl">On a mission to empower teams</h2>
                                  <div class="mt-6 text-gray-500 space-y-6">
                                    <p class="text-lg">Beth Rapha Cancer Foundation was officially registered as an NGO by the NGO board of Kenya on the 29th of June 2021. It was founded by five friends with the aim of alleviating the plight of cancer patients.</p>
                                    <p class="text-base leading-7">In 2017, the Kenyan media highlighted the case of cancer patients who spent the night in the corridors of public hospitals during the course of treatment. This was occasioned mostly by lack of a place to stay in Nairobi.  A good number of these patients came from areas that are far from Nairobi and they did not have relatives to host them in Nairobi.</p>
                                    <p class="text-base leading-7">Those patients who are undergoing radiotherapy which on average takes between a month or two are required to attend the sessions continuously for the whole month, thus lack of a place to stay poses a huge challenge for these patients. In view of this, the five friends came together to seek for ways they could formulate practical interventions to alleviate the dire situation.</p>
                                  </div>
                                </div>

                                <!-- Stats section -->
                                <div class="mt-10">
                                  <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                                    <div class="border-t-2 border-gray-100 pt-6">
                                      <dt class="text-base font-medium text-gray-500">Founded</dt>
                                      <dd class="text-3xl font-extrabold tracking-tight text-cyan-900">2021</dd>
                                    </div>

                                    <div class="border-t-2 border-gray-100 pt-6">
                                      <dt class="text-base font-medium text-gray-500">Projects</dt>
                                      <dd class="text-3xl font-extrabold tracking-tight text-cyan-900">5</dd>
                                    </div>


                                    <div class="border-t-2 border-gray-100 pt-6">
                                      <dt class="text-base font-medium text-gray-500">Raised</dt>
                                      <dd class="text-3xl font-extrabold tracking-tight text-cyan-900">Ksh 0.3M</dd>
                                    </div>
                                  </dl>
                                </div>
                              </div>
                            </div>
                          </div>

                      </div>
                  </div>
              </div>


          <div class="py-16 bg-gray-50 overflow-hidden">
            <div class="lg:max-w-7xl mx-auto px-4 space-y-8 sm:px-6 lg:px-8">
              <div class="text-base max-w-prose mx-auto lg:max-w-none">
                <h2 class="text-base text-pink-600 font-semibold tracking-wide uppercase">The Effort</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Our work</p>
              </div>
              <div class="lg:flex sm:block">
                <div class="relative z-10 text-base max-w-prose mx-auto lg:max-w-[65%] lg:mx-0">
                  <p class="text-2xl text-gray-500 prose prose-blockquote:">
                    The NGO has undertaken some activities including <b>visiting cancer patients</b> coming from low income areas, and <b>supporting them with foodstuff</b>.
                    <br />
                    Equally, some have been facilitated to <b>access treatment</b> where previously financial and other various issues barred them from pursuing treatment for cancer.
                    <br />
                    <b>Beth Rapha</b> is seeking for means and ways to establish a place that patients can be accommodated in the course of treatment. <b>This, the founders trust will go a long way</b> in alleviating the cancer burden as the patients shall be able to adhere to the treatment as well as have some of the other challenges solved.
                  </p>
                </div>
                <div class="sm:mt-12">
                 <img src="{{asset('images/visitation_slum.jpg')}}" class="lg:absolute lg:w-1/3 sm:w-3/4 lg:right-2 sm:m-auto  rounded shadow-lg" alt="">
                </div>
              </div>
            </div>
          </div>

        <section class="w-full pt-6 pb-32 bg-white">
            <div class="relative px-12 mx-auto max-w-7xl">

                <div class="relative grid items-center grid-cols-1 gap-10 p-12 overflow-hidden shadow-2xl md:p-16 lg:p-20 xl:p-24 bg-gradient-to-r from-cyan-700 to-cyan-900 rounded-2xl md:grid-cols-5 lg:gap-0">

                    <div class="absolute top-0 right-0">
                        <svg viewBox="0 0 487 487" class="object-cover w-full h-full" xmlns="http://www.w3.org/2000/svg"><path d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
                    </div>

                    <div class="absolute bottom-0 left-0 h-full">
                        <svg viewBox="0 0 487 487" class="w-auto h-full opacity-75 object-stretch" xmlns="http://www.w3.org/2000/svg"><path d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
                    </div>

                    <div class="relative z-30 col-span-1 md:col-span-3">
                        <h2 class="mb-1 text-3xl font-bold leading-tight text-white md:mb-3 md:text-3xl lg:text-4xl xl:text-5xl">Our Urgent Call...</h2>
                        <p class="max-w-sm my-6 text-base font-normal text-white xl:max-w-lg lg:pr-0 pr-7 lg:text-xl">
                          The patients have many challenges including:
                          <ul class="text-base font-normal text-white marker:text-white list-disc">
                            <li>Lack of proper nutrition during treatment,</li>
                            <li>Lack of transport to and from hospital,</li>
                            <li>lack of financial means to pay for treatment (Tests, imaging and procedures)</li>
                          </ul>
                          <p class="text-white text-2xl font-bold pl-0 mt-10 tracking-wide">
                             You can help us make their situation more bearable. <br /> Donate today and save the day!
                          </p>
                        </p>
                        <button type="button" class="inline-flex items-center px-4 py-2 mt-8 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">Donate Today
                          <i class="ml-2 fa fa-box-heart"></i>
                        </button>

                    </div>
                    <div class="flex items-center h-full col-span-1 md:col-span-2">
                        <img src="{{asset('images/Visiting_the_home_of_a_cancer_patient.jpg')}}" class="relative top-0 right-0 object-cover w-full -mr-1 shadow-xl border-4 border-pink-400 rounded-lg md:max-w-sm md:w-auto max-w-none lg:absolute lg:max-w-md xl:max-w-lg lg:mt-9" alt="Visiting_the_home_of_a_cancer_patient">
                    </div>
                </div>
            </div>
        </section>

        {{-- Teams --}}
        <div class="bg-white">
          <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
              <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold text-cyan-900 tracking-tight sm:text-4xl">Meet our leadership</h2>
                <p class="text-xl text-gray-500">The organization draws its membership from professionals in the health care sector and other relevant areas. Currently the organization operates within Nairobi and its environs with a vision of spreading its presence across Africa.</p>
              </div>
              <div class="lg:col-span-2">
                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                  @foreach ($globalData->members as $member)
                    <li>
                      <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-16 h-16 rounded-full shadow-xl lg:w-20 lg:h-20" src="{{$member['image']}}" alt="">
                        <div class="font-medium text-lg leading-6 space-y-1">
                          <h3>{{$member['name']}}</h3>
                          <p class="text-pink-600">{{$member['description']}}</p>
                        </div>
                      </div>
                    </li>
                  @endforeach

                  <!-- More people... -->
                </ul>
              </div>
            </div>
          </div>
        </div>

        {{-- Events --}}
        <div class="relative bg-cyan-900">
        <div class="h-56 from-cyan-900
             via-pink-500 to-pink-400 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
          <img class="w-full h-full object-cover" src="{{asset('images/hands.jpg')}}" alt="">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
          <div class="md:ml-auto md:w-1/2 md:pl-10">
            <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">Upcoming Events</h2>
            <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">Volunteer Onboarding Meeting</p>
            <p class="mt-3 text-lg text-gray-300">We shall be conducting our  yearly volunteer onboarding  where we give guidelinse regarding the organizational procedures as well as provide resource for efficiency within the workforce.</p>
            <div class="mt-8">
              <dl class="grid grid-cols-2 gap-x-4 gap-y-8 mb-12">
                  <div class="pt-6">
                    <dt class="text-base font-medium text-white">Venue</dt>
                    <dd class="text-xl font-extrabold tracking-tight text-gray-100">Nairobi</dd>
                  </div>

                  <div class="pt-6">
                    <dt class="text-base font-medium text-white">Date</dt>
                    <dd class="text-xl font-extrabold tracking-tight text-gray-100">20<sup>th</sup> October, 2022</dd>
                  </div>
            </dl>

              <div class="inline-flex rounded-md shadow">
                <a href="/contact-us" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                  Become a volunteer today
                  <!-- Heroicon name: solid/external-link -->
                  <svg class="-mr-1 ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                    <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


</x-site-layout>
