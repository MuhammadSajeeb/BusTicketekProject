<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookedMail extends Mailable
{
    public $tickets;
    public $orderNumber;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tickets,$orderNumber)
    {
        $this->tickets=$tickets;
        $this->orderNumber=$orderNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject='Booking Detail';
        return $this->markdown('mail.booked')
                    ->subject($subject)
                    ->with([
                        'tickets' => $this->tickets,
                        'orderNumber' => $this->orderNumber
                    ]);
    }
}
