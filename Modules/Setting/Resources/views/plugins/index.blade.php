@extends('backend.layouts.app')

@section('title')
    {{__('setting.Plugins')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('plugins.index') }}


    <div class="row">
        <div class="col-md-12">

            @csrf
            <div class="row">


                <div class="col-lg-4">

                        <div class="card-header">
                            <div class="card-title h4">{{__('setting.Disqus')}}</div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('plugins.store')}}" method="post">
                                @csrf
                                <div class="form-group pb-3">
                                    <label>{{__('common.Status')}}</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="disqus_status"
                                                       id="disqus_status1"
                                                       value="1" {{setting('disqus_status')==1?'checked':''}}>
                                                <label class="form-check-label" for="disqus_status1">
                                                    {{__('common.Active')}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="disqus_status"
                                                       id="disqus_status2"
                                                       value="0" {{setting('disqus_status')!=1?'checked':''}}>
                                                <label class="form-check-label" for="disqus_status2">
                                                    {{__('common.Inactive')}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pb-3">
                                    <label>{{__('setting.Disqus')}} {{__('setting.Shortname')}}</label>
                                    <input class="form-control" name="disqus_shortname"
                                           value="{{setting('disqus_shortname')}}">
                                </div>

                                <div class="form-group pb-3">
                                    <div class="col-12 text-center">
                                        <button type="submit"
                                                class="btn btn-secondary note-btn-block btn-sm">{{__('common.Update')}}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                        <div class="card-header">
                            <div class="card-title h4">{{__('setting.Tawk.to')}} </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('plugins.store')}}" method="post">
                                @csrf
                                <div class="form-group pb-3">
                                    <label>{{__('common.Status')}}</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tawk_status"
                                                       {{setting('tawk_status')==1?'checked':''}}
                                                       id="tawk_status1" value="1">
                                                <label class="form-check-label" for="tawk_status1">
                                                    {{__('common.Active')}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tawk_status"
                                                       {{setting('tawk_status')!=1?'checked':''}}
                                                       id="tawk_status2" value="0">
                                                <label class="form-check-label" for="tawk_status2">
                                                    {{__('common.Inactive')}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pb-3">
                                    <label>{{__('setting.Tawk.to')}} {{__('setting.Direct Chat Link')}}</label>
                                    <input class="form-control" name="tawk_direct_chat_ink"
                                           value="{{setting('tawk_direct_chat_ink')}}">
                                </div>

                                <div class="form-group pb-3">
                                    <div class="col-12 text-center">
                                        <button type="submit"
                                                class="btn btn-secondary note-btn-block btn-sm">{{__('common.Update')}}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                        <div class="card-header">
                            <div class="card-title h4">{{__('setting.WhatsApp Chat Button')}} </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('plugins.store')}}" method="post">
                                @csrf
                                <div class="form-group pb-3">
                                    <label>{{__('common.Status')}}</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="whatsapp_status"
                                                       {{setting('whatsapp_status')==1?'checked':''}}
                                                       id="whatsapp_status1" value="1">
                                                <label class="form-check-label" for="whatsapp_status1">
                                                    {{__('common.Active')}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="whatsapp_status"
                                                       {{setting('whatsapp_status')!=1?'checked':''}}
                                                       id="whatsapp_status2" value="0">
                                                <label class="form-check-label" for="whatsapp_status2">
                                                    {{__('common.Inactive')}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pb-3">
                                    <label>{{__('setting.WhatsApp Number With Country Code')}}</label>
                                    <input class="form-control" name="whatsapp_number"
                                           value="{{setting('whatsapp_number')}}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>{{__('setting.WhatsApp Header Title')}}</label>
                                    <input class="form-control" name="whatsapp_header_title"
                                           value="{{setting('whatsapp_header_title')}}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>{{__('setting.WhatsApp Popup Message')}}</label>
                                    <input class="form-control" name="whatsapp_popup_message"
                                           value="{{setting('whatsapp_popup_message')}}">
                                </div>

                                <div class="form-group pb-3">
                                    <label>{{__('setting.Popup')}}</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                       name="whatsapp_popup_status"
                                                       {{setting('whatsapp_popup_status')==1?'checked':''}}
                                                       id="whatsapp_popup_status1" value="1">
                                                <label class="form-check-label" for="whatsapp_popup_status1">
                                                    {{__('common.Active')}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                       name="whatsapp_popup_status"
                                                       {{setting('whatsapp_popup_status')!=1?'checked':''}}
                                                       id="whatsapp_popup_status2" value="0">
                                                <label class="form-check-label" for="whatsapp_popup_status2">
                                                    {{__('common.Inactive')}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pb-3">
                                    <div class="col-12 text-center">
                                        <button type="submit"
                                                class="btn btn-secondary note-btn-block btn-sm">{{__('common.Update')}}
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
@endsection
