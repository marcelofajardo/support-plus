<section class="section section-lg line-bottom-soft pb-0">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-lg-5">
            <div class="col-12 text-center">
                <h2 class="h1 mb-0">Recent Blog Post</h2>
                {{--                <p class="lead px-lg-8"></p>--}}
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="row m-0">
                @foreach($blogs as $blog)
                    @include('frontend.partials._single_recent_blog')
                @endforeach
            </div>
        </div>
    </div>
</section>
