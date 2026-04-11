<header class="fixed top-0 left-0 w-full z-50
               bg-white/80 dark:bg-gray-900/80
               backdrop-blur-md
               border-b border-gray-200 dark:border-gray-700
               flex justify-between items-center px-6 py-3">

    <!-- LEFT -->
    <div class="flex items-center gap-3">
        <span class="text-xl">🌸</span>
        <h1 class="text-xl font-semibold text-gray-800 dark:text-white">
            FloristQue
        </h1>
    </div>

    <!-- RIGHT -->
    <div class="flex items-center gap-4">

        <!-- SEARCH -->
        <div class="relative hidden md:block">
            <input type="text" id="searchInput"
                   placeholder="Cari bunga..."
                   class="w-56 px-4 py-2 rounded-xl text-sm
                          bg-gray-100 dark:bg-gray-800
                          text-gray-800 dark:text-white
                          focus:outline-none focus:ring-2 focus:ring-pink-400">

            <span class="absolute right-3 top-2.5 text-gray-400 text-sm">
                🔍
            </span>

            <!-- RESULT -->
            <div id="searchResult"
                 class="hidden absolute mt-2 w-full
                        bg-white dark:bg-gray-800
                        rounded-xl shadow-lg p-2 text-sm z-50">
            </div>
        </div>

        <!-- NOTIFICATION -->
        <div class="relative">
            <button id="notifBtn"
                    class="relative p-2 rounded-lg
                           hover:bg-gray-100 dark:hover:bg-gray-800
                           transition text-lg">

                🔔

                <span class="absolute -top-1 -right-1 
                             bg-red-500 text-white text-[10px] px-1.5 rounded-full">
                    3
                </span>
            </button>

            <!-- DROPDOWN -->
            <div id="notifMenu"
                 class="absolute right-0 mt-2 w-64
                        bg-white dark:bg-gray-800
                        text-gray-800 dark:text-white
                        rounded-xl shadow-lg p-3
                        opacity-0 scale-95 pointer-events-none
                        transition duration-200 ease-out">

                <p class="font-semibold mb-2 text-sm">Notifikasi</p>

                <ul class="text-sm space-y-2">
                    <li class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        🌸 Stok mawar hampir habis
                    </li>
                    <li class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        📦 Produk baru ditambahkan
                    </li>
                    <li class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        👤 User baru mendaftar
                    </li>
                </ul>
            </div>
        </div>

        <!-- DARK MODE -->
        <button id="darkToggle"
                class="relative w-12 h-6 flex items-center
                       bg-gray-300 dark:bg-gray-600
                       rounded-full p-1 transition">

            <div id="toggleCircle"
                 class="w-4 h-4 bg-white rounded-full shadow-md
                        transform transition duration-300
                        flex items-center justify-center text-[10px]">
                🌙
            </div>
        </button>

        <!-- USER -->
        <div class="relative">
            <button id="userMenuBtn"
                    class="flex items-center gap-2
                           hover:bg-gray-100 dark:hover:bg-gray-800
                           px-3 py-1.5 rounded-xl transition">

                <img src="{{ asset('images/profile.jpg') }}"
                     class="w-8 h-8 rounded-full object-cover">

                <span class="hidden md:block text-sm text-gray-800 dark:text-white">
                    Reihan Xander
                </span>
            </button>

            <!-- DROPDOWN -->
            <div id="dropdownMenu"
                 class="absolute right-0 mt-2 w-44
                        bg-white dark:bg-gray-800
                        text-gray-800 dark:text-white
                        rounded-xl shadow-lg overflow-hidden
                        opacity-0 scale-95 pointer-events-none
                        transition duration-200 ease-out">

                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">
                    👤 Profile
                </a>

                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">
                    ⚙️ Settings
                </a>

                <div class="border-t border-gray-200 dark:border-gray-700"></div>

                <a href="/logout"
                   class="block px-4 py-2 text-red-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                    🚪 Logout
                </a>

            </div>
        </div>

    </div>
    
</header>
