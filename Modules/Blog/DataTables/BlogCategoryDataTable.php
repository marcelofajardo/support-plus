<?php

namespace Modules\Blog\DataTables;

use Modules\Blog\Models\BlogCategory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class BlogCategoryDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('name', function ($model) {
                return $model->name;
            })
            ->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'blog-categories';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })->rawColumns(['status', 'action']);
    }


    public function query(BlogCategory $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('blog_categories')
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
            Column::make('name')
                ->title(trans('common.Name')),
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
        return 'BlogCategory' . date('YmdHis');
    }
}
