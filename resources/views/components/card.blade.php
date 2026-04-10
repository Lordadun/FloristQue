<div class="bg-gray-200 
            rounded-3xl p-8 shadow-lg 
            flex justify-between items-center
            hover:shadow-2xl hover:scale-[1.04] 
            transition duration-300 min-h-40">

    <div>
        <h2 class="text-gray-600 text-lg">
            {{ $title }}
        </h2>

        <p class="text-4xl font-bold text-gray-800 mt-4">
            {{ $slot }}
        </p>
    </div>

    <div>
        <img src="{{ $image }}" class="w-16 h-16 object-contain"
        class="w-24 h-24 object-contain opacity-90 
                hover:scale-110 transition duration-300">
    </div>

</div>