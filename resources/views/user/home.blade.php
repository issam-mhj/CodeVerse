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

    <!-- Feed Posts -->
    <div class="bg-white rounded-xl p-5 mb-5 shadow-sm">
        <div class="flex items-center mb-4">
            <div
                class="w-12 h-12 rounded-full bg-primary-light flex items-center justify-center text-white font-bold mr-3">
                JS
            </div>
            <div>
                <h4 class="font-semibold mb-1">Julie Smith</h4>
                <span class="text-gray-600 text-sm">Full Stack Developer • 2h ago</span>
            </div>
        </div>
        <div class="mb-4">
            <p class="mb-3">
                I recently solved an optimization problem with React.
                Here's the solution:
            </p>
            <div class="bg-gray-100 p-4 rounded-lg font-mono my-4 overflow-x-auto">
                <pre>
const useMemoizedCallback = (callback, deps) => {
  return React.useCallback(
    React.useMemo(() => callback, deps),
    deps
  );
};</pre>
            </div>
            <p>
                This approach reduced unnecessary renders by 40%. What
                do you think?
            </p>
        </div>
        <div class="flex text-gray-600 text-sm mb-4">
            <div class="mr-5">128 likes</div>
            <div class="mr-5">24 comments</div>
            <div>12 shares</div>
        </div>
        <div class="flex border-t border-gray-200 pt-4">
            <div class="flex items-center mr-8 cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-regular fa-heart mr-1"></i>
                <span>Like</span>
            </div>
            <div class="flex items-center mr-8 cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-regular fa-comment mr-1"></i>
                <span>Comment</span>
            </div>
            <div class="flex items-center mr-8 cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-solid fa-retweet mr-1"></i>
                <span>Share</span>
            </div>
            <div class="flex items-center cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-regular fa-bookmark mr-1"></i>
                <span>Save</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-5 mb-5 shadow-sm">
        <div class="flex items-center mb-4">
            <div
                class="w-12 h-12 rounded-full bg-primary-light flex items-center justify-center text-white font-bold mr-3">
                MD
            </div>
            <div>
                <h4 class="font-semibold mb-1">Michael Davis</h4>
                <span class="text-gray-600 text-sm">DevOps Engineer • 5h ago</span>
            </div>
        </div>
        <div class="mb-4">
            <p class="mb-3">
                Just published a tutorial on using Docker with Python.
                #Docker #Python
            </p>
            <img src="/api/placeholder/600/300" alt="Docker Python Tutorial" class="w-full rounded-lg mb-3" />
            <p>
                Discover how to optimize your development environments!
            </p>
        </div>
        <div class="flex text-gray-600 text-sm mb-4">
            <div class="mr-5">95 likes</div>
            <div class="mr-5">18 comments</div>
            <div>32 shares</div>
        </div>
        <div class="flex border-t border-gray-200 pt-4">
            <div class="flex items-center mr-8 cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-regular fa-heart mr-1"></i>
                <span>Like</span>
            </div>
            <div class="flex items-center mr-8 cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-regular fa-comment mr-1"></i>
                <span>Comment</span>
            </div>
            <div class="flex items-center mr-8 cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-solid fa-retweet mr-1"></i>
                <span>Share</span>
            </div>
            <div class="flex items-center cursor-pointer transition-all duration-300 hover:text-primary">
                <i class="fa-regular fa-bookmark mr-1"></i>
                <span>Save</span>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
