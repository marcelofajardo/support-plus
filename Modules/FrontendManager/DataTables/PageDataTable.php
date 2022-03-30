<?php

namespace Modules\FrontendManager\DataTables;


use Modules\FrontendManager\Models\Page;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PageDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('title', function ($model) {
                return $model->title;
            })
            ->addcolumn('action', function ($model) {
                $route = 'pages';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            });
    }


    public function query(Page $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('pages')
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
            Column::computed('action')
                ->exportable(false)->title(trans('common.Action'))
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'pages' . date('YmdHis');
    }
}
