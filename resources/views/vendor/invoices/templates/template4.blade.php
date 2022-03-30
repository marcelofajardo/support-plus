<style>
    * {
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

    #invoice-info-table {
        vertical-align: baseline;
    }

    #invoice-info tr td {
        font-size: 16px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-family: test;
        color: #000326;
    }

    #invoice-info tr td:first-child {
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

<div class="container">
    <table width="796px" id="main-table">
        <tr>
            <td>
                <h1 class="company-name">
                    {{$invoice->seller->name}}
                </h1>
                @if($invoice->seller->code)
                    <p class="seller-code">
                        {{ __('invoice.code') }}: {{ $invoice->seller->code }}
                    </p>
                @endif

                @if($invoice->seller->vat)
                    <p class="seller-vat">
                        {{ __('invoice.vat') }}: {{ $invoice->seller->vat }}
                    </p>
                @endif

                @if($invoice->seller->phone)
                    <p class="seller-phone">
                        {{ __('invoice.phone') }}: {{ $invoice->seller->phone }}
                    </p>
                @endif

                @foreach($invoice->seller->custom_fields as $key => $value)
                    <p class="seller-custom-field">
                        {{ ucfirst($key) }}: {{ $value }}
                    </p>
                @endforeach
                @if($invoice->seller->address)
                    <p class="seller-address">
                        {{ __('invoice.address') }}: {{ $invoice->seller->address }}
                    </p>
                @endif
            </td>
            <td></td>
            <td class="company-logo-column" style="vertical-align: middle;">
                <div class="logo">
                    <img src="{{ $invoice->getLogo() }}" width="150px" alt="{{ $invoice->name }}">
                </div>
            </td>
        </tr>


        <tr>
            <td colspan="3" class="invoice-title">
                <p><span>Invoice #{{ $invoice->getSerialNumber() }}</span><span
                        class="invoice-status">{{ $invoice->status }}</span></p>
            </td>
        </tr>


        <tr>
            <td colspan="2" class="client-info">
                <h2>Client Information:</h2>
                <ul>
                    <li>{{ $invoice->buyer->name }}</li>
                    <li>  {{ __('invoice.phone') }}: {{ $invoice->buyer->phone }}</li>


                    @foreach($invoice->buyer->custom_fields as $key => $value)
                        <li class="">
                            {{ ucfirst($key) }}: {{ $value }}
                        </li>
                    @endforeach

                    @if($invoice->buyer->address)
                        <li class="buyer-address">
                            {{ __('invoice.address') }}: {{ $invoice->buyer->address }}
                        </li>
                    @endif
                    <li><a href="mailto:{{$invoice->buyer->email}}">{{$invoice->buyer->email}}</a></li>
                </ul>
            </td>
            <td id="invoice-info-table">
                <table id="invoice-info">
                    <tr>
                        <td>Invoice No.</td>
                        <td>#{{ $invoice->getSerialNumber() }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>{{$invoice->getDate()}}</td>
                    </tr>
                    <tr>
                        <td>Date Due:</td>
                        <td>30/04/2020</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table width="796px" id="product-table">
        <thead>
        <tr>
            <th scope="col" class="border-0 pl-0">{{ __('invoice.description') }}</th>
            @if($invoice->hasItemUnits)
                <th scope="col" class="text-center border-0">{{ __('invoice.units') }}</th>
            @endif
            <th scope="col" class="text-center border-0">{{ __('invoice.quantity') }}</th>
            <th scope="col" class="text-right border-0">{{ __('invoice.price') }}</th>
            @if($invoice->hasItemDiscount)
                <th scope="col" class="text-right border-0">{{ __('invoice.discount') }}</th>
            @endif
            @if($invoice->hasItemTax)
                <th scope="col" class="text-right border-0">{{ __('invoice.tax') }}</th>
            @endif
            <th scope="col" class="text-right border-0 pr-0">{{ __('invoice.sub_total') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoice->items as $item)
            <tr>
                <td class="pl-0">
                    {{ $item->title }}

                    @if($item->description)
                        <p class="cool-gray">{{ $item->description }}</p>
                    @endif
                </td>
                @if($invoice->hasItemUnits)
                    <td class="text-center">{{ $item->units }}</td>
                @endif
                <td class="text-center">{{ $item->quantity }}</td>
                <td class="text-right">
                    {{ $invoice->formatCurrency($item->price_per_unit) }}
                </td>
                @if($invoice->hasItemDiscount)
                    <td class="text-right">
                        {{ $invoice->formatCurrency($item->discount) }}
                    </td>
                @endif
                @if($invoice->hasItemTax)
                    <td class="text-right">
                        {{ $invoice->formatCurrency($item->tax) }}
                    </td>
                @endif

                <td class="text-right pr-0">
                    {{ $invoice->formatCurrency($item->sub_total_price) }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table width="796px" class="amount-table-container">
        <tr style="width: 796px">
            <td style="height: 150px">
                <table id="amount-table">
                    <tr>
                        <td>Subtotal</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>Discount (20%)</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Tax (10%)</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>900</td>
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
        <tr>
            <td>
                <p style="text-align: center">
                    {{ trans('invoice.amount_in_words') }}: {{ $invoice->getTotalAmountInWords() }}
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center">
                    {{ trans('invoice.pay_until') }}: {{ $invoice->getPayUntilDate() }}
                </p>
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
