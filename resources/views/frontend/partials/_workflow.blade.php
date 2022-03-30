<section class="workflow-section section-lg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h1 mb-0">{{__('frontend.How it works')}}</h2>
            </div>
        </div>
        <div class="spacer pb-5"></div>
        <div class="owl-carousel workflow-slider owl-theme">
            @foreach($workflows as $workflow)
                <div class="single-workflow-container">
                    <div class="workflow-image">
                        <img src="{{assetPath($workflow->image) }}" alt="{{$workflow->title}}">
                        <div class="workflow-step-count">
                            <p class="step-count mb-0 px-4 py-2">{{$workflow->order}}</p>
                        </div>
                    </div>
                    <div class="workflow-step">
                        <p class="mb-0 p-3">{{$workflow->title}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
