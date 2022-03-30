<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('blog_categories')->insert([
            ['name' => '{"en":"Business","bn":"ব্যবসা"}'],
            ['name' => '{"en":"Technology","bn":"প্রযুক্তি"}'],
            ['name' => '{"en":"Profit","bn":"লাভ"}'],
            ['name' => '{"en":"Digital Marketing","bn":"প্রযুক্তিমূলক বাজারজাত"}'],
            ['name' => '{"en":"Finance","bn":"অর্থায়ন"}'],
            ['name' => '{"en":"SEO","bn":"এসইও"}'],
        ]);
    }
}
