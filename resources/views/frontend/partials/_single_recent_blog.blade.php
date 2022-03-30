<div class="col-md-4 col-sm-6">
    <div class="single-post-container p-3">
        <div class="px-0 py-sm-2 py-md-0 post-image-container">
            <a href="{{route('blogDetails',$blog->slug)}}">
                <div class="post-image" style="background:url({{getImage($blog->image)}});"></div>
            </a>
        </div>
        <p class="author py-3 mb-0 mt-3" id="post-author">
            <span class="ti-user"> </span>
            <span>{{__('common.Admin')}}</span>
            <span>|</span>
            <span class="ti-calendar"> </span>
            <span>{{$blog->created_at->diffForHumans()}}</span>
        </p>
        <a href="{{route('blogDetails',$blog->slug)}}"
           class="post-details-link">{{$blog->title}}</a>
        <p class="blog-post-details mb-0">
            {{strip_tags($blog->details)}}
        </p>
        <div class="bottom-read-more-btn">
            <br>
            <hr class="mb-0">
            <a href="{{route('blogDetails',$blog->slug)}}" class="mt-3 post-details-link post-readmore-btn"
            >{{__('common.Read more')}}</a>
        </div>
    </div>
</div>

