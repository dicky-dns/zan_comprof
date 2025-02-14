<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $user)
    {
        $this->data = $data;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ('contact' == $this->data->type) {
            return $this->subject('New message from %s '.$this->data->name)
                ->view('mail.message');
        } else {
            return $this->subject('New message from %s '.$this->data->name)
                ->view('mail.enquiry');
        }
    }
}
