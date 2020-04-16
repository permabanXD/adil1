<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Registermail extends Mailable
{
    use Queueable, SerializesModels;
    public $adil;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($adil)
    {
        $this->adil=$adil;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adil@toutreussir.com')->view('mail.newsletter',compact('adil'));
    }
}
