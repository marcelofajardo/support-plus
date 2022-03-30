<?php

namespace App\Repositories\Eloquent;

use App\Repositories\AjaxRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Modules\Setting\Models\State;

class AjaxRepository implements AjaxRepositoryInterface
{
    public function changeTableStatus(array $data): bool
    {
        $check = DB::table($data['table'])->where('id', $data['id'])->first();
        if ($check) {
            return DB::table($data['table'])->where('id', $data['id'])->update(['status' => $check->status == 1 ? 0 : 1]);
        } else {
            return false;
        }
    }


    public function getStatusByCountryId(int $country_id): Collection
    {
        return State::where('country_id', $country_id)->pluck('name', 'id');
    }

}
