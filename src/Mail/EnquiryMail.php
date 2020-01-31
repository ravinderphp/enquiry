<?php

namespace Mccreative\Enquiry\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;
    public $enquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('ravinder@multichannelcreative.co.uk')
                ->from('info@checksample.co.uk')
                ->subject(__('enquiry::app.enquiry.title'))
                ->view('enquiry::emails.enquiry.enquirymail')->with('data', $this->enquiry);
    }
}
