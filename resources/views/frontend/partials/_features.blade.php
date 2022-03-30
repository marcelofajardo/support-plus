<section class="section-lg">
<div class="container">
    <div class="row">
        <div class="col-12 text-center pb-5">
            <h2 class="h1 mb-0">{{__('frontend.Explore our features')}}</h2>
        </div>
    </div>

        <section class=" bg-soft pt-0">
            <div class="container">

                <div class="row justify-content-between align-items-center  mb-lg-2">
                    @foreach($features  as $key=>$feature)
                        @if($key%2==0)
                            <div class="row justify-content-between align-items-center" data-aos="fade-up">
                                <div class="col-lg-5">
                                    <h2 class="h3">{{$feature->name}}</h2>
                                    <p class="mb-4 lead fw-bold">
                                        {!! $feature->details !!}
                                    </p>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <img src="{{assetPath($feature->image)}}"
                                         alt="">
                                </div>
                            </div>
                        @else
                            <div class="row justify-content-between align-items-center" data-aos="fade-up">
                                <div class="col-lg-6 ">
                                    <img src="{{assetPath($feature->image)}}"
                                         alt="">
                                </div>
                                <div class="col-lg-5 mb-5 mb-lg-0  order-lg-2 mb-5 mb-lg-0">
                                    <h2 class="h3">{{$feature->name}}</h2>
                                    <p class="mb-4 lead fw-bold">
                                        {!! $feature->details !!}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>

            </div>
        </section>
    </div>

</section>

