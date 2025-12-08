<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    // Accept data from Controller
    public function __construct($data)
    {
        $this->data = $data;
    }

    // Build the email
    public function build()
    {
        return $this->subject('New Luca World Records Submission')
                    ->view('emails.form_submission')
                    ->with(['data' => $this->data]);
    }
}
