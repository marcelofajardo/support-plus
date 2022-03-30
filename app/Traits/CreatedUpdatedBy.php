<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait CreatedUpdatedBy
{
    public static function bootCreatedUpdatedBy()
    {
        static::creating(function ($model) {
            if (!$model->isDirty('created_by')) {
                $model->created_by = auth()->user()->id;
            }
            if (!$model->isDirty('updated_by')) {
                $model->updated_by = auth()->user()->id;
            }
            if (!$model->isDirty('business_id')) {
                $model->business_id = auth()->user()->current_business_id ?? null;
            }
        });

        static::updating(function ($model) {
            if (!$model->isDirty('updated_by')) {
                $model->updated_by = auth()->user()->id;
            }
        });

        static::addGlobalScope('created_by', function (Builder $builder) {
            $builder->where('created_by', auth()->id())->where('business_id', auth()->user()->current_business_id);
        });

    }
}
