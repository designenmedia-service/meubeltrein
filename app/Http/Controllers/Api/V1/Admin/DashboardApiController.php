<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Services\ChartsService;

class DashboardApiController extends Controller
{
    public function index()
    {
        $latest0 = new ChartsService([
            'title'            => 'Customers latest',
            'chart_type'       => 'latest',
            'model'            => 'App\CrmCustomer',
            'column_class'     => 'col-md-12',
            'fields'           => ['id', 'first_name', 'last_name', 'email', 'phone'],
            'limit'            => 10,
            'filter_by_field'  => 'created_at',
            'filter_by_period' => 7,
        ]);

        $stats1 = new ChartsService([
            'title'            => 'Nieuwe klanten',
            'chart_type'       => 'stats',
            'model'            => 'App\CrmCustomer',
            'column_class'     => 'col-md-12',
            'footer_icon'      => 'date_range',
            'footer_text'      => 'Last 7 days',
            'filter_by_field'  => 'created_at',
            'filter_by_period' => 7,
        ]);

        return response()->json(compact('latest0', 'stats1'));
    }
}
