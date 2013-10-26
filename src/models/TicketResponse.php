<?php

class TicketResponse extends Eloquent {

    protected $table = 'ticket_responses';

    public function ticket() {
        return $this->belongsTo('Ticket');
    }

} 