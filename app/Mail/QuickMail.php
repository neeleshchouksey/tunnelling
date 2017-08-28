<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuickMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $quickMail;
    public function __construct($quickMail)
    {
        //
        $this->quickMail    =   $quickMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@tunnellingint.com','admin')->subject($this->quickMail->subject)->view('admin.emails.quickmail.index')->with(array('cmessage'=>$this->quickMail->message));
    }
}
