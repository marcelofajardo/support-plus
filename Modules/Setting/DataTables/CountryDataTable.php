<?php

namespace Modules\Setting\DataTables;


use Modules\Setting\Models\Country;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CountryDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'countries';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })
            ->rawColumns(['status', 'action']);
    }


    public function query(Country $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('countries')
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
            Column::make('code')->title(trans('common.Code')),
            Column::computed('status')
                ->exportable(false)
                ->title(trans('common.Status'))
                ->printable(false),
            Column::computed('action')
                ->title(trans('common.Action'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'Countries' . date('YmdHis');
    }
}
