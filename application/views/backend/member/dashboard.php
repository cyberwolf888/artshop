<?php  $this->load->view('backend/member/header1');  ?>
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-6">
                <!--work progress start-->
                <section class="panel">
                    <div class="panel-body progress-panel">
                        <div class="task-progress">
                            <h1>New Payment</h1>
                            <p>Last 5</p>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                        <?php foreach ($payment_last5 as $payment): ?>
                            <tr>
                                <td><?= date("d-m-Y", strtotime($payment->created_at)) ?></td>
                                <td>
                                    <?= $payment->fullname ?>
                                </td>
                                <td>
                                    Order #<?= $payment->order_id ?>
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="<?= base_url('member/payment/detail/'.$payment->id) ?>">detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
                <!--work progress end-->
            </div>
            <div class="col-lg-6">
                <!--work progress start-->
                <section class="panel">
                    <div class="panel-body progress-panel">
                        <div class="task-progress">
                            <h1>New Order</h1>
                            <p>Last 5</p>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                        <?php foreach ($order_last5 as $order): ?>
                            <tr>
                                <td><?= date("d-m-Y", strtotime($order->created_at)) ?></td>
                                <td>
                                    <?= $order->fullname ?>
                                </td>
                                <td>
                                    <?= number_format($order->total,0,',','.') ?>
                                </td>
                                <td>
                                    <?= $this->orderMemberModel->getPaymentStatus($order->payment_status) ?>
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="<?= base_url('member/order/detail/'.$order->id) ?>">detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
                <!--work progress end-->
            </div>
        </div>

    </section>
</section>
<?php  $this->load->view('backend/member/footer1');  ?>