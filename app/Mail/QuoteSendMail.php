<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use PDF;

class QuoteSendMail extends Mailable
{
    use Queueable, SerializesModels;
 public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
         $this->data = $data;
         //dd($data);
    }

    /**
     * Get the message envelope.
     */
   
     public function build()
    {
        // Generate PDF from invoice data
        $pdf = Pdf::loadView('panel.content.quote.pdfView', ['quote' => $this->data]);

        return $this->view('panel.mail.QuoteSendMail') // Text part of the email
                    ->attachData($pdf->output(), 'quote.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
