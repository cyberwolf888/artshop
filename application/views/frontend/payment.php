<?php  $this->load->view('frontend/header1');  ?>

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="active">Payment</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Payment</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <?php if($this->session->flashdata('success')!==null): ?>
                <div class="alert alert-success mt-lg" id="contactSuccess">
                    <strong>Success!</strong> <?= $this->session->flashdata('success') ?>
                </div>
                <?php endif; ?>

                <?php if($this->session->flashdata('error')!==null): ?>
                <div class="alert alert-danger mt-lg" id="contactError">
                    <strong>Error!</strong> <?= $this->session->flashdata('error') ?>
                    <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                </div>
                <?php endif; ?>

                <h2 class="mb-sm mt-sm"><strong>Payment</strong></h2>
                <form id="paymentForm" action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Order*</label>
                                <select class="form-control" name="order_id" required>
                                    <?php foreach ($order as $orow): ?>
                                        <option value="<?= $orow->id ?>">Order #<?= $orow->id ?> | Total Rp. <?= number_format($orow->total,0,',','.') ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Image*</label>
                                <input type="file" value="" maxlength="100" class="form-control" name="photo" id="photo" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Note (optional) </label>
                                <textarea maxlength="5000" rows="3" class="form-control" name="note" id="note"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send Payment" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                        </div>
                    </div>
                    <input type="hidden" value="<?= $member->id ?>" name="member_id">
                </form>
            </div>
            <div class="col-md-6">

                <h4 class="heading-primary mt-lg">Extra <strong>Information</strong></h4>
                <p>If you have a problem to do payment processs please contact Our customer support.</p>

                <hr>

                <h4 class="heading-primary">The <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                </ul>

                <hr>

                <h4 class="heading-primary">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-xlg">
                    <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
                    <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
                    <li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
                </ul>

            </div>

        </div>

    </div>

</div>

<?php if(isset($script)) {
    $this->load->view('frontend/footer1',['script'=>$script]);
}else{
    $this->load->view('frontend/footer1');
}
?>

