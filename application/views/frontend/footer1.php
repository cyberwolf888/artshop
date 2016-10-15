<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="col-md-4">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger hidden" id="newsletterError"></div>

                    <form id="newsletterForm" action="http://preview.oklerthemes.com/porto/4.8.0/php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> <?= $this->alamat ?></p></li>
                        <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> <?= $this->no_telp ?></p></li>
                        <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="<?= $this->email ?>"><?= $this->email ?></a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Follow Us</h4>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="<?= base_url() ?>" class="logo">
                        <img alt="Porto Website Template" class="img-responsive" src="<?= base_url() ?>frontend/assets/img/LOGO_WHITE.png">
                    </a>
                </div>
                <div class="col-md-7">
                    <p>© Copyright 2016. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <!-- <li><a href="<?= base_url('faq') ?>">FAQ's</a></li> -->
                            <!-- <li><a href="sitemap.html">Sitemap</a></li> -->
                            <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="<?= base_url() ?>frontend/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/common/common.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery.stellar/jquery.stellar.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url() ?>frontend/assets/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<?php
if(isset($script)){
    $this->load->view($script);
}
?>
<script>
    $(document).ready(function () {
        $.post('<?= base_url('frontend/getCart') ?>',{})
        .success(function (data) {
            $("#cart_item_body").empty().html(data);
        });
    })
</script>
<!-- Theme Custom -->
<script src="<?= base_url() ?>frontend/assets/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url() ?>frontend/assets/js/theme.init.js"></script>
</html>