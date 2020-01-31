@component('contact::emails.layouts.master')

<div>
    <div style="text-align: center;">
        <a href="{{ config('app.url') }}">
            @if (core()->getConfigData('general.design.admin_logo.logo_image'))
            <img src="{{ \Illuminate\Support\Facades\Storage::url(core()->getConfigData('general.design.admin_logo.logo_image')) }}" alt="Bagisto" style="height: 40px; width: 110px;" />
            @else
            <img src="{{ bagisto_asset('images/Logo.png') }}" style="height: 60px;">
            @endif
        </a>
    </div>
    
    <div>
        <b> {!! __('enquiry::app.enquiry.product_id') !!} </b> - {{ $data['product_id'] }} <br>
        <b> {!! __('enquiry::app.enquiry.product_name') !!} </b> - {{ $data['product_name'] }} <br>
        <b> {!! __('enquiry::app.enquiry.product_price') !!} </b> - {{ $data['product_price'] }} <br>
        <b> {!! __('enquiry::app.enquiry.name') !!} </b> - {{ $data['name'] }} <br>
        <b> {!! __('enquiry::app.enquiry.email') !!} </b> - {{ $data['email'] }} <br>
        <b> {!! __('enquiry::app.enquiry.message') !!} </b> - {{ $data['message'] }} 

    </div>
</div>

@endcomponent