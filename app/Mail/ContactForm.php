<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
  use Queueable, SerializesModels;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($contact)
  {
    $this->contact = $contact;
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    return $this
    ->from('example@example.com')
    ->subject('Request For Meeting with Tyler J. Radlick')
    ->view('emails.contact')
    ->with([
      'contact' => $this->contact,
    ])
    ->attach('files/TylerRadlickResume.pdf', [
      'as' => 'TylerRadlickResume.pdf',
      'mime' => 'application/pdf',
    ]);
  }
}
