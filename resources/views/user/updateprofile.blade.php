<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeVerse - Update Profile</title>
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
        <div class="flex items-center p-5 mt-12 border-t border-gray-200">
            <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-300 flex items-center justify-center">
                <span class="text-white font-bold">IM</span>
            </div>
            <div class="flex flex-col">
                <span class="font-medium text-sm">{{ $user->name }}</span>
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
            <form class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <!-- Profile Picture Section -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Profile Picture</h2>
                    <div class="flex items-center">
                        <div class="relative">
                            <div class="w-24 h-24 bg-yellow-400 rounded-full overflow-hidden">
                                <img src="{{ $user->image ? $user->image : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                                    alt="Profile picture" class="h-full w-full object-cover" />
                            </div>
                            <label for="profile-picture"
                                class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-lg cursor-pointer">
                                <i class="fa-solid fa-camera"></i>
                                <input type="file" id="profile-picture" class="hidden" />
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
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
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
                            <label for="github" class="block text-sm font-medium text-gray-700 mb-1">GitHub
                                Profile</label>
                            <input type="url" id="github" name="github"
                                @if ($user->githubProfiles) value="{{ $user->githubProfile }}"
                            @else placeholder="https://github.com/username" @endif
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Bio Section -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Biography</h2>
                    <div>
                        <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Tell us about
                            yourself</label>
                        <textarea id="bio" name="bio" rows="4" placeholder="Share your professional story and interests..."
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                        <p class="text-xs text-gray-500 mt-1">Maximum 500 characters</p>
                    </div>
                </div>

                <!-- Skills Section -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Skills</h2>

                    <!-- Technical Skills -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Technical Skills</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="javascript" name="tech_skills[]" value="JavaScript"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="javascript" class="ml-2 text-sm">JavaScript</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="python" name="tech_skills[]" value="Python"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="python" class="ml-2 text-sm">Python</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="react" name="tech_skills[]" value="React"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="react" class="ml-2 text-sm">React</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="node" name="tech_skills[]" value="Node.js"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="node" class="ml-2 text-sm">Node.js</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="vue" name="tech_skills[]" value="Vue.js"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="vue" class="ml-2 text-sm">Vue.js</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="php" name="tech_skills[]" value="PHP"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="php" class="ml-2 text-sm">PHP</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="other_tech" class="block text-sm font-medium text-gray-700 mb-1">Other
                                technical skills</label>
                            <input type="text" id="other_tech" name="other_tech"
                                placeholder="Separate skills with commas"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Soft Skills -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Soft Skills</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="teamwork" name="soft_skills[]" value="Teamwork"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="teamwork" class="ml-2 text-sm">Teamwork</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="communication" name="soft_skills[]" value="Communication"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="communication" class="ml-2 text-sm">Communication</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="problem-solving" name="soft_skills[]"
                                    value="Problem Solving" class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="problem-solving" class="ml-2 text-sm">Problem Solving</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="adaptability" name="soft_skills[]" value="Adaptability"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="adaptability" class="ml-2 text-sm">Adaptability</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="creativity" name="soft_skills[]" value="Creativity"
                                    class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="creativity" class="ml-2 text-sm">Creativity</label>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-md">
                                <input type="checkbox" id="time-management" name="soft_skills[]"
                                    value="Time Management" class="h-4 w-4 text-primary focus:ring-primary">
                                <label for="time-management" class="ml-2 text-sm">Time Management</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="other_soft" class="block text-sm font-medium text-gray-700 mb-1">Other soft
                                skills</label>
                            <input type="text" id="other_soft" name="other_soft"
                                placeholder="Separate skills with commas"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Languages -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Programming Languages</label>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <label for="web_dev" class="text-sm">Web Development (HTML/CSS/JS)</label>
                                    <span class="text-sm text-gray-600" id="web_dev_value">85%</span>
                                </div>
                                <input type="range" id="web_dev" name="web_dev" min="0" max="100"
                                    value="85"
                                    class="w-full h-2 bg-gray-200 rounded-full appearance-none cursor-pointer">
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <label for="backend" class="text-sm">Backend (Python/PHP/Node)</label>
                                    <span class="text-sm text-gray-600" id="backend_value">70%</span>
                                </div>
                                <input type="range" id="backend" name="backend" min="0" max="100"
                                    value="70"
                                    class="w-full h-2 bg-gray-200 rounded-full appearance-none cursor-pointer">
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <label for="mobile" class="text-sm">Mobile Development</label>
                                    <span class="text-sm text-gray-600" id="mobile_value">50%</span>
                                </div>
                                <input type="range" id="mobile" name="mobile" min="0" max="100"
                                    value="50"
                                    class="w-full h-2 bg-gray-200 rounded-full appearance-none cursor-pointer">
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <label for="database" class="text-sm">Database & SQL</label>
                                    <span class="text-sm text-gray-600" id="database_value">65%</span>
                                </div>
                                <input type="range" id="database" name="database" min="0" max="100"
                                    value="65"
                                    class="w-full h-2 bg-gray-200 rounded-full appearance-none cursor-pointer">
                            </div>
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
    </script>
</body>

</html>
