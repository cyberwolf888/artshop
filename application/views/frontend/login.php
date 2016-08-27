<?php  $this->load->view('frontend/header1');  ?>

<div role="main" class="main shop">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>
        <?php if($this->session->flashdata('success')!==null): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 alert alert-success">
                            <span ><?= $this->session->flashdata('success') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('error')!==null): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 alert alert-danger">
                            <span ><?= $this->session->flashdata('error') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="featured-boxes">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                <div class="box-content">
                                    <h4 class="heading-primary text-uppercase mb-md">I'm a Returning Customer</h4>
                                    <form action="" id="frmSignIn" method="post">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>E-mail Address</label>
                                                    <input name="email" type="text" value="" class="form-control input-lg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <a class="pull-right" href="#">(Lost Password?)</a>
                                                    <label>Password</label>
                                                    <input name="password" type="password" value="" class="form-control input-lg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
															<span class="remember-box checkbox">
																<label for="rememberme">
																	<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																</label>
															</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
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
