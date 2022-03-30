@if(!isSuperAdmin())
    <div class="floatingButtonWrap">
        <div class="floatingButtonInner">
            <a href="#" class="floatingButton">
                <i class="ti-plus icon-default"></i>
            </a>
            <ul class="floatingMenu">
                <li><a href="{{route('vendors.create')}}">{{__('common.Add')}} {{__('purchases.Vendor')}}</a></li>
                <li><a href="{{route('customers.create')}}">{{__('common.Add')}} {{__('sales.Customer')}}</a></li>
                <li>
                    <a href="{{route('bills.create')}}">{{__('common.Create')}} {{__('common.New')}} {{__('purchases.Bill')}}</a>
                </li>
                <li>
                    <a href="{{route('invoices.create')}}">{{__('common.Create')}} {{__('common.New')}} {{__('sales.Invoice')}}</a>
                </li>
                <li>
                    <a href="{{route('estimates.create')}}">{{__('common.Create')}} {{__('common.New')}} {{__('sales.Estimate')}}</a>
                </li>

            </ul>
        </div>
    </div>
@endif

<footer class="p-3 bg-white rounded shadow">
    <div class="row">
        <div class=" col-12">
            <p class="mb-0 text-left copyright-center-on-sm ">
                {{app('generalSettings')['copyright']}}
                <span
                    class="float-end  copyright-center-on-sm">{{__('common.Current Version')}}:  {{app('generalSettings')['version']}}</span>

            </p>
        </div>

    </div>
</footer>
