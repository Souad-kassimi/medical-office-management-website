<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

    public function __construct($data)
    {
        $this->data = $data;
    }
   
    
    public function build() 
    {
        return $this->from($this-> data['email'],$this-> data['name'])
                    ->subject('Contact le cabinet de dr samira bekrit')
                    ->view('med.dashbord.data')
                    ->with(['data' => $this->data]); // Passer les données à la vue de l'e-mail
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact le cabinet de dr samira bekrit',
        
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // "}

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
