<?php

namespace Modules\Setting\DataTables;


use Modules\Setting\Models\City;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CityDataTable extends DataTable
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
                $route = 'cities';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })
            ->rawColumns(['status', 'action']);
    }


    public function query(City $model)
    {
        return $model->newQuery()->with('country', 'state');
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('states')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->autoWidth(false)
            ->dom('Blfrtip')
            ->buttons(
                Button::make('export'),
            )
            ->orderBy(1);
    }

    protected function getColumns()
    {
        return [

            Column::make('DT_RowIndex')
                ->title('#')
                ->searchable(false)
                ->orderable(false),
            Column::make('country.name')
                ->title(trans('setting.Country')),
            Column::make('state.name')
                ->title(trans('setting.State')),
            Column::make('name')->title(trans('common.Name')),
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
        return 'cities' . date('YmdHis');
    }
}
