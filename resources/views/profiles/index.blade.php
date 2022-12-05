<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lol dis is a title') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-4xl text-gray-900 dark:text-gray-100">
                     {{ $user->username }}
                </div>
                <div class="px-6 text-l text-gray-900 dark:text-gray-100">{{ $user->profile->title }}</div>
                <div class="px-6 text-l text-gray-900 dark:text-gray-100">{{ $user->profile->description }}</div>
                <div class="px-6 text-l text-gray-900 dark:text-gray-100">{{ $user->profile->url }}</div>

                <a href="http://lolz.com" target="_blank" rel="noopener noreferrer" class="text-gray-900 dark:text-gray-100">Link  new</a>


                <ul role="list" class="m-8 grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    <li class="relative">
                      <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                        <button type="button" class="absolute inset-0 focus:outline-none">
                          <span class="sr-only">View details for IMG_4985.HEIC</span>
                        </button>
                      </div>
                      <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">IMG_4985.HEIC</p>
                      <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                    </li>
                    <li class="relative">
                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                          <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                          <button type="button" class="absolute inset-0 focus:outline-none">
                            <span class="sr-only">View details for IMG_4985.HEIC</span>
                          </button>
                        </div>
                        <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">IMG_4985.HEIC</p>
                        <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                      </li>
                      <li class="relative">
                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                          <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                          <button type="button" class="absolute inset-0 focus:outline-none">
                            <span class="sr-only">View details for IMG_4985.HEIC</span>
                          </button>
                        </div>
                        <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">IMG_4985.HEIC</p>
                        <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                      </li>
                      <li class="relative">
                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                          <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                          <button type="button" class="absolute inset-0 focus:outline-none">
                            <span class="sr-only">View details for IMG_4985.HEIC</span>
                          </button>
                        </div>
                        <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">IMG_4985.HEIC</p>
                        <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                      </li>
                      <li class="relative">
                        <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                          <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                          <button type="button" class="absolute inset-0 focus:outline-none">
                            <span class="sr-only">View details for IMG_4985.HEIC</span>
                          </button>
                        </div>
                        <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">IMG_4985.HEIC</p>
                        <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                      </li>
                    <!-- More files... -->
                  </ul>



            </div>
        </div>
    </div>




  



</x-app-layout>
