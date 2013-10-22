<?php

Route::group(array('prefix' => 'customer-service'), function () {

    Route::resource('tickets', 'Capisso\\CustomerService\\TicketController');

});