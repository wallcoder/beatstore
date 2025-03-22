<?php
namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $frontendUrl = env('CLIENT_URL', 'http://localhost:5173'); // Ensure this is set in .env

        return (new MailMessage)
            ->subject('Reset Password Notification')
            ->line('You requested a password reset. Click the button below to reset your password:')
            ->action('Reset Password', "{$frontendUrl}/reset-password?token={$this->token}&email={$notifiable->email}")
            ->line('If you did not request this, no action is required.');
    }
}
