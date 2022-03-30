@extends('frontend.layouts.app')
@section('title')
    {{__('frontend.FAQs')}}
@endsection
@section('content')
    <div class="container pt-6 pb-6">


        <div class="row">
            <div class="col-12 text-center pb-3">
                <h2 class="h1">{{__('frontend.Frequently Asked Questions')}}</h2>
            </div>
        </div>
        <div class="spacer py-4"></div>

        <div class="accordion" id="accordionPricing">

            @foreach($faqs as $key=>$faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{$faq->id}}">
                        <button class="accordion-button {{$key==0?'':'collapsed'}} " type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{$faq->id}}"
                                aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                            {{$faq->title}}
                        </button>
                    </h2>
                    <div id="collapse{{$faq->id}}" class="accordion-collapse collapse {{$key==0?'show':''}} "
                         aria-labelledby="heading{{$faq->id}}"
                         data-bs-parent="#accordionPricing">
                        <div class="accordion-body">
                            {{$faq->details}}
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
