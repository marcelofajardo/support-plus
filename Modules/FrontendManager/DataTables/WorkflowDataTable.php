<?php

namespace Modules\FrontendManager\DataTables;


use Modules\FrontendManager\Models\Workflow;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class WorkflowDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('image', function ($model) {
                return '<img class="thumb-img" src="' . assetPath($model->image) . '">';
            })
            ->editColumn('title', function ($model) {
                return $model->title;
            })
            ->addcolumn('action', function ($model) {
                $route = 'partners';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })->rawColumns(['image', 'action']);
    }


    public function query(Workflow $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('contacts')
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
            Column::make('title')->title(trans('common.Title')),
            Column::make('image')->title(trans('common.Image')),
            Column::make('order')->title(trans('common.Order')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'workflow' . date('YmdHis');
    }
}
