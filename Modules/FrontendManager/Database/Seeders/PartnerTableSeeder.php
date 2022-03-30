<?php

namespace Modules\FrontendManager\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('partners')->insert([
            [
                'name' => 'partner 1',
                'image' => 'images/partners/1.jpg'
            ],
            [
                'name' => 'partner 2',
                'image' => 'images/partners/2.jpg'
            ], [
                'name' => 'partner 3',
                'image' => 'images/partners/3.jpg'
            ],
            [
                'name' => 'partner 4',
                'image' => 'images/partners/4.jpg'
            ],
            [
                'name' => 'partner 5',
                'image' => 'images/partners/5.jpg'
            ],
        ]);
    }
}
