<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Model\User\Post;

class NewpostNotify extends Notification implements ShouldQueue
{
    use Queueable;
    public $post;

    public function __construct(Post $post)
    {
        $this->post =  $post;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Hey user, New post availabe')
                    ->greeting('Hello' , 'Subscriber')
                    ->line('There is a new post , hope you will like it')
                    ->line('Post title : '.$this->post->title) 
                    ->action('Read Post' , url('/')) 
                    ->line('Thank you for being with us!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
