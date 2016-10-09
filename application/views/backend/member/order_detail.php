<?php  $this->load->view('backend/member/header1');  ?>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Member Oroder
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name">Customer Name</label>
                            <input type="text" name="name" value="<?= $order->fullname ?>" class="form-control" id="name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">No HP</label>
                            <input type="text" name="no_hp" value="<?= $order->no_hp ?>" class="form-control" id="no_hp"  disabled>
                        </div>
                        <div class="form-group">
                            <label for="price">Address</label>
                            <input type="text" name="price" value="<?= $order->address ?>" class="form-control" id="address" disabled>
                        </div>
                        <div class="form-group">
                            <label for="discount">State</label>
                            <input type="text" value="<?= $order->state ?>" name="state" class="form-control" id="state" disabled>
                        </div>
                        <div class="form-group">
                            <label for="discount">Payment</label>
                            <input type="text" value="<?= $this->orderMemberModel->getPayment($order->payment) ?>" name="state" class="form-control" id="payment" disabled>
                        </div>
                        <div class="form-group">
                            <label for="discount">Total</label>
                            <input type="text" value="<?= number_format($order->total, 0, ',', '.') ?>" name="state" class="form-control" id="total" disabled>
                        </div>
                        <div class="form-group">
                            <label for="discount">Status</label>
                            <input type="text" value="<?= $this->orderMemberModel->getStatus($order->status) ?>" name="status" class="form-control" id="status" disabled>
                        </div>
                        <div class="form-group">
                            <label for="discount">Payment Status</label>
                            <input type="text" value="<?= $this->orderMemberModel->getPaymentStatus($order->payment_status) ?>" name="status" class="form-control" id="status" disabled>
                        </div>
                        <div class="form-group">
                            <label for="discount">Order Date</label>
                            <input type="text" value="<?= $order->created_at ?>" name="status" class="form-control" id="status" disabled>
                        </div>

                        <div class="form-group">
                            <label for="description">Note</label>
                            <textarea name="description" class="form-control" id="description" rows="3" disabled><?= $order->note ?></textarea>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Order Detail
                    </header>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <?php $no=1;foreach ($detail as $row): ?>
                                <?php $image = $this->productImagesModel->getOneByProduct($row->product_id)->result()[0]; ?>
                                <tr>
                                    <td><img class="img-rounded" width="80" height="80" src="<?= base_url('images/product/'.$row->product_id.'/mini_'.$image->image) ?>" > </td>
                                    <td><?= $row->product_name ?></td>
                                    <td><?= number_format($row->product_price, 0, ',', '.') ?></td>
                                    <td><?= $row->qty ?></td>
                                    <td><?= number_format($row->product_price*$row->qty, 0, ',', '.') ?></td>
                                </tr>
                                <?php $no++;endforeach; ?>
                        </table>
                    </div>
                </section>
            </div>
        </div>

    </section>
</section>
<?php  $this->load->view('backend/member/footer1');  ?>
