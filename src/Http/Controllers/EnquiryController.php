<?php

namespace Mccreative\Enquiry\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EnquiryController extends Controller
{
    public function list(){
        return view('enquiry::enquiry.index'); 
    }
}
