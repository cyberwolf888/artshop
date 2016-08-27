<?php  $this->load->view('frontend/header1');  ?>

<div role="main" class="main shop">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="featured-boxes">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                <div class="box-content">
                                    <h4 class="heading-primary text-uppercase mb-md">Register An Account</h4>
                                    <?php echo validation_errors("<div style='color: red;margin-bottom: 10px;'>","</div>"); ?>
                                    <form action="" id="frmSignUp" method="post">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>E-mail Address</label>
                                                    <input name="email" type="email" value="" class="form-control input-lg" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Password</label>
                                                    <input name="password" type="password" value="" class="form-control input-lg" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Re-enter Password</label>
                                                    <input name="passconf" type="password" value="" class="form-control input-lg" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Full Name</label>
                                                    <input name="fullname" type="text" value="" class="form-control input-lg" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>No. Telp</label>
                                                    <input name="no_hp" type="text" value="" class="form-control input-lg" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Address</label>
                                                    <input name="alamat" type="text" value="" class="form-control input-lg" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Postal Code</label>
                                                    <input name="kode_pos" type="text" value="" class="form-control input-lg" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input name="register" type="submit" value="Register" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
