<?php

namespace App\Listeners;

use App\Events\NewProposalHasBeenSentEvent;
use App\Mail\NewProposalMail;
use Illuminate\Support\Facades\Mail;

class SendEmailWithNewProposalListener
{
    public function __construct()
    {
    }

    public function handle(NewProposalHasBeenSentEvent $event): void
    {
        Mail::to(config('mail.from.address'))
            ->send(new NewProposalMail($event->proposal));
    }
}
