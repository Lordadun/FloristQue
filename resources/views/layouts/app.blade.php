<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FloristQue</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-linear-to-br from-gray-50 via-white to-gray-100 
             dark:from-gray-900 dark:via-gray-800 dark:to-gray-900
             text-gray-800 dark:text-white min-h-screen transition">

    @include('components.header')

    <div class="flex">
        @include('components.sidebar')

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

    <!-- 🔥 SCRIPT DARK MODE (WAJIB ADA) -->
    <script>
document.addEventListener("DOMContentLoaded", function () {

    const toggle = document.getElementById("darkToggle");
    const circle = document.getElementById("toggleCircle");

    // cek localStorage
    if (localStorage.getItem("theme") === "dark") {
        document.documentElement.classList.add("dark");
        circle.classList.add("translate-x-7");
        circle.innerHTML = "☀️";
    }

    toggle.addEventListener("click", function () {

        document.documentElement.classList.toggle("dark");

        if (document.documentElement.classList.contains("dark")) {
            localStorage.setItem("theme", "dark");
            circle.classList.add("translate-x-7");
            circle.innerHTML = "☀️";
        } else {
            localStorage.setItem("theme", "light");
            circle.classList.remove("translate-x-7");
            circle.innerHTML = "🌙";
        }

    });

});
</script>

    <script>
document.addEventListener("DOMContentLoaded", function () {

    const btn = document.getElementById("userMenuBtn");
    const menu = document.getElementById("dropdownMenu");

    if (btn) {
        btn.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });
    }

    // klik di luar = close
    document.addEventListener("click", function (e) {
        if (!btn.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add("hidden");
        }
    });

});
</script>

</body>
</html>