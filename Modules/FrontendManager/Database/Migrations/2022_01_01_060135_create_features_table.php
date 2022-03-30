<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{

    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->longText("details")->nullable();
            $table->text("image")->nullable();
            $table->tinyInteger("status")->default(1);
            $table->integer("order")->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('features')->insert([
            [
                'name' => '{
                    "en":"Manage Income & Expenses",
                    "bn":"আয় এবং ব্যয় পরিচালনা করুন",
                    "ar":"إدارة الدخل والمصروفات"
                }',
                'details' => '{
                    "en":"Managing income and expenses with CodeBiz is super easy. With the graphical interface, you can manage your income and expenses in no time.",
                    "bn":"CodeBiz এর মাধ্যমে আয় এবং খরচ পরিচালনা করা খুবই সহজ। গ্রাফিকাল ইন্টারফেসের সাহায্যে, আপনি আপনার আয় এবং ব্যয়গুলি খুব কম সময়ে পরিচালনা করতে পারেন।",
                    "ar":"إدارة الدخل والمصروفات مع CodeBiz سهلة للغاية. مع الواجهة الرسومية ، يمكنك إدارة دخلك ونفقاتك في لمح البصر."
                }',
                'image' => 'images/features/1.png',
                'order' => 1,
            ],

            [
                'name' => '{
                    "en":"Manage business with ease",
                    "bn":"সহজে ব্যবসা পরিচালনা করুন",
                    "ar":"إدارة الأعمال بسهولة"
                }',
                'details' => '{
                    "en":"CodeBiz helps you to track all your invoices and purchase orders so that you can truly understand your business and make the right decision.",
                    "bn":"CodeBiz আপনাকে আপনার সমস্ত চালান এবং ক্রয়ের অর্ডার ট্র্যাক করতে সাহায্য করে যাতে আপনি সত্যিকার অর্থে আপনার ব্যবসা বুঝতে এবং সঠিক সিদ্ধান্ত নিতে পারেন।",
                    "ar":"يساعدك CodeBiz على تتبع جميع فواتيرك وأوامر الشراء حتى تتمكن من فهم عملك حقًا واتخاذ القرار الصحيح."
                }',
                'image' => 'images/features/2.png',
                'order' => 2,
            ],
            [
                'name' => '{
                    "en":"Business Automation",
                    "bn":"ব্যবসা অটোমেশন",
                    "ar":"طأتمتة الأعمال"
                }',
                'details' => '{
                    "en":"Manage payment, invoice, purchase orders with automation, and Let CodeBiz do the hard work of keeping records for you so that you can spend your time on greater and more important work.",
                    "bn":"অটোমেশনের মাধ্যমে অর্থপ্রদান, চালান, ক্রয় আদেশ পরিচালনা করুন এবং CodeBiz কে আপনার জন্য রেকর্ড রাখার কঠোর পরিশ্রম করতে দিন যাতে আপনি আরও বেশি এবং আরও গুরুত্বপূর্ণ কাজে আপনার সময় ব্যয় করতে পারেন।",
                    "ar":"قم بإدارة الدفع والفواتير وأوامر الشراء باستخدام الأتمتة ودع CodeBiz يقوم بالعمل الشاق المتمثل في الاحتفاظ بالسجلات لك حتى تتمكن من قضاء وقتك في عمل أكبر وأكثر أهمية."
                }',
                'image' => 'images/features/3.png',
                'order' => 3,
            ],
            [
                'name' => '{
                    "en":"Manage Everything on the go",
                    "bn":"চলতে চলতে সবকিছু পরিচালনা করুন",
                    "ar":"إدارة كل شيء أثناء التنقل"
                }',
                'details' => '{
                    "en":"CodeBiz is fully responsive with any device size. So it is much easier to manage your business on the go.",
                    "bn":"CodeBiz যেকোনো ডিভাইসের আকারের সাথে সম্পূর্ণভাবে প্রতিক্রিয়াশীল। তাই যেতে যেতে আপনার ব্যবসা পরিচালনা করা অনেক সহজ।",
                    "ar":"CodeBiz مستجيب تمامًا مع أي حجم جهاز. لذلك من الأسهل بكثير إدارة عملك أثناء التنقل."
                }',
                'image' => 'images/features/4.jpg',
                'order' => 4,
            ],
        ]);


    }

    public function down()
    {
        Schema::dropIfExists('features');
    }
}
