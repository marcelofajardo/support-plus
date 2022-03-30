<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Announcement\Database\Seeders\AnnouncementDatabaseSeeder;
use Modules\Blog\Database\Seeders\BlogDatabaseSeeder;
use Modules\Business\Database\Seeders\BusinessDatabaseSeeder;
use Modules\FrontendManager\Database\Seeders\FrontendManagerDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call([
            AnnouncementDatabaseSeeder::class,
            BusinessDatabaseSeeder::class,
            BlogDatabaseSeeder::class,
            FrontendManagerDatabaseSeeder::class,
        ]);

    }
}
