<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PackageNotification extends Notification
{
    use Queueable;

    protected $package;
    /**
     * Create a new notification instance.
     */
    public function __construct($package)
    {
        $this->package = $package;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('This is the most amazing package ever. Advut.')
            ->action('Send Notification again', url('/'))
            ->line('Thank you for using our application!');
    }


    public function toDatabse($notifiable){
        return [
            $package_id = $this->package['id'],
        ];
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
           //
        ];
    }
}
