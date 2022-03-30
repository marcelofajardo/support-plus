<?php

namespace Modules\FrontendManager\DataTables;


use Illuminate\Support\Str;
use Modules\FrontendManager\Models\Feature;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class FeatureDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('thumb', function ($model) {
                return '<img class="thumb-img" src="' . assetPath($model->image) . '">';
            })
            ->editColumn('name', function ($model) {
                return Str::limit(strip_tags($model->name), 50);
            })
            ->editColumn('details', function ($model) {
                return Str::limit(strip_tags($model->details), 100);
            })
            ->addcolumn('action', function ($model) {
                $route = 'features';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })->rawColumns(['thumb', 'action']);
    }


    public function query(Feature $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('faqs')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->autoWidth(false)
            ->dom('Blfrtip')
            ->buttons(
                Button::make('export'),
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
            Column::make('thumb')->title(trans('common.Thumb')),
            Column::make('name')->title(trans('common.Title')),
            Column::make('details')->title(trans('common.Details')),
            Column::computed('action')
                ->exportable(false)->title(trans('common.Action'))
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'feature' . date('YmdHis');
    }
}
