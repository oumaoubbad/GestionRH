<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Candidat;


class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */



     public function __construct()
     {
      }



    public function build()
    {
        return $this->subject('Invitation à l\'entretien avec ORMVAL')
                    ->view('emails.confirmation');

    }



    // public function build()
    // {
    //     return $this->subject('invitation à l\'entretien avec ORMVAL')
    //                 ->view('emails.confirmation');
    // }
}
