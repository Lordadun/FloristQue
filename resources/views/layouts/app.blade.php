<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FloristQue</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-linear-to-br from-gray-50 via-white to-gray-100">

    @include('components.header')

    <div class="flex">
        @include('components.sidebar')

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

</>
</html>