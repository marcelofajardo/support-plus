<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id")->nullable();
            $table->longText("title");
            $table->string("slug")->nullable();
            $table->longText("details")->nullable();
            $table->string("image")->nullable();
            $table->timestamp("publish_datetime")->useCurrent();
            $table->tinyInteger("status")->nullable()->default(1);
            $table->integer("view")->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
