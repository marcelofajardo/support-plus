<?php

namespace Modules\FrontendManager\DataTables;


use Illuminate\Support\Facades\Auth;
use Modules\FrontendManager\Models\Theme;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ThemeDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addcolumn('action', function ($model) {
                $route = 'themes';
                return view('frontendmanager::theme._action', compact('model', 'route'))->render();
            });
    }


    public function query(Theme $model)
    {
        return $model->where('business_id', Auth::user()->current_business_id);

    }


    public function html()
    {
        return $this->builder()
            ->setTableId('themes')
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
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'themes' . date('YmdHis');
    }
}
