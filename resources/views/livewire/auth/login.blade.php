<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - INTERN360</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
        <!-- Header -->
        <div class="bg-indigo-600 dark:bg-indigo-700 p-6 text-center">
            <h1 class="text-2xl font-bold text-white">INTERN360</h1>
            <p class="text-indigo-100 mt-1">Masuk ke akun Anda</p>
        </div>

        <!-- Form -->
        <div class="p-6">
            <form wire:submit.prevent="login">
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        wire:model="email"
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white"
                        placeholder="email@example.com"
                        required
                        autofocus>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        wire:model="password"
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white"
                        placeholder="••••••••"
                        required>
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            wire:model="remember"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 dark:border-gray-600 rounded dark:bg-gray-700">
                        <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Ingat saya</label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">Lupa password?</a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-md transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Masuk
                </button>
            </form>

            <!-- Register Link -->
            @if (Route::has('register'))
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">Daftar</a>
                    </p>
                </div>
            @endif
        </div>
    </div>

</body>
</html>