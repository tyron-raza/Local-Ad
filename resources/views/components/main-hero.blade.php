<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Grenze:wght@700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
     <header id="form-filter" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTViaKwXSBIAFZvYsjyzPkewnM1Awc-UxHHqk6v9wLzA&s')">
         <div class="w-full m-4 p-4" style= 'font-family: "Sora", sans-serif;font-optical-sizing: auto;font-weight: 500;font-style: normal;'>
             <div class="flex items-center justify-center w-full h-full">
                 <div class="text-center">
                     <div class="p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
                         <form>
                             <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                 <div class="grid grid-cols-2 gap-2 p-2 rounded">
                                     <div class="flex rounded bg-gray-0 items-center p-2 ">
                                         <svg class="fill-current text-gray-800 mr-2 w-5"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                             height="24">
                                             <path class="heroicon-ui"
                                                 d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                                         </svg>
                                         <input type="text" placeholder="Title" name="title" id="title"
                                             class="bg-gray-100 max-w-full focus:outline-none text-gray-700" />
                                     </div>
                                     <div class="flex rounded bg-gray-0 items-center p-2 ">
                                         <svg class="fill-current text-gray-800 mr-2 w-5"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                             height="24">
                                             <path class="heroicon-ui"
                                                 d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z" />
                                         </svg>
                                         <select class="bg-gray-100 w-full focus:outline-none text-gray-700"
                                             id="category">
                                             <option selected value="">Categories</option>

                                             @foreach (App\Models\Category::all() as $category)
                                                 <option value="{{ $category->id }}">{{ $category->name }}
                                                 </option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </div>
                                 <div class="grid grid-cols-2 gap-2 p-2 rounded">
                                     <div class="flex rounded bg-gray-0 items-center p-2 ">
                                         <svg class="fill-current text-gray-800 mr-2 w-5"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                             height="24">
                                             <path class="heroicon-ui"
                                                 d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z" />
                                         </svg>
                                         <select class="bg-gray-100 w-full focus:outline-none text-gray-700"
                                             id="country">
                                             <option selected value="">Countries</option>
                                             @foreach (App\Models\Country::all() as $country)
                                                 <option value="{{ $country->id }}">{{ $country->name }}
                                                 </option>
                                             @endforeach
                                         </select>
                                     </div>
                                     <div class="flex rounded bg-gray-0 items-center p-2 ">
                                         <svg class="fill-current text-gray-800 mr-2 w-5"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                             height="24">
                                             <path xmlns="http://www.w3.org/2000/svg" d="M12,22a1,1,0,0,0,.707-.293l9-9a1,1,0,0,0,.29-.784l-.643-8.357a1,1,0,0,0-.92-.921L12.077,2a1,1,0,0,0-.784.29l-9,9a1,1,0,0,0,0,1.414l9,9A1,1,0,0,0,12,22Zm.382-17.968,7.044.542.542,7.044L12,19.586,4.414,12Zm2.061,5.525a2,2,0,1,1,2.828,0A2,2,0,0,1,14.443,9.557Z"/>
                                         </svg>
                                         <input type="text" id="maxPrice" name="maxPrice" placeholder="Max Price..."
                                             class="bg-gray-100 max-w-full focus:outline-none text-gray-700" />
                                     </div>
                                 </div>
                             </div>
                             <div class="flex justify-center">
                                 <button type="button" id="filter"
                                     class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Filter</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </header>
