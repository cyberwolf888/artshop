<?php  $this->load->view('frontend/header1');  ?>

<div role="main" class="main shop">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-none"><strong><?= $category->label ?></strong></h1>
				<!-- <p>Showing 1–12 of <?= $qproduct->num_rows() ?> results.</p> -->
            </div>
        </div>

        <div class="row">

            <ul class="products product-thumb-info-list" data-plugin-masonry>
                <?php foreach ($product as $row): ?>

                    <li class="col-md-3 col-sm-6 col-xs-12 product">
                        <?php if($row->isSale == "1"): ?>
                            <a href="<?= base_url('/product/'.$row->id) ?>">
                                <span class="onsale">Sale!</span>
                            </a>
                        <?php endif; ?>
                        <span class="product-thumb-info">
							<a href="<?= base_url('cart') ?>" class="add-to-cart-product">
								<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
							</a>
							<a href="<?= base_url('/product/'.$row->id) ?>">
								<span class="product-thumb-info-image">
									<span class="product-thumb-info-act">
										<span class="product-thumb-info-act-left"><em>View</em></span>
										<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
									</span>
									<img alt="" class="img-responsive" src="<?= base_url('images/product/'.$row->id.'/mini_'.$row->image) ?>">
								</span>
							</a>
							<span class="product-thumb-info-content">
								<a href="<?= base_url('/product/'.$row->id) ?>">
									<h4><?= $row->name ?></h4>
                                    <?php if($row->discount>0): ?>
                                        <span class="price">
                                            <del><span class="amount">RP. <?= number_format($row->price, 0, ',','.') ?></span></del>
                                            <ins><span class="amount">RP. <?= number_format($row->price-($row->price*$row->discount/100), 0, ',','.') ?></span></ins>
                                        </span>
                                    <?php else: ?>
                                        <span class="price">
                                            <span class="amount">RP. <?= number_format($row->price, 0, ',','.') ?></span>
                                        </span>
                                    <?php endif; ?>
								</a>
							</span>
						</span>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
        <!--
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination pull-right">
                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
        -->
    </div>

</div>

<?php if(isset($script)) {
    $this->load->view('frontend/footer1',['script'=>$script]);
}else{
    $this->load->view('frontend/footer1');
}
?>
