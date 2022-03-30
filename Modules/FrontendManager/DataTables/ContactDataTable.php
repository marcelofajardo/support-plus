<?php

namespace Modules\FrontendManager\DataTables;


use Modules\FrontendManager\Models\Contact;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ContactDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('created_at', function ($model) {
                return $model->created_at->diffForHumans();
            })
            ->addcolumn('action', function ($model) {
                $route = 'contacts';
                return view('partials._common_delete_action', compact('model', 'route'))->render();
            });
    }


    public function query(Contact $model)
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
            Column::make('email')->title(trans('common.Email')),
            Column::make('message')->title(trans('common.Message')),
            Column::make('created_at')->title(trans('common.Submitted At')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'contacts' . date('YmdHis');
    }
}
