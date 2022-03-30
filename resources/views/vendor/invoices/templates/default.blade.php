<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $invoice->name }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style media="screen">
        * {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

            margin: 0;
            padding: 0;
        }

        .container {
            background: #fff;
            border-radius: 5px;
            width: 796px;
        }

        #main-table {
            padding: 20px;
        }

        .company-logo-column {
            vertical-align: baseline;
        }

        #main-table tr td {
            width: 33.3333333%;
        }

        /* .logo {
            font-family: test;
        } */

        #address span {
            font-size: 15px;
            line-height: 25px;
            font-family: test;
        }

        .company-name {
            font-family: test;
        }

        .invoice-title {
            text-align: center;
            padding: 40px;
        }

        .invoice-title p span {
            font-size: 40px;
            margin: 0px;
            font-family: test;
        }

        .invoice-status {
            color: #10b981;
            font-size: 20px !important;
            margin-left: 10px;
            padding: 5px 15px 10px 5px;
            border-radius: 5px;
            position: relative;
            top: -20px;
            text-decoration: underline;
        }

        .client-info h2 {
            font-size: 20px;
            font-family: test;
        }

        .client-info ul {
            list-style: none;
            padding: 0px;
        }

        .client-info ul li {
            color: #000326;
            font-size: 16px;
            padding: 5px 0px 5px 0px;
            font-family: test;
        }

        .client-info ul li a {
            color: #000326;
            font-size: 16px;
            padding: 5px 0px 5px 0px;
            text-decoration: none;
            font-family: test;
        }

        .invoice-info-table {
            vertical-align: baseline;
            width: 200px;
        }

        .invoice-info tr td {
            font-size: 16px;
            padding-top: 5px;
            padding-bottom: 5px;
            font-family: test;
            color: #000326;
        }

        .invoice-info tr td:first-child {
            width: 100px;
        }

        #product-table {
            padding: 20px;
            border-spacing: 0;
            font-family: test;
        }

        #product-table thead tr {
            background: #eee;
        }

        #product-table thead tr th {
            padding: 10px;
            text-align: left;
        }

        #product-table tbody tr td {
            padding: 10px;
            border-bottom: 1px solid lightgray;
        }

        #amount-table {
            float: right;
            padding: 20px;
            padding-top: 0px;
            border-spacing: 0;
            font-family: test;
        }

        #amount-table tr td:first-child {
            width: 150px;
            font-weight: bold;
        }

        #amount-table tr td:nth-child(2) {
            width: 50px;
        }

        #amount-table tr td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid lightgray;
        }

        .payment-to {
            padding: 20px;
            font-family: test;
            margin-top: 20px;
        }
    </style>
</head>
<div class="container">
    <table width="796px" id="main-table">
        <tr>
            <td class="company-logo-column" style="vertical-align: middle;">
                <div class="logo">
                    <img src="{{ $invoice->getLogo() }}" width="150px" alt="{{ $invoice->name }}">
                </div>
            </td>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td colspan="2">
                            <h1 class="company-name">
                                {{$invoice->seller->name}}
                            </h1>
                        </td>
                    </tr>


                    @if($invoice->seller->phone)
                        <tr>
                            <td>
                                {{ __('invoice.phone') }}
                            </td>
                            <td>
                                : {{ $invoice->seller->phone }}
                            </td>
                        </tr>
                    @endif

                    @if($invoice->seller->email)
                        <tr>
                            <td>
                                {{ __('invoice.email') }}
                            </td>
                            <td>
                                : {{ $invoice->seller->email }}
                            </td>
                        </tr>
                    @endif

                    @if($invoice->seller->address)
                        <tr>
                            <td>
                                {{ __('invoice.address') }}
                            </td>
                            <td>
                                : {{ $invoice->seller->address }}
                            </td>
                        </tr>
                    @endif
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="2" class="invoice-info-table" style="padding-top: 50px">

            </td>
        </tr>

        <tr>
            <td colspan="2" class="invoice-info-table">

                <table class="invoice-info">
                    <tr>
                        <td>{{ __('invoice.name') }}</td>
                        <td> : {{ $invoice->buyer->name }}  </td>
                    </tr>
                    @if($invoice->buyer->phone)
                        <tr>
                            <td>{{ __('invoice.phone') }}</td>

                            <td>
                                : {{ $invoice->buyer->phone }}
                            </td>
                        </tr>
                    @endif
                    @if($invoice->buyer->email)
                        <tr>
                            <td>{{ __('invoice.email') }}</td>

                            <td>
                                : {{ $invoice->buyer->email }}
                            </td>
                        </tr>
                    @endif
                    @if($invoice->buyer->address)
                        <tr>
                            <td>{{ __('invoice.address') }}</td>

                            <td>
                                : {{ $invoice->buyer->address }}
                            </td>
                        </tr>
                    @endif
                </table>


            </td>
            <td class="invoice-info-table">
                <table class="invoice-info">
                    <tr>
                        <td>Invoice No.</td>
                        <td>: #{{ $invoice->getSerialNumber() }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>: {{$invoice->getDate()}}</td>
                    </tr>
                    <tr>
                        <td>Date Due:</td>
                        <td>: 30/04/2020</td>
                    </tr>
                    <tr>
                        <td>Payment Status:</td>
                        <td>: Paid</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <table width="796px" id="product-table">
        <thead>
        <tr>
            <th scope="col" class="border-0 pl-0">{{ __('invoice.description') }}</th>


            <th scope="col" class="text-right border-0">{{ __('invoice.price') }}</th>

        </tr>
        </thead>
        <tbody>
        @php
            $total =0
        @endphp
        @foreach($invoice->items as $item)
            <tr>
                <td class="pl-0">
                    {{ $item->title }}

                    @if($item->description)
                        <p class="cool-gray">{{ $item->description }}</p>
                    @endif
                </td>

                <td class="text-right">
                    {{getPriceFormat($item->price_per_unit) }}
                </td>

            </tr>
            @php
                $total =$total+$item->price_per_unit
            @endphp
        @endforeach
        </tbody>
    </table>

    <table width="796px" class="amount-table-container">
        <tr style="width: 796px">
            <td style="height: 150px">
                <table id="amount-table">

                    <tr>
                        <td>{{__('common.Total')}}</td>
                        <td>{{getPriceFormat($total)}}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <table width="796px" style="margin-top: 50px" class="amount-table-container">
        <tr>
            <td>
                @if($invoice->notes)
                    <p>
                        {{ trans('invoice.notes') }}: {!! $invoice->notes !!}
                    </p>
                @endif


            </td>
        </tr>

    </table>

</div>

<script type="text/php">
            if (isset($pdf) && $PAGE_COUNT > 1) {
                $text = "Page {PAGE_NUM} / {PAGE_COUNT}";
                $size = 10;
                $font = $fontMetrics->getFont("Verdana");
                $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
                $x = ($pdf->get_width() - $width);
                $y = $pdf->get_height() - 35;
                $pdf->page_text($x, $y, $text, $font, $size);
            }

















</script>
</body>
</html>

