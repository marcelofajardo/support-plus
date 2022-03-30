<?php

namespace Modules\Setting\DataTables;


use Modules\Setting\Models\SocialSetting;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class SocialSettingDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('icon', function ($model) {
                return '<span class="' . $model->icon . ' fs-4"></span>';
            })
            ->addcolumn('status', function ($model) {
                return view('backend.partials._status', compact('model'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'social-settings';
                return view('backend.partials._common_action', compact('model', 'route'))->render();
            })->rawColumns(['icon', 'status', 'action']);
    }


    public function query(SocialSetting $model)
    {
        return $model->newQuery()->orderBy('status', 'desc')->orderBy('name', 'asc');
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('social_settings')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->autoWidth(false)
            ->dom('Blfrtip')
            ->buttons(
                Button::make('export'),
            )
            ->orderBy(1);
    }


    protected function getColumns()
    {
        return [

            Column::make('DT_RowIndex')
                ->title('SL')
                ->width(20)
                ->searchable(false)
                ->orderable(false),
            Column::make('name'),
            Column::make('link'),
            Column::make('icon'),
            Column::computed('status')
                ->exportable(false)
                ->title(trans('common.Status'))
                ->printable(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(10)
                ->addClass('text-center'),

        ];
    }

    protected function filename()
    {
        return 'social_settings' . date('YmdHis');
    }
}
