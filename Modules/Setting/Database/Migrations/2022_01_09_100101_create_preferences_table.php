<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->text("key");
            $table->text("text");
            $table->text("details");
            $table->tinyInteger("status")->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('preferences')->insert([
            [
                'key' => 'email_verification',
                'text' => '{"en":"Email Verification"}',
                'status' => 0,
                'details' => '{"en":"Enable to allow email verification for registered users"}',
            ], [
                'key' => 'allow_reg',
                'text' => '{"en":"Registration System"}',
                'status' => 1,
                'details' => '{"en":"Enable to allow sign up users to your site"}',
            ], [
                'key' => 'multilingual',
                'text' => '{"en":"Multilingual System"}',
                'status' => 1,
                'details' => '{"en":"Enable to allow sign up users to your site"}',
            ], [
                'key' => 'allow_invoice_delete',
                'text' => '{"en":"Delete Invoice"}',
                'status' => 1,
                'details' => '{"en":"Enable to allow delete invoice in user business"}',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferences');
    }
}
