<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{

    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->text("slug")->nullable();
            $table->longtext("details")->nullable();
            $table->tinyInteger("system")->default(0);
            $table->tinyInteger("menu")->default(0);
            $table->tinyInteger("footer1")->default(0);
            $table->tinyInteger("footer2")->default(0);
            $table->tinyInteger("status")->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });


        DB::table('pages')->insert([
            [
                'title' => '{"en":"Home", "bn":"হোম", "ar":"الصفحة الرئيسية"}',
                'slug' => '/',
                'system' => 1,
                'menu' => 1,
                'footer1' => 1,
                'footer2' => 0,
            ],
            [
                'title' => '{"en":"Feature", "bn":"বৈশিষ্ট্য", "ar":"خاصية"}',
                'slug' => 'features',
                'system' => 1,
                'menu' => 1,
                'footer1' => 1,
                'footer2' => 0,
            ],
            [
                'title' => '{"en":"Pricing", "bn":"মূল্য", "ar":"التسعير"}',
                'slug' => 'pricing',
                'system' => 1,
                'menu' => 1,
                'footer1' => 1,
                'footer2' => 0,
            ], [
                'title' => '{"en":"Blog", "bn":"ব্লগ", "ar":"مقالات"}',
                'slug' => 'blog',
                'system' => 1,
                'menu' => 1,
                'footer1' => 1,
                'footer2' => 0,
            ], [
                'title' => '{"en":"FAQs", "bn":"প্রশ্ন", "ar":"سؤال"}',
                'slug' => 'faq',
                'system' => 1,
                'menu' => 1,
                'footer1' => 1,
                'footer2' => 0,
            ], [
                'title' => '{"en":"Contact", "bn":"যোগাযোগ","ar":"اتصل"}',
                'slug' => 'contact',
                'system' => 1,
                'menu' => 1,
                'footer1' => 1,
                'footer2' => 0,
            ], [
                'title' => '{"en":"Support", "bn":"সমর্থন", "ar":"يدعم"}',
                'slug' => 'contact',
                'system' => 1,
                'menu' => 0,
                'footer1' => 0,
                'footer2' => 1,
            ], [
                'title' => '{"en":"Privacy", "bn":"গোপনীয়তা", "ar":"خصوصية"}',
                'slug' => 'privacy',
                'system' => 1,
                'menu' => 0,
                'footer1' => 0,
                'footer2' => 1,
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
