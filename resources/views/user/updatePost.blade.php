<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevConnect - My Posts</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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

    <!-- Main Content Area -->
    <div class="ml-64 flex-1 p-5">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">update post</h1>
            <!-- Search and filter options -->
            <div class="flex items-center">
                <div class="relative mr-4">
                    <input type="text" placeholder="Search posts..."
                        class="py-2 px-4 pl-10 rounded-full border border-gray-200 focus:outline-none focus:border-primary transition-all duration-300 w-64 text-gray-700">
                    <i class="fa-solid fa-search absolute left-4 top-3 text-gray-400"></i>
                </div>
                <select
                    class="py-2 px-4 rounded-full border border-gray-200 focus:outline-none focus:border-primary transition-all duration-300 bg-white text-gray-700">
                    <option value="recent">Most Recent</option>
                    <option value="popular">Most Popular</option>
                    <option value="commented">Most Commented</option>
                </select>
            </div>
        </div>


        <!-- Post Item -->
        <div class="bg-white rounded-xl p-6 mb-6 shadow-md hover:shadow-lg transition-shadow duration-300">
            <!-- Post Header -->
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
            <!-- Action Buttons -->
            <div class="flex border-t border-gray-100 pt-4">

                <div class="flex ml-auto">
                    <!-- Edit Button -->
                    <button onclick="toggleEditForm()"
                        class="flex items-center justify-center px-3 py-2 rounded-lg transition-all duration-200 hover:bg-gray-50 text-gray-600 hover:text-primary mr-2">
                        <i class="fa-solid fa-pencil mr-1"></i>
                        <span>Edit</span>
                    </button>
                </div>
            </div>
            <div id="edit-form" class="hidden bg-gray-50 p-5 rounded-lg mt-4">
                <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <textarea name="content" class="w-full border-none outline-none resize-none py-2 text-base bg-transparent h-24"
                        placeholder="Update your post...">{{ $post->content }}</textarea>
                    <div id="code-editor" class="{{ $post->codeSnippet ? '' : 'hidden' }}">
                        <select name="language" class="py-2 px-4 border border-gray-200 rounded-md text-sm mb-2">
                            <option value="javascript" {{ $post->language == 'javascript' ? 'selected' : '' }}>
                                JavaScript</option>
                            <option value="python" {{ $post->language == 'python' ? 'selected' : '' }}>Python
                            </option>
                            <option value="java" {{ $post->language == 'java' ? 'selected' : '' }}>Java</option>
                            <option value="php" {{ $post->language == 'php' ? 'selected' : '' }}>PHP</option>
                            <option value="html" {{ $post->language == 'html' ? 'selected' : '' }}>HTML</option>
                            <option value="css" {{ $post->language == 'css' ? 'selected' : '' }}>CSS</option>
                            <option value="ruby" {{ $post->language == 'ruby' ? 'selected' : '' }}>Ruby</option>
                            <option value="go" {{ $post->language == 'go' ? 'selected' : '' }}>Go</option>
                            <option value="typescript" {{ $post->language == 'typescript' ? 'selected' : '' }}>
                                TypeScript</option>
                        </select>
                        <textarea name="codeSnippet"
                            class="w-full border border-gray-200 outline-none resize-none py-2 px-4 text-base bg-gray-50 font-mono rounded-md h-32"
                            placeholder="// Paste your code here">{{ $post->codeSnippet }}</textarea>
                    </div>
                    <div id="preview-image" class="my-2 max-w-sm">

                    </div>
                    <div id="link-input" class="{{ $post->link ? '' : 'hidden' }} my-2">
                        <input type="url" name="link"
                            class="w-full border border-gray-200 outline-none py-2 px-4 text-base bg-gray-50 rounded-md"
                            placeholder="https://example.com" value="{{ $post->link }}">
                    </div>
                    <div class="flex border-t border-gray-200 pt-4 mt-2">
                        <div class="flex items-center mr-5 text-primary cursor-pointer"
                            onclick="document.getElementById('image-upload').click()">
                            <i class="fa-solid fa-image mr-1"></i>
                            <span>Image</span>
                            <input type="file" name="image" class="hidden" id="image-upload"
                                onchange="previewImage(event)">
                        </div>
                        <div class="flex items-center mr-5 text-primary cursor-pointer" onclick="toggleCodeEditor()">
                            <i class="fa-solid fa-code mr-1"></i>
                            <span>Code</span>
                        </div>
                        <div class="flex items-center mr-5 text-primary cursor-pointer" onclick="toggleLinkInput()">
                            <i class="fa-solid fa-link mr-1"></i>
                            <span>Link</span>
                        </div>
                        <div class="flex-1"></div>
                        <button type="submit"
                            class="bg-primary text-white border-none rounded-full py-2 px-5 cursor-pointer transition-all duration-300 hover:bg-primary-dark">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        // JavaScript for interactive elements
        function toggleEditForm() {
            const editForm = document.getElementById('edit-form');
            editForm.classList.toggle('hidden');
        }

        function toggleCodeEditor() {
            const codeEditor = document.getElementById('code-editor');
            codeEditor.classList.toggle('hidden');
        }

        function toggleLinkInput() {
            const linkInput = document.getElementById('link-input');
            linkInput.classList.toggle('hidden');
        }

        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const preview = document.getElementById('preview-image');
                    preview.innerHTML = `
                        <div class="relative">
                            <img src="${event.target.result}" class="rounded-lg w-full" />
                            <button type="button" class="absolute top-2 right-2 bg-gray-800 bg-opacity-70 text-white rounded-full w-8 h-8 flex items-center justify-center" onclick="removeImage()">
                                <i class="fa-solid fa-times"></i>
                            </button>
                        </div>
                    `;
                };
                reader.readAsDataURL(file);
            }
        }

        function removeImage() {
            const preview = document.getElementById('preview-image');
            preview.innerHTML = '';
            document.getElementById('image-upload').value = '';
        }
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
