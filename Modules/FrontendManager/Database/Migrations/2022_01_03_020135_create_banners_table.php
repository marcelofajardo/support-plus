<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{

    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->longText("details");
            $table->text("image")->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('banners')->insert([
            'id' => 1,
            'title' => '{
                    "en":"Make Business management EASY",
                    "bn":"ব্যবসা ব্যবস্থাপনা সহজ করুন",
                    "ar":"اجعل إدارة الأعمال سهلة"
                }',
            'details' => '{
                    "en":"Once Business Management was Hard. Time has changed it is not hard anymore because you have the all-in-one business solution CodeBiz. Manage Everything in your business with ease.",
                    "bn":"একসময় ব্যবসা ব্যবস্থাপনা কঠিন ছিল। সময় পরিবর্তিত হয়েছে এটি আর কঠিন নয় কারণ আপনার কাছে অল-ইন-ওয়ান ব্যবসায়িক সমাধান কোডবিজ রয়েছে। আপনার ব্যবসার সবকিছু সহজে পরিচালনা করুন।",
                    "ar":"بمجرد أن كانت إدارة الأعمال صعبة. لقد تغير الوقت ، لم يعد الأمر صعبًا بعد الآن لأن لديك حل الأعمال الشامل CodeBiz. إدارة كل شيء في عملك بسهولة."
                }',
            'image' => 'images/features/1.png'
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
