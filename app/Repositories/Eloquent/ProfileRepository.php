<?php

namespace App\Repositories\Eloquent;

use App\Repositories\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function changeProfile(array $data)
    {
        auth()->user()->update([
            'name' => $data['name'],
            'address' => $data['address'],
            'city_id' => $data['city_id'],
            'state_id' => $data['state_id'],
            'country_id' => $data['country_id'],
        ]);
    }
}
