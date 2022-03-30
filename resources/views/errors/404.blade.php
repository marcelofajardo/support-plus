@extends('frontend.layouts.app')

@section('content')
    <main>
        <section class="vh-100 d-flex align-items-center justify-content-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <img class="img-fluid w-25" src="{{assetPath('images/errors/404.png')}}"
                                 alt="404 not found">
                            <h1 class="mt-5">Page not <span class="fw-bolder text-primary">found</span></h1>
                            <p class="lead my-4">{{__('Not Found')}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
