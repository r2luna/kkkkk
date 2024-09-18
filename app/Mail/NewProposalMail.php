<?php

namespace App\Mail;

use App\Models\Proposal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewProposalMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public Proposal $proposal)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Proposal for Project :: '. $this->proposal->project->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.new-proposal',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
