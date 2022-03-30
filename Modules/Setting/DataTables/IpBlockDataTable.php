<?php

namespace Modules\Setting\DataTables;


use Modules\Setting\Models\IpBlock;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class IpBlockDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addcolumn('action', function ($model) {
                $route = 'ip-blocks';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })
            ->rawColumns(['action']);
    }


    public function query(IpBlock $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('ip_blocks')
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
                ->title('#')
                ->searchable(false)
                ->orderable(false),
            Column::make('ip')->title(trans('common.IP')),
            Column::computed('action')
                ->title(trans('common.Action'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'ip_blocks' . date('YmdHis');
    }
}
