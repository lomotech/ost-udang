<?php

namespace App\DataTables;

use App\Models\XrefState;
use Form;
use Yajra\DataTables\Services\DataTable;

class XrefStateDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'xrefStates.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $xrefStates = XrefState::query();

        return $this->applyScopes($xrefStates);
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
            'name_long' => ['name' => 'name_long', 'data' => 'name_long'],
            'ddsa_code' => ['name' => 'ddsa_code', 'data' => 'ddsa_code'],
            'alpha_2' => ['name' => 'alpha_2', 'data' => 'alpha_2'],
            'alpha_3' => ['name' => 'alpha_3', 'data' => 'alpha_3'],
            'capital' => ['name' => 'capital', 'data' => 'capital'],
            'xref_country_id' => ['name' => 'xref_country_id', 'data' => 'xref_country_id'],
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
        return 'xrefStates';
    }
}
