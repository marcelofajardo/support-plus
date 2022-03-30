@extends('frontend.layouts.app')
@section('title')
    {{__('frontend.Pricing')}}
@endsection
@section('content')

    <div class="container pt-6">


        <div class="row">
            <div class="col-12 text-center pb-3">
                <h2 class="h1">{{__('frontend.Choose the plan that fits for your team')}}</h2>
            </div>
        </div>
        <div class="spacer py-4"></div>

        <div class="col-12">
            <div class="d-flex align-items-center justify-content-center">
                @php
                    $active =0
                @endphp
                <ul class="nav nav-pills mb-3 price-tab-buttons" id="pills-tab" role="tablist">
                    @if($setting->monthly==1)
                        <li class="nav-item pricing-switch" role="presentation">
                            <button class="nav-link {{$active==0?'active':''}}" id="pills-monthly-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-monthly" type="button" role="tab"
                                    aria-controls="pills-monthly"
                                    aria-selected="true"> {{__('frontend.Monthly')}}
                            </button>
                        </li>
                        @php
                            $active =$active+1
                        @endphp
                    @endif
                    @if($setting->yearly==1)
                        <li class="nav-item pricing-switch" role="presentation">
                            <button class="nav-link {{$active==0?'active':''}}" id="pills-yearly-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly"
                                    aria-selected="false">{{__('frontend.Yearly')}}
                            </button>
                        </li>
                        @php
                            $active =$active+1
                        @endphp
                    @endif
                    @if($setting->lifetime==1)
                        <li class="nav-item pricing-switch" role="presentation">
                            <button class="nav-link {{$active==0?'active':''}}" id="pills-lifetime-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-lifetime" type="button" role="tab"
                                    aria-controls="pills-lifetime"
                                    aria-selected="false">{{__('frontend.Lifetime')}}
                            </button>
                        </li>
                    @endif
                </ul>

            </div>
            @php
                $active =0
            @endphp
            <div class="tab-content" id="pills-tabContent">
                @if($setting->monthly==1)
                    <div class="tab-pane fade {{$active==0?'show active':''}}" id="pills-monthly" role="tabpanel"
                         aria-labelledby="pills-monthly-tab">
                        <div class="pricing mb-6 mt-5 ">
                            @foreach($packages as $key=>$package)
                                <div class="plan    @if($package->is_popular==1) popular @endif   ">
                                    @if($package->is_popular==1)
                                        <span class="popularTag">
                        {{__('frontend.Most Popular')}}
                    </span>
                                    @endif
                                    <h2>{{$package->name}}</h2>
                                    <div class="price">

                                        <div class="monthlyPrice">
                                            {{getPriceFormat($package->monthly_price)}}/{{__('frontend.month')}}
                                        </div>

                                    </div>
                                    <ul class="features">
                                        @foreach($features as $feature)
                                            <li>
                                                <span class="ti-check"></span>
                                                <span class="fw-bolder ms-2 monthlyPrice">
                                            @php
                                                $slug ='monthly_'.$package->slug
                                            @endphp
                                                    {{$feature->$slug}}    {{$feature->name}}
                                        </span>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <form action="{{route('package.buy')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$package->slug}}" name="package">
                                        <input type="hidden" class="packageType" value="monthly" name="type">
                                        <button class="btn btn-gray-800 "
                                                type="submit">{{__('subscription.Subscription')}}</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @php
                        $active =$active+1
                    @endphp
                @endif
                @if($setting->yearly==1)
                    <div class="tab-pane fade {{$active==0?'show active':''}}" id="pills-yearly" role="tabpanel"
                         aria-labelledby="pills-yearly-tab">
                        <div class="pricing mb-6 mt-5 ">
                            @foreach($packages as $key=>$package)
                                <div class="plan    @if($package->is_popular==1) popular @endif   ">
                                    @if($package->is_popular==1)
                                        <span class="popularTag">
                        {{__('frontend.Most Popular')}}
                    </span>
                                    @endif
                                    <h2>{{$package->name}}</h2>
                                    <div class="price">

                                        <div class="yearlyPrice">
                                            {{getPriceFormat($package->yearly_price)}}/{{__('frontend.year')}}
                                        </div>

                                    </div>
                                    <ul class="features">
                                        @foreach($features as $feature)
                                            <li>
                                                <span class="ti-check"></span>
                                                <span class="fw-bolder ms-2 yearlyPrice">
                                            @php
                                                $slug ='yearly_'.$package->slug
                                            @endphp
                                                    {{$feature->$slug}}       {{$feature->name}}
                                        </span>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <form action="{{route('package.buy')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$package->slug}}" name="package">
                                        <input type="hidden" class="packageType" value="yearly" name="type">
                                        <button class="btn btn-gray-800 "
                                                type="submit">{{__('subscription.Subscription')}}</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @php
                        $active =$active+1
                    @endphp
                @endif
                @if($setting->lifetime==1)
                    <div class="tab-pane fade {{$active==0?'show active':''}}" id="pills-lifetime" role="tabpanel"
                         aria-labelledby="pills-lifetime-tab">
                        <div class="pricing mb-6 mt-5 ">
                            @foreach($packages as $key=>$package)
                                <div class="plan    @if($package->is_popular==1) popular @endif   ">
                                    @if($package->is_popular==1)
                                        <span class="popularTag">
                        {{__('frontend.Most Popular')}}
                    </span>
                                    @endif
                                    <h2>{{$package->name}}</h2>
                                    <div class="price">

                                        <div class="lifetimePrice">
                                            {{getPriceFormat($package->lifetime_price)}}
                                        </div>

                                    </div>
                                    <ul class="features">
                                        @foreach($features as $feature)
                                            <li>
                                                <span class="ti-check"></span>
                                                <span class="fw-bolder ms-2 lifetimePrice">
                                            @php
                                                $slug ='lifetime_'.$package->slug
                                            @endphp
                                                    {{$feature->$slug}}    {{$feature->name}}
                                        </span>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <form action="{{route('package.buy')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$package->slug}}" name="package">
                                        <input type="hidden" class="packageType" value="lifetime" name="type">
                                        <button class="btn btn-gray-800 "
                                                type="submit">{{__('subscription.Subscription')}}</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>


    </div>

@endsection
