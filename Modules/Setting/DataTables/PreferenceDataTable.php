<?php

namespace Modules\Setting\DataTables;


use Modules\Setting\Models\Preference;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PreferenceDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('text', function ($model) {
                return $model->text;
            })
            ->editColumn('details', function ($model) {
                return $model->details;
            })
            ->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'preferences';
                return view('partials._common_edit_action', compact('model', 'route'))->render();
            })
            ->rawColumns(['status', 'action']);
    }


    public function query(Preference $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('preferences')
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
            Column::make('text')->title(trans('common.Text')),
            Column::make('details')->title(trans('common.Details')),
            Column::computed('status')
                ->exportable(false)
                ->title(trans('common.Status'))
                ->printable(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(10)
                ->title(trans('common.Action'))
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'Preferences' . date('YmdHis');
    }
}
