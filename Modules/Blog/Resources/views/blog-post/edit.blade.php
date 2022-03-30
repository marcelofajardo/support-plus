@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}   {{__('blog.Blog')}}  {{__('blog.Post')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('blog-posts.edit',$blogPost->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}  {{__('blog.Blog')}}  {{__('blog.Post')}}  </span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('blog-posts.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('blog.Blog')}}  {{__('blog.Post')}} {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('blog-posts.update', $blogPost->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('blog::blog-post.form')

                </form>
            </div>
        </div>
    </div>



@endsection
