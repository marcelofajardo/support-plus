<?php

namespace Modules\Blog\DataTables;

use Modules\Blog\Models\BlogPost;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class BlogPostDataTable extends DataTable
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
            })->addColumn('category', function ($model) {
                return $model->category->name;
            })
            ->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'blog-posts';
                $hasView = true;
                return view('backend.partials._common_action', compact('model', 'route', 'hasView'))->render();
            })->rawColumns(['image', 'status', 'action']);
    }


    public function query(BlogPost $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('blog_posts')
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
            Column::make('image')
                ->title(trans('common.Image')),
            Column::make('category')
                ->title(trans('common.Category')),
            Column::make('title')
                ->title(trans('common.Title')),
            Column::computed('status')
                ->exportable(false)
                ->title(trans('common.Status'))
                ->printable(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'BlogPost' . date('YmdHis');
    }
}
