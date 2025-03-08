<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Events\LikeNotification as LikeEvent;
use App\Events\TestNotification;
use App\Notifications\LikeNotification as LikeNotification;

class LikeButton extends Component
{
    public $post;
    public $isLiked;

    public function mount($post)
    {
        $this->post = $post;
        $this->isLiked = $this->post->isLikedBy(Auth::user());
    }

    public function toggleLike()
    {
        if ($this->isLiked) {
            $this->post->likes()->where('user_id', Auth::user()->id)->delete();
            $this->isLiked = false;
        } else {
            $this->post->likes()->create(['user_id' => Auth::user()->id]);
            $this->isLiked = true;

            if ($this->post->user_id !== auth()->id()) {
                // event(new LikeEvent([
                //     'author' => auth()->user()->name,
                //     'title' => $this->post->content,
                // ], $this->post->user_id));
                event(new TestNotification([
                    'author' => auth()->user()->name,
                    'title' => $this->post->content,
                ]));
                $user = User::find($this->post->user_id);
                $post = $this->post;
                $user->notify(new LikeNotification($post));
            }
        }
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
