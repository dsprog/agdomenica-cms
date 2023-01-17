<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SacSend extends Mailable
{
    use Queueable, SerializesModels;

    protected $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $body = $this->date;
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject('Sac')
            ->view('emails.SacSend')
            ->with(compact('body'));
    }
}
