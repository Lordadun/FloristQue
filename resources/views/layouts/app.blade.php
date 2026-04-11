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

        const btn = document.getElementById("darkToggle");
        const icon = document.getElementById("icon");

        // load dari localStorage
        if (localStorage.getItem("theme") === "dark") {
            document.documentElement.classList.add("dark");
            if (icon) icon.textContent = "☀️";
        }

        if (btn) {
            btn.addEventListener("click", function () {
                document.documentElement.classList.toggle("dark");

                if (document.documentElement.classList.contains("dark")) {
                    localStorage.setItem("theme", "dark");
                    if (icon) icon.textContent = "☀️";
                } else {
                    localStorage.setItem("theme", "light");
                    if (icon) icon.textContent = "🌙";
                }
            });
        }

    });
    </script>

</body>
</html>