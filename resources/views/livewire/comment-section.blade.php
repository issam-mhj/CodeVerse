<div>
    <!-- Comment Form -->
    <form wire:submit.prevent="addComment">
        <div class="flex-1 relative">
            <textarea wire:model="content"
                class="w-full border border-gray-200 rounded-xl p-3 pl-4 pr-12 text-sm resize-none focus:outline-none focus:ring-1 focus:ring-primary"
                name="content" placeholder="Write your comment..." rows="1"></textarea>
            <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-primary hover:text-primary-dark">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </div>
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
                        <img class="w-10 h-10 rounded-full"
                            src="{{ $comment->user->image ? asset('storage/' . $comment->user->image) : 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png' }}"
                            alt="image">
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-xl p-3 mb-1">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="font-medium text-sm">{{ $comment->user->name }}</span>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-xs text-gray-500">{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans(['parts' => 1, 'short' => true]) }}</span>
                                        @if (auth()->id() === $comment->user_id)
                                            <button wire:click="deleteComment({{ $comment->id }})"
                                                class="text-red-500 hover:text-red-700 text-xs" title="Delete comment">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        @endif
                                    </div>
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
