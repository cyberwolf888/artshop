<?php  $this->load->view('frontend/header1');  ?>

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2 class="word-rotator-title">
                    The New Way to <strong>
									<span class="word-rotate" data-plugin-options='{"delay": 2000}'>
										<span class="word-rotate-items">
											<span>success.</span>
											<span>advance.</span>
											<span>progress.</span>
										</span>
									</span>
                    </strong>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <p class="lead">
                    We are professional and awesome people who work for the beauty of arts. We keep create and produce <span class="alternative-font">Clean</span> Design. Our company just a small business with big soul of arts.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3 class="heading-primary"><strong>Who</strong> We Are</h3>
                <p>We are people who have the talent to create a masterpiece. Our team is made up of people who have felt the selection and has experience in making a masterpiece. Not any people who can enter into our team. Only the chosen ones who can save the world.</p>
            </div>
            <div class="col-md-4">
                <div class="featured-box featured-box-primary">
                    <div class="box-content">
                        <h4 class="text-uppercase">Behind the scenes</h4>
                        <ul class="thumbnail-gallery" data-plugin-lightbox data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                            <li>
                                <a title="Benefits 1" href="img/benefits/benefits-1.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-1-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 2" href="img/benefits/benefits-2.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-2-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 3" href="img/benefits/benefits-3.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-3-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 4" href="img/benefits/benefits-4.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-4-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 5" href="img/benefits/benefits-5.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-5-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 6" href="img/benefits/benefits-6.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-6-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                        </ul>
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
