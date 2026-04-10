<aside class="w-64 bg-gray-200 shadow-md min-h-screen p-5">

    <!-- PROFILE USER -->
    <div class="flex items-center gap-3 mb-6 p-3 bg-white rounded-xl shadow-sm hover:shadow-md transition">

        <!-- Avatar -->
        <img src="{{ asset('images/profile.jpg') }}" 
             class="w-12 h-12 rounded-full object-cover border-2 border-pink-400">

        <!-- Info -->
        <div>
            <h2 class="text-sm font-semibold text-gray-800">
                Reihan Xander
            </h2>

            <p class="text-xs text-gray-500">
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
            <a href="/" class="flex items-center gap-2 bg-gray-300 text-pink-600 p-2 rounded-lg font-semibold">
                📊 Dashboard
            </a>
        </li>

        <li>
            <a href="#" class="flex items-center gap-2 p-2 hover:bg-pink-100 rounded-lg transition">
                🌸 Produk
            </a>
        </li>

        <li>
            <a href="#" class="flex items-center gap-2 p-2 hover:bg-pink-100 rounded-lg transition">
                👤 User
            </a>
        </li>

    </ul>

</aside>