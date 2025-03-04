<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevConnect - Social Network for Developers</title>
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
    <div class="fixed w-64 h-screen bg-white p-0 border-r border-gray-200">
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
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300 bg-primary text-white">
            <i class="fa-solid fa-house mr-4 text-lg"></i>
            <span>Home</span>
        </a>

        <a href="posts"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-file-code mr-4 text-lg"></i>
            <span>Posts</span>
        </a>

        <a href="/connections"
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
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
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
        <div class="bg-white rounded-xl p-6 mb-6 shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <div
                    class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold mr-4 shadow-sm">
                    {{ substr($user->name, 0, 2) }}
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-1">{{ $user->name }}</h4>
                    <span class="text-gray-500 text-sm">{{ $user->profession }} •
                        {{ Carbon\Carbon::parse($post->created_at)->diffForHumans(['parts' => 1, 'short' => true]) }}</span>
                </div>
                <div class="ml-auto">
                    <button
                        class="text-gray-400 hover:text-primary p-2 rounded-full hover:bg-gray-100 transition-colors duration-200">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
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
                <div class="flex gap-3">
                    <div
                        class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center text-white text-sm flex-shrink-0">
                        {{ substr($user->name, 0, 2) }}
                    </div>
                    @livewire('comment-section', ['post' => $post])

                </div>
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
</body>

</html>
