<aside id="sidebar"
       class="fixed top-16 left-0 w-64 h-[calc(100vh-64px)]
              bg-white/80 backdrop-blur-md
              dark:bg-gray-900/80
              text-gray-800 dark:text-white
              shadow-md flex flex-col
              p-4">

    <!-- PROFILE USER -->
    <div class="flex items-center gap-3 mb-6 p-3 mt-2
            mx-1
            bg-white dark:bg-gray-800 
            rounded-xl shadow-sm hover:shadow-md transition">

        <img src="{{ asset('images/profile.jpg') }}" 
             class="w-12 h-12 rounded-full object-cover border-2 border-pink-400">

        <div>
            <h2 class="text-sm font-semibold text-gray-800 dark:text-white">
                Reihan Xander
            </h2>

            <p class="text-xs text-gray-500 dark:text-gray-300">
                Admin FloristQue
            </p>

            <span class="text-[10px] text-green-500">
                ● Online
            </span>
        </div>
    </div>

    <!-- MENU -->
    <ul class="space-y-2">

        <li>
            <a href="/" class="flex items-center gap-2 
                              bg-pink-100 dark:bg-gray-800 
                              text-pink-600 p-2 rounded-lg font-semibold shadow-sm">
                📊 Dashboard
            </a>
        </li>

        <li>
            <a href="#" class="flex items-center gap-2 p-2 
                              hover:bg-pink-100 dark:hover:bg-gray-700 
                              rounded-lg transition-all duration-200">
                🌸 Produk
            </a>
        </li>

        <li>
            <a href="#" class="flex items-center gap-2 p-2 
                              hover:bg-pink-100 dark:hover:bg-gray-700 
                              rounded-lg transition-all duration-200">
                👤 User
            </a>
        </li>

    </ul>

</aside>