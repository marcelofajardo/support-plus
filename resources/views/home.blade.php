@extends('backend.layouts.app')
@section('title')
    {{__('common.Dashboard')}}
@endsection
@section('content')
    <div class="main py-4">
        @if(isSuperAdmin())
            <div class="row">
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-flex align-items-center">
                                <div
                                    class="col-xl-6 col-sm-4 col-md-3 col-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center  justify-content-xl-center">
                                    <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                        <span class="ti-user"></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-8 col-md-9 col-7 px-xl-0">
                                    <div>
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Users')}}</h2>
                                        <h3 class="fw-extrabold mb-2">{{$totalUsers}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-flex align-items-center">
                                <div
                                    class="col-sm-4 col-md-3 col-5 col-xl-6 text-xl-center mb-3 mb-xl-0 d-flex align-items-center  justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <span class="ti-user"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9 col-7 col-xl-6 px-xl-0">
                                    <div>
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.This Month Users')}}</h2>
                                        <h3 class="fw-extrabold mb-2">{{$totalThisMonthUsers}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-flex align-items-center">
                                <div
                                    class="col-sm-4 col-md-3 col-5 col-xl-6 text-xl-center mb-3 mb-xl-0 d-flex align-items-center  justify-content-xl-center">
                                    <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                        <span class="ti-money"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9 col-7 col-xl-6 px-xl-0">
                                    <div>
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Earning')}}</h2>
                                        <h3 class="fw-extrabold mb-2">{{$totalEarning}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-flex align-items-center">
                                <div
                                    class="col-sm-4 col-md-3 col-5 col-xl-6 text-xl-center mb-3 mb-xl-0 d-flex align-items-center  justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <span class="ti-money"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9 col-7 col-xl-6 px-xl-0">
                                    <div>
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.This Month Earning')}}</h2>
                                        <h3 class="fw-extrabold mb-2">{{$totalThisMonthEarning}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xxl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                            <h2 class="fs-5 fw-bold mb-0">{{__('common.Total Users By Packages')}} </h2>
                        </div>
                        <div class="card-body">
                            <canvas id="packagesTotalPurchasesByUsersArea" width="200" height="200"></canvas>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                            <h2 class="fs-5 fw-bold mb-0">{{__('common.This Month Users By Packages')}} </h2>
                        </div>
                        <div class="card-body">
                            <canvas id="packagesThisMonthPurchasesByUsersArea" width="200" height="200"></canvas>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-xxl-6 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                            <h2 class="fs-5 fw-bold mb-0">{{__('common.Last 12 months Income')}}</h2>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart" width="800" height="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="fs-5 fw-bold mb-0">{{__('common.Recent Join Users')}}</h2>
                                </div>
                                <div class="col text-end">
                                    <a href="{{route('users.index')}}"
                                       class="btn btn-sm btn-primary">{{__('common.See all')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">{{__('common.Name')}}</th>
                                    <th class="border-bottom" scope="col">{{__('common.Email')}}</th>
                                    <th class="border-bottom" scope="col">{{__('common.Plan')}}</th>
                                    <th class="border-bottom" scope="col">{{__('common.Time')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recentJoins as $user)
                                    <tr>
                                        <th class="text-gray-900" scope="row">
                                            {{$user->name}}
                                        </th>
                                        <td class="fw-bolder text-gray-500">
                                            {{$user->email}}
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                            @if(count($user->payments)==0)
                                                {{__('common.Trial')}}
                                            @else
                                                {{$user->payments->first()->package->name}}
                                            @endif
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                            <div class="d-flex">
                                                {{$user->created_at->diffForHumans()}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                        <span class="ti-user"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Customers')}}</h2>
                                        <h3 class="fw-extrabold mb-1">{{$totalCustomers}}</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Customers')}}</h2>
                                        <h3 class="fw-extrabold mb-2">{{$totalCustomers}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <span class="ti-user"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Sales Products')}}</h2>
                                        <h3 class="fw-extrabold mb-1">{{$totalSalesProducts}}</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Sales Products')}}</h2>
                                        <h3 class="fw-extrabold mb-2">{{$totalSalesProducts}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                        <span class="ti-money"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Estimates')}}</h2>
                                        <h3 class="fw-extrabold mb-1">123</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Estimates')}}</h2>
                                        <h3 class="fw-extrabold mb-2">123</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <span class="ti-money"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Invoices')}}</h2>
                                        <h3 class="fw-extrabold mb-1">99</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Invoices')}}</h2>
                                        <h3 class="fw-extrabold mb-2">88</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                        <span class="ti-user"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Bills')}}</h2>
                                        <h3 class="fw-extrabold mb-1">12</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Bills')}}</h2>
                                        <h3 class="fw-extrabold mb-2">12</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <span class="ti-user"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Purchase Products')}}</h2>
                                        <h3 class="fw-extrabold mb-1">{{$totalPurchaseProducts}}</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Purchase Products')}}</h2>
                                        <h3 class="fw-extrabold mb-2">{{$totalPurchaseProducts}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                        <span class="ti-money"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Vendors')}}</h2>
                                        <h3 class="fw-extrabold mb-1">123</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Vendors')}}</h2>
                                        <h3 class="fw-extrabold mb-2">123</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div
                                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <span class="ti-money"></span>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">{{__('common.Total Expenses')}}</h2>
                                        <h3 class="fw-extrabold mb-1">99</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">{{__('common.Total Expenses')}}</h2>
                                        <h3 class="fw-extrabold mb-2">88</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('scripts')
    @if(isSuperAdmin())
        <script>

            var packagesTotalPurchasesByUsers = document.getElementById("packagesTotalPurchasesByUsersArea");

            var packagesTotalPurchasesByUsersData = {
                labels: {!! json_encode($packagesTotalPurchasesByUsersData['label']) !!},
                datasets: [
                    {
                        data: {{json_encode($packagesTotalPurchasesByUsersData['data'])}},
                        backgroundColor: [
                            "{{app('colors')->secondary}}",
                            "{{app('colors')->warning}}",
                            "{{app('colors')->danger}}",
                        ]
                    }]
            };

            new Chart(packagesTotalPurchasesByUsers, {
                type: 'pie',
                data: packagesTotalPurchasesByUsersData
            });

            var packagesThisMonthPurchasesByUsers = document.getElementById("packagesThisMonthPurchasesByUsersArea");

            var packagesThisMonthPurchasesByUsersData = {
                labels: {!! json_encode($packagesTotalPurchasesByUsersData['label']) !!},
                datasets: [
                    {
                        data: {{json_encode($packagesTotalPurchasesByUsersData['data'])}},
                        backgroundColor: [
                            "{{app('colors')->secondary}}",
                            "{{app('colors')->warning}}",
                            "{{app('colors')->danger}}",
                        ]
                    }]
            };

            new Chart(packagesThisMonthPurchasesByUsers, {
                type: 'pie',
                data: packagesThisMonthPurchasesByUsersData,
            });


            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [@foreach($incomeOf12Months as $income)"{{$income->year}}-{{$income->month}}", @endforeach],
                    datasets: [{
                        label: 'Last 12 months Incomes',

                        data: [@foreach($incomeOf12Months as $income){{$income->sum}}, @endforeach],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                    }]
                },
                options: {
                    responsive: true,

                }
            });
        </script>
    @endif
@endsection
