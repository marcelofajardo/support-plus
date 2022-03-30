<?php

namespace Modules\FrontendManager\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkflowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('workflows')->insert([
            [
                'title' => '{"en":"Sign up & Verify Email","bn":"ট্যানি ডি"}',
                'order' => 1,
                'image' => 'images/workflow/1.png'
            ],
            [
                'title' => '{"en":"Create Business","bn":"ট্যানি ডি"}',
                'order' => 2,
                'image' => 'images/workflow/2.png'
            ],
            [
                'title' => '{"en":"Trial & Purchase Package","bn":"ট্যানি ডি"}',
                'order' => 3,
                'image' => 'images/workflow/3.png'
            ],
            [
                'title' => '{"en":"Customize Anything","bn":"ট্যানি ডি"}',
                'order' => 4,
                'image' => 'images/workflow/4.png'
            ],
            [
                'title' => '{"en":"Upload Website Content","bn":"ট্যানি ডি"}',
                'order' => 5,
                'image' => 'images/workflow/5.png'
            ],
            [
                'title' => '{"en":"Manage Your Business","bn":"ট্যানি ডি"}',
                'order' => 6,
                'image' => 'images/workflow/6.png'
            ],
        ]);
    }
}
