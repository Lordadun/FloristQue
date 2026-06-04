<aside class="w-64 bg-gray-200 dark:bg-gray-900 
              text-gray-800 dark:text-white
              shadow-md min-h-screen p-5 transition">

    <!-- PROFILE USER -->
    <div class="flex items-center gap-3 mb-6 p-3 
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
            <a href="{{ url('/') }}" 
               class="flex items-center gap-2 p-2 rounded-lg transition
               {{ request()->is('/') ? 'bg-gray-300 dark:bg-gray-700 text-pink-600 font-semibold' : 'hover:bg-pink-100 dark:hover:bg-gray-700' }}">
                📊 Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('products.index') }}" 
               class="flex items-center gap-2 p-2 rounded-lg transition
               {{ request()->is('products*') ? 'bg-gray-300 dark:bg-gray-700 text-pink-600 font-semibold' : 'hover:bg-pink-100 dark:hover:bg-gray-700' }}">
                🌸 Produk
            </a>
        </li>

        <li>
            <a href="#" 
               class="flex items-center gap-2 p-2 hover:bg-pink-100 dark:hover:bg-gray-700 rounded-lg transition">
                👤 User
            </a>
        </li>

    </ul>

</aside>