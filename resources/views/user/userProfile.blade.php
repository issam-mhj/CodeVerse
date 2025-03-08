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
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
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
                <a href="home"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-house w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Home</span>
                </a>

                <a href="posts"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-file-code w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Posts</span>
                </a>

                <a href="#"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-users w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Connections</span>
                </a>

                <a href="#"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-bell w-6 text-center mr-4 text-lg"></i>
                    <span class="font-medium">Notifications</span>
                </a>

                <a href="profile"
                    class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
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
                <div class="flex items-center p-4">
                    <div
                        class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-primary flex items-center justify-center">
                        <span class="text-white font-bold">IM</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-medium text-sm">{{ $user->name }}</span>
                        <span class="text-xs text-gray-500">View profile</span>
                    </div>
                    <button class="ml-auto text-gray-400 hover:text-primary">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="ml-64 flex-1">
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
                                class="absolute bottom-3 right-3 bg-white p-2 rounded-full shadow-lg cursor-pointer hover:bg-gray-100 transition-all duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 7a2 2 0 012-2h2l1-1h4l1 1h2a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V7zm2 0v10h10V7H7zm5 2a3 3 0 110 6 3 3 0 010-6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="absolute bottom-5 right-10 flex space-x-3">
                    <button
                        class="bg-white text-primary font-medium px-5 py-2 rounded-lg shadow hover:bg-gray-50 transition-colors">
                        <i class="fa-solid fa-share-nodes mr-2"></i>Share Profile
                    </button>
                    <button
                        class="bg-primary text-white font-medium px-5 py-2 rounded-lg shadow hover:bg-primary-dark transition-colors">
                        <i class="fa-solid fa-pencil mr-2"></i>Edit Profile
                    </button>
                </div>
            </div>

            <!-- Profile Info Section -->
            <div class="mt-28 px-10 pb-10">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 pr-6">
                        <h1 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h1>
                        @if ($user->profession)
                            <p class="text-primary font-medium mt-1 mb-4">{{ $user->profession }}</p>
                        @endif

                        <div class="bg-white rounded-xl shadow-custom p-6 mt-6">
                            <h2 class="text-lg font-semibold mb-4 flex items-center">
                                <i class="fa-solid fa-address-card text-primary mr-2"></i>Contact Information
                            </h2>
                            <div class="space-y-4">
                                @if ($user->email)
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-envelope text-gray-400 w-6"></i>
                                        <span class="text-gray-600 ml-3">{{ $user->email }}</span>
                                    </div>
                                @endif

                                @if ($user->location)
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-location-dot text-gray-400 w-6"></i>
                                        <span class="text-gray-600 ml-3">{{ $user->location }}</span>
                                    </div>
                                @endif

                                @if ($user->age)
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-calendar text-gray-400 w-6"></i>
                                        <span class="text-gray-600 ml-3">{{ $user->age }} years old</span>
                                    </div>
                                @endif

                                @if ($user->githubProfile)
                                    <div class="flex items-center">
                                        <i class="fa-brands fa-github text-gray-400 w-6"></i>
                                        <a href="{{ $user->githubProfile }}" target="_blank"
                                            class="text-primary ml-3 hover:underline">GitHub Profile</a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Connection Status Section -->
                        @php
                            $status = 'connect';
                            $connectionId = null;

                            foreach ($connections as $connection) {
                                if (
                                    $connection->user_id == Auth::id() &&
                                    $connection->user_id2 == $user->id &&
                                    $connection->is_accepted == 0
                                ) {
                                    $status = 'sent';
                                    break;
                                } elseif (
                                    $connection->user_id2 == Auth::id() &&
                                    $connection->user_id == $user->id &&
                                    $connection->is_accepted == 0
                                ) {
                                    $status = 'received';
                                    $connectionId = $connection->id;
                                    break;
                                } elseif (
                                    ($connection->user_id == Auth::id() && $connection->user_id2 == $user->id) ||
                                    ($connection->user_id2 == Auth::id() && $connection->user_id == $user->id)
                                ) {
                                    if ($connection->is_accepted == 1) {
                                        $status = 'friends';
                                        break;
                                    }
                                }
                            }
                        @endphp

                        @if (Auth::id() != $user->id)
                            <div class="bg-white rounded-xl shadow-custom p-6 mt-6">
                                <h2 class="text-lg font-semibold mb-4 flex items-center">
                                    <i class="fa-solid fa-user-group text-primary mr-2"></i>Connection Status
                                </h2>

                                <div class="flex items-center justify-center">
                                    @if ($status == 'sent')
                                        <div
                                            class="flex items-center px-6 py-3 bg-yellow-50 rounded-lg text-yellow-700 w-full">
                                            <i class="fa-solid fa-paper-plane mr-3 text-xl"></i>
                                            <div>
                                                <p class="font-medium">Connection Request Sent</p>
                                                <p class="text-sm text-yellow-600">Waiting for response</p>
                                            </div>
                                        </div>
                                    @elseif ($status == 'received')
                                        <div class="w-full">
                                            <div
                                                class="flex items-center px-6 py-3 bg-blue-50 rounded-lg text-blue-700 mb-4">
                                                <i class="fa-solid fa-user-plus mr-3 text-xl"></i>
                                                <p class="font-medium">Connection Request Received</p>
                                            </div>
                                            <div class="flex space-x-3">
                                                <form action="{{ route('connect.accept', $user->id) }}" method="POST"
                                                    class="w-1/2">
                                                    @csrf
                                                    <input type="hidden" name="action" value="accept">
                                                    <button type="submit"
                                                        class="w-full py-3 bg-primary text-white rounded-lg font-medium hover:bg-primary-dark transition-colors">
                                                        <i class="fa-solid fa-check mr-2"></i> Accept
                                                    </button>
                                                </form>

                                                <form action="{{ route('connect.accept', $user->id) }}" method="POST"
                                                    class="w-1/2">
                                                    @csrf
                                                    <input type="hidden" name="action" value="reject">
                                                    <button type="submit"
                                                        class="w-full py-3 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition-colors">
                                                        <i class="fa-solid fa-xmark mr-2"></i> Decline
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @elseif ($status == 'friends')
                                        <div
                                            class="flex items-center px-6 py-3 bg-green-50 rounded-lg text-green-700 w-full">
                                            <i class="fa-solid fa-check-circle mr-3 text-xl"></i>
                                            <div>
                                                <p class="font-medium">Connected</p>
                                                <p class="text-sm text-green-600">You are connected with
                                                    {{ $user->name }}</p>
                                            </div>
                                        </div>
                                    @else
                                        <form action="{{ route('user.connect', ['id' => $user->id]) }}"
                                            method="POST" class="w-full">
                                            @csrf
                                            <input type="hidden" name="user_id2" value="{{ $user->id }}">
                                            <button type="submit"
                                                class="w-full py-3 bg-primary text-white rounded-lg font-medium hover:bg-primary-dark transition-colors">
                                                <i class="fa-solid fa-user-plus mr-2"></i> Connect with
                                                {{ $user->name }}
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="md:w-2/3 mt-6 md:mt-0">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Bio Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover">
                                <h2 class="text-lg font-semibold mb-4 flex items-center">
                                    <i class="fa-solid fa-user text-primary mr-2"></i>About Me
                                </h2>
                                @if ($user->biography)
                                    <p class="text-gray-700 leading-relaxed">{{ $user->biography }}</p>
                                @else
                                    <p class="text-gray-500 italic">No biography provided yet.</p>
                                @endif
                            </div>

                            <!-- Technical Skills Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover">
                                <h2 class="text-lg font-semibold mb-4 flex items-center">
                                    <i class="fa-solid fa-code text-primary mr-2"></i>Technical Skills
                                </h2>

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
                                        <p class="text-gray-500 italic">No technical skills listed yet.</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Certifications Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover">
                                <h2 class="text-lg font-semibold mb-4 flex items-center">
                                    <i class="fa-solid fa-certificate text-primary mr-2"></i>Certifications
                                </h2>

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
                                    </div>
                                @else
                                    <p class="text-gray-500 italic">No certifications listed yet.</p>
                                @endif
                            </div>

                            <!-- Projects Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover">
                                <h2 class="text-lg font-semibold mb-6 flex items-center">
                                    <i class="fa-solid fa-diagram-project text-primary mr-2"></i>Projects
                                </h2>

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
                                    </div>
                                @else
                                    <p class="text-gray-500 italic">No projects listed yet.</p>
                                @endif
                            </div>

                            <!-- Languages Section -->
                            <div class="bg-white rounded-xl shadow-custom p-6 card-hover">
                                <h2 class="text-lg font-semibold mb-4 flex items-center">
                                    <i class="fa-solid fa-globe text-primary mr-2"></i>Programming Languages
                                </h2>

                                @if ($user->age)
                                    <!-- Using age as a condition since there's no specific language field -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <div class="flex justify-between mb-2">
                                                <span class="font-medium">JavaScript</span>
                                                <span class="text-primary">95%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="skill-bar bg-primary h-2 rounded-full" style="width: 95%">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="flex justify-between mb-2">
                                                <span class="font-medium">Python</span>
                                                <span class="text-primary">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="skill-bar bg-primary h-2 rounded-full" style="width: 88%">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="flex justify-between mb-2">
                                                <span class="font-medium">PHP</span>
                                                <span class="text-primary">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="skill-bar bg-primary h-2 rounded-full" style="width: 75%">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="flex justify-between mb-2">
                                                <span class="font-medium">SQL</span>
                                                <span class="text-primary">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="skill-bar bg-primary h-2 rounded-full" style="width: 90%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <p class="text-gray-500 italic">No programming languages listed yet.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Animation for skill bars on page load
        document.addEventListener("DOMContentLoaded", function() {
            const skillBars = document.querySelectorAll('.skill-bar');

            setTimeout(() => {
                skillBars.forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0';

                    setTimeout(() => {
                        bar.style.width = width;
                    }, 300);
                });
            }, 500);

            // Connect button functionality
            const connectButton = document.querySelector("button.bg-primary");
            if (connectButton) {
                connectButton.addEventListener("click", function() {
                    if (this.textContent.includes("Connect")) {
                        this.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i> Processing...';
                        // Simulating form submission - replace with actual implementation if needed
                        setTimeout(() => {
                            this.innerHTML =
                                '<i class="fa-solid fa-paper-plane mr-2"></i> Request Sent';
                            this.classList.remove("bg-primary", "hover:bg-primary-dark");
                            this.classList.add("bg-yellow-500", "hover:bg-yellow-600");
                        }, 1000);
                    }
                });
            }
        });
    </script>
</body>

</html>
