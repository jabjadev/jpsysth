<?php

namespace App\Mailers;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Mailgun\Mailgun;

class MailgunMailer extends Mailable
{
    use Queueable, SerializesModels;

    protected $mailgun;
    protected $domain;

    /**
     * Create a new message instance.
     */
    public function __construct(Mailgun $mailgun, $domain)
    {
        $this->mailgun = $mailgun;
        $this->domain = $domain;
    }

    public function sendContactInformation($data)
    {
        $response = $this->mailgun->messages()->send($this->domain, [
            'from'    => 'contact@yourdomain.com',
            'to'      => 'info@yourcompany.com',
            'subject' => 'New Contact Form Submission',
            'text'    => "You have received a new message from {$data['name']}.\nEmail: {$data['email']}\nMessage: {$data['message']}"
        ]);

        return $response;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mailgun Mailer',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
