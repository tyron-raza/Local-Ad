<section style="background-image: url('https://www.shutterstock.com/image-photo/stunning-3d-render-abstract-multicolor-600nw-2308145041.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        <x-main-hero></x-main-hero>
    </section>
    <section>
        <x-main-section>
            @foreach ($categories as $category)
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-gray-200 border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{ $category->name }}</h2>
                        <p class="leading-relaxed text-base">100 Ads.</p>
                    </div>
                </div>
            @endforeach
        </x-main-section>
        <x-main-featured>
            @foreach ($featured_ads as $ad)
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <img src="{{ asset($ad->featured_image) }}" alt="Ad Image" class="w-full h-auto mb-3">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">{{ $ad->title }}</h2>
                        <p class="leading-relaxed text-base">{{ $ad->description }}</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </x-main-featured>
    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>
</section>
