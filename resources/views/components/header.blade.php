<header class="bg-linear-to-r from-gray-400 to-gray-300 
               dark:from-gray-800 dark:to-gray-700
               flex justify-between items-center px-6 py-4 shadow-md">

    <div class="flex items-center gap-3">

        <span class="text-white text-sm">
            {{ session('user') }}
        </span>

        <a href="/logout" class="bg-white text-black px-3 py-1 rounded-lg text-sm">
            Logout
        </a>

    </div>

    <!-- Title -->
    <h1 class="text-2xl font-bold text-white tracking-wide">
        🌸 FloristQue
    </h1>

    <!-- BUTTON DARK MODE -->
    <button id="darkToggle"
            class="bg-white text-black px-3 py-1 rounded-lg text-sm shadow">
        <span id="icon">🌙</span>
    </button>

</header>