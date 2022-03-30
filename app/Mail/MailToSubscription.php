<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailToSubscription extends Mailable
{
    use Queueable, SerializesModels;

    protected $sub, $msg;

    public function __construct($subject, $msg)
    {
        $this->sub = $subject;
        $this->msg = $msg;
    }


    public function build()
    {
        $msg = $this->msg;
        return $this->subject($this->sub)
            ->view('mail.msg', compact('msg'));
    }
}
