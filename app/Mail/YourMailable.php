<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YourMailable extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // Pass any data you need in the email here.
    }

    public function build()
    {
        return $this->view('emails.example')
            ->subject('Your Subject Here');
    }
}
