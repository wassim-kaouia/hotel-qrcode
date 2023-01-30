<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <style>
        /* start printing styling  */
        @media print {
            body * {
                visibility: hidden;
                /* // part to hide at the time of print */
                -webkit-print-color-adjust: exact !important;
                /* // not necessary use          */
                /* if colors not visible */
            }

            #printBtn {
                visibility: hidden !important; // To hide
            }

            #page-wrapper * {
                visibility: visible;
                padding-top: 0px;
                /* // Print only required part */
                /* text-align: left; */
                -webkit-print-color-adjust: exact !important;
            }
        }

        /* start invoice styling */
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            /* border: 1px solid #eee !important; */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); */
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555 !important;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd !important;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee !important;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
        
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visuel de la facture') }}
        </h2>
    </x-slot>

    <div class="py-6" id="page-wrapper">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="invoice-box bg-white">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td class="title">
                                        <img src="{{ asset('assets/images/ovm_logo.png') }}"
                                            style="width: 100%; max-width: 300px" />
                                    </td>

                                    <td>
                                        Facture #: 123<br />
                                        Créé en: Janvier 11, 2023<br />
                                        Dû: Mars 21, 2023
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="information">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td>
                                        Sparksuite, Inc.<br />
                                        12345 Sunny Road<br />
                                        Sunnyville, CA 12345
                                    </td>

                                    <td>
                                        Acme Corp.<br />
                                        John Doe<br />
                                        john@example.com
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="heading">
                        <td>Payment Method</td>

                        <td>Check #</td>
                    </tr>

                    <tr class="details">
                        <td>Check</td>

                        <td>1000</td>
                    </tr>

                    <tr class="heading">
                        <td>Item</td>

                        <td>Price</td>
                    </tr>

                    <tr class="item">
                        <td>Website design</td>

                        <td>$300.00</td>
                    </tr>

                    <tr class="item">
                        <td>Hosting (3 months)</td>

                        <td>$75.00</td>
                    </tr>

                    <tr class="item last">
                        <td>Domain name (1 year)</td>

                        <td>$10.00</td>
                    </tr>

                    <tr class="total">
                        <td></td>

                        <td>Total: $385.00</td>
                    </tr>
                </table>
                <div class="max-w-9xl mx-auto sm:px-6 lg:px-2">
                    <button class="px-4 py-2 bg-gray-300 rounded-lg text-white bg-blue-600"
                        onclick="printWindow()" id="printBtn">Imprimer</button>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        printWindow = function() {
            
            window.print()
            document.getElementById('page-wrapper').style.paddingTop = "20px";
        }
    </script>
</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
