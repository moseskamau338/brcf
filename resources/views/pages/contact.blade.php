<x-site-layout>
  <x-slot name='title' >
    Contact Us
  </x-slot>
<div class="bg-linear-pink lg:pb-0">
              @include('layouts.partials.menu')
                {{-- header --}}


                <div class="max-w-7xl mx-auto relative bg-white lg:mt-32 shadow-xl sm:mt-4 sm:pt-4">

                  <div class="max-w-3xl mx-8 mt-4 lg:mx-auto md:mt-16">

                  <div class="absolute inset-0">
                    <div class="inset-y-0 left-0 w-1/2 bg-gray-50"></div>
                  </div>

                  <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
                    <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                      <div class="max-w-lg mx-auto">
                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Get in touch</h2>
                        <p class="mt-3 text-lg leading-6 text-gray-500">
                            Talk to us today, or visit us at our offices for more details.
                        </p>
                        <dl class="mt-8 text-base text-gray-500">
                          <div>
                            <dt class="sr-only">Postal address</dt>
                            <dd>
                              <p>Nairobi, Westlands,</p>
                              <p>Kenya</p>
                            </dd>
                          </div>
                          <div class="mt-6">
                            <dt class="sr-only">Phone number</dt>
                            <dd class="flex">
                              <!-- Heroicon name: outline/phone -->
                              <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                              </svg>
                              <span class="ml-3"> +2541 1549 4895 </span>
                            </dd>
                          </div>
                          <div class="mt-3">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                              <!-- Heroicon name: outline/mail -->
                              <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                              <span class="ml-3"> info@bethraphafoundation.org </span>
                            </dd>
                          </div>
                        </dl>

                      </div>
                    </div>
                    <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                      <div class="max-w-lg mx-auto lg:max-w-none">
                          @livewire('contact-form')
                      </div>
                    </div>
                  </div>
                </div>

              <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="relative bg-white shadow-xl">
                  <h2 class="sr-only">Contact us</h2>

                  <div class="grid grid-cols-1 lg:grid-cols-3">
                    <!-- Contact information -->
                    <div class="relative overflow-hidden py-10 px-6 bg-gradient-to-br from-cyan-900 via-cyan-800
                    to-pink-400 sm:px-10 xl:p-12">
                      <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
                        <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                          <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                          <defs>
                            <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#fff"></stop>
                              <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </linearGradient>
                          </defs>
                        </svg>
                      </div>
                      <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
                        <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                          <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                          <defs>
                            <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#fff"></stop>
                              <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </linearGradient>
                          </defs>
                        </svg>
                      </div>
                      <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
                        <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                          <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                          <defs>
                            <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#fff"></stop>
                              <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </linearGradient>
                          </defs>
                        </svg>
                      </div>
                      <h3 class="text-3xl font-medium text-white">
                        Join Our Volunteer Program
                      </h3>
                      <p class="mt-6 text-lg text-indigo-50 max-w-3xl">
                       There's no better way of fulfilling your life's call other than to commit your talents and skills to uplifting humanity.
                      </p>
                      <p class="mt-6 text-lg text-indigo-50 max-w-3xl">
                       When you put a smile on the helpless and weary, when they glorify God because of your labour of love, then you can be sure that God will take care of you.
                      </p>

                    </div>

                    <!-- Contact form -->
                    <div class="py-10 px-4 lg:col-span-2">
                      <h3 class="text-3xl font-medium text-gray-900 mb-8">Please fill this Volunteer Application form to start.</h3>
                      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfyZcTOCzNWZPI7SArw3rCPG39zheh1GxXm9TDJIg_x6ss_Cw/viewform?embedded=true" width="700" height="560" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>
                  </div>
                </div>
              </div>

            <section class="flex items-center justify-center my-12 py-0 bg-white bg-gradient-to-br from-cyan-900 via-cyan-800
                    to-pink-400 min-w-screen">
                        <div class="relative flex flex-col items-center w-full max-w-6xl px-4 py-8 mx-auto text-center lg:text-left lg:block sm:px-6 md:pb-0 md:pt-12 lg:px-12 lg:py-12">
                            <h2 class="my-4 text-3xl font-extrabold tracking-tight text-white sm:text-4xl md:text-5xl lg:my-0 xl:text-4xl sm:leading-tight">
                                Still want <span class="block text-indigo-200 xl:inline">to support?</span>
                            </h2>
                            <p class="mt-1 mb-10 text-sm font-medium text-indigo-200 xl:text-base xl:tracking-wider lg:mb-0">
                                If, for some reason, you might not be able to join our team but still want to support,<br/> you might consider donating today...
                            </p>
                            <div class="flex mb-8 lg:mt-6 lg:mb-0">
                                <div class="inline-flex">
                                    <a href="/donate" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-pink-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-pink-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300">
                                        Donate
                                        <i class="ml-2 fa fa-box-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="bottom-0 -right-20 mb-0 mr-3 lg:absolute lg:-mb-2 overflow-hidden">
                                <img loading="lazy" src="{{asset('images/hands.png')}}" class="max-w-xs mb-0 opacity-80 md:max-w-2xl lg:max-w-lg xl:mb-0
                                xl:max-w-md">
                            </div>
                        </div>
                    </section>



    </div>
</x-site-layout>
