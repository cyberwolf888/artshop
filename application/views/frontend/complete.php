<?php  $this->load->view('frontend/header1');  ?>


<div role="main" class="main" xmlns="http://www.w3.org/1999/html">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Invoice</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Invoice</h1>
                </div>
            </div>
        </div>
    </section>

    <center><button class="btn btn-primary btn-lg" type="button" onclick="PrintElem('#invoice')" ><i class="fa fa-print"></i> PRINT</button></center><br>

    <div id="invoice">
        <style>
            .invoice-box{
                max-width:800px;
                margin:auto;
                padding:30px;
                border:1px solid #eee;
                box-shadow:0 0 10px rgba(0, 0, 0, .15);
                font-size:16px;
                line-height:24px;
                font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color:#555;
            }

            .invoice-box table{
                width:100%;
                line-height:inherit;
                text-align:left;
            }

            .invoice-box table td{
                padding:5px;
                vertical-align:top;
            }

            .invoice-box table tr td:nth-child(2){
                text-align:right;
            }

            .invoice-box table tr.top table td{
                padding-bottom:20px;
            }

            .invoice-box table tr.top table td.title{
                font-size:45px;
                line-height:45px;
                color:#333;
            }

            .invoice-box table tr.information table td{
                padding-bottom:40px;
            }

            .invoice-box table tr.heading td{
                background:#eee;
                border-bottom:1px solid #ddd;
                font-weight:bold;
            }

            .invoice-box table tr.details td{
                padding-bottom:20px;
            }

            .invoice-box table tr.item td{
                border-bottom:1px solid #eee;
            }

            .invoice-box table tr.item.last td{
                border-bottom:none;
            }

            .invoice-box table tr.total td:nth-child(2){
                border-top:2px solid #eee;
                font-weight:bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td{
                    width:100%;
                    display:block;
                    text-align:center;
                }

                .invoice-box table tr.information table td{
                    width:100%;
                    display:block;
                    text-align:center;
                }
            }
        </style>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="<?= base_url("frontend/assets/img/LOGO.png") ?>" style="width:100%; max-width:300px;">
                                </td>

                                <td>
                                    Invoice #: <?= $order->id ?><br>
                                    Created: <?= date("F d, Y",strtotime($order->created_at)) ?><br>
                                    Due: <?= date("F d, Y",strtotime("+3 days",strtotime($order->created_at))) ?>
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
                                    Mahartha Handicraft, Inc.<br>
                                    12345 Sunny Road<br>
                                    Sunnyville, TX 12345
                                </td>

                                <td>
                                    <?= $order->fullname ?><br>
                                    <?= $order->no_hp ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="heading">
                    <td>
                        Payment Method
                    </td>

                    <td>
                    </td>
                </tr>

                <tr class="details">
                    <td>
                        Transfer Bank
                    </td>

                    <td>

                    </td>
                </tr>

                <tr class="heading">
                    <td>
                        Item
                    </td>

                    <td>
                        Price
                    </td>
                </tr>

                <?php foreach ($details as $detail): ?>
                    <tr class="item">
                        <td>
                            <?= $detail->product_name ?> x <?= $detail->qty ?>
                        </td>
                        <td>
                            Rp <?= number_format($detail->qty*$detail->product_price,0,',','.') ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <tr class="total">
                    <td></td>

                    <td>
                        Total: Rp <?= number_format($order->total,0,',','.') ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>

<?php if(isset($script)) {
    $this->load->view('frontend/footer1',['script'=>$script]);
}else{
    $this->load->view('frontend/footer1');
}
?>
