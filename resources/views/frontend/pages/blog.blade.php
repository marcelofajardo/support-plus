@extends('frontend.layouts.app')
@section('title')
    {{__('blog.Blog')}}
@endsection
@section('content')
    <div class="container pt-6 pb-6">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h2 class="h1">{{__('frontend.Blog Posts')}}</h2>
            </div>
        </div>
        <div class="spacer py-4"></div>
        <div class="row my-3 px-3">
            <!-- Blog Post Area -->
            <div class="col-md-8">
                @foreach($blogs as $blog)
                    @include('frontend.partials._single_blog')
                @endforeach

                <div class="row m-auto ">
                    {{$blogs->links()}}
                </div>
            </div>
            <!-- Blog Category Area -->
            <div class="col-md-4 category-container px-md-4 px-sm-0">
                <div class="category-wrapper pb-5">
                    <p class="category-head py-3 px-4">
                        <span class="ti-list"> </span><span>
                    <a href="{{url('blog')}}">{{__('frontend.All Categories')}}</a></span>
                    </p>

                    <ul class="px-4">
                        @foreach($categories as $category)
                            <li class="py-2 {{$category->id==$category_id?'text-secondary':'text-primary'}}"><a
                                    href="{{url('blog?category='.$category->id)}}"><span
                                        class="ti-angle-double-right"> </span><span>{{$category->name}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
@endsection
