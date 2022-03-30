<section class="section-header overflow-hidden pt-6 pt-lg-8 pb-6   bg-primary text-white">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h1>
                    {{$banner->title}}
                </h1>
                <h3>
                    {!! $banner->details !!}
                </h3>
            </div>
            <div class="col-md-6">
                <img class="home_page_slider_img"
                     src="{{assetPath($banner->image)}}"
                     alt="">
            </div>
        </div>
    </div>
    <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
        <svg class="home-pattern"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
        </svg>
    </figure>
</section>
