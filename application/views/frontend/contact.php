<?php  $this->load->view('frontend/header1');  ?>

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <!-- <div id="googlemaps" class="google-map"></div> -->

    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <?php if($this->session->flashdata('success')!==null): ?>
                <div class="alert alert-success mt-lg" id="contactSuccess">
                    <strong>Success!</strong> <?= $this->session->flashdata('success') ?>
                </div>
                <?php endif; ?>

                <div class="alert alert-danger hidden mt-lg" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                </div>

                <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
                <form id="contactForm" action="" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <h4 class="heading-primary mt-lg">Get in <strong>Touch</strong></h4>
                <p>We are professional and awesome people who work for the beauty of arts. We keep create and produce <span class="alternative-font">Clean</span> Design. Our company just a small business with big soul of arts.</p>

                <hr>

                <h4 class="heading-primary">The <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> <?= $this->alamat ?></li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> <?= $this->no_telp ?></li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="<?= $this->email ?>"><?= $this->email ?></a></li>
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
