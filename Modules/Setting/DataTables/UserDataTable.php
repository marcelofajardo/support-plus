<?php

namespace Modules\Setting\DataTables;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class UserDataTable extends DataTable
{

    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('name', function ($model) {
                return $model->name;
            })->editColumn('validity_at', function ($model) {
                return $model->validity_at->diffForHumans();
            })
            ->addColumn('role', function ($model) {
                return $model->roles->pluck('name')[0] ?? '';

            })
            ->addColumn('join', function ($model) {
                return $model->created_at->diffForHumans();

            })->addColumn('plan', function ($model) {
                if (count($model->payments) == 0) {
                    return trans('common.Trial');
                } else {
                    return $model->payments->first()->package->name;
                }

            })
            ->addcolumn('status', function ($model) {
                $route = 'users';
                return view('backend.partials._status', compact('model', 'route'))->render();
            })
            ->addcolumn('action', function ($model) {
                $route = 'users';
                return view('partials._common_edit_action', compact('model', 'route'))->render();
            })
            ->rawColumns(['status', 'action']);
    }


    public function query(User $model)
    {
        $query = $model->query();

        if (isAdmin()) {
            $current_busniess_id = Auth::user()->current_business_id;
            if (!empty($current_busniess_id)) {
                $query->current_business_id = $current_busniess_id;
            }
        }
        $query->where('id', '!=', 1);
        $query->where('id', '!=', Auth::id());
        $query->with('roles', 'payments');
        return $query;
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('users')
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

        if (isSuperAdmin()) {
            return [

                Column::make('DT_RowIndex')
                    ->title('#')
                    ->searchable(false)
                    ->orderable(false),
                Column::make('name')
                    ->title(trans('common.Name')),

                Column::make('role')
                    ->title(trans('setting.Role')),

                Column::make('join')
                    ->title(trans('common.Join Date')),
                Column::make('validity_at')
                    ->title(trans('common.Validity')),
                Column::make('plan')
                    ->title(trans('common.Plan')),

                Column::computed('status')
                    ->exportable(false)
                    ->printable(false)
                    ->title(trans('common.Status')),


            ];
        } elseif (isAdmin()) {
            return [

                Column::make('DT_RowIndex')
                    ->title('#')
                    ->searchable(false)
                    ->orderable(false),
                Column::make('name')
                    ->title(trans('common.Name')),

                Column::make('role')
                    ->title(trans('setting.Role')),

                Column::make('join')
                    ->title(trans('common.Join Date')),

                Column::computed('status')
                    ->exportable(false)
                    ->printable(false)
                    ->title(trans('common.Status')),


            ];
        } else {
            return [];
        }

    }


    protected function filename()
    {
        return 'users' . date('YmdHis');
    }
}
