@extends('frontend.layouts.app')
@section('title')
    {{__('frontend.Contact Us')}}
@endsection
@section('content')
    <div class="container pt-6">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h2 class="h1">{{__('frontend.Get in touch')}}</h2>
            </div>
        </div>
        <div class="spacer py-4"></div>


        <section class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-3 p-lg-5 bg-soft border-soft">
                            <div class="row">
                                <div class="col-12 col-md-4 text-center d-flex flex-column justify-md-content-between">
                                    <div class="icon-box mb-4">
                                        <span class="ti-map-alt font-size-50px"></span>
                                        <h5 class="icon-box-title">Address:</h5>
                                        <span>
                                           {{setting('address')}}
                                        </span>
                                    </div>
                                    <div class="icon-box mb-4">
                                        <span class="ti-home font-size-50px"></span>
                                        <h5 class="icon-box-title">Company information:</h5>
                                        <span class="d-block mb-1">Email: {{setting('contact_mail')}}</span>
                                        <span class="d-block mb-1">Phone: {{setting('contact_phone')}}</span>
                                    </div>

                                </div>
                                <div class="col-12 col-md-8 mb-4 mb-lg-0">
                                    <div class="justify-content-between align-items-center   ">
                                        <form action="{{route('contacts.store')}}" method="post">
                                            @csrf
                                            <div class="row ">

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="NameInputIconLeft">{{__('frontend.Name')}}</label>
                                                        <div class="input-group">
                           <span class="input-group-text" id="">
                           <span class="ti-user"></span>
                           </span>
                                                            <input type="text" name="name" class="form-control"
                                                                   id="NameInputIconLeft"
                                                                   placeholder="{{__('frontend.Enter Your Name')}}"
                                                                   aria-label="Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailInputIconLeft">{{__('frontend.Email')}}</label>
                                                        <div class="input-group">
                           <span class="input-group-text" id="">
                              <span class="ti-email"></span>
                           </span>
                                                            <input type="text" class="form-control"
                                                                   id="emailInputIconLeft" name="email"
                                                                   placeholder="{{__('frontend.Enter Your Email')}}"
                                                                   aria-label="{{__('frontend.Email')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="formControlTextarea1"
                                                               class="form-label">{{__('frontend.Message')}}</label>
                                                        <textarea class="form-control" id="formControlTextarea1"
                                                                  rows="3" name="message"
                                                                  placeholder="{{__('frontend.Write Your Message')}}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="form-group  mb-4">
                                                    @if(config('captcha.contact'))
                                                        {!! NoCaptcha::renderJs() !!}
                                                        @if(config('captcha.is_invisible'))
                                                            {!! NoCaptcha::display(["data-size"=>"invisible"]) !!}
                                                        @else
                                                            {!! NoCaptcha::display() !!}
                                                        @endif
                                                    @endif
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                            class="btn btn-secondary align-items-center w-100">
                                                        <span class="ti-link"></span>
                                                        {{__('frontend.Send')}}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
