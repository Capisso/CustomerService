<?php

return array(
    'sidebar' => array(
        array(
            'name' => 'Support',
            'icon' => 'icon-question-sign',
            'children' => array(
                array(
                    'href' => 'Capisso\\CustomerService\\TicketController@index',
                    'name' => 'View Tickets',
                    'icon' => 'icon-double-angle-right'
                )
            )
        )
    )
);