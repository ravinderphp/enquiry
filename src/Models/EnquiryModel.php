<?php

namespace Mccreative\Enquiry\Models;

use Illuminate\Database\Eloquent\Model;

class EnquiryModel extends Model
{
    protected $table = 'product_inquiry';

    protected $fillable = ['product_id', 'product_name', 'product_price','name','email','message'];
}
