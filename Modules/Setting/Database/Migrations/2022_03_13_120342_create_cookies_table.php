<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookiesTable extends Migration
{
    public function up()
    {
        Schema::create('cookies', function (Blueprint $table) {
            $table->id();
            $table->text("text");
            $table->text("btn");
            $table->tinyInteger("status")->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('cookies')->insert([
            'text' => '{
                    "en":"We use cookies, just to track visits to our website, we store no personal details.",
                    "bn":"আমরা কুকিজ ব্যবহার করি, শুধুমাত্র আমাদের ওয়েবসাইটে ভিজিট ট্র্যাক করার জন্য, আমরা কোনো ব্যক্তিগত বিবরণ সংরক্ষণ করি না।",
                    "ar":"نحن نستخدم ملفات تعريف الارتباط ، فقط لتتبع الزيارات إلى موقعنا على الويب ، ولا نقوم بتخزين أي تفاصيل شخصية."
                }',
            'btn' => '{
                    "en":"Accept cookies",
                    "bn":"কুকি গ্রহণ করুন",
                    "ar":"قبول ملفات تعريف الارتباط"
                }',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('cookies');
    }
}
