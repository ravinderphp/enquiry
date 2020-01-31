<?php

namespace Mccreative\Enquiry\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;


class EnquiryDataGrid extends DataGrid
{
    protected $index = 'id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('product_inquiry')->select('id', 'product_id', 'product_name', 'product_price', 'name', 'email', 'message','created_at');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => trans('admin::app.datagrid.id'),
            'type' => 'number',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'product_id',
            'label' => trans('enquiry::app.enquiry.product_id'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'product_name',
            'label' => trans('enquiry::app.enquiry.product_name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'product_price',
            'label' => trans('enquiry::app.enquiry.product_price'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'name',
            'label' => trans('enquiry::app.enquiry.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'email',
            'label' => trans('enquiry::app.enquiry.email'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);
        $this->addColumn([
            'index' => 'message',
            'label' => trans('enquiry::app.enquiry.message'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);
        $this->addColumn([
            'index' => 'created_at',
            'label' => trans('enquiry::app.enquiry.created_at'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
            'closure' => true,
            'wrapper' => function ($value) {
                return date("d-m-Y", strtotime($value->created_at));
            }
        ]);
    }

    public function prepareActions() {
        
    }

    public function prepareMassActions()
    {
        
    }
}