<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\EmailSents;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $user;
    public $emailSents;
    public $body;

    
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->emailSents = EmailSents::where('sending_user_id',auth()->user()->id)->take(1)->orderBy('created_at', 'desc')->get();
        $this->body=$this->emailSents[0]->body;
        
    }

    // public function build()
    // {
    //     return $this->from('presto.it@noreply.com')->view('mail.become_revisor');
    // }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'hai ricevunto una nuova richesta di revisore',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.become_revisor',
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
