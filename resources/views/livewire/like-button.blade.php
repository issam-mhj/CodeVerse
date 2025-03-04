<div>
    <button wire:click="toggleLike"
        class="flex items-center justify-center mr-4 flex-1 py-2 rounded-lg transition-all duration-200 hover:bg-gray-50 {{ $isLiked ? 'text-red-500' : 'text-gray-600 hover:text-primary' }}"
        aria-label="{{ $isLiked ? 'Unlike' : 'Like' }}">
        <i class="{{ $isLiked ? 'fa-solid' : 'fa-regular' }} fa-heart mr-2"></i>
        <span>{{ $isLiked ? 'Unlike' : 'Like' }}</span>
    </button>
    <span class="text-sm text-gray-600">{{ $post->likes->count() }} Likes</span>
</div>
