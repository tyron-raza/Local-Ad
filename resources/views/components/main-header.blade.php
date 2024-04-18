<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Grenze:wght@700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
        
        <a href="/" class="flex title-font font-l items-center text-gray-900 mb-4 md:mb-0" style="font-family:'Sora', serif;font-weight: 700; font-style: normal; font-size: large">
            <span  class="ml-3 text-3xl">Local Ad.</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center" style= 'font-family: "Sora", sans-serif;font-optical-sizing: auto;font-weight: 500;font-style: normal;' >
            <a href="/" class="mr-5 hover:text-gray-900">Home</a>
            <a href="{{ route('all-listings') }}" class="mr-5 hover:text-gray-900">Listings</a>
            @guest
                <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Login</a>
                <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">Register</a>
            @endguest
            @auth
                <a href="{{ route('dashboard') }}" class="mr-5 hover:text-gray-900">{{ auth()->user()->name }}</a>
            @endauth
        </nav>
        <a href="{{ route('listings.create') }}"
            class="inline-flex items-center bg-green-500 border-0 py-1 px-3 focus:outline-none hover:bg-green-200 rounded text-base text-gray-50 font-semibold mt-4 md:mt-0" style="font-family:'Sora', serif;font-weight: 700; font-style: normal; font-size: large">Post
            New Ad
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</header>
