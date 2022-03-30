@extends('backend.layouts.app')

@section('title')
    {{__('setting.Queue')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('queue.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                {{__('setting.Queue')}}    {{__('setting.Setting')}}
                </span>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="w-100">
                        <div class="card border-0 shadow">

                            <div class="card-body">
                                <ul class="list-group list-group-flush list my--3">
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">

                                            <div class="col-auto ms--2"><h4 class="h6 mb-0"><a href="#">Chris Wood</a>
                                                </h4>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-success dot rounded-circle me-1"></div>
                                                    <small>Online</small></div>
                                            </div>
                                            <div class="col text-end">
                                                <a href="#"
                                                   class="btn btn-sm btn-secondary d-inline-flex align-items-center">

                                                    Invite
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    function withJquery() {
        var temp = $("<input>");
        $("body").append(temp);
        temp.val($('#copyText1').text()).select();
        document.execCommand("copy");
        temp.remove();

    }
</script>

