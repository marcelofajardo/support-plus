<?php

namespace Modules\Setting\DataTables;


use Modules\Setting\Models\Language;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class LanguageDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addcolumn('rtl', function ($model) {
                return view('setting::language.partials.rtl', compact('model'))->render();
            })->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })->addcolumn('action', function ($model) {
                $route = 'localization.languages';
                return view('setting::language.partials.action', compact('model', 'route'))->render();
            })
            ->rawColumns(['rtl', 'status', 'action']);
    }


    public function query(Language $model)
    {
        return $model->newQuery()->orderBy('status', 'desc')->orderBy('name', 'asc');
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('languages')
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
                ->title('SL')
                ->width(20)
                ->searchable(false)
                ->orderable(false),
            Column::make('name')->title(trans('common.Name')),
            Column::make('native')->title(trans('common.Native')),
            Column::make('code')->title(trans('common.Code')),
            Column::computed('rtl')
                ->title(trans('common.Name'))
                ->exportable(false)
                ->printable(false),
            Column::computed('status')
                ->title(trans('common.Status'))
                ->exportable(false)
                ->printable(false),
            Column::computed('action')
                ->title(trans('common.Action'))
                ->exportable(false)
                ->printable(false)
                ->width(10)
                ->addClass('text-center'),

        ];
    }

    protected function filename()
    {
        return 'Languages_' . date('YmdHis');
    }
}
