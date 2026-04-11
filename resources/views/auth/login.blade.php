<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - FloristQue</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen bg-pink-100">

    <form method="POST" action="/login" 
          class="bg-white p-8 rounded-xl shadow-lg w-80">

        @csrf

        <h2 class="text-2xl font-bold mb-6 text-center">
            🌸 Login FloristQue
        </h2>

        @if(session('error'))
            <p class="text-red-500 text-sm mb-3">
                {{ session('error') }}
            </p>
        @endif

        <input type="email" name="email" placeholder="Email"
               class="w-full p-2 mb-3 border rounded-lg" required>

        <input type="password" name="password" placeholder="Password"
               class="w-full p-2 mb-4 border rounded-lg" required>

        <button class="w-full bg-pink-500 text-white p-2 rounded-lg hover:bg-pink-600">
            Login
        </button>

        <p class="text-xs text-gray-500 mt-3 text-center">
            floristque@gmail.com / Haidar Ganteng
        </p>

    </form>

</body>
</html>