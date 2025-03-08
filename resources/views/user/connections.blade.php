<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevConnect - Connections</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1e88e5",
                        "primary-dark": "#1565c0",
                        "primary-light": "#64b5f6",
                        secondary: "#283593",
                        accent: "#03a9f4",
                        background: "#f5f9ff",
                    },
                },
            },
        };
    </script>
</head>

<body class="flex bg-[#f5f9ff] text-gray-800">
    <!-- Sidebar Navigation -->
    <div class="fixed h-screen w-64 bg-white shadow-lg z-10">
        <div class="flex items-center justify-center h-20 border-b border-gray-100">
            <svg width="180" height="50" viewBox="0 0 300 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="50" r="20" fill="#1e88e5" />
                <text x="33" y="57" font-family="Arial" font-size="20" fill="white" font-weight="bold">C</text>
                <text x="65" y="58" font-family="Arial" font-size="24" fill="#1e88e5" font-weight="bold">ODEVERSE</text>
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
                class="sidebar-item active flex items-center py-3 px-4 my-1 rounded-lg bg-blue-50 text-primary transition-all duration-200">
                >
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
                <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-primary flex items-center justify-center">
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

    <!-- Main Content Area -->
    <div class="ml-64 flex-1 p-5">
        <!-- Page Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Connections</h1>
            <div class="relative">
                <input type="text" placeholder="Search developers..."
                    class="py-2 px-4 pr-10 rounded-full border border-gray-300 focus:outline-none focus:border-primary w-64">
                <i class="fa-solid fa-search absolute right-4 top-3 text-gray-400"></i>
            </div>
        </div>

        <!-- Connection Tabs -->
        <div class="flex border-b border-gray-200 w-full mb-5">
            <div id="usersTab"
                class="py-4 px-5 cursor-pointer transition-all duration-300 font-medium text-primary border-b-2 border-primary">
                Users
            </div>
            <div id="myConnectionsTab" class="py-4 px-5 cursor-pointer transition-all duration-300 font-medium">
                My Connections
            </div>
            <div id="pendingRequestsTab" class="py-4 px-5 cursor-pointer transition-all duration-300 font-medium">
                Pending Requests
            </div>
        </div>
        <!-- Connections List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" id="usersSection">
            <!-- Connection Card 1 -->
            @forelse ($users as $user)
                <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <img class="mr-4 w-14 h-14 rounded-full"
                            src="{{ $user->image ? asset('storage/' . $user->image) : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                            alt="image">
                        <div>
                            <h4 class="font-semibold text-lg">{{ $user->name ? $user->name : '' }}</h4>
                            <span class="text-gray-600 text-sm">{{ $user->profession ? $user->profession : '' }}</span>
                        </div>
                    </div>
                    <div class="flex items-center mb-3">
                        <i class="fa-solid fa-location-dot text-gray-500 mr-2"></i>
                        <span class="text-gray-600 text-sm">{{ $user->location ? $user->location : 'Unknown' }}</span>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-4">
                        <i class="fa-solid fa-user-group mr-1"></i>
                        <span>mutual connections</span>
                    </div>
                    <form action="{{ route('user.connect', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        @php
                            $status = 'connect';

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

                        <button type="submit"
                            class="w-full py-2 px-4 border-none rounded-full text-sm font-medium transition-all duration-300 flex items-center justify-center
                            @if ($status == 'sent') bg-yellow-500 text-white hover:bg-yellow-600 cursor-not-allowed
                            @elseif ($status == 'received') bg-orange-500 text-white hover:bg-orange-600 cursor-not-allowed
                            @elseif ($status == 'friends') bg-gray-400 text-white cursor-not-allowed
                            @else bg-green-500 text-white hover:bg-green-600 cursor-pointer @endif"
                            @if ($status == 'sent' || $status == 'received' || $status == 'friends') disabled @endif>
                            <i
                                class="fa-solid
                            @if ($status == 'sent') fa-paper-plane mr-2
                            @elseif ($status == 'received') fa-hourglass-half mr-2
                            @elseif ($status == 'friends') fa-user-check mr-2
                            @else fa-user-plus mr-2 @endif
                            "></i>

                            @if ($status == 'sent')
                                <span>Sent</span>
                            @elseif ($status == 'received')
                                <span>Pending</span>
                            @elseif ($status == 'friends')
                                <span>Friends</span>
                            @else
                                <span>Connect</span>
                            @endif
                        </button>
                    </form>
                </div>
            @empty
            @endforelse
        </div>
        <div id="myConnectionsSection" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 hidden">
            @foreach ($users as $user)
                @php
                    $status = 'connect';

                    foreach ($friends as $friend) {
                        if (
                            ($friend->user_id == Auth::id() && $friend->user_id2 == $user->id) ||
                            ($friend->user_id2 == Auth::id() && $friend->user_id == $user->id)
                        ) {
                            if ($friend->is_accepted == 1) {
                                $status = 'friends';
                                break;
                            }
                        }
                    }
                @endphp

                @if ($status == 'friends')
                    <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <img class="mr-4 w-14 h-14 rounded-full"
                                src="{{ $user->image ? asset('storage/' . $user->image) : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                                alt="image">
                            <div>
                                <h4 class="font-semibold text-lg">{{ $user->name }}</h4>
                                <span class="text-gray-600 text-sm">{{ $user->profession }}</span>
                            </div>
                        </div>
                        <div class="flex items-center mb-3">
                            <i class="fa-solid fa-location-dot text-gray-500 mr-2"></i>
                            <span class="text-gray-600 text-sm">{{ $user->location }}</span>
                        </div>
                        <button class="w-full py-2 px-4 bg-gray-400 text-white rounded-full cursor-not-allowed">
                            <i class="fa-solid fa-user-check mr-2"></i>
                            Friends
                        </button>
                    </div>
                @endif
            @endforeach
        </div>

        <div id="pendingRequestsSection" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 hidden">
            @foreach ($users as $user)
                @php
                    $status = 'connect';

                    foreach ($connections as $connection) {
                        if (
                            $connection->user_id2 == Auth::id() &&
                            $connection->user_id == $user->id &&
                            $connection->is_accepted == 0
                        ) {
                            $status = 'received';
                            break;
                        }
                    }
                @endphp

                @if ($status == 'received')
                    <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <img class="mr-4 w-14 h-14 rounded-full"
                                src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="Profile Image">
                            <div>
                                <h4 class="font-semibold text-lg">{{ $user->name }}</h4>
                                <span class="text-gray-600 text-sm">{{ $user->profession }}</span>
                            </div>
                        </div>
                        <div class="flex items-center mb-3">
                            <i class="fa-solid fa-location-dot text-gray-500 mr-2"></i>
                            <span
                                class="text-gray-600 text-sm">{{ $user->location ? $user->location : 'Unknown' }}</span>
                        </div>
                        <div class="flex space-x-2">
                            <form action="{{ route('connect.accept', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="flex-1 py-2 px-4 bg-green-500 text-white rounded-full hover:bg-green-600 transition-all duration-300">
                                    <i class="fa-solid fa-check mr-2"></i>
                                    Accept
                                </button>
                            </form>
                            <form action="{{ route('connect.reject', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="flex-1 py-2 px-4 bg-red-500 text-white rounded-full hover:bg-red-600 transition-all duration-300">
                                    <i class="fa-solid fa-times mr-2"></i>
                                    Decline
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = {
                users: {
                    tab: document.querySelector('[id="usersTab"]'),
                    section: document.querySelector('[id="usersSection"]')
                },
                myConnections: {
                    tab: document.querySelector('[id="myConnectionsTab"]'),
                    section: document.querySelector('[id="myConnectionsSection"]')
                },
                pendingRequests: {
                    tab: document.querySelector('[id="pendingRequestsTab"]'),
                    section: document.querySelector('[id="pendingRequestsSection"]')
                }
            };

            function switchTab(activeTabKey) {
                // Reset all tabs and sections
                Object.values(tabs).forEach(({
                    tab,
                    section
                }) => {
                    tab.classList.remove('text-primary', 'border-b-2', 'border-primary');
                    section.classList.add('hidden');
                });

                // Activate selected tab and section
                tabs[activeTabKey].tab.classList.add('text-primary', 'border-b-2', 'border-primary');
                tabs[activeTabKey].section.classList.remove('hidden');
            }

            // Add click event listeners to tabs
            Object.keys(tabs).forEach(key => {
                tabs[key].tab.addEventListener('click', () => switchTab(key));
            });
        });
    </script>
</body>

</html>
