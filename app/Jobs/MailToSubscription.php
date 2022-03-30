<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MailToSubscription implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $send_mail, $data;

    public function __construct($send_mail, $data)
    {
        $this->send_mail = $send_mail;
        $this->data = $data;
    }


    public function handle()
    {
        $email = new \App\Mail\MailToSubscription($this->data['subject'], $this->data['details']);
        Mail::to($this->send_mail)->send($email);
    }
}
