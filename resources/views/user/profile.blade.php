<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeVerse - Developer Profile</title>
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
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        custom: '0 4px 20px rgba(0, 0, 0, 0.05)',
                    }
                },
            },
        };
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .profile-gradient {
            background: linear-gradient(135deg, #1e88e5 0%, #64b5f6 100%);
        }

        .skill-bar {
            transition: width 1s ease-in-out;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
        }

        .sidebar-item.active {
            position: relative;
        }

        .sidebar-item.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: #1e88e5;
        }

        .empty-field-prompt {
            background-color: #fff8e1;
            border-left: 3px solid #ffc107;
            padding: 12px;
            margin-top: 8px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            font-size: 14px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .pulse-badge {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .progress-indicator {
            margin-top: 20px;
            position: relative;
        }

        .progress-bar {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 4px;
            position: relative;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background-color: #1e88e5;
            border-radius: 4px;
            transition: width 1s ease;
        }
    </style>

<body class="flex bg-[#f5f9ff] text-gray-800">
    <div class="flex min-h-screen">

        <!-- Sidebar Navigation - Untouched as requested -->
        <div class="fixed h-screen w-64 bg-white shadow-lg z-10">
            <div class="flex items-center justify-center h-20 border-b border-gray-100">
                <svg width="180" height="50" viewBox="0 0 300 100" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="50" r="20" fill="#1e88e5" />
                    <text x="33" y="57" font-family="Arial" font-size="20" fill="white" font-weight="bold">C</text>
                    <text x="65" y="58" font-family="Arial" font-size="24" fill="#1e88e5"
                        font-weight="bold">ODEVERSE</text>
                </svg>
            </div>

            <div class="py-6 px-2">
                <a href="/home"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-house w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Home</span>
                </a>

                <a href="/posts"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-file-code w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Posts</span>
                </a>

                <a href="/connections"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-users w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Connections</span>
                </a>

                <a href="#"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-bell w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Notifications</span>
                </a>

                <a href="/profile"
                    class="sidebar-item active flex items-center py-3 px-4 my-1 rounded-lg bg-blue-50 text-primary transition-all duration-200">
                    <i class="fa-solid fa-user w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Profile</span>
                </a>

                <a href="#"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-hashtag w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Explore</span>
                </a>

                <a href="#"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-briefcase w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Job Offers</span>
                </a>

                <a href="#"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-message w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Messages</span>
                </a>

                <button
                    class="mt-6 flex items-center justify-center w-full py-3 px-4 bg-primary text-white rounded-lg font-medium shadow-md hover:bg-primary-dark transition-all duration-200">
                    <i class="fa-solid fa-plus mr-2"></i>
                    <span>Create Post</span>
                </button>
            </div>

            <!-- User Profile Widget -->
            <div class="absolute bottom-0 w-full border-t border-gray-100">
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
        <div class="ml-64 flex-1">
            <!-- Profile Completion Banner -->
            <div id="profileCompletionBanner" class="bg-white border-b border-gray-200 shadow-sm">
                <div class="container mx-auto px-10 py-4">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                        <div>
                            <h3 class="font-semibold text-gray-800">
                                <i class="fa-solid fa-chart-line text-primary mr-2"></i>
                                Profile Completion
                                <span id="profileCompletionPercentage" class="text-primary ml-1">0%</span>
                            </h3>
                            <p class="text-sm text-gray-600 mt-1">A complete profile attracts 70% more views</p>
                        </div>
                        <a href="{{ route('updateprofile') }}"
                            class="mt-3 sm:mt-0 bg-primary text-white px-4 py-2 rounded-lg shadow-sm hover:bg-primary-dark transition-all duration-200">
                            <i class="fa-solid fa-wand-magic-sparkles mr-2"></i>
                            Complete Your Profile
                        </a>
                    </div>
                    <div class="progress-indicator mt-3">
                        <div class="progress-bar">
                            <div id="progressFill" class="progress-fill" style="width: 0%"></div>
                        </div>
                        <div class="flex justify-between mt-1 text-xs text-gray-500">
                            <span>Just Started</span>
                            <span>Getting There</span>
                            <span>Almost Complete</span>
                            <span>Profile Ready</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Header Section -->
            <div class="profile-gradient h-60 relative">
                <div class="absolute -bottom-24 left-10">
                    <div class="relative">
                        <div class="h-48 w-48 rounded-full border-4 border-white bg-white shadow-lg overflow-hidden">
                            <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                                alt="Profile picture" class="h-full w-full object-cover" />
                        </div>
                        @if (!$user->image)
                            <a href="profile/update"
                                class="absolute bottom-3 right-3 bg-white p-2 rounded-full shadow-lg cursor-pointer hover:bg-gray-100 transition-all duration-200 pulse-badge">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 7a2 2 0 012-2h2l1-1h4l1 1h2a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V7zm2 0v10h10V7H7zm5 2a3 3 0 110 6 3 3 0 010-6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="absolute bottom-5 right-10 flex space-x-3">
                    <a href="{{ route('updateprofile') }}"
                        class="bg-white text-blue-500 font-medium px-5 py-2 rounded-lg shadow ">
                        <i class="fa-solid fa-pencil mr-2"></i>Edit Profile
                    </a>
                </div>
            </div>

            <!-- Profile Info Section -->
            <div class="mt-28 px-10 pb-10">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 pr-6">
                        <h1 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h1>
                        @if ($user->profession)
                            <p class="text-primary font-medium mt-1 mb-4">{{ $user->profession }}</p>
                        @else
                            <p class="text-gray-400 italic mt-1 mb-1">Add your professional title</p>
                            <div class="empty-field-prompt">
                                <i class="fa-solid fa-lightbulb text-yellow-500 mr-2"></i>
                                <span>Your professional title helps peers identify your expertise at a glance</span>
                            </div>
                        @endif

                        <div class="bg-white rounded-xl shadow-custom p-6 mt-6 relative overflow-hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-lg font-semibold flex items-center">
                                    <i class="fa-solid fa-address-card text-primary mr-2"></i>Contact Information
                                </h2>
                                <button class="text-primary hover:text-primary-dark">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </div>
                            <div class="space-y-4">
                                @if ($user->email)
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-envelope text-gray-400 w-6"></i>
                                        <span class="text-gray-600 ml-3">{{ $user->email }}</span>
                                    </div>
                                @else
                                    <div class="flex items-center text-gray-400">
                                        <i class="fa-solid fa-envelope text-gray-400 w-6"></i>
                                        <span class="ml-3">Add your email address</span>
                                    </div>
                                @endif

                                @if ($user->location)
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-location-dot text-gray-400 w-6"></i>
                                        <span class="text-gray-600 ml-3">{{ $user->location }}</span>
                                    </div>
                                @else
                                    <div class="flex items-center text-gray-400">
                                        <i class="fa-solid fa-location-dot text-gray-400 w-6"></i>
                                        <span class="ml-3">Add your location</span>
                                    </div>
                                @endif

                                @if ($user->age)
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-calendar text-gray-400 w-6"></i>
                                        <span class="text-gray-600 ml-3">{{ $user->age }} years old</span>
                                    </div>
                                @else
                                    <div class="flex items-center text-gray-400">
                                        <i class="fa-solid fa-calendar text-gray-400 w-6"></i>
                                        <span class="ml-3">Add your age</span>
                                    </div>
                                @endif

                                @if ($user->githubProfile)
                                    <div class="flex items-center">
                                        <i class="fa-brands fa-github text-gray-400 w-6"></i>
                                        <a href="{{ $user->githubProfile }}" target="_blank"
                                            class="text-primary ml-3 hover:underline">GitHub Profile</a>
                                    </div>
                                @else
                                    <div class="flex items-center text-gray-400">
                                        <i class="fa-brands fa-github text-gray-400 w-6"></i>
                                        <span class="ml-3">Link your GitHub profile</span>
                                    </div>
                                    <div class="empty-field-prompt">
                                        <i class="fa-solid fa-lightbulb text-yellow-500 mr-2"></i>
                                        <span>Adding your GitHub profile shows your commitment to open source and
                                            attracts collaborators</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Networking Section - New -->
                        <div class="bg-white rounded-xl shadow-custom p-6 mt-6">
                            <h2 class="text-lg font-semibold mb-4 flex items-center">
                                <i class="fa-solid fa-network-wired text-primary mr-2"></i>Networking
                            </h2>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">total friends</span>
                                    <span class="font-medium">187 this week</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">Connection requests</span>
                                    <span class="font-medium text-primary">5 pending</span>
                                </div>
                                <button
                                    class="w-full mt-2 bg-blue-50 text-primary font-medium py-2 rounded-lg hover:bg-blue-100 transition-colors">
                                    <a href="/connections"><i class="fa-solid fa-user-plus mr-2"></i>Grow Your
                                        Network</a>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="md:w-2/3 mt-6 md:mt-0">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Bio Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover relative">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-lg font-semibold flex items-center">
                                        <i class="fa-solid fa-user text-primary mr-2"></i>About Me
                                    </h2>
                                    <button class="text-primary hover:text-primary-dark">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </div>
                                @if ($user->biography)
                                    <p class="text-gray-700 leading-relaxed">{{ $user->biography }}</p>
                                @else
                                    <div class="bg-blue-50 p-6 rounded-lg border border-dashed border-primary">
                                        <p class="text-gray-600 mb-3">Your bio is your chance to showcase your
                                            professional journey and passion.</p>
                                        <div class="flex items-start space-x-3">
                                            <i class="fa-solid fa-circle-info text-primary mt-1"></i>
                                            <div>
                                                <p class="text-gray-600 text-sm">Consider including:</p>
                                                <ul class="list-disc ml-4 mt-2 text-sm text-gray-600 space-y-1">
                                                    <li>Your developer journey and experience</li>
                                                    <li>Areas of technical expertise</li>
                                                    <li>What you're currently working on or learning</li>
                                                    <li>Professional goals or interests</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button id="addBioBtn"
                                            class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                                            <i class="fa-solid fa-plus mr-2"></i>Add Your Bio
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <!-- Technical Skills Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover relative">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-lg font-semibold flex items-center">
                                        <i class="fa-solid fa-code text-primary mr-2"></i>Technical Skills
                                    </h2>
                                    <button class="text-primary hover:text-primary-dark">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </div>

                                <div class="space-y-5">
                                    @if ($user->hardSkills)
                                        @php
                                            $skills = explode(',', $user->hardSkills);
                                            $percentages = [95, 85, 78, 90, 82];
                                        @endphp

                                        @foreach ($skills as $index => $skill)
                                            <div>
                                                <div class="flex justify-between mb-2">
                                                    <span class="font-medium text-gray-700">{{ trim($skill) }}</span>
                                                    <span
                                                        class="text-primary">{{ $percentages[$index % count($percentages)] }}%</span>
                                                </div>
                                                <div class="w-full bg-gray-200 rounded-full h-2">
                                                    <div class="skill-bar bg-primary h-2 rounded-full"
                                                        style="width: {{ $percentages[$index % count($percentages)] }}%">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="bg-blue-50 p-6 rounded-lg border border-dashed border-primary">
                                            <div class="flex items-start space-x-3">
                                                <i class="fa-solid fa-code text-primary text-xl mt-1"></i>
                                                <div>
                                                    <p class="text-gray-600">Showcasing your technical skills increases
                                                        your visibility to potential employers and collaborators.</p>
                                                    <p class="text-sm text-gray-500 mt-2">Add skills like React,
                                                        Node.js, Python, or any frameworks and tools you're proficient
                                                        with.</p>
                                                </div>
                                            </div>
                                            <button id="addSkillsBtn"
                                                class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                                                <i class="fa-solid fa-plus mr-2"></i>Add Technical Skills
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Certifications Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover relative">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-lg font-semibold flex items-center">
                                        <i class="fa-solid fa-certificate text-primary mr-2"></i>Certifications
                                    </h2>
                                    <button class="text-primary hover:text-primary-dark">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </div>

                                @if ($user->skills)
                                    @php
                                        $certs = explode(',', $user->skills);
                                        $dates = ['Feb 2023', 'Nov 2022', 'Aug 2024', 'Mar 2024'];
                                        $issuers = ['Microsoft', 'Google', 'AWS', 'Cisco'];
                                    @endphp

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        @foreach ($certs as $index => $cert)
                                            <div
                                                class="border border-gray-100 rounded-lg p-4 hover:border-primary transition-colors">
                                                <div class="flex justify-between items-start">
                                                    <h3 class="font-medium text-gray-800">{{ trim($cert) }}</h3>
                                                    <span
                                                        class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">{{ $dates[$index % count($dates)] }}</span>
                                                </div>
                                                <p class="text-gray-500 text-sm mt-1">
                                                    {{ $issuers[$index % count($issuers)] }}</p>
                                            </div>
                                        @endforeach
                                        <div
                                            class="border border-dashed border-primary rounded-lg p-4 bg-blue-50 flex items-center justify-center">
                                            <button
                                                class="text-primary hover:text-primary-dark font-medium flex items-center">
                                                <i class="fa-solid fa-plus mr-2"></i>Add More
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <div class="bg-blue-50 p-6 rounded-lg border border-dashed border-primary">
                                        <div class="flex items-start space-x-3">
                                            <i class="fa-solid fa-award text-primary text-xl mt-1"></i>
                                            <div>
                                                <p class="text-gray-600">Certifications validate your skills and
                                                    commitment to professional development.</p>
                                                <p class="text-sm text-gray-500 mt-2">Add certifications from
                                                    recognized providers like AWS, Microsoft, Google, or other
                                                    industry-relevant credentials.</p>
                                            </div>
                                        </div>
                                        <button id="addCertsBtn"
                                            class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                                            <i class="fa-solid fa-plus mr-2"></i>Add Certifications
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <!-- Projects Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover relative">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-lg font-semibold flex items-center">
                                        <i class="fa-solid fa-diagram-project text-primary mr-2"></i>Projects
                                    </h2>
                                    <button class="text-primary hover:text-primary-dark">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </div>

                                @if ($user->project)
                                    @php
                                        $projects = explode(',', $user->project);
                                        $descriptions = [
                                            'A full-stack application focused on delivering real-time analytics with interactive dashboards.',
                                            'Mobile application for health tracking with integration to wearable devices.',
                                            'Cloud-based solution that automates deployment processes for development teams.',
                                        ];
                                        $techs = [
                                            ['React', 'Node.js', 'MongoDB'],
                                            ['Flutter', 'Firebase', 'Swift'],
                                            ['AWS', 'Docker', 'Kubernetes'],
                                        ];
                                    @endphp

                                    <div class="space-y-6">
                                        @foreach ($projects as $index => $project)
                                            <div class="border-l-4 border-primary pl-4 py-1">
                                                <h3 class="font-semibold text-lg">{{ trim($project) }}</h3>
                                                <p class="text-gray-600 mt-2">
                                                    {{ $descriptions[$index % count($descriptions)] }}</p>
                                                <div class="flex flex-wrap gap-2 mt-3">
                                                    @foreach ($techs[$index % count($techs)] as $tech)
                                                        <span
                                                            class="px-3 py-1 bg-blue-50 text-primary rounded-full text-xs font-medium">{{ $tech }}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                        <button
                                            class="w-full mt-2 border border-dashed border-primary rounded-lg p-3 text-primary font-medium hover:bg-blue-50 transition-colors">
                                            <i class="fa-solid fa-plus mr-2"></i>Add Another Project
                                        </button>
                                    </div>
                                @else
                                    <div class="bg-blue-50 p-6 rounded-lg border border-dashed border-primary">
                                        <div class="flex items-start space-x-3">
                                            <i class="fa-solid fa-diagram-project text-primary text-xl mt-1"></i>
                                            <div>
                                                <p class="text-gray-600">Projects are the best way to demonstrate your
                                                    skills in action.</p>
                                                <p class="text-sm text-gray-500 mt-2">Showcase personal or professional
                                                    projects that highlight your technical abilities and problem-solving
                                                    skills.</p>
                                            </div>
                                        </div>
                                        <button id="addprjtbtn"
                                            class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                                            <i class="fa-solid fa-plus mr-2"></i>Add projects
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <!-- Programming Languages Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover relative">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-lg font-semibold flex items-center">
                                        <i class="fa-solid fa-laptop-code text-primary mr-2"></i>Programming Languages
                                    </h2>
                                    <button class="text-primary hover:text-primary-dark">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </div>

                                <div id="programmingLanguages" class="space-y-4">
                                    <div class="bg-blue-50 p-6 rounded-lg border border-dashed border-primary">
                                        <div class="flex items-start space-x-3">
                                            <i class="fa-solid fa-code text-primary text-xl mt-1"></i>
                                            <div>
                                                <p class="text-gray-600">Adding your programming language proficiency
                                                    helps recruiters understand your technical foundation.</p>
                                                <p class="text-sm text-gray-500 mt-2">Include languages you're
                                                    proficient in, such as JavaScript, Python, Java, C#, Ruby, etc.</p>
                                            </div>
                                        </div>
                                        <button id="addLanguagesBtn"
                                            class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                                            <i class="fa-solid fa-plus mr-2"></i>Add Programming Languages
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const user = {
                name: "{{ $user->name ?? '' }}",
                profession: "{{ $user->profession ?? '' }}",
                email: "{{ $user->email ?? '' }}",
                location: "{{ $user->location ?? '' }}",
                age: "{{ $user->age ?? '' }}",
                githubProfile: "{{ $user->githubProfile ?? '' }}",
                biography: "{{ $user->biography ?? '' }}",
                hardSkills: "{{ $user->hardSkills ?? '' }}",
                skills: "{{ $user->skills ?? '' }}",
                project: "{{ $user->project ?? '' }}",
                image: "{{ $user->image ?? '' }}",
                programmingLanguages: ""
            };

            // Count filled fields
            const totalFields = Object.keys(user).length;
            let filledFields = 0;

            for (const key in user) {
                if (user[key] && user[key] !== '') {
                    filledFields++;
                }
            }

            // Calculate percentage
            const completionPercentage = Math.round((filledFields / totalFields) * 100);

            // Update UI with percentage
            const percentElement = document.getElementById('profileCompletionPercentage');
            const progressFill = document.getElementById('progressFill');

            if (percentElement && progressFill) {
                percentElement.innerText = `${completionPercentage}%`;
                progressFill.style.width = `${completionPercentage}%`;
            }

            // Button event listeners
            const buttons = {
                completeProfileBtn: document.getElementById('completeProfileBtn'),
                editProfileBtn: document.getElementById('editProfileBtn'),
                addBioBtn: document.getElementById('addBioBtn'),
                addSkillsBtn: document.getElementById('addSkillsBtn'),
                addCertsBtn: document.getElementById('addCertsBtn'),
                addProjectsBtn: document.getElementById('addProjectsBtn'),
                addLanguagesBtn: document.getElementById('addLanguagesBtn')
            };

            // Modal functionality
            function createModal(title, content, saveCallback) {
                // Create modal container
                const modalOverlay = document.createElement('div');
                modalOverlay.className =
                    'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';

                // Create modal content
                const modalContent = document.createElement('div');
                modalContent.className = 'bg-white rounded-xl shadow-xl w-full max-w-lg mx-4 overflow-hidden';

                // Modal header
                const modalHeader = document.createElement('div');
                modalHeader.className = 'bg-primary text-white px-6 py-4 flex justify-between items-center';

                const modalTitle = document.createElement('h3');
                modalTitle.className = 'text-lg font-semibold';
                modalTitle.textContent = title;

                const closeButton = document.createElement('button');
                closeButton.innerHTML = '<i class="fa-solid fa-times"></i>';
                closeButton.className = 'text-white hover:text-gray-200';
                closeButton.addEventListener('click', () => modalOverlay.remove());

                modalHeader.appendChild(modalTitle);
                modalHeader.appendChild(closeButton);

                // Modal body
                const modalBody = document.createElement('div');
                modalBody.className = 'p-6';
                modalBody.innerHTML = content;

                // Modal footer
                const modalFooter = document.createElement('div');
                modalFooter.className = 'px-6 py-4 bg-gray-50 flex justify-end space-x-3';

                const cancelButton = document.createElement('button');
                cancelButton.textContent = 'Cancel';
                cancelButton.className =
                    'px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100';
                cancelButton.addEventListener('click', () => modalOverlay.remove());

                const saveButton = document.createElement('button');
                saveButton.textContent = 'Save';
                saveButton.className = 'px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark';
                saveButton.addEventListener('click', () => {
                    saveCallback();
                    modalOverlay.remove();

                    // Show success notification
                    showNotification('Changes saved successfully!');
                });

                modalFooter.appendChild(cancelButton);
                modalFooter.appendChild(saveButton);

                // Assemble modal
                modalContent.appendChild(modalHeader);
                modalContent.appendChild(modalBody);
                modalContent.appendChild(modalFooter);
                modalOverlay.appendChild(modalContent);

                // Add to DOM
                document.body.appendChild(modalOverlay);
            }

            // Notification function
            function showNotification(message) {
                const notification = document.createElement('div');
                notification.className =
                    'fixed bottom-5 right-5 bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg z-50 flex items-center';
                notification.innerHTML = `
                    <i class="fa-solid fa-check-circle mr-2"></i>
                    <span>${message}</span>
                `;

                document.body.appendChild(notification);

                // Auto remove after 3 seconds
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }

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
