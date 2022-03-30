<?php

namespace Modules\FrontendManager\DataTables;


use Modules\FrontendManager\Models\Faq;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class FaqDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('title', function ($model) {
                return $model->title;
            })
            ->editColumn('details', function ($model) {
                return $model->details;
            })
            ->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'faqs';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })
            ->rawColumns(['status', 'action']);
    }


    public function query(Faq $model)
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
            Column::make('title')->title(trans('common.Title')),
            Column::make('details')->title(trans('common.Details')),
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
        return 'faq' . date('YmdHis');
    }
}
