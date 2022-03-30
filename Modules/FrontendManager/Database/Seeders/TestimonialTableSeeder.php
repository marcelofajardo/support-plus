<?php

namespace Modules\FrontendManager\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialTableSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();

        DB::table('testimonials')->insert([
            [
                'image' => 'images/clients/1.jpg',
                'name' => '{"en":"Tanny D","bn":"ট্যানি ডি"}',
                'designation' => '{"en":"Manager","bn":"ম্যানেজার"}',
                'feedback' => '{"en":"Very easy to use. It is exactly what I have been looking for. I would be lost without codebiz. Thanks to codebiz","bn":"ব্যবহার করা খুবই সহজ। এটা ঠিক কি আমি খুঁজছেন করা হয়েছে. আমি কোডবিজ ছাড়া হারিয়ে যেতে হবে. কোডবিজকে ধন্যবাদ"}'
            ],
            [
                'image' => 'images/clients/2.jpg',
                'name' => '{"en":"Janeczka H","bn":"জেনেচকা এইচ"}',
                'designation' => '{"en":"Chief Executive Officer","bn":"প্রধান নির্বাহী কর্মকর্তা"}',
                'feedback' => '{"en":"If you are not sure, always go for codebiz. It is all good","bn":"আপনি যদি নিশ্চিত না হন তবে সর্বদা কোডবিজের জন্য যান। সব ঠিক আছে"}',
            ],
            [
                'image' => 'images/clients/3.jpg',
                'name' => '{"en":"Tabitha E.","bn":"তাবিথা ই."}',
                'designation' => '{"en":"Marketing manager","bn":"বাজারজাতকরণ ব্যবস্থাপক"}',
                'feedback' => '{"en":"Codebiz was the best investment I ever made. Codebiz is the real deal!","bn":"কোডবিজ ছিল আমার করা সেরা বিনিয়োগ। Codebiz আসল চুক্তি!"}'
            ],
        ]);
    }
}
