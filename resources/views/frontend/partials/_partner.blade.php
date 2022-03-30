<section class="partner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h1 mb-5">{{__('frontend.Our Partners')}}</h2>
            </div>
        </div>
        <!-- <div class="spacer py-4"></div> -->
        <div class="owl-carousel  partner-slider owl-theme">
            @foreach($partners as $partner)
                <div class="single-partner-container">
                    <img src="{{ assetPath($partner->image) }}" alt="{{$partner->name}}">
                </div>
            @endforeach
        </div>
    </div>
</section>
