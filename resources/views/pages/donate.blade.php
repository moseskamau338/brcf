<x-site-layout>
  <x-slot name='title' >
    Donate Today
  </x-slot>
<div class="bg-linear-pink lg:pb-0">
    @include('layouts.partials.menu')
    {{-- header --}}
    <section class="flex items-center justify-center lg:mt-32 sm:mt-4 sm:pt-4 py-0 bg-white bg-gradient-to-br from-cyan-900 via-cyan-800
    to-pink-400 min-w-screen">
        <div class="relative flex flex-col items-center w-full max-w-6xl px-4 py-8 mx-auto text-center lg:text-left lg:block sm:px-6 md:pb-0 md:pt-12 lg:px-12 lg:py-12">
            <h2 class="my-4 text-3xl font-extrabold tracking-tight text-white sm:text-4xl md:text-5xl lg:my-0 xl:text-4xl sm:leading-tight">
                Your support <span class="block text-indigo-200 xl:inline">saves lives!</span>
            </h2>
            <p class="mt-1 mb-10 text-sm font-medium text-indigo-200 xl:text-base xl:tracking-wider lg:mb-0 w-1/3 lg:w-3/4 pr-12">
                “We ourselves feel that what we are doing is just a drop in the ocean. But the ocean would be less because of that missing drop.”
            </p>
            <p class="italic font-bold text-white">
                ~ Mother Teresa
            </p>
            <div class="bottom-0 -right-20 mb-0 mr-3 lg:absolute lg:-mb-2 overflow-hidden">
                <img loading="lazy" src="{{asset('images/hands.png')}}" class="max-w-xs mb-0 opacity-80 md:max-w-2xl lg:max-w-lg xl:mb-0
                xl:max-w-md">
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto relative bg-white shadow-xl lg:mt-24 sm:mt-4 sm:pt-4">


    <div class="mx-8 py-8">
        <h2 class="font-bold text-cyan-900 text-3xl">To send your financial donations, please follow the instructions below:</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 mt-6">
            <div class="bg-[#56AE4E] px-3 py-6">
                <h3 class="tracking-widest text-white text-2xl font-black">LIPA NA MPESA</h3>
                <ul class="list-decimal list-inside text-white">
                    <li>Go to your <b>MPESA</b> menu and select <b>Lipa Na MPESA</b></li>
                    <li>Select <b>Paybill</b> from the options, then enter the till number below <b><i>(329329)</i></b></li>
                    <li>Enter <b>Account Number: </b> <b><i>0102879997600</i></b></li>
                    <li>Enter the amount you wish to donate</li>
                    <li>Confirm transaction by providing your <b>PIN</b></li>
                </ul>
                <p class="text-white font-semibold mt-4 italic">That's all thank you for your hearty support! May God bless you abundantly!</p>


                <h5 class="tracking-widest mt-4 text-white text-lg font-semibold">TILL NUMBER</h5>

                <div id="number" class="flex flex-row space-x-2 mt-5">
                    <span class="bg-white px-4 py-5 flex items-center justify-center text-cyan-900 text-2xl font-bold">3</span>
                    <span class="bg-white px-4 py-5 flex items-center justify-center text-cyan-900 text-2xl font-bold">2</span>
                    <span class="bg-white px-4 py-5 flex items-center justify-center text-cyan-900 text-2xl font-bold">9</span>
                    <span class="bg-white px-4 py-5 flex items-center justify-center text-cyan-900 text-2xl font-bold">3</span>
                    <span class="bg-white px-4 py-5 flex items-center justify-center text-cyan-900 text-2xl font-bold">2</span>
                    <span class="bg-white px-4 py-5 flex items-center justify-center text-cyan-900 text-2xl font-bold">9</span>
                </div>
            </div>

            <div class="px-4">
                <h2 class="font-bold text-cyan-900 text-xl">Bank Donations</h2>
                <p class="text-cyan-900">For bank donations, use the accounts below:</p>

                <dl class="text-gray-600 tracking-wide ml-4 mt-4">Bank Details</dl>
                <div class="flex flex-row space-x-4">
                    <dt class="mt-6">
                        <dd class="text-cyan-900 flex flex-col">
                            <span class="text-lg font-bold">Standard Chattered Bank</span>
                            <span class="text-sm">Westlands Branch</span>
                        </dd>
                    </dt>

                    <dt class="mt-6">
                        <dd class="text-cyan-900 flex flex-col">
                            <span class="text-lg font-bold">0102879997600</span>
                        </dd>
                    </dt>
                </div>

            </div>
        </div>
    </div>



    </div>
</x-site-layout>
