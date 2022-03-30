<?php

namespace Modules\Announcement\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AnnouncementDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(PopupTableSeeder::class);

    }
}
