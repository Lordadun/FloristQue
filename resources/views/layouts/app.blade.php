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

    <main class="mt-20 md:ml-64 px-4 md:px-6 w-full">
        <div class="max-w-8xl mx-auto">
            @yield('content')
        </div>
    </main>

</div>

    @include('components.footer')

    <script>
document.addEventListener("DOMContentLoaded", function () {

    // ================= DARK MODE =================
    const toggle = document.getElementById("darkToggle");
    const circle = document.getElementById("toggleCircle");

    // load dari localStorage
    if (localStorage.getItem("theme") === "dark") {
        document.documentElement.classList.add("dark");
        circle.classList.add("translate-x-6");
        circle.innerHTML = "☀️";
    }

    toggle.addEventListener("click", () => {
        document.documentElement.classList.toggle("dark");

        const isDark = document.documentElement.classList.contains("dark");

        // save
        localStorage.setItem("theme", isDark ? "dark" : "light");

        // animasi
        if (isDark) {
            circle.classList.add("translate-x-6");
            circle.innerHTML = "☀️";
        } else {
            circle.classList.remove("translate-x-6");
            circle.innerHTML = "🌙";
        }

        // update chart TANPA destroy
        if (window.salesChart) {
            window.salesChart.options.plugins.legend.labels.color = isDark ? '#fff' : '#000';
            window.salesChart.options.scales.x.ticks.color = isDark ? '#fff' : '#000';
            window.salesChart.options.scales.y.ticks.color = isDark ? '#fff' : '#000';
            window.salesChart.update();
        }
    });

    // ================= DROPDOWN =================
    function toggleDropdown(btnId, menuId) {
        const btn = document.getElementById(btnId);
        const menu = document.getElementById(menuId);

        btn.addEventListener("click", () => {
            const isOpen = menu.classList.contains("opacity-100");

            if (isOpen) {
                menu.classList.remove("opacity-100", "scale-100");
                menu.classList.add("opacity-0", "scale-95", "pointer-events-none");
            } else {
                menu.classList.remove("opacity-0", "scale-95", "pointer-events-none");
                menu.classList.add("opacity-100", "scale-100");
            }
        });

        document.addEventListener("click", (e) => {
            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.remove("opacity-100", "scale-100");
                menu.classList.add("opacity-0", "scale-95", "pointer-events-none");
            }
        });
    }

    toggleDropdown("notifBtn", "notifMenu");
    toggleDropdown("userMenuBtn", "dropdownMenu");

    // ================= SEARCH =================
    const input = document.getElementById("searchInput");
    const resultBox = document.getElementById("searchResult");

    const dataBunga = [
        "Mawar Merah",
        "Mawar Putih",
        "Tulip Pink",
        "Anggrek Ungu",
        "Lily Putih",
        "Buket Wisuda",
        "Buket Wedding"
    ];

    input.addEventListener("input", function () {
        const keyword = this.value.toLowerCase();

        if (!keyword) {
            resultBox.classList.add("hidden");
            return;
        }

        const filtered = dataBunga.filter(item =>
            item.toLowerCase().includes(keyword)
        );

        resultBox.innerHTML = filtered.map(item => `
            <div class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                🌸 ${item}
            </div>
        `).join("");

        resultBox.classList.remove("hidden");
    });

    resultBox.addEventListener("click", function(e){
        input.value = e.target.innerText;
        resultBox.classList.add("hidden");
    });

});
</script>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- SCRIPT CHART -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const canvas = document.getElementById('salesChart');

    // kalau bukan halaman dashboard → skip
    if (!canvas) return;

    const ctx = canvas.getContext('2d');

    const isDark = document.documentElement.classList.contains('dark');

    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, "rgba(236, 72, 153, 0.6)");
    gradient.addColorStop(1, "rgba(236, 72, 153, 0)");

    window.salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [
                {
                    label: 'Penjualan',
                    data: [12, 19, 8, 15, 20, 25],
                    borderColor: '#ec4899',
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Produk Terjual',
                    data: [8, 14, 5, 10, 18, 22],
                    borderColor: '#3b82f6',
                    backgroundColor: 'transparent',
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    labels: {
                        color: isDark ? '#fff' : '#000'
                    }
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: isDark ? '#fff' : '#000'
                    }
                },
                y: {
                    ticks: {
                        color: isDark ? '#fff' : '#000'
                    }
                }
            }
        }
    });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("menuBtn");
    const sidebar = document.getElementById("sidebar");

    btn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });
});
</script>

</body>
</html>