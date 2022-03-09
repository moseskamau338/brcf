<x-site-layout>
    <div class="bg-white">
  <header class="relative pb-24 bg-sky-800 sm:pb-32">
    <div class="absolute inset-0">
      <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
      <div class="absolute inset-0 bg-gradient-to-l from-pink-800 to-cyan-700 mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <div class="relative z-10">
      <nav class="relative max-w-7xl mx-auto flex items-center justify-between pt-6 pb-2 px-4 sm:px-6 lg:px-8" aria-label="Global">
        <div class="flex items-center justify-between w-full lg:w-auto">
          <a href="#">
            <span class="sr-only">Workflow</span>
            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=emerald&shade=300" alt="">
          </a>
          <div class="-mr-2 flex items-center lg:hidden">
            <button type="button" class="bg-sky-800 bg-opacity-0 rounded-md p-2 inline-flex items-center justify-center text-cyan-100 hover:bg-opacity-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!-- Heroicon name: outline/menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
        <div class="hidden space-x-10 lg:flex lg:ml-10">
          <a href="#" class="text-base font-medium text-white hover:text-cyan-100">Changelog</a>

          <a href="#" class="text-base font-medium text-white hover:text-cyan-100">About</a>

          <a href="#" class="text-base font-medium text-white hover:text-cyan-100">Partners</a>

          <a href="#" class="text-base font-medium text-white hover:text-cyan-100">News</a>
        </div>
        <div class="hidden lg:flex lg:items-center lg:space-x-6">
          <a href="#" class="py-2 px-6 bg-white bg-opacity-10 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-20"> Login </a>
        </div>
      </nav>

      <!--
        Mobile menu, show/hide based on menu open state.

        Entering: "duration-150 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top lg:hidden">
        <div class="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="px-5 pt-4 flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=emerald&shade=400" alt="">
            </div>
            <div class="-mr-2">
              <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-warm-gray-400 hover:bg-warm-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="pt-5 pb-6">
            <div class="px-2 space-y-1">
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">Changelog</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">About</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">Partners</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">News</a>
            </div>
            <div class="mt-6 px-5">
              <a href="#" class="block text-center w-full py-2 px-4 border border-transparent rounded-md shadow bg-green-400 text-white font-medium hover:bg-green-500">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="relative mt-24 max-w-md mx-auto px-4 sm:max-w-3xl sm:mt-32 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Get in touch</h1>
      <p class="mt-6 text-xl text-cyan-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra. Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit justo viverra non adipisicing elit distinctio.</p>
    </div>
  </header>

  <main>
    <!-- Side-by-side grid -->
    <div class="bg-white">
      <div class="max-w-md mx-auto py-24 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="divide-y divide-warm-gray-200">
          <section class="lg:grid lg:grid-cols-3 lg:gap-8" aria-labelledby="contact-heading">
            <h2 id="contact-heading" class="text-2xl font-extrabold text-warm-gray-900 sm:text-3xl">Get in touch</h2>
            <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Collaborate</h3>
                <dl class="mt-2 text-base text-warm-gray-500">
                  <div>
                    <dt class="sr-only">Email</dt>
                    <dd>support@example.com</dd>
                  </div>
                  <div class="mt-1">
                    <dt class="sr-only">Phone number</dt>
                    <dd>+1 (555) 123-4567</dd>
                  </div>
                </dl>
              </div>

              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Press</h3>
                <dl class="mt-2 text-base text-warm-gray-500">
                  <div>
                    <dt class="sr-only">Email</dt>
                    <dd>support@example.com</dd>
                  </div>
                  <div class="mt-1">
                    <dt class="sr-only">Phone number</dt>
                    <dd>+1 (555) 123-4567</dd>
                  </div>
                </dl>
              </div>

              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Join our team</h3>
                <dl class="mt-2 text-base text-warm-gray-500">
                  <div>
                    <dt class="sr-only">Email</dt>
                    <dd>support@example.com</dd>
                  </div>
                  <div class="mt-1">
                    <dt class="sr-only">Phone number</dt>
                    <dd>+1 (555) 123-4567</dd>
                  </div>
                </dl>
              </div>

              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Say hello</h3>
                <dl class="mt-2 text-base text-warm-gray-500">
                  <div>
                    <dt class="sr-only">Email</dt>
                    <dd>support@example.com</dd>
                  </div>
                  <div class="mt-1">
                    <dt class="sr-only">Phone number</dt>
                    <dd>+1 (555) 123-4567</dd>
                  </div>
                </dl>
              </div>
            </div>
          </section>
          <section class="mt-16 pt-16 lg:grid lg:grid-cols-3 lg:gap-8" aria-labelledby="location-heading">
            <h2 id="location-heading" class="text-2xl font-extrabold text-warm-gray-900 sm:text-3xl">Locations</h2>
            <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Los Angeles</h3>
                <div class="mt-2 text-base text-warm-gray-500 space-y-1">
                  <p>4556 Brendan Ferry</p>

                  <p>Los Angeles, CA 90210</p>
                </div>
              </div>

              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">New York</h3>
                <div class="mt-2 text-base text-warm-gray-500 space-y-1">
                  <p>886 Walter Streets</p>

                  <p>New York, NY 12345</p>
                </div>
              </div>

              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Toronto</h3>
                <div class="mt-2 text-base text-warm-gray-500 space-y-1">
                  <p>7363 Cynthia Pass</p>

                  <p>Toronto, ON N3Y 4H8</p>
                </div>
              </div>

              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Chicago</h3>
                <div class="mt-2 text-base text-warm-gray-500 space-y-1">
                  <p>726 Mavis Island</p>

                  <p>Chicago, IL 60601</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <div class="bg-warm-gray-50">
      <div class="max-w-md mx-auto py-24 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
          <div>
            <h2 class="text-3xl font-extrabold text-warm-gray-900">Frequently asked questions</h2>
            <p class="mt-4 text-lg text-warm-gray-500">Can’t find the answer you’re looking for? Reach out to our <a href="#" class="font-medium text-cyan-700 hover:text-cyan-600">customer support</a> team.</p>
          </div>
          <div class="mt-12 lg:mt-0 lg:col-span-2">
            <dl class="space-y-12">
              <div>
                <dt class="text-lg font-medium text-warm-gray-900">How do you make holy water?</dt>
                <dd class="mt-2 text-base text-warm-gray-500">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
              </div>

              <div>
                <dt class="text-lg font-medium text-warm-gray-900">What&#039;s the best thing about Switzerland?</dt>
                <dd class="mt-2 text-base text-warm-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
              </div>

              <div>
                <dt class="text-lg font-medium text-warm-gray-900">What do you call someone with no body and no nose?</dt>
                <dd class="mt-2 text-base text-warm-gray-500">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
              </div>

              <div>
                <dt class="text-lg font-medium text-warm-gray-900">Why do you never see elephants hiding in trees?</dt>
                <dd class="mt-2 text-base text-warm-gray-500">Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>

    <!-- Newsletter -->
    <div class="relative">
      <div class="absolute left-0 right-0 h-1/2 bg-warm-gray-50" aria-hidden="true"></div>
      <div class="relative max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="py-10 px-6 bg-gradient-to-br from-cyan-900 via-pink-500 to-pink-400 rounded-3xl sm:py-16 sm:px-12 lg:py-20 lg:px-20
        lg:flex lg:items-center">
          <div class="lg:w-0 lg:flex-1">
            <h2 class="text-3xl font-extrabold tracking-tight text-white">Sign up for our newsletter</h2>
            <p class="mt-4 max-w-3xl text-lg text-cyan-100">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat.</p>
          </div>
          <div class="mt-12 sm:w-full sm:max-w-md lg:mt-0 lg:ml-8 lg:flex-1">
            <form class="sm:flex">
              <label for="email-address" class="sr-only">Email address</label>
              <input id="email-address" name="email-address" type="email" autocomplete="email" required class="w-full border-white px-5 py-3 placeholder-warm-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-cyan-700 focus:ring-white rounded-md" placeholder="Enter your email">
              <button type="submit" class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent text-base
              font-medium rounded-md text-white bg-cyan-900 hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-offset-2
              focus:ring-offset-cyan-700 focus:ring-pink-400 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">Notify me</button>
            </form>
            <p class="mt-3 text-sm text-cyan-100">
              We care about the protection of your data. Read our
              <a href="#" class="text-white font-medium underline"> Privacy Policy. </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>


</div>
</x-site-layout>
