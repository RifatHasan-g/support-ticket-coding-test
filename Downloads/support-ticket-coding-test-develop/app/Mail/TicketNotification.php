<?php
namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketNotification extends Mailable {
    use Queueable, SerializesModels;

    public $ticket;
    public $type;

    public function __construct(Ticket $ticket, $type = 'open') {
        $this->ticket = $ticket;
        $this->type = $type;
    }

    public function build() {
        return $this->view('emails.ticket_notification')->subject('Ticket ' . ucfirst($this->type))->with([
            'ticket' => $this->ticket,
            'type' => $this->type
        ]);
    }
}