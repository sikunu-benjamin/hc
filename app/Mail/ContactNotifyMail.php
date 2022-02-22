<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message_details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message_details)
    {
        $this->message_details = $message_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->message_details->subject);
        return $this->subject($this->message_details->subject)
            ->markdown('emails.contact')
            ->with(['message_details' => $this->message_details]);
    }
}
