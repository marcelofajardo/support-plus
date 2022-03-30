<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("created_by");
            $table->bigInteger("updated_by");
            $table->bigInteger("business_id")->nullable();
            $table->string("name");
            $table->string("primary")->default('#222831');
            $table->string("sub_primary")->default('#393E46');
            $table->string("secondary")->default('#00ADB5');
            $table->string("sub_secondary")->default('#4FBDBA');
            $table->string("tertiary")->default('#31316A');
            $table->string("sub_tertiary")->default('#3d3d85');
            $table->string("success")->default('#10B981');
            $table->string("sub_success")->default('#13d696');
            $table->string("info")->default('#2361ce');
            $table->string("sub_info")->default('#256be6');
            $table->string("warning")->default('#f3c78e');
            $table->string("sub_warning")->default('#f7d3a3');
            $table->string("danger")->default('#E11D48');
            $table->string("sub_danger")->default('#e32952');
            $table->string("body_color")->default('#393E46');
            $table->string("body_bg")->default('#EEEEEE');

            $table->tinyInteger('is_default')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        DB::table('themes')->insert([
            'is_default' => 1,
            "status" => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'name' => 'Default',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('themes');
    }
}
