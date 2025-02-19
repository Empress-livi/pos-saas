<header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">

    <div class="flex items-center">

        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">

            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>

        </button>


    </div>

    <div class="flex items-center">

        <div>

            <a href="{{ route('pos') }}"
               class="flex mx-4 mt-1 text-gray-600 focus:outline-none">

                <span class="mr-2"><i class="fab fa-windows text-2xl"></i> POS System </span>

            </a>

        </div>

        <div class="relative flex">

            <div>

                <a href="{{ route('backEnd.inbox') }}"
                   class="flex mx-4 mt-1 text-gray-600 focus:outline-none">

                    <span class="mr-4">

                        <i class="fas fa-inbox text-xl  "></i>

                    Inbox

                    </span>

                </a>

            </div>

            <div
                class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>


        </div>

        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = ! dropdownOpen"
                    class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                <img class="h-full w-full object-cover"
                     src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                     alt="Your avatar">
            </button>

            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                 class="fixed inset-0 h-full w-full z-10"
                 style="display: none;"></div>

            <div x-show="dropdownOpen"
                 class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                 style="display: none;">
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                <a href=""
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
            </div>
        </div>
    </div>
</header>
