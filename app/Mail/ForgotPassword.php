<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            subject: 'Forgot Password',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.forgotPassword',
            with: [
                'token' => $this->token,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
