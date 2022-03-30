<?php

namespace Modules\FrontendManager\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqTableSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();


        DB::table('faqs')->insert([
            [
                'title' => '{"en":"How to enable / disable language for website? ","bn":"ওয়েবসাইটের জন্য ভাষা কীভাবে সক্রিয়/অক্ষম করবেন"}',
                'details' => '{"en":"Only Admin of the website can enable or disable language so login as admin then heads over to system setting from the sidebar and click on languages then enable or disable any language for your website.","bn":"শুধুমাত্র ওয়েবসাইটের প্রশাসক ভাষা সক্ষম বা নিষ্ক্রিয় করতে পারেন তাই প্রশাসক হিসাবে লগইন করুন তারপর সাইডবার থেকে সিস্টেম সেটিংসে যান এবং ভাষাগুলিতে ক্লিক করুন তারপর আপনার ওয়েবসাইটের জন্য যে কোনও ভাষা সক্ষম বা অক্ষম করুন৷"}'
            ],

            [
                'title' => '{"en":"Can i manage multiple business?","bn":"আমি একাধিক ব্যবসা পরিচালনা করতে পারি?"}',
                'details' => '{"en":"Yes, you can manage multiple Businesses from a single backend with ease.","bn":"হ্যাঁ, আপনি সহজে একক ব্যাকএন্ড থেকে একাধিক ব্যবসা পরিচালনা করতে পারেন।"}'
            ],
            [
                'title' => '{"en":"How to create and manage multiple Business?","bn":"আমি একাধিক ব্যবসা পরিচালনা করতে পারি?"}',
                'details' => '{"en":"To manage multiple businesses log in to the business account and from the sidebar select Business > My Business. On the next page, you will see a list of existing businesses. you can create more business, edit existing and delete any business at any time. To switch between businesses click on the user profile icon from the right and select Switch Business, a modal will show up select your desired business from the list.","bn":"একাধিক ব্যবসা পরিচালনা করতে ব্যবসায়িক অ্যাকাউন্টে লগ ইন করুন এবং সাইডবার থেকে ব্যবসা > আমার ব্যবসা নির্বাচন করুন। পরবর্তী পৃষ্ঠায়, আপনি বিদ্যমান ব্যবসার একটি তালিকা দেখতে পাবেন। আপনি আরও ব্যবসা তৈরি করতে পারেন, বিদ্যমান সম্পাদনা করতে পারেন এবং যেকোনো সময় যেকোনো ব্যবসা মুছে ফেলতে পারেন। ব্যবসার মধ্যে স্যুইচ করতে ডানদিকে ব্যবহারকারী প্রোফাইল আইকনে ক্লিক করুন এবং সুইচ বিজনেস নির্বাচন করুন, একটি মডেল তালিকা থেকে আপনার পছন্দসই ব্যবসা নির্বাচন করবে।"}'
            ],
            [
                'title' => '{"en":"How to subscribe to newsletter?","bn":"কিভাবে নিউজলেটার সাবস্ক্রাইব করবেন?"}',
                'details' => '{"en":"Navigate to the footer of any page you will see a single input form with a subscribe button. In the input field add your email address and click subscribe button and that is all that needs to be done for subscribing to the newsletter.","bn":"যেকোনো পৃষ্ঠার ফুটারে নেভিগেট করুন আপনি একটি সাবস্ক্রাইব বোতাম সহ একটি একক ইনপুট ফর্ম দেখতে পাবেন। ইনপুট ফিল্ডে আপনার ইমেল ঠিকানা যোগ করুন এবং সাবস্ক্রাইব বোতামে ক্লিক করুন এবং নিউজলেটারে সদস্যতা নেওয়ার জন্য যা করতে হবে।"}'
            ],
            [
                'title' => '{"en":"Do you offer lifetime package?","bn":"আপনি কি আজীবন প্যাকেজ অফার করেন?"}',
                'details' => '{"en":"Yes, we have a lifetime package. visit the pricing page from the top menu to learn more.","bn":"হ্যাঁ, আমাদের একটি আজীবন প্যাকেজ আছে। আরও জানতে শীর্ষ মেনু থেকে মূল্য পৃষ্ঠায় যান।"}'
            ],

        ]);
    }
}
