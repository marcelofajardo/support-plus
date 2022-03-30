<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->text("key");
            $table->longtext("value")->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });


        DB::table('general_settings')->insert([
            [
                'key' => 'app_name',
                'value' => '{"en":"CodeBiz"}'
            ],

            [
                'key' => 'app_title',
                'value' => '{"en":"This is an Accounting Software"}'
            ],

            [
                'key' => 'logo',
                'value' => '{"en":"images/logo.png"}'
            ],

            [
                'key' => 'favicon',
                'value' => '{"en":"images/favicon.png"}'
            ],

            [
                'key' => 'footer_about',
                'value' => '{"en":"CodeBiz is a business management Web Application That help business owner manage their business with ease."}'
            ],

            [
                'key' => 'contact_mail',
                'value' => '{"en":"admin@gmail.com"}'
            ],
            [
                'key' => 'contact_phone',
                'value' => '{"en":"880 123 12 12 33"}'
            ],

            [
                'key' => 'copyright',
                'value' => '{"en":"Copyright © 2022 | All Right Reserved"}'
            ],
            [
                'key' => 'version',
                'value' => '{"en":"1.0.0"}'
            ], [
                'key' => 'last_updated_date',
                'value' => '{"en":"' . now() . '"}',
            ], [
                'key' => 'language_code',
                'value' => '{"en":"en"}',
            ], [
                'key' => 'currency',
                'value' => '{"en":"USD"}',
            ], [
                'key' => 'currency_symbol',
                'value' => '{"en":"$"}',
            ], [
                'key' => 'currency_show_type',
                'value' => '{"en":"1"}',
            ], [
                'key' => 'meta_tag',
                'value' => '{"en":"saas,accounting software"}',
            ], [
                'key' => 'time_zone',
                'value' => '{"en":"UTC"}',
            ], [
                'key' => 'trial_days',
                'value' => '{"en":"0"}',
            ], [
                'key' => 'address',
                'value' => '{"en":"Dhaka, Bangladesh"}',
            ], [
                'key' => 'allow_multi_login',
                'value' => '{"en":"1"}',
            ]
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}
