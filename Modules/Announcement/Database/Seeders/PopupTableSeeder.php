<?php

namespace Modules\Announcement\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopupTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        DB::table('popups')->insert([
            [
                'image' => 'images/popups/1.png',
                'bg' => 'images/popups/bg.png',
                'title' => '{"en":"Get 10% offer","bn":"10% অফার পান"}',
                'text' => '{"en":"This offer is only for the first time.","bn":"ডএই অফারটি শুধুমাত্র প্রথমবারের জন্য।"}',
                'button_text' => '{"en":"Shop Now","bn":"এখনই কিনুন"}',
                'button_url' => '/',
                'delay' => 5,
                'order' => 1,
                'status' => 1,

            ],
        ]);
    }
}
