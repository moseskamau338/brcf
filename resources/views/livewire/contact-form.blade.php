<div class="grid grid-cols-1 gap-y-6">
    @if($mess['show'])
    <div class="{{$mess['type'] === 'success'? 'bg-green-50 border-green-400' : 'bg-yellow-50 border-yellow-400'}} lg:w-[500px] border-l-4 p-4">
        <div class="flex">
          <div class="ml-3 flex justify-between w-full">
            <p class="text-sm {{$mess['type'] === 'success'? 'text-green-600' : 'text-yellow-700'}}">
              {{$mess['message']}}
            </p>

              <button wire:click="clearNotification" class="h-4 w-4 rounded-full flex items-center justify-center hover:scale-105 hover:shadow {{
                $mess['type'] === 'success'? 'bg-green-200 text-green-500' : 'bg-yellow-400 text-yellow-700'
                }}"><i class="fa-solid text-xs fa-close"></i></button>
          </div>
    </div>
    </div>
    @endif
  <div>
    <label for="full-name" class="sr-only">Full name</label>
    <input wire:model.defer="name" type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Full name">
      @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <div>
    <label for="email" class="sr-only">Email</label>
    <input wire:model.defer="email" id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Email">
      @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <div>
    <label for="phone" class="sr-only">Phone</label>
    <input wire:model.defer="phone" type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Phone">
      @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <div>
    <label for="message" class="sr-only">Message</label>
    <textarea wire:model.defer="message" id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md" placeholder="Message"></textarea>
      @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <div>
    <button wire:click="submit" type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">Submit</button>
  </div>
</div>
