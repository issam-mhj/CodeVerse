<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeverse Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='40' fill='%23007bff'/%3E%3Ctext x='35' y='63' font-family='Arial' font-size='40' fill='white' font-weight='bold'%3EC%3C/text%3E%3C/svg%3E" type="image/svg+xml">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'spin-slow': 'spin 8s linear infinite',
                        'bounce-slow': 'bounce 2s infinite',
                        'slide-in': 'slideIn 0.5s ease-out forwards',
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'scale-in': 'scaleIn 0.4s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        slideIn: {
                            '0%': { transform: 'translateX(20px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        scaleIn: {
                            '0%': { transform: 'scale(0.9)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
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

        .stagger-fade > * {
            opacity: 0;
            transform: translateY(10px);
        }

        .code-mask {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'%3E%3Cpath d='M0 0h20v20H0V0zm10 17a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm-8-7a8 8 0 1 1 16 0 8 8 0 0 1-16 0z'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="h-screen">
    <div class="flex h-full">
        <!-- Left Side -->
        <div class="w-full md:w-1/2 bg-gray-900 text-white flex flex-col relative code-mask overflow-hidden">
            <!-- Floating code elements (decorative) -->
            <div class="absolute top-10 left-10 text-blue-400 opacity-20 animate-float select-none text-xl">&lt;div&gt;</div>
            <div class="absolute top-20 right-20 text-green-400 opacity-20 animate-pulse-slow select-none text-xl">&lt;/&gt;</div>
            <div class="absolute bottom-40 left-20 text-yellow-400 opacity-20 animate-float select-none text-xl">{ }</div>
            <div class="absolute bottom-20 right-10 text-pink-400 opacity-20 animate-pulse-slow select-none text-xl">&lt;/div&gt;</div>

            <!-- Animated circles in background -->
            <div class="absolute w-64 h-64 rounded-full bg-blue-600 filter blur-3xl opacity-10 animate-float -top-10 -left-10"></div>
            <div class="absolute w-64 h-64 rounded-full bg-indigo-600 filter blur-3xl opacity-10 animate-pulse-slow bottom-20 right-0"></div>

            <div class="flex-grow flex flex-col items-center justify-center px-8 relative z-10">
                <div class="max-w-md mx-auto text-center stagger-fade">
                    <div class="my-6 flex justify-center space-x-2">
                        <div class="w-5 h-5 bg-blue-500 rounded-full animate-bounce-slow"></div>
                        <div class="w-5 h-5 bg-green-500 rounded-full animate-bounce-slow" style="animation-delay: 0.2s"></div>
                        <div class="w-5 h-5 bg-yellow-500 rounded-full animate-bounce-slow" style="animation-delay: 0.4s"></div>
                    </div>
                    <h1 class="text-4xl font-bold mb-2">Welcome to Codeverse</h1>
                    <div class="animate-float py-4">
                        <svg class="w-64 h-64 mx-auto" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#4F46E5;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#3B82F6;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <circle cx="100" cy="100" r="50" fill="url(#grad)" class="animate-pulse-slow" />
                            <path fill="white" d="M85,80 L70,100 L85,120 M115,80 L130,100 L115,120 M95,75 L105,125" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                        </svg>
                    </div>
                    <p class="text-gray-300 mb-6">Join us where developers connect, share projects, and level up together</p>
                </div>
            </div>
            <div class="p-4 text-center text-sm text-gray-400">
                © 2025 codeVerse || Issam mahtaj
            </div>
        </div>

        <!-- Right Side -->
        <div class="hidden md:flex md:w-1/2 bg-white flex-col">
            <div class="p-6 flex justify-end items-center">
                <div class="opacity-0 animate-fade-in" style="animation-delay: 1s;">
                    <span class="mr-2 text-gray-600">Already have an account?</span>
                    <a href="/signin" class="text-indigo-600 font-medium hover:underline transition-colors duration-300">Log in</a>
                </div>
            </div>

            <div class="flex-grow flex flex-col items-center justify-center px-12">
                <div class="max-w-md w-full stagger-fade">
                    <div class="text-center mb-8">
                        <div class="flex justify-center mb-4">
                            <div class="flex items-center opacity-0 animate-scale-in">
                                <svg width="300" height="100" viewBox="0 0 300 100" xmlns="http://www.w3.org/2000/svg" class="animate-pulse-slow">
                                    <circle cx="40" cy="50" r="20" fill="#4F46E5" />
                                    <text x="33" y="57" font-family="Arial" font-size="20" fill="white" font-weight="bold">C</text>
                                    <text x="65" y="65" font-family="Inter" font-size="30" font-weight="600" fill="#4F46E5">ODEVERSE</text>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 text-xl opacity-0 animate-fade-in" style="animation-delay: 0.3s;">
                            Connect, share, and grow with CodeVerse <br> the developer's network.
                        </p>
                    </div>

                    <form action="/register" method="POST" class="mt-8 space-y-4">
                        @csrf
                        <div class="transform opacity-0" id="form-field-1">
                            <input type="text" placeholder="Full name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 hover:shadow-sm" />
                        </div>
                        <div class="transform opacity-0" id="form-field-2">
                            <input type="email" placeholder="Email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 hover:shadow-sm" />
                        </div>
                        <div class="relative transform opacity-0" id="form-field-3">
                            <input type="password" id="password" name="password" placeholder="Password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 hover:shadow-sm" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 eye-icon transition-colors duration-300" id="togglePassword" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex items-start transform opacity-0" id="form-field-4">
                            <div class="flex items-center h-5">
                                <input id="terms" type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-600">
                                    I agree to Codeverse's <a href="#" class="text-indigo-600 hover:text-indigo-800 underline transition-colors duration-300">Terms of Service</a>, <a href="#" class="text-indigo-600 hover:text-indigo-800 underline transition-colors duration-300">Privacy Policy</a> and <a href="#" class="text-indigo-600 hover:text-indigo-800 underline transition-colors duration-300">Data Processing Agreement</a>.
                                </label>
                            </div>
                        </div>

                        <div class="transform opacity-0" id="form-field-5">
                            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-medium transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                                <span>Create my free account</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </form>

                    <p class="mt-6 text-center text-sm text-gray-500 opacity-0 animate-fade-in" style="animation-delay: 1.5s;">
                        This site is protected by reCAPTCHA and the Google
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 underline transition-colors duration-300">Privacy Policy</a> and
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 underline transition-colors duration-300">Terms of Service</a> apply.
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

            this.classList.toggle('text-indigo-600');
        });

        // Stagger animation for left side elements
        document.addEventListener('DOMContentLoaded', function() {
            // Animate left side elements
            const leftElements = document.querySelectorAll('.stagger-fade > *');
            leftElements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                }, 100 * index);
            });

            // Animate form fields with staggered delay
            const formFields = ['form-field-1', 'form-field-2', 'form-field-3', 'form-field-4', 'form-field-5'];
            formFields.forEach((id, index) => {
                setTimeout(() => {
                    const el = document.getElementById(id);
                    el.classList.add('animate-slide-in');
                    el.style.animationDelay = `${0.3 * index}s`;
                }, (500 + 100 * index));
            });
        });

        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>

</html>
