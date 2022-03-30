<?php

namespace Modules\FrontendManager\DataTables;

use Modules\FrontendManager\Models\EmailSubscription;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class EmailSubscriptionDataTable extends DataTable
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
                $route = 'email-subscriptions';
                return view('frontendmanager::email-subscription._action', compact('model', 'route'))->render();

            });
    }


    public function query(EmailSubscription $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('email_subscriptions')
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
            Column::make('email')->title(trans('common.Email')),
            Column::make('created_at')->title(trans('common.Submitted At')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

        ];
    }


    protected function filename()
    {
        return 'email_subscriptions' . date('YmdHis');
    }
}
