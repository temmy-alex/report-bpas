<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        thead {
            display: table-header-group
        }

        tfoot {
            display: table-row-group
        }

        tr {
            page-break-inside: avoid
        }

        .page {
            page-break-after: always;
            page-break-inside: avoid;
            overflow: hidden;
        }

        .no-border {
            border-left: none !important;
        }

        .table-invoice-info,
        .table-product {
            border-collapse: collapse;
        }

        .dotted-border {
            border: 1px solid;
            border-style: dotted;
            color: black;
        }

        .table-invoice-info td {
            padding: 0.3em;
        }

        .table-product {
            width: 61em;
        }

        .table-product td, th {
            padding: 0.3em;
        }

        .bold {
            font-weight: bolder;
            color: black;
            font-family: 'Times New Roman', Times, serif
        }

        .table-product td {
            border-right: 1px dotted black;
            text-align: center;
        }

        .table-product th {
            border-bottom: 1px dotted black;
            border-right: 1px dotted black;
        }

        .table-product {
            border: 2px dotted black;
        }

        .transfer-info {
            border: 1px solid black;
            border-radius: 10px;
            padding: 1em;
            width: 27em;
        }

        .nowrap { white-space: nowrap; }
        .pt-info { margin-top: -1em; }
        .text-justify { text-align: justify}
        .borderbottom { border-bottom: double; }
        .bottom-border {border-bottom: double; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
    </style>
</head>

<body>
    @php
        $count = 10
    @endphp

    <div class="row">
        <div class="col-md-8">
            <img src="data:image/jpeg;base64,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"
                style="margin-bottom: 1.2em; width: 230px">
            <br>
            <p class="bold text-justify">PT. BUANA PRIMALITE ABADI SUKSES</p>
            <p class="bold pt-info">JL. HALIMUN RAYA NO 31</p>
            <p class="bold pt-info">JAKARTA SELATAN, 12980</p>
            <p class="bold pt-info">PHONE: 021-8282 506</p>
        </div>
        <div class="col-md-4">
            <h1 class="bold" style="margin-bottom: 0.5em; color: black;  font-size: 2.1em;float: right;margin-top: 0em;">PURCHASE ORDER</h1>
            <table class="table-invoice-info" style="float: right">
                <tr>
                    <td class="bold text-right">DATE</td>
                    <td class="dotted-border bold">17/03/2023</td>
                </tr>
                <tr>
                    <td class="bold text-right" style="white-space: nowrap;">PO NO</td>
                    <td class="dotted-border bold">00001/BPAS/III/2023</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row" style="margin-top: 2em">
        <div class="col-md-10">
            <table class="table-invoice-info">
                <tr>
                    <td class="bold">TO</td>
                    <td class="bold">:</td>
                    <td class="bold">LUCI PTE LTD</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="bold"> 52A Tanjong Pagar Road,</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="bold"> SINGAPORE 088473,</td>
                </tr>
                <tr>
                    <td class="bold">ATTN</td>
                    <td class="bold">:</td>
                    <td class="bold">Bpk.Harto (081384390745)</td>
                </tr>
                <tr>
                    <td class="bold">TELP</td>
                    <td class="bold">:</td>
                    <td class="bold">021-5265161</td>
                </tr>
            </table>
            <p style="margin-left: 3.3em;" >Please deliver the following goods, in accordance with the quantity, description and price mentioned below.</p>
        </div>
        <div class="col-md-2"></div>
    </div>

    {{-- <div class="{{ $count >= 30 ? 'page' : '' }}"> --}}
        <div class="row">
            <div class="col-md-12">
                <div >
                    <p class="bold">PROJECT: Plaza Indonesia - Area Parking</p>


                    <table class="table-product" style="width: 100%">
                        <tr>
                            <th style="width: 10px;">No.</th>
                            <th class="text-center">QTY</th>
                            <th class="text-center">ITEM DESCRIPTION</th>
                            <th class="text-center">UNIT PRICE (USD)</th>
                            <th class="text-center">TOTAL PRICE (USD)</th>
                        </tr>
                        @for ($i = 0; $i < $count; $i++)
                            <tr>
                                <td class="bold" style="vertical-align: center;">{{ $i+1 }}</td>
                                <td class="bold" style="vertical-align: center;">P3000{{ $i+1 }}</td>
                                <td class="bold" style="vertical-align: center;">LUCI LFUA-T1900SB-L30-DF-O-15, SV (15.8W/m) Single Back CNT, IP67</td>
                                <td class="bold" style="vertical-align: center;">209</td>
                                <td class="bold" style="vertical-align: center;">209</td>
                            </tr>
                        @endfor
                        <tr>
                            <th class="pt-info bold"></th>
                            <th class="pt-info bold"></th>
                            <th class="pt-info bold" style="text-align: end">NET TOTAL AMOUNT USD</th>
                            <th class="pt-info bold"></th>
                            <th class="pt-info bold" style="text-align: center;">561</th>
                        </tr>

                        <tr>
                            <th class="pt-info bold" style="border: none"></th>
                            <th class="pt-info bold" style="border-bottom: none" >
                                <td class="pt-info bold" style="text-align: start">Delivery Time : ASAP</td>
                            </th class="pt-info bold" style="border: none">
                            <th class="pt-info bold" style="border: none">


                            </th>
                            <th class="pt-info bold" style="border: none"></th>
                        </tr>
                        <tr>
                            <th class="pt-info bold" style="border: none"></th>
                            <th class="pt-info bold" style="border-bottom: none">
                                <td class="pt-info bold" style="text-align: start">Consigned To : TBA</td>
                            </th>
                            <th class="pt-info bold" style="border: none">

                            </th>
                            <th class="pt-info bold" style="border: none"></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div style="margin-top: 2.5em;">
                    <h5 class="bold">Approved By</h5>
                </div>
            </div>
            <div class="col-md-2">
                <div style="margin-top: 2.5em;">
                    <h5 class="bold">Prepared By</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="admin-info" style="margin-top: 4em;">
                    <p class="bold">(TETI)</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="admin-info" style="margin-top: 4em;" >
                    <p class="bold">(TOTI SIUTETI)</p>
                </div>
            </div>
        </div>
    {{-- </div> --}}

</body>
</html>
