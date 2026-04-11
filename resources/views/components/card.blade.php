<div class="bg-gray-200 dark:bg-gray-800
            rounded-3xl p-8 shadow-lg 
            flex justify-between items-center
            hover:shadow-2xl hover:scale-[1.03]
            active:scale-95
            cursor-pointer
            transition duration-300 min-h-48">

    <div>
        <h2 class="text-gray-600 dark:text-gray-300 text-lg">
            {{ $title }}
        </h2>

        <p class="text-4xl font-bold text-gray-800 dark:text-white mt-4">
            {{ $slot }}
        </p>
    </div>

    <div>
        <img src="{{ $image }}" 
             class="w-24 h-24 object-contain opacity-90 
                    hover:scale-110 transition duration-300">
    </div>

</div>