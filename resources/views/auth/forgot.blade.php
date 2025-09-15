<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen w-screen flex">

    <!-- Left Section (Form) -->
    <div class="w-full lg:w-1/2 flex items-center justify-center bg-white px-6 lg:px-20">
        <div class="w-full max-w-md">

            <!-- Heading -->
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Forgot Your Password?</h2>
            <p class="text-sm text-gray-600 mb-6">
                Enter the email address linked to your account, and we’ll send you a link to reset your password.
            </p>

            <!-- Form -->
            <form action="" method="POST" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 py-2.5 px-3.5 
                               shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 sm:text-sm"
                        required>
                    @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg shadow-md transition-colors">
                    Send Reset Link
                </button>
            </form>

            <!-- Extra link -->
            <p class="mt-6 text-sm text-gray-600">
                Wait, I remember my password…
                <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Click here</a>
            </p>
        </div>
    </div>

    <!-- Right Section (Branding) -->
    <div class="hidden lg:flex w-1/2 bg-indigo-900 text-white flex-col items-center justify-center relative p-8">
        <div class="text-center max-w-md">
            <div class="mb-6">
                <i class="fas fa-chart-line text-5xl text-indigo-300 mb-4"></i>
                <h1 class="text-4xl font-bold mb-2">Hi, Welcome Back</h1>
            </div>
            <p class="text-indigo-200 text-lg">you've been missed!</p>
        </div>
    </div>

</body>

</html>