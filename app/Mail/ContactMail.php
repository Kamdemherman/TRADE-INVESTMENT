<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $noms = "";
    public $emails = "";
    public $phones = "";
    public $sujets = "";
    public $messages = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$email,$phone,$sujet,$message)
    {
        $this->noms=$nom;
        $this->emails=$email;
        $this->phones=$phone;
        $this->sujets=$sujet;
        $this->messages=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emails)
                    ->subject($this->sujets)
                    ->view('view.envoyer');
    }
}
