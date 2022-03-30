<section class="section section-lg bg-gray-800 text-white">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-lg-5">
            <div class="col-12 text-center">
                <h2 class="h1 mb-0">{{__('frontend.What Clients Say')}}</h2>

            </div>
        </div>
        <div class="owl-carousel testimonial-slider owl-theme">
            @foreach($testimonials as $key=>$testimonial)
                <div class="single-testimonial-container">
                    <div class="d-flex align-items-center">
                        <div class="client-image-container">
                            <div class="client-image" style="background-image: url({{getImage($testimonial->image)}})">
                            </div>
                        </div>
                        <div class="client-info">
                            <h3 class="client-name mb-0">{{$testimonial->name}}</h3>
                            <h5 class="client-designation">{{$testimonial->designation}}</h5>
                        </div>
                    </div>
                    <div class="feeback-container">
                        <p class="feedback">
                            {{$testimonial->feedback}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
