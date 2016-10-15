<?php $category = $this->categoryModel->getAll()->result(); ?>
<div class="header-row">
    <div class="header-nav">
        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
            <i class="fa fa-bars"></i>
        </button>
        <ul class="header-social-icons social-icons hidden-xs">
            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
            <nav>
                <ul class="nav nav-pills" id="mainNav">
                    <li class="<?= $this->uri->segment(1) == '' ? 'active' : '';  ?>">
                        <a href="<?= base_url() ?>">
                            Home
                        </a>
                    </li>
                    <li class="<?= $this->uri->segment(1) == 'hotitem' ? 'active' : '';  ?>" >
                        <a href="<?= base_url('hotitem') ?>">
                            Hot Item
                        </a>
                    </li>
                    <li class="dropdown <?= $this->uri->segment(1) == 'category' ? 'active' : '';  ?>">
                        <a class="dropdown-toggle" href="#">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($category as $crow): ?>
                                <li><a href="<?= base_url('/category/'.$crow->id) ?>"><?= $crow->label ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="<?= $this->uri->segment(1) == 'about' ? 'active' : '';  ?>">
                        <a href="<?= base_url('/about') ?>">
                            About Us
                        </a>
                    </li>
                    <li class="<?= $this->uri->segment(1) == 'contact' ? 'active' : '';  ?>">
                        <a href="<?= base_url('/contact') ?>">
                            Contact Us
                        </a>
                    </li>
                    <?php if($this->session->isLogedIn && $this->session->type == 1): ?>
                        <li class="<?= $this->uri->segment(1) == 'payment' ? 'active' : '';  ?>">
                            <a href="<?= base_url('/payment') ?>">
                                Payment
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/member') ?>">
                                Member
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
                        <a class="dropdown-toggle" href="<?= base_url('/cart') ?>">
                            <i class="fa fa-user"></i> Cart (<span id="cart_total_item"><?= $this->cart->total_items() ?></span>)
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-mega-content">
                                    <table class="cart">
                                        <tbody id="cart_item_body">
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="shop-product-sidebar.html">
                                                    <img width="100" height="100" alt="" class="img-responsive" src="<?= base_url() ?>frontend/assets/img/products/product-1.jpg">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-sidebar.html">Photo Camera<br><span class="amount"><strong>$299</strong></span></a>
                                            </td>
                                        </tr>

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="actions-continue">
                                                    <button onclick="javascript:location='<?= base_url('/cart') ?>'" type="submit" class="btn btn-default">View All</button>
                                                    <button onclick="javascript:location='<?= base_url('/checkout') ?>'" type="submit" class="btn pull-right btn-primary">Proceed to Checkout <i class="fa fa-angle-right ml-xs"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>