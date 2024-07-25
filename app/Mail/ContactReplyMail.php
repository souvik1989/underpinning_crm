<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Support\Facades\Storage;

class ContactReplyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $message;
    public array $data;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $message , array $data)
    {
        $this->subject = $subject;
        $this->message = $message;
        //$this->attachments = $attachments;
        $this->data = $data;
       //dd($this->attachments[0]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:$this->subject ?? '',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'panel.mail.replyMail',
            with: ['msg' => $this->message ?? '']
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
//   public function attachments(): array
// {
//   // dd(0);
//     //  $attachments = [];

//     //     if ($this->data) {
//     //         foreach ($this->data['attachments'] as $key => $attachmentPath) {
//     //             $attachments[] = Attachment::fromPath(Storage::path($attachmentPath), [
//     //                 'as' => basename($attachmentPath),
//     //                 'mime' => Storage::mimeType($attachmentPath),
//     //             ]);
//     //         }
//     //     }
    
//     //     return $attachments;
//     $attachments = [];

//     if (isset($this->data['attachments']) && is_array($this->data['attachments']) && !empty($this->data['attachments'])) {
//         foreach ($this->data['attachments'] as $attachmentPath) {
//             if (is_string($attachmentPath) && !empty($attachmentPath)) {
//                 $fileFullPath = Storage::path($attachmentPath);
//                 if (file_exists($fileFullPath)) { // Check if file exists before attaching
//                     $attachments[] = Attachment::fromPath($fileFullPath, [
//                         'as' => basename($attachmentPath),
//                         'mime' => Storage::mimeType($attachmentPath),
//                     ]);
//                 }
//             }
//         }
//     }

//     return $attachments;
// }


public function attachments(): array
{
    $attachments = [];

    if (isset($this->data['attachments']) && is_array($this->data['attachments']) && !empty($this->data['attachments'])) {
        foreach ($this->data['attachments'] as $attachmentPath) {
            if (is_string($attachmentPath) && !empty($attachmentPath)) {
                $fileFullPath = Storage::path($attachmentPath);
                if (file_exists($fileFullPath)) {
                    $attachments[] = Attachment::fromPath($fileFullPath, [
                        'as' => basename($attachmentPath),
                        'mime' => Storage::mimeType($attachmentPath),
                    ]);
                } else {
                    // Log the error or handle it in some other way
                    \Log::error("Attachment file not found: " . $fileFullPath);
                }
            }
        }
    }

    return $attachments;
}
}
