<div>
    <!-- Comment Form -->
    <form wire:submit.prevent="addComment">
        <textarea wire:model="content" placeholder="Add a comment..." class="border rounded p-2"></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Post</button>
    </form>

    <!-- Display Comments -->
    <div class="mt-4">
        <button class="flex items-center space-x-2 text-gray-500 hover:text-blue-500">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
            <p>{{ $post->comments()->count() }} comments</p>
        </button>
        @if ($post->comments && $post->comments->count() > 0)
            <div class="space-y-4 max-h-96 overflow-y-auto pr-1 pb-2">
                @foreach ($post->comments as $comment)
                    <div class="flex gap-3">
                        <div
                            class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center text-white text-sm flex-shrink-0">
                            {{ substr($comment->user->name, 0, 2) }}
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-xl p-3 mb-1">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="font-medium text-sm">{{ $comment->user->name }}</span>
                                    <span
                                        class="text-xs text-gray-500">{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans(['parts' => 1, 'short' => true]) }}</span>
                                </div>
                                <p class="text-sm text-gray-700">{{ $comment->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="py-4 text-center text-gray-500 text-sm">
                <p>No comments yet. Be the first to comment!</p>
            </div>
        @endif
    </div>
</div>
