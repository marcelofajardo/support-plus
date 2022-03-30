@extends('frontend.layouts.app')
@section('title')
    {{$blog->title}}
@endsection
@section('content')
    <div class="container py-6">

        <div class="row">
            <div class="col-md-8">
                <img src="{{getImage($blog->image)}}" alt="" class="w-100 img-fluid">


                <h2 class="pt-3">{{$blog->title}}</h2>
                <p class="author py-2" id="post-author">
                    <span class="ti-user"> </span>
                    <span>{{__('common.Admin')}}</span>
                    <span>|</span>
                    <span class="ti-calendar"> </span>
                    <span>{{$blog->created_at->diffForHumans()}}</span>
                    <span>|</span>
                    <span class="ti-check-box"> </span>
                    <span>{{$blog->category->name}}</span>
                </p>
                <hr>
                <p>
                    {!! $blog->details !!}
                </p>
                <hr class="mt-5">
                <p class="blog-post-tags">
                    <span class="tags">Tags: </span>
                    <span>
                        <a href="#">Test, </a><a href="#">Google, </a><a href="#">New</a>
                    </span>
                </p>
                <div class="d-flex align-items-center my-4 py-5 social-share">
                    <p class="mb-0"><span class="ti-share"></span> Share: </p>
                    <div class="social-btns-container  ">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{URL::current()}}"
                           class="social_btn fb_bg"> <i class="ti-facebook"></i></a>
                        <a target="_blank"
                           href="https://twitter.com/intent/tweet?text={{$blog->title}}&amp;url={{URL::current()}}"
                           class="social_btn twitter_bg"> <i class="ti-twitter-alt"></i></a>
                        <a target="_blank"
                           href="https://pinterest.com/pin/create/link/?url={{URL::current()}}&amp;description={{$blog->title}}"
                           class="social_btn pinterest_bg"> <i class="ti-pinterest"></i></a>
                        <a target="_blank"
                           href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{URL::current()}}&amp;title={{$blog->title}}&amp;summary={{$blog->title}}"
                           class="social_btn linkedin_bg"> <i class="ti-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 category-container px-md-4 px-sm-0">
                <div class="category-wrapper pb-5 mb-4">
                    <p class="category-head py-3 px-4">
                        <span class="ti-list"> </span><span>
                    <a href="{{url('blog')}}">{{__('frontend.All Categories')}}</a></span>
                    </p>

                    <ul class="px-4">
                        @foreach($categories as $category)
                            <li class="py-2 "><a
                                    href="{{url('blog?category='.$category->id)}}"><span
                                        class="ti-angle-double-right"> </span><span>{{$category->name}}</span></a></li>
                        @endforeach
                    </ul>
                </div>


                <div class="post-wrapper pb-5 mb-4">
                    <p class="post-head py-3 px-4">
                        <span class="ti-list"> </span><span>
                    <a href="{{url('blog')}}">{{__('frontend.Recent Posts')}}</a></span>
                    </p>

                    <div class="px-4">
                        @foreach($recent_posts as $post)
                            <div class="row single-recent-post pb-1 mb-3">
                                <div class="col-4 p-0 recent-post-image"
                                     style="background-image: url({{getImage($post->image)}});">
                                    <a href="{{route('blogDetails',$blog->slug)}}"></a>
                                </div>
                                <div class="col-8">
                                    <h6 class="mb-0 recent-post-title read-more-link"><a
                                            href="{{route('blogDetails',$blog->slug)}}">{{$post->title}}</a></h6>
                                    <p class="mb-0">
                                        <span class="ti-calendar"> </span>
                                        <span>{{$blog->created_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
