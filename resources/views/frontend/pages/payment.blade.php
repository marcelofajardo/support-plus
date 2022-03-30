@extends('frontend.layouts.app')
@section('title')
    {{__('frontend.Payment')}}
@endsection
@section('content')
    <div class="container pt-6 pb-6">


        <div class="row">
            <div class="col-12 text-center pb-3">
                <h2 class="h1">{{__('frontend.Select Payment Gateway')}}</h2>
            </div>
        </div>
        <div class="spacer py-4"></div>

        <div class="" id="">
            <nav class="">
                <div
                    class="nav nav-tabs flex-column flex-lg-row justify-content-center shadow-sm border-soft bg-white rounded mb-6 p-2 p-lg-4">
                    @foreach($methods as $method)
                        <form action="{{route('package.paymentSubmit')}}" method="post">
                            @csrf
                            <input type="hidden" name="method" value="{{$method->name}}">
                            <input type="hidden" name="package" value="{{session()->get('package')}}">
                            <input type="hidden" name="type" value="{{session()->get('type')}}">

                            @if($method->name=='RazorPay')

                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ env('RAZOR_KEY') }}"
                                        data-amount={{$packagePrice*100}}
                                            data-buttontext=""
                                        data-name="{{ env('APP_NAME') }}"
                                        data-prefill.name="{{auth()->user()->name}}"
                                        data-prefill.email="{{auth()->user()->email}}"
                                        data-theme.color="#ff7529">
                                </script>

                            @endif
                            <button type="submit"
                                    class="btn btn-secondary text-dark animate-up-2 ms-3 d-none d-sm-flex align-items-center justify-content-center">
                                {{$method->name}}
                            </button>
                        </form>
                    @endforeach

                </div>
            </nav>
        </div>
    </div>
@endsection
