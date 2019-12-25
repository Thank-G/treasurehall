<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>ATSWA PAYMENT INVOICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        body {
            background: grey;
            margin-top: 120px;
            margin-bottom: 120px;
        }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function() {};
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'training@treasurehall.net');
        });
    </script>
</head>


<body>
    <div id="invoice">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row p-5">
                                <div class="col-md-6">
                                    <img src="image\treasurehall1.jpg">
                                </div>

                                <div class="col-md-6 text-right">
                                    <p class="font-weight-bold mb-1">Invoice #550</p>
                                    <p class="text-muted">Issue Date: 22 Dec, 2019</p>
                                </div>
                            </div>

                            <hr class="my-5">

                            <div class="row pb-5 p-5">
                                <div class="col-md-6">
                                    <p class="font-weight-bold mb-4">ATSWA PAYMENT INVOICE</p>
                                    <p class="mb-1">Water Front Plaza, First Avenue,</p>
                                    <p class="mb-1">Festac Town, </p>
                                    <p class="mb-1">Lagos</p>
                                </div>

                                <div class="col-md-6 text-right">
                                    <p class="font-weight-bold mb-4">Payment Details</p>
                                    <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                    <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                    <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                    <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                                </div>
                            </div>

                            <div class="row p-5">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">COURSE</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">QUANTITY</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">UNIT COST
                                                </th>
                                                <th class="border-0 text-uppercase small font-weight-bold">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>BUSINESS LAW</td>
                                                <td>1</td>
                                                <td>₦17500</td>
                                                <td>₦17500</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>ADVANCED TAXATION</td>
                                                <td>1</td>
                                                <td>₦21500</td>
                                                <td>₦21500</td>
                                            </tr>
                                            <tr>
                                                <td>1</td <td>COURSES COLLECTION</td>
                                                <td>FINANCIAL REPORTING</td>
                                                <td>₦1</td>
                                                <td>₦19800</td>
                                                <td>₦19800</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                                <div class="py-3 px-5 text-right">
                                    <div class="mb-2">Grand Total</div>
                                    <div class="h2 font-weight-light">₦58,800</div>
                                </div>

                                <div class="py-3 px-5 text-right">
                                    <div class="mb-2">Discount</div>
                                    <div class="h2 font-weight-light">10%</div>
                                </div>

                                <div class="py-3 px-5 text-right">
                                    <div class="mb-2">Sub - Total amount</div>
                                    <div class="h2 font-weight-light">₦61,800</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-light mt-5 mb-5 text-center small"> © Copyright 2019 Treasurehall - Developed by<a class="text-light" href="https://www.github.com/Thank-G" target="_blank"> Thank-G</a></div>

            <div class="toolbar hidden-print">
                <div class="text-right">
                    <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                    <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        window.alert = function() {};
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'training@treasurehall.net');
        });
    </script>

    <script type="text/javascript">
        $('#printInvoice').click(function() {
            Popup($('.invoice')[0].outerHTML);

            function Popup(data) {
                window.print();
                return true;
            }
        });
    </script>


    <script type="text/javascript">
    </script>
</body>

</html>