<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeVerse - Developer Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1e88e5",
                        "primary-dark": "#1565c0",
                        "primary-light": "#64b5f6",
                        secondary: "#f5f9ff",
                        dark: "#283593",
                        light: "#f5f9ff",
                    },
                },
            },
        };
    </script>
</head>

<body class="flex bg-[#f5f9ff] text-gray-800">
    <!-- Sidebar Navigation -->
    <div class="fixed w-64 bg-white p-0 border-r border-gray-200">
        <div class="flex items-center justify-center mb-8 text-primary font-bold text-2xl pt-5">
            <svg width="300" height="80" viewBox="0 0 300 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="50" r="20" fill="#007bff" />
                <text x="33" y="57" font-family="Arial" font-size="20" fill="white" font-weight="bold">
                    C
                </text>
                <text x="65" y="65" font-family="Serif" font-size="30" fill="#007bff">
                    ODEVERSE
                </text>
            </svg>
        </div>

        <a href="home"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-house mr-4 text-lg"></i>
            <span>Home</span>
        </a>

        <a href="posts"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-file-code mr-4 text-lg"></i>
            <span>Posts</span>
        </a>

        <a href="#"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-users mr-4 text-lg"></i>
            <span>Connections</span>
        </a>

        <a href="#"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-bell mr-4 text-lg"></i>
            <span>Notifications</span>
        </a>

        <a href="profile"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300 bg-primary text-white">
            <i class="fa-solid fa-user mr-4 text-lg"></i>
            <span>Profile</span>
        </a>

        <a href="#"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-hashtag mr-4 text-lg"></i>
            <span>Explore</span>
        </a>

        <a href="#"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-briefcase mr-4 text-lg"></i>
            <span>Job Offers</span>
        </a>

        <a href="#"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-message mr-4 text-lg"></i>
            <span>Messages</span>
        </a>

        <button
            class="mx-5 px-4 bg-primary text-white border-none rounded-full text-base font-bold cursor-pointer transition-all duration-300 hover:bg-primary-dark w-[calc(100%-40px)]">
            <i class="fa-solid fa-plus mr-2"></i>
            <span>Post</span>
        </button>

        <!-- User Profile Widget -->
        <div class="flex items-center p-5 mt-12 border-t border-gray-200">
            <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-300 flex items-center justify-center">
                <span class="text-white font-bold">IM</span>
            </div>
            <div class="flex flex-col">
                <span class="font-medium text-sm">{{ $user->name }}</span>
            </div>
        </div>
    </div>


    <!-- Main Content (adjusted with left margin to accommodate sidebar) -->
    <div class="ml-64 flex-1 p-5">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-secondary rounded-lg p-6 shadow-sm">
                    <div class="flex flex-col items-center">
                        <!-- Profile Picture Container -->
                        <div class="relative bg-yellow-400 rounded-full h-40 w-40 overflow-hidden mb-4">
                            <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                                alt="Profile picture" class="h-full w-full object-cover" />

                            @if (!$user->image)
                                <!-- Add Profile Icon -->
                                <a href="profile/update"
                                    class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5 7a2 2 0 012-2h2l1-1h4l1 1h2a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V7zm2 0v10h10V7H7zm5 2a3 3 0 110 6 3 3 0 010-6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            @endif
                        </div>

                        <h1 class="text-2xl font-bold text-gray-900 mb-1">
                            {{ $user->name }}
                        </h1>
                        @if ($user->profession)
                            <p class="text-primary font-medium mb-6">
                                {{ $user->profession }}
                            </p>
                        @endif

                        <!-- Other Profile Details -->
                        <div class="w-full bg-white rounded-lg p-4 mt-4">
                            <div class="space-y-2 text-sm">
                                <div class="flex">
                                    <span class="text-gray-600 w-24">email:</span>
                                    @if ($user->email)
                                        <span class="text-gray-800">{{ $user->email }}</span>
                                    @else
                                        <span class="text-red-500 italic">Complete your profile information</span>
                                    @endif
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600 font-medium w-24">Age:</span>
                                    @if ($user->age)
                                        <span class="text-gray-800">{{ $user->age }}</span>
                                    @else
                                        <span class="text-red-500 italic">Complete your profile information</span>
                                    @endif
                                </div>

                                <div class="flex">
                                    <span class="text-gray-600 w-24">Location:</span>
                                    @if ($user->location)
                                        <span class="text-gray-800">{{ $user->location }}</span>
                                    @else
                                        <span class="text-red-500 italic">Complete your profile information</span>
                                    @endif
                                </div>
                                <div class="flex items-center">
                                    <span class="text-gray-600 w-24">GitHub:</span>
                                    @if ($user->githubProfile)
                                        <a href="{{ $user->githubProfile }}" target="_blank"
                                            class="text-blue-500">account</a>
                                        <svg width="40" height="40" viewBox="0 0 40 40"
                                            xmlns="http://www.w3.org/2000/svg" class="ml-2">
                                            <path
                                                d="M20 20c0-5.5-4.5-10-10-10S0 14.5 0 20c0 4.4 2.85 8.1 6.85 9.4.5.1.65-.2.65-.45v-1.75c-2.75.6-3.35-1.2-3.35-1.2-.45-1.1-1.1-1.4-1.1-1.4-.9-.6.05-.6.05-.6 1 .05 1.5 1 1.5 1 .85 1.5 2.3 1.1 2.9.85.1-.65.35-1.1.65-1.35-2.25-.25-4.6-1.1-4.6-4.9 0-1.1.4-2 1-2.7-.1-.25-.45-1.25.1-2.6 0 0 .8-.25 2.65 1 .75-.2 1.6-.3 2.4-.3.8 0 1.65.1 2.4.3 1.85-1.25 2.65-1 2.65-1 .55 1.35.2 2.35.1 2.6.6.7 1 1.6 1 2.7 0 3.8-2.35 4.65-4.6 4.9.35.3.7.9.7 1.85v2.75c0 .25.2.55.65.45 4-1.3 6.85-5 6.85-9.4z"
                                                fill="#333" />
                                        </svg>
                                    @else
                                        <span class="text-red-500 italic">Complete your profile information</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Middle panel - Technical details -->
                <div class="space-y-6">
                    <!-- Bio section -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h2 class="text-xl font-bold mb-4">Bio</h2>
                        <p class="text-gray-700">
                            @if ($user->biography)
                                <span class="text-gray-800">{{ $user->biography }}</span>
                            @else
                                <span class="text-red-500 italic">Complete your profile information</span>
                            @endif
                        </p>
                    </div>

                    <!-- Tech Skills section -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h2 class="text-xl font-bold mb-4">Technical Skills</h2>

                        <div class="space-y-4">
                            <div>
                                @if ($user->hardSkills)
                                    <div class="flex justify-between mb-1">
                                        <span>{{ $user->hardSkills }}</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-primary h-2.5 rounded-full" style="width: 90%"></div>
                                    </div>
                                @else
                                    <span class="text-red-500 italic">Complete your profile information</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h2 class="text-xl font-bold mb-4">certifications</h2>

                        <div class="space-y-4">
                            <div>
                                @if ($user->skills)
                                    <div class="flex justify-between mb-1">
                                        <span>{{ $user->skills }}</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-primary h-2.5 rounded-full" style="width: 90%"></div>
                                    </div>
                                @else
                                    <span class="text-red-500 italic">Complete your profile information</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h2 class="text-xl font-bold mb-4">projects</h2>

                        <div class="space-y-4">
                            <div>
                                @if ($user->project)
                                    <div class="flex justify-between mb-1">
                                        <span>{{ $user->project }}</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-primary h-2.5 rounded-full" style="width: 90%"></div>
                                    </div>
                                @else
                                    <span class="text-red-500 italic">Complete your profile information</span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right panel - Preferences and connections -->
                <div class="space-y-6">
                    <!-- Interests section (replacement for Motivations) -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h2 class="text-xl font-bold mb-4">languages</h2>

                        <div class="space-y-3">
                            @if ($user->age)
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span>Web Development</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-primary h-2.5 rounded-full" style="width: 95%"></div>
                                    </div>
                                </div>
                            @else
                                <span class="text-red-500 italic">Complete your profile information</span>
                            @endif
                        </div>
                    </div>

                    <!-- Connections section -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold">Connections</h2>
                            <button
                                class="bg-primary hover:bg-primary-dark text-white font-bold py-1 px-3 rounded text-sm">
                                Connect
                            </button>
                        </div>

                        <div class="flex flex-wrap gap-2">
                            <div class="flex items-center bg-gray-100 rounded-full pl-1 pr-3 py-1">
                                <div class="h-6 w-6 bg-blue-500 rounded-full mr-2"></div>
                                <span class="text-sm">Sarah K.</span>
                            </div>
                            <div class="flex items-center bg-gray-100 rounded-full pl-1 pr-3 py-1">
                                <div class="h-6 w-6 bg-green-500 rounded-full mr-2"></div>
                                <span class="text-sm">Mike T.</span>
                            </div>
                            <div class="flex items-center bg-gray-100 rounded-full pl-1 pr-3 py-1">
                                <div class="h-6 w-6 bg-purple-500 rounded-full mr-2"></div>
                                <span class="text-sm">Lisa R.</span>
                            </div>
                            <div class="flex items-center bg-gray-100 rounded-full pl-1 pr-3 py-1">
                                <div class="h-6 w-6 bg-yellow-500 rounded-full mr-2"></div>
                                <span class="text-sm">John D.</span>
                            </div>
                            <div class="flex items-center bg-gray-100 rounded-full pl-1 pr-3 py-1">
                                <div class="h-6 w-6 bg-primary rounded-full mr-2"></div>
                                <span class="text-sm">+24 more</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mt-4 text-center">
                            <a href="/profile/update"
                                class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                                Update Your Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const connectButton = document.querySelector("button.bg-primary.hover\\:bg-primary-dark");
            connectButton.addEventListener("click", function() {
                if (this.textContent.trim() === "Connect") {
                    this.textContent = "Pending";
                    this.classList.remove("bg-primary", "hover:bg-primary-dark");
                    this.classList.add("bg-gray-500", "hover:bg-gray-600");
                } else if (this.textContent.trim() === "Pending") {
                    this.textContent = "Connect";
                    this.classList.remove(
                        "bg-gray-500",
                        "hover:bg-gray-600"
                    );
                    this.classList.add("bg-primary", "hover:bg-primary-dark");
                }
            });
        });
    </script>
</body>

</html>
