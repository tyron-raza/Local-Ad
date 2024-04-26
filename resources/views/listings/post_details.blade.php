
<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
    <div class="bg-white">
        <div class="pt-6">
          <!-- Image gallery -->
          <div class="mx-auto mt-6 max-w-xl sm:px-6">
            <div class="hidden overflow-hidden rounded-lg lg:block">
              <img src="{{ Storage::url($listing->featured_image) }}" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
            </div>
          </div>

          <!-- Product info -->
          <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
              <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$listing->title}}</h1>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
              <h2 class="sr-only">Product information</h2>
              @php
                        $currency = ($listing->country_id == 1) ? '৳' : (($listing->country_id == 2) ? '$' : '');
              @endphp
              <p class="text-3xl tracking-tight text-gray-900">{{$currency}}{{$listing->price }} ({{$listing->price_negotiable }})</p>

              <form class="mt-10">
                <!-- Details -->
                <div class="mt-10">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">Posted by:</h3>     
                  </div>
                  <div class="flex items-center justify-between">
                    <h2 class="text-xl font-large text-gray-900">{{$listing->user->name}}</h2>
                  </div>
                </div>

                <!-- Sizes -->
                <div class="mt-10">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">Phone no:</h3>     
                  </div>
                  <div class="flex items-center justify-between">
                    <h2 class="text-xl font-large text-gray-900">{{$listing->phone_number}}</h2>
                  </div>
                </div>
                <div class="mt-10">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">Condition:</h3>     
                  </div>
                  <div class="flex items-center justify-between">
                    <h2 class="text-xl font-large text-gray-900">{{$listing->condition}}</h2>
                  </div>                
                </div>
                <div class="mt-10">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">Date:</h3>     
                  </div>
                  <div class="flex items-center justify-between">
                    <h2 class="text-xl font-large text-gray-900">{{$listing->created_at}}</h2>
                  </div>
                </div>
                <div class="mt-10">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">Location:</h3>     
                  </div>
                  <div class="flex items-center justify-between">
                    <h2 class="text-xl font-large text-gray-900">{{$listing->location}}</h2>
                  </div>
                </div>
                <a class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                href="tel:{{$listing->phone_number}}">Call</a>
              </form>
            </div>

            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
              <!-- Description and details -->
              <div>
                <h3 class="sr-only">Description</h3>

                <div class="space-y-6">
                  <p class="text-base text-gray-900">{{$listing->description}}</p>
                </div>
              </div>
              <x-comment></x-comment>
            </div>
      
          </div>
        </div>
    </div>

    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>