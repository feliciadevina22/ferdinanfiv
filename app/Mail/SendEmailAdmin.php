<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $names;
    public $messages;
    public $emails;
    public $subjects;
    public $adminmessages;

    public function __construct($name, $message, $email, $subject, $adminmessage)
    {
        $this->names =   $name;
        $this->messages =   $message;
        $this->emails =   $email;
        $this->subjects = $subject;
        $this->adminmessages = $adminmessage;
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
        $e_subject = $this->subjects;
        $e_amessage = $this->adminmessages;

        return $this->view('email.sendadminmessagetemplate', compact("e_message", "e_name", "e_amessage"))->subject($e_subject);
    }
}
