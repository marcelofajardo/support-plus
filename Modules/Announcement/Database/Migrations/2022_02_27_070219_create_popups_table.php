<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopupsTable extends Migration
{

    public function up()
    {
        Schema::create('popups', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("bg")->nullable();
            $table->string("title")->nullable();
            $table->text("text")->nullable();
            $table->string("button_text")->nullable();
            $table->text("button_url")->nullable();
            $table->integer("delay")->default(1);
            $table->integer("order")->nullable();
            $table->tinyInteger("status")->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('popups');
    }
}
