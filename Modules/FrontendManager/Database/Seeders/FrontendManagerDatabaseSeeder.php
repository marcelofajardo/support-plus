<?php

namespace Modules\FrontendManager\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FrontendManagerDatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();

        $this->call([
            FaqTableSeeder::class,
            TestimonialTableSeeder::class,
            PartnerTableSeeder::class,
            WorkflowsTableSeeder::class,
        ]);
    }
}
