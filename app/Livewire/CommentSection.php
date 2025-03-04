<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use SebastianBergmann\CodeUnit\FunctionUnit;

class CommentSection extends Component
{

    public $post;
    public $comments;
    public $content;

    protected $rules = [
        'content' => 'required|max:255',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->comments = $post->comments()->get();
    }

    public function addComment()
    {
        $this->validate();

        Comment::create([
            'comment' => $this->content,
            'post_id' => $this->post->id,
            'user_id' => auth()->id()
        ]);

        $this->content = '';
        $this->comments = $this->post->comments()->get();
    }

    public function render()
    {
        return view('livewire.comment-section');
    }
}
