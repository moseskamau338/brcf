<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public ?object $details = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->details = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
        {
        return $this->from('admin@bethraphafoundation.org', 'Beth Rapha Foundation')
            ->subject('New message from '.$this->details->name)
            ->view('emails.message-created');
    }
}
