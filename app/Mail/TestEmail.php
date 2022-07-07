<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->mailData = $mailData;
    }
    //   public $mailData;
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->Subject('Test Email')->view("email.test");
    }
}
