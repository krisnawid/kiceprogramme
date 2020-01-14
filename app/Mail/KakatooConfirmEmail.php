<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KakatooConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $emailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailData)
    {
        $this -> emailData = $emailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = array(
            'namaDepan' => $this->emailData['namaDepan'],
            'namaBelakang' => $this->emailData['namaBelakang']
        );

        return $this->view('email.emailconfirmation')
        ->from('admin@kakatoo.com')
        ->subject('Kakatoo')
        ->with(
        [
            'data' => $data
        ]);
        }
}
