<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #6b7280;
            padding: 4px;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-toggle:hover {
            background-color: #f3f4f6;
            color: #4b5563;
        }

        .input-field {
            transition: all 0.2s ease;
            padding-right: 2.5rem;
        }

        .input-field:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
        }

        /* Custom stroke eye icon */
        .eye-icon {
            stroke: currentColor;
            stroke-width: 1.5;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
            width: 18px;
            height: 18px;
        }

        .eye-icon.slash {
            display: none;
        }

        input[type="text"]+.password-toggle .eye-icon.regular {
            display: none;
        }

        input[type="text"]+.password-toggle .eye-icon.slash {
            display: block;
        }
    </style>
</head>

<body class="h-screen w-screen flex bg-gray-100">

    <!-- Left Section (Form) -->
    <div class="w-full lg:w-1/2 flex items-center justify-center bg-white px-6 lg:px-20">
        <div class="w-full max-w-md">

            <!-- Heading -->
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Sign In</h2>
            <p class="text-sm text-gray-600 mb-6">Enter your email and password to sign in!</p>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="email" name="email" id="email" placeholder="Enter your email address"
                            class="input-field mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 py-2.5 px-3.5 shadow-sm focus:outline-none focus:ring-1 sm:text-sm"
                            required>
                    </div>
                    @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Password <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="password" name="password" id="password" placeholder="Enter your password"
                            class="input-field mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 py-2.5 px-3.5 shadow-sm focus:outline-none focus:ring-1 sm:text-sm"
                            required>
                        <button type="button" onclick="togglePassword()" class="password-toggle">
                            <!-- Custom SVG eye icons with stroke only -->
                            <svg class="eye-icon regular" aria-hidden="true" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg class="eye-icon slash" aria-hidden="true" viewBox="0 0 24 24">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember me / Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2 text-sm text-gray-600">
                        <input type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <span>Remember me</span>
                    </label>
                    <a href="{{ route('forgot') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors">Forgot password?</a>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg shadow-md transition-colors">
                    Sign In
                </button>
            </form>
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

    <!-- Script: Toggle Password -->
    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const eyeButton = password.nextElementSibling;

            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }

        // Add focus styles to inputs for better UX
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-indigo-500', 'ring-opacity-20');
                this.parentElement.classList.remove('ring-0');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-indigo-500', 'ring-opacity-20');
            });
        });
    </script>

</body>

</html>