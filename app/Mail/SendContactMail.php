<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $mail_data;

    /**
     * Create a new mail_data instance.
     *
     * @return void
     */
    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    /**
     * Build the mail_data.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->mail_data['subject'])
        ->markdown('email.contact', [
            'text' => $this->mail_data['text'],
            'name' => $this->mail_data['name'],
            'phone_number' => $this->mail_data['phone_number'],
        ]);
    }
}