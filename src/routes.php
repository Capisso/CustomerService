<?php
Route::group(array('before' => 'auth'), function () {

    Route::group(array('prefix' => 'customer-service'), function () {

        Route::resource('tickets', 'Capisso\\CustomerService\\TicketController');

    });

});
