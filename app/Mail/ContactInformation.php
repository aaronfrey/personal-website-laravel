<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactInformation extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $telephone, $website, $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data) {
        $this->name         = $data['name'];
        $this->email        = $data['email'];
        $this->telephone    = $data['telephone'];
        $this->website      = $data['website'];
        $this->details      = $data['details'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('emails.contact');
    }
}
