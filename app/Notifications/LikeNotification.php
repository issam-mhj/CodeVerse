<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;

class LikeNotification extends Notification
{
    use Queueable;

    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    // Store the notification in the database
    public function toDatabase($notifiable)
    {
        return [
            'author' => $this->post->user->name,
            'title' => $this->post->text,
            'message' => 'Your post "' . $this->post->text . '" has been liked by ' . auth()->user()->name,
            'post_id' => $this->post->id
        ];
    }

    // Broadcast the notification using Pusher
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'author' => $this->post->user_id,
            'title' => $this->post->content,
            'message' => 'Your post ' . $this->post->content . ' has been liked by ' . $this->post->user_id,
        ]);
    }

    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }
}
