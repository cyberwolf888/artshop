<?php  $this->load->view('backend/petugas/header1');  ?>

<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-3">
                <section class="panel">
                    <header class="panel-heading">
                        Payment Detail
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name">Customer Name</label>
                            <input type="text" name="name" value="<?= $model->fullname ?>" class="form-control" id="name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">Customer Order</label>
                            <input type="text" name="name" value="Order #<?= $model->order_id ?>" class="form-control" id="name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">Payment Method</label>
                            <input type="text" name="name" value="Transfer Bank" class="form-control" id="name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">Payment Status</label>
                            <input type="text" name="name" value="<?= $this->paymentPengerajinModel->getStatus($model->status) ?>" class="form-control" id="name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">Total</label>
                            <input type="text" name="name" value="Rp. <?= number_format($model->total, 0, ',', '.') ?>" class="form-control" id="name" disabled>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-9">
                <img src="<?= base_url('images/payment/'.$model->image) ?>" class="img-responsive">
            </div>
        </div>

    </section>
</section>
<?php  $this->load->view('backend/petugas/footer1');  ?>
