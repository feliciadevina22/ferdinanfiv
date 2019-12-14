<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $names;
    public $messages;
    public $emails;

    public function __construct($name, $message, $email)
    {
        $this->names =   $name;
        $this->messages =   $message;
        $this->emails =   $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_name = $this->names;
        $e_email = $this->emails;
        $e_message = $this->messages;

        return $this->view('email.sendemailtemplate', compact("e_message", "e_name", "e_email"))->subject("FerdinanFiv Autoemails");
    }
}
