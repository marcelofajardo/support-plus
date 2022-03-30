@if($cookie->status==1)
    <div class=" cookies-alert-container cookie p-2 m-0  align-center justify-center d-none">
        <div class="row text-center">
            <div class="col-md-12 ">
                <p class="cookie__message mb-0">{{$cookie->text}}
                    <button class=" cookie__accept">
                        {{$cookie->btn}}
                    </button>
                </p>
            </div>
        </div>
    </div>
@endif
