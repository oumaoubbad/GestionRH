<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ParticipantsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $reunionData;

    public function __construct($reunionData)
    {
        $this->reunionData = $reunionData;
    }

    public function build()
    {
        $googleMeetLink = 'https://meet.google.com/'.uniqid(); // Génère un identifiant unique pour chaque lien Google Meet

        return $this->view('emails.participant')
                    ->subject('Invitation à une réunion')
                    ->with([
                        'reunionData' => $this->reunionData,
                        'googleMeetLink' => $googleMeetLink

                    ]);
    }
}
