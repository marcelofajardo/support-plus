<?php

namespace Modules\FrontendManager\DataTables;


use Modules\FrontendManager\Models\Partner;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PartnerDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('image', function ($model) {
                return '<img class="thumb-img" src="' . assetPath($model->image) . '">';
            })
            ->addcolumn('action', function ($model) {
                $route = 'partners';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })->rawColumns(['image', 'action']);
    }


    public function query(Partner $model)
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
            Column::make('name')->title(trans('common.Name')),
            Column::make('image')->title(trans('common.Image')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'partner' . date('YmdHis');
    }
}
