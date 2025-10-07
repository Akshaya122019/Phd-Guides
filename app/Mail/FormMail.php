<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $pdfPath; 
    /**
     * Create a new message instance.;
     */
    public function __construct($formData, $pdfPath = null)
    {
        $this->formData = $formData;
        $this->pdfPath  = $pdfPath; 
    }
    /**
     * Build the message.
     */
    public function build()
    {
        $mail = $this->subject('New Form Submission')
                     ->view('mail.mail')
                     ->with('formData', $this->formData);

        // Attach PDF if available
        if ($this->pdfPath) {
            $mail->attach($this->pdfPath, [
                'as'   => 'form-submission.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        return $mail;
    }

}