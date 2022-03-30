<?php

namespace Modules\FrontendManager\DataTables;


use Modules\FrontendManager\Models\Testimonial;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class TestimonialDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('name', function ($model) {
                return $model->name;
            })->editColumn('designation', function ($model) {
                return $model->designation;
            })->editColumn('feedback', function ($model) {
                return $model->feedback;
            })->editColumn('image', function ($model) {
                return '<img class="thumb-img" src="' . assetPath($model->image) . '">';
            })->editColumn('details', function ($model) {
                return $model->details;
            })->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })->addcolumn('action', function ($model) {
                $route = 'testimonials';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })->rawColumns(['image', 'status', 'action']);
    }


    public function query(Testimonial $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('testimonials')
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
            Column::make('image')->title(trans('common.Image')),
            Column::make('name')->title(trans('common.Title')),
            Column::make('designation')->title(trans('common.Designation')),
            Column::make('feedback')->title(trans('common.Feedback')),
            Column::computed('status')
                ->exportable(false)
                ->title(trans('common.Status'))
                ->printable(false),
            Column::computed('action')
                ->exportable(false)->title(trans('common.Action'))
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'testimonials' . date('YmdHis');
    }
}
