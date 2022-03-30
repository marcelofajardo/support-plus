<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostTableSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();


        DB::table('blog_posts')->insert([
            [
                'title' => '{"en":"Digital Marketing The Way Of The Future","bn":"ডিজিটাল মার্কেটিং ভবিষ্যতের পথ"}',
                'details' => '{"en":"<p>The truth is that virtual advertising is easier than ever earlier than. Fewer selections may be made less difficult with virtual advertising software program, which makes records series and analytics easier. What turned into as soon as an amazing listing of alternatives is now a shortlist of possible selections for any commercial enterprise seeking to be successful withinside the twenty first century.</p><p>Ever because the creation of virtual advertising and the Internet, our lives were modified in approaches we in no way could have imagined. Now, via telecommunications devices, we will get right of entry to an nearly limitless quantity of records on any subject matter imaginable.</p>","bn":"<p>সত্য যে ভার্চুয়াল বিজ্ঞাপন আগের চেয়ে সহজ. ভার্চুয়াল বিজ্ঞাপন সফ্টওয়্যার প্রোগ্রামের সাথে কম নির্বাচনগুলি কম কঠিন করা যেতে পারে, যা রেকর্ড সিরিজ এবং বিশ্লেষণকে সহজ করে তোলে। বিকল্পগুলির একটি আশ্চর্যজনক তালিকার সাথে সাথে যা পরিণত হয়েছে তা এখন একবিংশ শতাব্দীর মধ্যে সফল হতে চাওয়া যেকোনো বাণিজ্যিক উদ্যোগের সম্ভাব্য নির্বাচনের একটি সংক্ষিপ্ত তালিকা।</p><p>ভার্চুয়াল বিজ্ঞাপন এবং ইন্টারনেট তৈরির কারণে, আমাদের জীবন এমনভাবে পরিবর্তিত হয়েছে যা আমরা কল্পনাও করতে পারিনি। এখন, টেলিকমিউনিকেশন ডিভাইসের মাধ্যমে, আমরা কল্পনাযোগ্য যে কোনও বিষয়ের প্রায় সীমাহীন পরিমাণে রেকর্ডে প্রবেশের অধিকার পাব।</p>"}',
                'slug' => 'digital-marketing-the-way-Of-the-future',
                'image' => 'images/blogs/1.jpg',
                'category_id' => 4,

            ],
            [
                'title' => '{"en":"5 Digital Marketing Trends In 2022","bn":"2022 সালে 5টি ডিজিটাল মার্কেটিং প্রবণতা"}',
                'details' => '{"en":"<p>The virtual advertising area of interest is understood for its dynamism, thereby requiring gamers to be in search of tendencies so as to be applicable withinside the nearest future. Never in records has the virtual advertising area skilled a greater drastic alternate than at some point of it has the COVID-19 period. New commercial enterprise advertising fashions and apps have emerged and could maximum possibly affect the marketplace in 2022</p><p>Many tendencies that agencies ought to discover in 2022 have existed withinside the beyond however have handiest these days won recognition. Others are new and feature created pretty a sensation from the instant in their inception. Let us dive in</p>","bn":"<p>আগ্রহের ভার্চুয়াল বিজ্ঞাপনের ক্ষেত্রটি এর গতিশীলতার জন্য বোঝা যায়, যার ফলে গেমারদের প্রবণতার সন্ধানে থাকা প্রয়োজন যাতে নিকটতম ভবিষ্যতের মধ্যে প্রযোজ্য হয়। রেকর্ডে ভার্চুয়াল বিজ্ঞাপনের ক্ষেত্রটি কোভিড-19 সময়কালের কিছু সময়ে এর চেয়ে বেশি কঠোর বিকল্পে দক্ষ ছিল না। নতুন বাণিজ্যিক এন্টারপ্রাইজ বিজ্ঞাপনের ফ্যাশন এবং অ্যাপস আবির্ভূত হয়েছে এবং 2022 সালে সর্বাধিক সম্ভবত বাজারকে প্রভাবিত করতে পারে</p><p>2022 সালে এজেন্সিগুলির আবিষ্কার করা উচিত এমন অনেকগুলি প্রবণতা বাইরের মধ্যে বিদ্যমান ছিল তবে এই দিনগুলি স্বীকৃতি জিতেছে। অন্যরা নতুন এবং বৈশিষ্ট্যগুলি তাদের সূচনা থেকে তাত্ক্ষণিকভাবে একটি সংবেদন তৈরি করেছে৷ আমাদের ডুব দিন</p>"}',
                'slug' => '5-digital-marketing-trends-in-2022',
                'image' => 'images/blogs/2.jpg',
                'category_id' => 4,

            ],
            [
                'title' => '{"en":"Optimism Is Waning But Conditions Are Right For A Good Year For Business","bn":"আশাবাদ কমে যাচ্ছে কিন্তু ব্যবসার জন্য একটি ভাল বছরের জন্য শর্তগুলি সঠিক"}',
                'details' => '{"en":"<p>Small companies these days are suffering and their optimism is waning. Or are they?</p><p>Yes: the carefully watched Small Business Optimism Index from the National Federation of Independent Businesses dropped in January to a stage of 97.1, nicely off its current top of 102.five in June 2021. Yes: while you ask small companies approximately their demanding situations they’ll call pretty a few, from growing fees and deliver chain issues to locating and preserving human beings on this tight hard work marketplace.</p>","bn":"<p>ছোট কোম্পানীগুলো আজকাল ভুগছে এবং তাদের আশাবাদ ক্ষয় হচ্ছে। নাকি তারা?</p><p>হ্যাঁ: ন্যাশনাল ফেডারেশন অফ ইন্ডিপেনডেন্ট বিজনেসের কাছ থেকে সাবধানে দেখা ছোট ব্যবসার আশাবাদ সূচক জানুয়ারিতে 97.1-এ নেমে এসেছে, যা 2021 সালের জুনে তার বর্তমান শীর্ষ 102.5-এর থেকে ভালভাবে। হ্যাঁ: আপনি যখন ছোট কোম্পানিগুলিকে তাদের চাহিদার পরিস্থিতি সম্পর্কে জিজ্ঞাসা করেন তখন তারা ক্রমবর্ধমান ফি থেকে শুরু করে এই কঠোর পরিশ্রমের মার্কেটপ্লেসে মানুষের অবস্থান এবং সংরক্ষণের জন্য চেইন সমস্যাগুলিকে ডেলিভারি করব।</p>"}',
                'slug' => 'optimism-is-waning-but-conditions-are-right-for-a-good-year-for-business',
                'image' => 'images/blogs/3.jpg',
                'category_id' => 1,

            ],
            [
                'title' => '{"en":"This NO1 Strong Buy Finance Stock Is A Smart Buy Right Now","bn":"এই ১নং স্ট্রং বাই ফাইন্যান্স স্টকটি এখনই একটি স্মার্ট বাই"}',
                'details' => '{"en":"<p>Whether you are a growth, value, income, or momentum-targeted investor, constructing a a success funding portfolio takes skill, research, and a bit little bit of luck.</p><p>Iron Mountain changed into upgraded to the Zacks Rank #1 listing on March 4, 2022. The Zacks Rank is a completely unique inventory-score version that enables you are taking benefit of profits estimate revision traits and presents a manner to get into shares enormously popular through institutional investors.</p>","bn":"<p>আপনি একজন বৃদ্ধি, মূল্য, আয়, বা গতি-লক্ষ্যযুক্ত বিনিয়োগকারী হোন না কেন, একটি সফল তহবিল পোর্টফোলিও তৈরি করতে দক্ষতা, গবেষণা এবং কিছুটা ভাগ্য লাগে।</p><p>আয়রন মাউন্টেন 4 মার্চ, 2022-এ জ্যাকস র‍্যাঙ্ক #1 তালিকায় আপগ্রেড হয়ে পরিবর্তিত হয়েছে। জ্যাকস র‍্যাঙ্ক হল একটি সম্পূর্ণ অনন্য ইনভেন্টরি-স্কোর সংস্করণ যা আপনাকে লাভের অনুমান পুনর্বিবেচনার বৈশিষ্ট্যগুলির সুবিধা নিতে সক্ষম করে এবং শেয়ারগুলিকে ব্যাপকভাবে জনপ্রিয় করার একটি উপায় উপস্থাপন করে। প্রাতিষ্ঠানিক বিনিয়োগকারীদের মাধ্যমে।</p>"}',
                'slug' => 'this-no-1-strong-buy-finance-stock-is-a-smart-buy-right-now',
                'image' => 'images/blogs/4.jpg',
                'category_id' => 5,

            ],
            [
                'title' => '{"en":"Argentinas YPF Sees Fourth-quarter Profit Dip By More Than Half","bn":"আর্জেন্টিনার YPF চতুর্থ ত্রৈমাসিকের মুনাফা অর্ধেকেরও বেশি কমে গেছে"}',
                'details' => '{"en":"<p>The headquarters of Argentinas kingdom electricity enterprise YPF is visible in Buenos Aires, Argentina February 10, 2021. REUTERS/Matias Baglietto</p><p>March 3 (Reuters) - Argentine kingdom oil enterprise YPF (YPFD.BA) on Thursday published a $247 million internet earnings withinside the fourth sector 2021, a 54% drop as compared to the year-in the past period.</p>","bn":"<p>আর্জেন্টিনার কিংডম ইলেক্ট্রিসিটি এন্টারপ্রাইজ YPF এর সদর দপ্তর বুয়েনস আইরেসে, আর্জেন্টিনার 10 ফেব্রুয়ারী, 2021-এ দৃশ্যমান। রয়টার্স/মাতিয়াস ব্যাগলিত্তো</p><p>মার্চ 3 (রয়টার্স) - আর্জেন্টিনার কিংডম অয়েল এন্টারপ্রাইজ YPF (YPFD.BA) বৃহস্পতিবার চতুর্থ সেক্টর 2021-এর মধ্যে $247 মিলিয়ন ইন্টারনেট আয় প্রকাশ করেছে, যা গত বছরের তুলনায় 54% কম।</p>"}',
                'slug' => 'argentinas-ypf-sees-fourth-quarter-profit-dip-by-more-than-half',
                'image' => 'images/blogs/5.jpg',
                'category_id' => 3,

            ],
            [
                'title' => '{"en":"How Much Profit Does A Coffee Shop Make United Kingdom","bn":"একটি কফি শপ ইউনাইটেড কিংডমে কত লাভ করে"}',
                'details' => '{"en":"<p>A espresso keep’s earnings margin will consist of 12% of all of the espresso merchandise they sell, so 12% of each cup bought continues going to costs. An evaluation with the aid of using Project Café UK 2021 determined branded espresso stores to be a $three.eight billion market. By 2020, the employer is anticipated to generate $6bn in sales.</p><p>How Much Do Coffee Shop Owners Make Uk? <br> It is anticipated that the common Coffee Shop proprietor withinside the UK earns round £46,000 and £132,000 in gross earnings yearly. You can be interested by commencing a espresso keep withinside the United Kingdom in case you stay there or are making plans to relocate there.</p>","bn":"<p>একটি এসপ্রেসো কিপ-এর উপার্জনের মার্জিন তাদের বিক্রি করা সমস্ত এসপ্রেসো পণ্যদ্রব্যের 12% নিয়ে গঠিত, তাই কেনা প্রতিটি কাপের 12% খরচ হতে চলেছে। Project Café UK 2021 ব্যবহারের সাহায্যে একটি মূল্যায়ন নির্ধারণ করেছে যে ব্র্যান্ডেড এসপ্রেসো স্টোরগুলি $3.8 বিলিয়ন বাজার হবে৷ 2020 সালের মধ্যে, নিয়োগকর্তা বিক্রয় থেকে $6 বিলিয়ন জেনারেট করবে বলে আশা করা হচ্ছে।</p><p>কফি শপের মালিকরা ইউকে কতটা করে? এটা প্রত্যাশিত যে UK-এর মধ্যে সাধারণ কফি শপের মালিক বাৎসরিক মোট আয় প্রায় £46,000 এবং £132,000 উপার্জন করে৷ আপনি যুক্তরাজ্যের মধ্যে একটি এসপ্রেসো রাখা শুরু করে আগ্রহী হতে পারেন যদি আপনি সেখানে থাকেন বা সেখানে স্থানান্তর করার পরিকল্পনা করছেন।</p>"}',
                'slug' => 'how-much-profit-does-a-coffee-shop-make-united-kingdom',
                'image' => 'images/blogs/6.jpg',
                'category_id' => 3,

            ],
            [
                'title' => '{"en":"IIT Kanpur Develops AI-Powered Search Engine Which Aims To Empower Police In Reducing Crimes","bn":"IIT কানপুর এআই-চালিত সার্চ ইঞ্জিন তৈরি করেছে যার লক্ষ্য অপরাধ কমাতে পুলিশকে ক্ষমতায়িত করা"}',
                'details' => '{"en":"<p>Indian Institute of Technology (IIT) Kanpurs Artificial Intelligence and Innovation-Driven Entrepreneurship (AIIDE) - Centre of Excellence (COE) over in Noida has incubated Lucknow-primarily based totally assume tank Future Crime Research Foundation (FCRF), that is operating toward the improvement of a first-of-its-type AI-powered huge statistics seek engine to assist in policing.</p><p>The seek engine strives to smoothen the research and policing method with the aid of using integrating statistics from all of the key stakeholders to expand a seek engine. It will assist in predictive policing, crime mapping, crime sample analysis, crime prediction, behavioural analysis, destiny strategy, a synergy of crucial statistics, included database, real-time action, the darkish internet and social media research, figuring out defaulters and geospatial intelligence.</p>","bn":"<p>ইন্ডিয়ান ইনস্টিটিউট অফ টেকনোলজি (IIT) কানপুর কৃত্রিম বুদ্ধিমত্তা এবং উদ্ভাবন-চালিত উদ্যোক্তা (AIIDE) - নয়ডার সেন্টার অফ এক্সিলেন্স (COE) ওভার লখনউ-প্রাথমিকভাবে সম্পূর্ণরূপে অনুমান ট্যাঙ্ক ফিউচার ক্রাইম রিসার্চ ফাউন্ডেশন (FCRF), যেটির দিকে কাজ করছে এআই-চালিত বিশাল পরিসংখ্যানের প্রথম ধরনের উন্নতি পুলিশিং-এ সহায়তা করার জন্য ইঞ্জিন চাইছে।</p><p>অনুসন্ধান ইঞ্জিন একটি অনুসন্ধান ইঞ্জিন প্রসারিত করার জন্য সমস্ত মূল স্টেকহোল্ডারদের থেকে একীভূত পরিসংখ্যান ব্যবহার করার সাহায্যে গবেষণা এবং পুলিশিং পদ্ধতিকে মসৃণ করার চেষ্টা করে। এটি ভবিষ্যদ্বাণীমূলক পুলিশিং, অপরাধের ম্যাপিং, অপরাধের নমুনা বিশ্লেষণ, অপরাধের পূর্বাভাস, আচরণগত বিশ্লেষণ, নিয়তি কৌশল, গুরুত্বপূর্ণ পরিসংখ্যানের সমন্বয়, অন্তর্ভুক্ত ডাটাবেস, রিয়েল-টাইম অ্যাকশন, অন্ধকার ইন্টারনেট এবং সামাজিক মিডিয়া গবেষণা, খেলাপি এবং ভূ-স্থানিককে খুঁজে বের করতে সহায়তা করবে। বুদ্ধিমত্তা</p>"}',
                'slug' => 'iit-kanpur-develops-ai-powered-search-engine-which-aims-to-empower-police-in-reducing-crimes',
                'image' => 'images/blogs/7.jpg',
                'category_id' => 6,

            ],
            [
                'title' => '{"en":"Seven SEO Best Practices To Transform Your Business In 2022","bn":"2022 সালে আপনার ব্যবসাকে রূপান্তরিত করার জন্য সাতটি এসইও সেরা অনুশীলন"}',
                'details' => '{"en":"<p>What is search engine optimization?<br>Google calls search engine optimization the method of creating your internet site higher for engines like google. If you’re new to the sector of search engine optimization, you’ll locate  most important classes of search engine optimization: on-web page search engine optimization and off-web page search engine optimization. </p><p>Before we get too over excited with the intricacies, let’s recognition at the pinnacle seven search engine optimization pleasant practices that must be part of your 2022 virtual advertising and marketing method, regardless of how massive or small your budget.</p>","bn":"<p>সার্চ ইঞ্জিন অপটিমাইজেশন কি?<br>গুগল সার্চ ইঞ্জিন অপটিমাইজেশনকে গুগলের মতো ইঞ্জিনের জন্য আপনার ইন্টারনেট সাইট তৈরি করার পদ্ধতিকে বলে। আপনি যদি সার্চ ইঞ্জিন অপ্টিমাইজেশানের সেক্টরে নতুন হন, তাহলে আপনি সার্চ ইঞ্জিন অপ্টিমাইজেশানের সবচেয়ে গুরুত্বপূর্ণ ক্লাসগুলি খুঁজে পাবেন: অন-ওয়েব পেজ সার্চ ইঞ্জিন অপ্টিমাইজেশান এবং অফ-ওয়েব পেজ সার্চ ইঞ্জিন অপ্টিমাইজেশান৷</p><p>জটিলতা নিয়ে খুব বেশি উত্তেজিত হওয়ার আগে, আসুন জেনে নেওয়া যাক সাতটি সার্চ ইঞ্জিন অপ্টিমাইজেশানের মনোরম অনুশীলন যা আপনার 2022 ভার্চুয়াল বিজ্ঞাপন এবং বিপণন পদ্ধতির অংশ হতে হবে, আপনার বাজেট যত বড় বা ছোট হোক না কেন।</p>"}',
                'slug' => 'seven-seo-best-practices-to-transform-your-business-in-2022',
                'image' => 'images/blogs/8.jpg',
                'category_id' => 6,

            ],
            [
                'title' => '{"en":"Top 6 search engine optimization Mistakes You Must Avoid","bn":"সেরা 6 সার্চ ইঞ্জিন অপ্টিমাইজেশান ভুল আপনাকে এড়িয়ে চলতে হবে"}',
                'details' => '{"en":"<p>Experts are residing in a global in which the significance of seo can not be questioned. Day and night, if theres something a marketer concerns about, its miles the rating of his internet site at the seek engines.</p><p>1. Using copied or replica content material<br>Experts are residing in a global in which the significance of seo can not be questioned. Day and night, if theres something a marketer concerns about, its miles the rating of his internet site at the seek engines. Another issue is issuing internet pages with the identical identify and ignoring the significance of identify tags.</p>","bn":"<p>বিশেষজ্ঞরা এমন একটি বিশ্বে বসবাস করছেন যেখানে SEO এর তাৎপর্য নিয়ে প্রশ্ন তোলা যায় না। দিনরাত, যদি একজন বিপণনকারীর উদ্বিগ্ন কিছু থাকে, তবে এটি অনুসন্ধান ইঞ্জিনে তার ইন্টারনেট সাইটের রেটিং মাইল।</p><p>1. অনুলিপি করা বা প্রতিরূপ সামগ্রী সামগ্রী ব্যবহার করা<br>বিশেষজ্ঞরা এমন একটি বিশ্বে বসবাস করছেন যেখানে seo-এর তাৎপর্য নিয়ে প্রশ্ন তোলা যায় না৷ দিনরাত, যদি একজন বিপণনকারীর উদ্বেগজনক কিছু থাকে, তবে তা অনুসন্ধান ইঞ্জিনগুলিতে তার ইন্টারনেট সাইটের রেটিং মাইল। আরেকটি সমস্যা হল অভিন্ন আইডেন্টিটি সহ ইন্টারনেট পেজ ইস্যু করা এবং সনাক্তকরণ ট্যাগের গুরুত্ব উপেক্ষা করা।</p>"}',
                'slug' => 'top-6-search-engine-optimization-mistakes-you-must-avoid',
                'image' => 'images/blogs/9.jpg',
                'category_id' => 6,

            ],
            [
                'title' => '{"en":"Profound Journey From Technology and Leadership To Philanthropy","bn":"প্রযুক্তি এবং নেতৃত্ব থেকে পরোপকারে গভীর যাত্রা"}',
                'details' => '{"en":"<p>Pain Is Inevitable, Suffering Is Not. <br>This e-newsletter covers a gist of a deeply insightful consultation with touching tales from Kalpana Maniars lifestyles adventure from finance to era to management and to her lifestyles calling - philanthropy.</p><p>I had an thrilling communique with Kalpana Maniar, Former Group CIO of Edelweiss, Chartered Accountant, Philanthropist and complete-time volunteer of Isha Foundation; on tenth July 2021.</p>","bn":"<p>যন্ত্রণা অনিবার্য, কষ্ট নয়। <br>এই ই-নিউজলেটারটি কল্পনা মানিয়ারস জীবনধারার অ্যাডভেঞ্চার থেকে ফিনান্স থেকে শুরু করে ম্যানেজমেন্ট পর্যন্ত এবং তার লাইফস্টাইল কলিং - পরোপকারী গল্পগুলির সাথে গভীর অন্তর্দৃষ্টিপূর্ণ পরামর্শের একটি সারাংশ কভার করে।</p><p>এডেলওয়েজের প্রাক্তন গ্রুপ সিআইও, চার্টার্ড অ্যাকাউন্ট্যান্ট, ফিলানথ্রোপিস্ট এবং ইশা ফাউন্ডেশনের সম্পূর্ণ সময়ের স্বেচ্ছাসেবক কল্পনা মানিয়ারের সাথে আমার একটি রোমাঞ্চকর যোগাযোগ ছিল; 2021 সালের দশম জুলাই।</p>"}',
                'slug' => 'profound-journey-from-technology-and-leadership-to-philanthropy',
                'image' => 'images/blogs/10.jpg',
                'category_id' => 2,

            ],

        ]);
    }
}
