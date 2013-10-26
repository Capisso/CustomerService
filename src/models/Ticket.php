<?php

class Ticket extends Eloquent {

    public function customer() {
        return $this->belongsTo('User');
    }

    public function responses() {
        return $this->hasMany('TicketResponse');
    }

    public static function getPriorities() {
        return array(
            'normal' => 'Normal',
            'critical' => 'Critical'
        );
    }

    public static function getStatuses() {
        return array(
            "new" => "New",
            "assigned" => "Assigned",
            "in-progress" => "In Progress",
            "more-info" => "More Info",
            "hold" => "Hold",
            "solved" => "Solved",
            "closed" => "Closed",
        );
    }

} 