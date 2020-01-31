<?php

Route::prefix('admin/product/enquiry')->group(function () {

    Route::get('list', 'Mcc\Enquiry\Http\Controllers\EnquiryController@list')->name('enquiry.list');

});

