<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevConnect - Social Network for Developers</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
    <style>
        <style>.toast-info .toast-message {
            display: flex;
            align-items: center;
        }

        .toast-info .toast-message i {
            margin-right: 10px;
        }

        .toast-info .toast-message .notification-content {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .notification-item {
            transition: background-color 0.3s;
        }

        .notification-item:hover {
            background-color: #f3f4f6;
        }

        .notification-item.unread {
            background-color: #eff6ff;
        }

        .notification-item.unread:hover {
            background-color: #dbeafe;
        }
    </style>
    </style>
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
                class="sidebar-item active flex items-center py-3 px-4 my-1 rounded-lg bg-blue-50 text-primary transition-all duration-200">
                <i class="fa-solid fa-house w-6 text-center mr-4 text-lg"></i>
                <span class="font-medium">Home</span>
            </a>

            <a href="posts"
                class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                <i class="fa-solid fa-file-code w-6 text-center mr-4 text-lg"></i>
                <span class="font-medium">Posts</span>
            </a>

            <a href="connections"
                class="sidebar-item flex items-center py-3 px-4 my-1 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-primary transition-all duration-200">
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
        <!-- Tabs -->
        <div class="flex border-b border-gray-200 w-full mb-5">
            <div
                class="py-4 px-5 cursor-pointer transition-all duration-300 font-medium text-primary border-b-2 border-primary">
                For You
            </div>
            <div class="py-4 px-5 cursor-pointer transition-all duration-300 font-medium">
                Following
            </div>
            <div class="py-4 px-5 cursor-pointer transition-all duration-300 font-medium">
                Trending
            </div>
        </div>

        <!-- Post Composer -->
        <div class="bg-white rounded-xl p-5 mb-5 shadow-sm">
            <form action="">
                <textarea class="w-full border-none outline-none resize-none py-2 text-base bg-transparent"
                    placeholder="Share your code or expertise..."></textarea>
                <div class="flex border-t border-gray-200 pt-4 mt-2">
                    <div class="flex items-center mr-5 text-primary cursor-pointer">
                        <i class="fa-solid fa-image mr-1"></i>
                        <span>Image</span>
                    </div>
                    <div class="flex items-center mr-5 text-primary cursor-pointer">
                        <i class="fa-solid fa-code mr-1"></i>
                        <span>Code</span>
                    </div>
                    <div class="flex items-center mr-5 text-primary cursor-pointer">
                        <i class="fa-solid fa-link mr-1"></i>
                        <span>Link</span>
                    </div>
                    <div class="flex-1"></div>
                    <button
                        class="bg-primary text-white border-none rounded-full py-2 px-5 cursor-pointer transition-all duration-300 hover:bg-primary-dark">
                        Post
                    </button>
            </form>
        </div>
    </div>
    @forelse ($posts as $post)
        @php
            $status = 'connect';
            $connectionId = null;

            foreach ($connections as $connection) {
                if (
                    $connection->user_id == Auth::id() &&
                    $connection->user_id2 == $post->user->id &&
                    $connection->is_accepted == 0
                ) {
                    $status = 'sent';
                    break;
                } elseif (
                    $connection->user_id2 == Auth::id() &&
                    $connection->user_id == $post->user->id &&
                    $connection->is_accepted == 0
                ) {
                    $status = 'received';
                    $connectionId = $connection->id;
                    break;
                } elseif (
                    ($connection->user_id == Auth::id() && $connection->user_id2 == $post->user->id) ||
                    ($connection->user_id2 == Auth::id() && $connection->user_id == $post->user->id)
                ) {
                    if ($connection->is_accepted == 1) {
                        $status = 'friends';
                        break;
                    }
                }
            }
        @endphp

        <div class="bg-white rounded-xl p-6 mb-6 shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <img class="mr-4 w-12 h-12 rounded-full"
                    src="{{ $post->user->image ? asset('storage/' . $post->user->image) : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                    alt="image">
                <div>
                    <form action="{{ route('user.profile', $post->user) }} " method="get">
                        @csrf
                        <button class="font-semibold text-lg mb-1">{{ $post->user->name }}</button>
                    </form>
                    <span class="text-gray-500 text-sm">{{ $post->user->profession }} •
                        {{ Carbon\Carbon::parse($post->created_at)->diffForHumans(['parts' => 1, 'short' => true]) }}</span>
                </div>
                <div class="ml-auto">
                    @if ($status != 'friends' && Auth::id() != $post->user->id)
                        @if ($status == 'sent')
                            <div class="flex items-center px-4 py-2 bg-yellow-100 rounded-full text-yellow-600">
                                <i class="fa-solid fa-paper-plane mr-2"></i>
                                <span class="text-sm font-medium">Request Sent</span>
                            </div>
                        @elseif ($status == 'received')
                            <div class="flex space-x-2">
                                <form action="{{ route('connect.accept', $post->user->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    <input type="hidden" name="action" value="accept">
                                    <button type="submit"
                                        class="px-3 py-2 bg-green-500 text-white rounded-full text-sm font-medium hover:bg-green-600 transition-colors">
                                        <i class="fa-solid fa-check mr-1"></i> Accept
                                    </button>
                                </form>

                                <form action="{{ route('connect.accept', $post->user->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    <input type="hidden" name="action" value="reject">
                                    <button type="submit"
                                        class="px-3 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600 transition-colors">
                                        <i class="fa-solid fa-xmark mr-1"></i> Reject
                                    </button>
                                </form>
                            </div>
                        @else
                            <form action="{{ route('user.connect', ['id' => $post->user->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id2" value="{{ $post->user->id }}">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 text-white rounded-full text-sm font-medium hover:bg-green-600 transition-colors">
                                    <i class="fa-solid fa-user-plus mr-2"></i> Connect
                                </button>
                            </form>
                        @endif
                    @else
                        <button
                            class="text-gray-400 hover:text-primary p-2 rounded-full hover:bg-gray-100 transition-colors duration-200">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    @endif
                </div>
            </div>

            <!-- Post Content -->
            <div class="mb-5">
                <p class="mb-4 text-gray-800 leading-relaxed">
                    {{ $post->content }}
                </p>

                @if ($post->codeSnippet)
                    <div
                        class="bg-gray-50 p-4 rounded-lg font-mono my-4 overflow-x-auto border border-gray-200 shadow-sm">
                        <pre class="text-sm text-gray-800">{{ $post->codeSnippet }}</pre>
                    </div>
                @endif
                @if ($post->image)
                    <div class="mt-4 rounded-lg overflow-hidden shadow-sm mx-auto" style="max-width: 90%;">
                        <img class="w-full object-cover max-h-96" src="{{ asset('storage/' . $post->image) }}"
                            alt="Post image">
                    </div>
                @endif
            </div>

            <div class="flex border-t border-gray-100 pt-4">
                <!-- Like Button -->
                @livewire('like-button', ['post' => $post])

                <!-- Comment Button -->
                <button
                    class="flex items-center justify-center mr-4 flex-1 py-2 rounded-lg transition-all duration-200 hover:bg-gray-50 text-gray-600 hover:text-primary comment-toggle"
                    aria-label="Comment" onclick="toggleComments({{ $post->id }})">
                    <i class="fa-regular fa-comment mr-2"></i>
                    <span>Comment</span>
                </button>

                <!-- Share Button -->
                <button
                    class="flex items-center justify-center mr-4 flex-1 py-2 rounded-lg transition-all duration-200 hover:bg-gray-50 text-gray-600 hover:text-primary"
                    aria-label="Share">
                    <i class="fa-solid fa-retweet mr-2"></i>
                    <span>Share</span>
                </button>
            </div>

            <!-- Comments Section  -->
            <div id="comments-section-{{ $post->id }}" class="mt-4 pt-3 border-t border-gray-100 hidden">
                @livewire('comment-section', ['post' => $post])
            </div>
        </div>
    @empty
        <div class="bg-white rounded-xl p-8 mb-6 shadow-md text-center">
            <div class="flex flex-col items-center justify-center py-6">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 mb-4">
                    <i class="fa-regular fa-newspaper text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">No posts yet</h3>
                <p class="text-gray-500 mb-4">This user hasn't shared any posts</p>
                <button
                    class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition-all duration-200">
                    <i class="fa-solid fa-plus mr-2"></i>Create your first post
                </button>
            </div>
        </div>
    @endforelse

    </div>

    <!-- JavaScript for toggling comments -->
    <script>
        function toggleComments(postId) {
            const commentsSection = document.getElementById(`comments-section-${postId}`);
            if (commentsSection) {
                if (commentsSection.classList.contains('hidden')) {
                    commentsSection.classList.remove('hidden');
                } else {
                    commentsSection.classList.add('hidden');
                }
            }
        }
    </script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        var channel = pusher.subscribe('notification');
        channel.bind('test.notification', function(data) {
            if (data.author && data.title) {
                toastr.info(
                    `<div class="notification-content">
                        <i class="fas fa-user"></i> <span>${data.author}</span>
                        <i class="fas fa-book" style="margin-left: 20px;"></i> <span>${data.title}</span>
                    </div>`,
                    'New Post Notification', {
                        closeButton: true,
                        progressBar: true,
                        timeOut: 0,
                        extendedTimeOut: 0,
                        positionClass: 'toast-top-right',
                        enableHtml: true
                    }
                );
            } else {
                console.error('Invalid data received:', data);
            }
        });

        pusher.connection.bind('connected', function() {
            console.log('Pusher connected');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
