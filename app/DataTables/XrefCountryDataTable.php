<?php

namespace App\DataTables;

use App\Models\XrefCountry;
use Form;
use Yajra\DataTables\Services\DataTable;

class XrefCountryDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'xrefCountries.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $xrefCountries = XrefCountry::query();

        return $this->applyScopes($xrefCountries);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'create',
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ]
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'slug' => ['name' => 'slug', 'data' => 'slug'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'ddsa_code' => ['name' => 'ddsa_code', 'data' => 'ddsa_code'],
            'alpha_2' => ['name' => 'alpha_2', 'data' => 'alpha_2'],
            'alpha_3' => ['name' => 'alpha_3', 'data' => 'alpha_3'],
            'olympic' => ['name' => 'olympic', 'data' => 'olympic'],
            'fifa' => ['name' => 'fifa', 'data' => 'fifa'],
            'currency_name' => ['name' => 'currency_name', 'data' => 'currency_name'],
            'currency_alpha' => ['name' => 'currency_alpha', 'data' => 'currency_alpha'],
            'currency_minor_decimal' => ['name' => 'currency_minor_decimal', 'data' => 'currency_minor_decimal'],
            'capital' => ['name' => 'capital', 'data' => 'capital'],
            'nationality' => ['name' => 'nationality', 'data' => 'nationality'],
            'latitude' => ['name' => 'latitude', 'data' => 'latitude'],
            'longitude' => ['name' => 'longitude', 'data' => 'longitude'],
            'active_at' => ['name' => 'active_at', 'data' => 'active_at'],
            'inactive_at' => ['name' => 'inactive_at', 'data' => 'inactive_at'],
            'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'xrefCountries';
    }
}
