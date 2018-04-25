<?php

namespace App\DataTables;

use App\Models\XrefSubdistrict;
use Form;
use Yajra\DataTables\Services\DataTable;

class XrefSubdistrictDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'xrefSubdistricts.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $xrefSubdistricts = XrefSubdistrict::query();

        return $this->applyScopes($xrefSubdistricts);
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
            'level' => ['name' => 'level', 'data' => 'level'],
            'xref_district_id' => ['name' => 'xref_district_id', 'data' => 'xref_district_id'],
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
        return 'xrefSubdistricts';
    }
}
