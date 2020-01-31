<?php

return [
    [
        'key' => 'enquiry',          // uniquely defined key for menu-icon
        'name' => 'Enquiry',        //  name of menu-icon
        'route' => 'enquiry.list',  // the route for your menu-icon
        'sort' => 6,                    // Sort number on which your menu-icon should display
        'icon-class' => 'dashboard-icon',   //class of menu-icon
    ], [
        'key' => 'enquiry.list',
        'name' => 'Enquiries',
        'route' => 'enquiry.list',
        'sort' => 1
    ]
];