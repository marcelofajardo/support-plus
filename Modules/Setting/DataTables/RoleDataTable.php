<?php

namespace Modules\Setting\DataTables;


use Modules\Setting\Models\Role;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class RoleDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addcolumn('status', function ($model) {
                $route = 'users';
                return view('backend.partials._status', compact('model', 'route'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'roles';
                return view('setting::role._action', compact('model', 'route'))->render();
            })
            ->rawColumns(['status', 'action']);
    }


    public function query(Role $model)
    {
        return $model->where('id', '!=', '1');
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('roles')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->autoWidth(false)
            ->dom('Blfrtip')
            ->buttons(
                Button::make('export'),
            )
            ->orderBy(1, 'asc');
    }

    protected function getColumns()
    {
        return [

            Column::make('DT_RowIndex')
                ->title('#')
                ->searchable(false)
                ->orderable(false),
            Column::make('name')->title(trans('common.Name')),
            Column::computed('status')
                ->exportable(false)
                ->printable(false)
                ->title(trans('common.Status')),
            Column::computed('action')
                ->title(trans('common.Action'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'roles' . date('YmdHis');
    }
}
