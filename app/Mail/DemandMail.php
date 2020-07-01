<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemandMail extends Mailable
{
    public $client_name;
    public $client_email;
    public $demand_content;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client_name, $client_email, $demand_content)
    {
        $this->client_name = $client_name;
        $this->client_email = $client_email;
        $this->demand_content = $demand_content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.demandMail');
    }
}
