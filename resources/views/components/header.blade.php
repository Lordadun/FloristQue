<header class="bg-linear-to-r from-gray-400 to-gray-300 
               dark:from-gray-800 dark:to-gray-700
               flex justify-between items-center px-6 py-4 shadow-md">

    <!-- LEFT -->
    <h1 class="text-2xl font-bold text-white tracking-wide">
        🌸 FloristQue
    </h1>

    <!-- RIGHT -->
    <div class="flex items-center gap-4">

        <!-- DARK MODE -->
        <div id="darkToggle"
     class="w-14 h-7 flex items-center bg-gray-200 dark:bg-gray-600 
            rounded-full p-1 cursor-pointer
            transition duration-300 ease-in-out">

    <div id="toggleCircle"
         class="bg-white w-5 h-5 rounded-full shadow-md transform transition 
                flex items-center justify-center text-xs">

        🌙
    </div>

</div>

        <!-- USER DROPDOWN -->
        <div class="relative">

            <!-- BUTTON -->
            <button id="userMenuBtn"
                    class="flex items-center gap-2 bg-white/20 px-3 py-1 rounded-lg text-white">

                <img src="{{ asset('images/profile.jpg') }}" 
                     class="w-8 h-8 rounded-full object-cover">

                <span class="hidden md:block text-sm">
                    Reihan
                </span>

                ▼
            </button>

            <!-- DROPDOWN -->
            <div id="dropdownMenu"
                 class="hidden absolute right-0 mt-2 w-40 
                        bg-white dark:bg-gray-800 
                        text-gray-800 dark:text-white 
                        rounded-lg shadow-lg overflow-hidden
                        transition duration-200">

                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">
                    👤 Profile
                </a>

                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">
                    ⚙️ Settings
                </a>

                <a href="/logout" 
                   class="block px-4 py-2 text-red-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                    🚪 Logout
                </a>

            </div>

        </div>

    </div>

</header>