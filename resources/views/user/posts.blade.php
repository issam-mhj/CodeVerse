<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevConnect - My Posts</title>
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
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300">
            <i class="fa-solid fa-house mr-4 text-lg"></i>
            <span>Home</span>
        </a>

        <a href="my-posts"
            class="flex items-center py-3 px-6 text-gray-800 hover:bg-primary-light hover:text-white transition-all duration-300 bg-primary text-white">
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
                <span class="text-white font-bold">{{ substr($user->name, 0, 2) }}</span>
            </div>
            <div class="flex flex-col">
                <span class="font-medium text-sm">{{ $user->name }}</span>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="ml-64 flex-1 p-5">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">My Posts</h1>
            <div class="flex space-x-3">
                <div class="relative">
                    <input type="text" placeholder="Search my posts..."
                        class="py-2 px-4 pl-10 border border-gray-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fa-solid fa-search"></i>
                    </div>
                </div>
                <select
                    class="py-2 px-4 border border-gray-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    <option>Most recent</option>
                    <option>Most popular</option>
                    <option>Oldest first</option>
                </select>
            </div>
        </div>

        <!-- Post Composer -->
        <div class="bg-white rounded-xl p-5 mb-5 shadow-sm">
            {{-- <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            <textarea name="content" class="w-full border-none outline-none resize-none py-2 text-base bg-transparent h-24"
                placeholder="Share your code or expertise..."></textarea>

            <div id="code-editor" class="hidden">
                <select name="language" class="py-2 px-4 border border-gray-200 rounded-md text-sm mb-2">
                    <option value="javascript">JavaScript</option>
                    <option value="python">Python</option>
                    <option value="java">Java</option>
                    <option value="php">PHP</option>
                    <option value="html">HTML</option>
                    <option value="css">CSS</option>
                    <option value="ruby">Ruby</option>
                    <option value="go">Go</option>
                    <option value="typescript">TypeScript</option>
                </select>
                <textarea name="code"
                    class="w-full border border-gray-200 outline-none resize-none py-2 px-4 text-base bg-gray-50 font-mono rounded-md h-32"
                    placeholder="// Paste your code here"></textarea>
            </div>

            <div id="preview-image" class="hidden my-2 max-w-sm"></div>

            <div id="link-input" class="hidden my-2">
                <input type="url" name="link"
                    class="w-full border border-gray-200 outline-none py-2 px-4 text-base bg-gray-50 rounded-md"
                    placeholder="https://example.com">
            </div>

            <div class="flex border-t border-gray-200 pt-4 mt-2">
                <div class="flex items-center mr-5 text-primary cursor-pointer" id="upload-image-btn">
                    <i class="fa-solid fa-image mr-1"></i>
                    <span>Image</span>
                    <input type="file" name="image" class="hidden" id="image-upload" accept="image/*">
                </div>
                <div class="flex items-center mr-5 text-primary cursor-pointer" id="toggle-code-btn">
                    <i class="fa-solid fa-code mr-1"></i>
                    <span>Code</span>
                </div>
                <div class="flex items-center mr-5 text-primary cursor-pointer" id="toggle-link-btn">
                    <i class="fa-solid fa-link mr-1"></i>
                    <span>Link</span>
                </div>
                <div class="flex items-center mr-5 text-primary cursor-pointer">
                    <i class="fa-solid fa-hashtag mr-1"></i>
                    <span>Hashtags</span>
                </div>
                <div class="flex-1"></div>
                <button type="submit"
                    class="bg-primary text-white border-none rounded-full py-2 px-5 cursor-pointer transition-all duration-300 hover:bg-primary-dark">
                    Post
                </button>
            </div>

            <div class="pt-3 border-t border-gray-200 mt-3 hidden" id="hashtags-container">
                <div class="text-sm text-gray-600 mb-2">Popular hashtags:</div>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="bg-gray-100 text-primary px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-primary hover:text-white transition-all">#JavaScript</span>
                    <span
                        class="bg-gray-100 text-primary px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-primary hover:text-white transition-all">#Python</span>
                    <span
                        class="bg-gray-100 text-primary px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-primary hover:text-white transition-all">#React</span>
                    <span
                        class="bg-gray-100 text-primary px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-primary hover:text-white transition-all">#WebDev</span>
                    <span
                        class="bg-gray-100 text-primary px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-primary hover:text-white transition-all">#AI</span>
                    <span
                        class="bg-gray-100 text-primary px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-primary hover:text-white transition-all">#DevOps</span>
                </div>
            </div>
            </form>
        </div>

        @forelse ($posts as $post)
            <!-- User's Posts -->
            <div class="bg-white rounded-xl p-5 mb-5 shadow-sm">
                <div class="flex items-center mb-4">
                    <div
                        class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold mr-3">
                        {{ substr($user->name, 0, 2) }}
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1">{{ $user->name }}</h4>
                        <span class="text-gray-600 text-sm">{{ $user->profession }} •
                            {{ Carbon\Carbon::parse($post->created_at)->diffForHumans(['parts' => 1, 'short' => true]) }}</span>
                    </div>
                    <div class="ml-auto">
                        <button class="text-gray-500 hover:text-primary">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="mb-3">
                        {{ $post->content }}
                    </p>
                    @if ($post->codeSnippet)
                        <div class="bg-gray-100 p-4 rounded-lg font-mono my-4 overflow-x-auto">
                            <pre>
                                $post->codeSnippet
                            </pre>
                        </div>
                    @endif
                    @if ($post->images)
                        <img src="{{ $post->images }}" alt="logo">
                    @endif
                    {{-- <p>
                        What do you think? #Laravel #API #Authentication
                    </p> --}}
                </div>
                <div class="flex text-gray-600 text-sm mb-4">
                    <div class="mr-5">{{ $post->likes }} likes</div>
                    <div class="mr-5">8 comments</div>
                    <div>3 shares</div>
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
                        <i class="fa-solid fa-pencil mr-1"></i>
                        <span>Edit</span>
                    </div>
                    <div class="flex items-center ml-8 cursor-pointer transition-all duration-300 hover:text-red-500">
                        <i class="fa-solid fa-trash mr-1"></i>
                        <span>Delete</span>
                    </div>
                </div>
            </div>
        @empty
        @endforelse

        <!-- Load More Button -->
        <div class="flex justify-center my-6">
            <button
                class="bg-white text-primary border border-primary py-2 px-6 rounded-full hover:bg-primary hover:text-white transition-duration-300">
                Load More
            </button>
        </div>

        <!-- Post Statistics -->
        <div class="bg-white rounded-xl p-5 shadow-sm mb-5">
            <h3 class="font-bold text-lg mb-4">Post Statistics</h3>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="text-3xl font-bold text-primary mb-1">{{ count($posts) }}</div>
                    <div class="text-gray-600">Total Posts</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="text-3xl font-bold text-primary mb-1">347</div>
                    <div class="text-gray-600">Total Likes</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="text-3xl font-bold text-primary mb-1">89</div>
                    <div class="text-gray-600">Comments</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle code editor
            document.getElementById('toggle-code-btn').addEventListener('click', function() {
                const codeEditor = document.getElementById('code-editor');
                codeEditor.classList.toggle('hidden');
            });

            // Toggle link input
            document.getElementById('toggle-link-btn').addEventListener('click', function() {
                const linkInput = document.getElementById('link-input');
                linkInput.classList.toggle('hidden');
            });

            // Image upload preview
            document.getElementById('upload-image-btn').addEventListener('click', function() {
                document.getElementById('image-upload').click();
            });

            document.getElementById('image-upload').addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const preview = document.getElementById('preview-image');
                        preview.classList.remove('hidden');
                        preview.innerHTML = `
                            <div class="relative">
                                <img src="${event.target.result}" class="rounded-lg w-full" />
                                <button type="button" class="absolute top-2 right-2 bg-gray-800 bg-opacity-70 text-white rounded-full w-8 h-8 flex items-center justify-center" id="remove-image">
                                    <i class="fa-solid fa-times"></i>
                                </button>
                            </div>
                        `;

                        document.getElementById('remove-image').addEventListener('click', function() {
                            document.getElementById('preview-image').classList.add('hidden');
                            document.getElementById('preview-image').innerHTML = '';
                            document.getElementById('image-upload').value = '';
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Toggle hashtags container
            document.querySelector('.fa-hashtag').parentElement.addEventListener('click', function() {
                const hashtagsContainer = document.getElementById('hashtags-container');
                hashtagsContainer.classList.toggle('hidden');
            });

            // Add hashtags to content
            document.querySelectorAll('#hashtags-container span').forEach(tag => {
                tag.addEventListener('click', function() {
                    const textarea = document.querySelector('textarea[name="content"]');
                    textarea.value += ' ' + this.textContent;
                    this.classList.add('bg-primary');
                    this.classList.add('text-white');
                });
            });
        });
    </script>
</body>

</html>
