@extends('admin::layouts.content')

@section('page_title')
{{ __('enquiry::app.enquiry.title') }}
@stop

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h1>{{ __('enquiry::app.enquiry.title') }}</h1>
        </div>
        
    </div>

    <div class="page-content">
            @inject('enquiryGrid', 'Mcc\Enquiry\DataGrids\EnquiryDataGrid')
            {!! $enquiryGrid->render() !!}
        </div>
</div>


@stop

@push('scripts')
    @include('admin::export.export', ['gridName' => $enquiryGrid])
@endpush

