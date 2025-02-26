<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typeform Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .eye-icon:hover {
            cursor: pointer;
            color: #555;
        }

        .theme-btn {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            margin: 0 4px;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .theme-btn.active {
            border: 2px solid #555;
        }
    </style>
</head>

<body class="h-screen">
    <div class="flex h-full">
        <!-- Left Side -->
        <div class="w-full md:w-1/2 bg-gray-900 text-white flex flex-col relative">
            <div class="flex-grow flex flex-col items-center justify-center px-8">
                <div class="max-w-md mx-auto text-center">
                    <div class="my-6 flex justify-center space-x-2">
                        <div class="w-5 h-5 bg-blue-500 rounded-full"></div>
                        <div class="w-5 h-5 bg-green-500 rounded-full"></div>
                        <div class="w-5 h-5 bg-yellow-500 rounded-full"></div>
                    </div>
                    <h1 class="text-4xl font-bold mb-2">Welcome to Codeverse</h1>
                    </h2>
                    <img src="/images/internet-connection-2778656-removebg-preview.png" alt="connect">

                    <p class="text-gray-300 mb-6">Join us where developers connect, share projects, and level up
                        together
                    </p>
                </div>
            </div>
            <div class="p-4 text-center text-sm">
                © 2025 codeVerse || Issam mahtaj
            </div>
        </div>


        <!-- Right Side -->
        <div class="hidden md:flex md:w-1/2 bg-white flex-col">
            <div class="p-6 flex justify-end items-center">
                <div>
                    <span class="mr-2 text-gray-600">Already have an account?</span>
                    <a href="/signin" class="text-gray-800 font-medium hover:underline">Log in</a>
                </div>
            </div>

            <div class="flex-grow flex flex-col items-center justify-center px-12">
                <div class="max-w-md w-full">
                    <div class="text-center mb-8">
                        <div class="flex justify-center mb-4">
                            <div class="flex items-center">
                                <svg width="300" height="100" viewBox="0 0 300 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="40" cy="50" r="20" fill="#007bff" />
                                    <text x="33" y="57" font-family="Arial" font-size="20" fill="white"
                                        font-weight="bold">C</text>
                                    <text x="65" y="65" font-family="Serif" font-size="30"
                                        fill="#007bff">ODEVERSE</text>
                                </svg>

                            </div>
                        </div>
                        <p class="text-gray-600 text-xl">
                            Connect, share, and grow with CodeVerse <br> the developer's network.
                        </p>
                    </div>

                    <form action="/register" method="POST" class="mt-8 space-y-4">
                        @csrf
                        <div>
                            <input type="text" placeholder="Full name" name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-150" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-150" />
                        </div>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-150" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 eye-icon"
                                    id="togglePassword" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" type="checkbox"
                                    class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-600">
                                    I agree to Typeform's <a href="#" class="text-gray-800 underline">Terms of
                                        Service</a>, <a href="#" class="text-gray-800 underline">Privacy
                                        Policy</a> and <a href="#" class="text-gray-800 underline">Data
                                        Processing Agreement</a>.
                                </label>
                            </div>
                        </div>

                        <input type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-medium"
                            value="create my free account " />
                    </form>

                    <p class="mt-6 text-center text-sm text-gray-500">
                        This site is protected by reCAPTCHA and the Google
                        <a href="#" class="text-gray-600 underline">Privacy Policy</a> and
                        <a href="#" class="text-gray-600 underline">Terms of Service</a> apply.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            this.classList.toggle('text-gray-600');
        });

        document.getElementById('optionsButton').addEventListener('click', function() {
            this.querySelector('svg').classList.toggle('rotate-180');
        });
    </script>
</body>

</html>
