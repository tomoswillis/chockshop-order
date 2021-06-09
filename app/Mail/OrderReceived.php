<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $orderedItems;
    public $order;

    // public $totalCost;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderedItems, $order)
    {

        // $this->$totalCost;
        $this->order   = $order;
        $this->orderedItems = $orderedItems;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.received');
    }
}
