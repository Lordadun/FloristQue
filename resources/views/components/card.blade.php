<div class="relative overflow-hidden
            bg-white/70 dark:bg-gray-800/70
            backdrop-blur-md
            rounded-3xl p-6 shadow-lg
            flex justify-between items-center
            hover:shadow-2xl hover:-translate-y-1
            active:scale-95
            cursor-pointer
            transition duration-300 min-h-35">

    <!-- Glow Accent -->
    <div class="absolute -top-10 -right-10 w-32 h-32 
                bg-pink-400/20 rounded-full blur-2xl"></div>

    <div class="z-10">
        <h2 class="text-gray-500 dark:text-gray-400 text-sm">
            {{ $title }}
        </h2>

        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">
            {{ $slot }}
        </p>
    </div>

    <div class="z-10">
        <img src="{{ $image }}" 
             class="w-20 h-20 object-contain opacity-90 
                    hover:scale-110 transition duration-300">
    </div>

</div>