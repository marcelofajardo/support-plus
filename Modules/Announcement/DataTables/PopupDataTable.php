<?php

namespace Modules\Announcement\DataTables;

use Modules\Announcement\Models\Popup;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PopupDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('title', function ($model) {
                return $model->title;
            })
            ->editColumn('image', function ($model) {
                return '<img class="thumb-img" src="' . assetPath($model->image) . '">';
            })
            ->editColumn('bg', function ($model) {
                return '<img class="thumb-img" src="' . assetPath($model->bg) . '">';
            })
            ->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'popups';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })->rawColumns(['status', 'action', 'image', 'bg']);
    }


    public function query(Popup $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('popups')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->autoWidth(false)
            ->dom('Blfrtip')
            ->buttons(
                Button::make('export')->text(trans('common.Export')),
            )
            ->orderBy(0);
    }

    protected function getColumns()
    {
        return [

            Column::make('DT_RowIndex')
                ->title('#')
                ->searchable(false)
                ->orderable(false),
            Column::make('image')
                ->title(trans('common.Image')),
            Column::make('bg')
                ->title(trans('common.Background')),
            Column::make('title')
                ->title(trans('common.Title')),
            Column::make('order')
                ->title(trans('common.Order')),
            Column::computed('status')
                ->exportable(false)
                ->title(trans('common.Status'))
                ->printable(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->title(trans('common.Action'))
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'popups' . date('YmdHis');
    }
}
