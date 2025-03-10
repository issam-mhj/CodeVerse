<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeVerse - Update Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='40' fill='%23007bff'/%3E%3Ctext x='35' y='63' font-family='Arial' font-size='40' fill='white' font-weight='bold'%3EC%3C/text%3E%3C/svg%3E"
        type="image/svg+xml">

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

        <a href="#"
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
            class="mx-5 mt-5 py-2 px-4 bg-primary text-white border-none rounded-full text-base font-bold cursor-pointer transition-all duration-300 hover:bg-primary-dark w-[calc(100%-40px)]">
            <i class="fa-solid fa-plus mr-2"></i>
            <span>Post</span>
        </button>

        <!-- User Profile Widget -->
        <div class=" bottom-0 w-full border-t border-gray-100">
            <div class="relative flex items-center p-4">
                <!-- User Profile -->
                <div class="flex items-center flex-1">
                    <div
                        class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-primary flex items-center justify-center">
                        <span class="text-white font-bold">IM</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-medium text-sm">{{ $user->name }}</span>
                        <span class="text-xs text-gray-500">View profile</span>
                    </div>
                </div>

                <!-- Dropdown Trigger -->
                <button id="logout-dropdown-trigger" aria-label="Account menu" aria-haspopup="true"
                    aria-expanded="false"
                    class="p-2 text-gray-400 hover:text-primary rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fa-solid fa-gear text-lg"></i>
                </button>
                <div id="logout-dropdown" role="menu"
                    class="hidden absolute right-4 bottom-full mb-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2">
                    <form action="{{ route('logout') }}" method="POST" role="menuitem"
                        class="hover:bg-gray-50 transition-colors">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700">
                            <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ml-64 flex-1 p-5">
        <div class="max-w-4xl mx-auto">
            <!-- Header with breadcrumbs -->
            <div class="mb-6">
                <div class="flex items-center text-sm mb-2">
                    <a href="/profile" class="text-primary hover:underline">Profile</a>
                    <span class="mx-2 text-gray-500">/</span>
                    <span class="text-gray-600">Update Profile</span>
                </div>
                <h1 class="text-2xl font-bold text-gray-900">Update Your Profile</h1>
                <p class="text-gray-600">Complete your profile information to increase visibility and connection
                    opportunities</p>
            </div>

            <!-- Profile Form -->
            <form class="bg-white rounded-lg shadow-sm p-6 mb-6" method="POST" enctype="multipart/form-data"
                action="/profile/update">
                @csrf
                <!-- Profile Picture Section -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Profile Picture</h2>
                    <div class="flex items-center">
                        <div class="relative">
                            <div class="w-24 h-24 bg-yellow-400 rounded-full overflow-hidden">
                                <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                                    alt="Profile picture" class="h-full w-full object-cover" />
                            </div>
                            <label for="profile-picture"
                                class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-lg cursor-pointer">
                                <i class="fa-solid fa-camera"></i>
                                <input type="file" name="image" id="profile-picture" class="hidden" />
                            </label>
                        </div>
                        <div class="ml-6">
                            <p class="text-sm text-gray-700 mb-2">Upload a profile picture</p>
                            <p class="text-xs text-gray-500">JPG, PNG or GIF. 1MB max size.</p>
                        </div>
                    </div>
                </div>

                <!-- Basic Information -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Basic Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full
                                Name</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label for="profession"
                                class="block text-sm font-medium text-gray-700 mb-1">Profession/Title</label>
                            <input type="text" id="profession" name="profession"
                                @if ($user->profession) value="{{ $user->profession }}"
                                @else
                                placeholder="e.g. Full Stack Developer" @endif
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label for="age" class="block text-sm font-medium text-gray-700 mb-1">Age</label>
                            <input type="number" id="age" name="age"
                                @if ($user->age) value="{{ $user->age }}" @endif
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label for="location"
                                class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                            <input type="text" id="location" name="location"
                                @if ($user->location) value="{{ $user->location }}"
                            @else
                            placeholder="e.g. San Francisco, CA" @endif
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">email</label>
                            <input type="email" id="email" name="email"
                                @if ($user->email) value="{{ $user->email }}"
                            @else
                            placeholder="" @endif
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label for="github" class="block text-sm font-medium text-gray-700 mb-1">GitHub
                                Profile</label>
                            <input type="text" id="github" name="githubProfile"
                                @if ($user->githubProfile) value="{{ $user->githubProfile }}"
                            @else placeholder="https://github.com/username" @endif
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Bio Section -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">biography</h2>
                    <div>
                        <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Tell us about
                            yourself</label>
                        <textarea id="bio" name="biography" rows="4"
                            placeholder="Share your professional story and interests..."
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">{{ $user->biography }}</textarea>
                        <p class="text-xs text-gray-500 mt-1">Maximum 500 characters</p>
                    </div>
                </div>
                <!-- Skills Section -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Skills</h2>

                    <!-- Technical Skills -->
                    <div class="mb-6">
                        <div class="mt-3">
                            <label for="other_tech" class="block text-sm font-medium text-gray-700 mb-1">technical
                                skills</label>
                            <input type="text" id="other_tech" name="tech"
                                placeholder="Separate skills with commas"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Soft Skills -->
                    <div class="mb-6">
                        <div class="mt-3">
                            <label for="other_soft"
                                class="block text-sm font-medium text-gray-700 mb-1">certifications</label>
                            <input type="text" id="other_soft" name="cert"
                                placeholder="Separate skills with commas"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Languages -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Programming Languages</label>
                        <div class="mt-3">
                            <input type="text" id="other_soft" name="lang"
                                placeholder="Separate skills with commas"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="flex justify-end space-x-4">
                    <a href="/profile"
                        class="px-6 py-2 bg-gray-200 text-gray-800 font-semibold rounded-lg shadow-sm hover:bg-gray-300 transition duration-300">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-2 bg-primary text-white font-semibold rounded-lg shadow-md hover:bg-primary-dark transition duration-300">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Update the displayed percentage value as user adjusts sliders
        document.addEventListener("DOMContentLoaded", function() {
            const rangeInputs = document.querySelectorAll('input[type="range"]');
            rangeInputs.forEach(input => {
                input.addEventListener('input', function() {
                    document.getElementById(this.id + '_value').textContent = this.value + '%';
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const trigger = document.querySelector('#logout-dropdown-trigger');
            const dropdown = document.querySelector('#logout-dropdown');

            // Toggle dropdown
            function toggleDropdown(show = true) {
                dropdown.classList.toggle('hidden', !show);
                trigger.setAttribute('aria-expanded', show.toString());
            }

            // Click handler
            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
                toggleDropdown(!isExpanded);
            });

            // Close when clicking outside
            document.addEventListener('click', (e) => {
                if (!dropdown.contains(e.target) && !trigger.contains(e.target)) {
                    toggleDropdown(false);
                }
            });

            // Close on escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    toggleDropdown(false);
                }
            });

            // Keyboard navigation for accessibility
            dropdown.addEventListener('keydown', (e) => {
                if (e.key === 'Tab' && !e.shiftKey) {
                    toggleDropdown(false);
                }
            });
        });
    </script>
</body>

</html>
