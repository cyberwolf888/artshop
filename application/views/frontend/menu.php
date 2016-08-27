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
                    <li class="active">
                        <a href="<?= base_url() ?>">
                            Home
                        </a>
                    </li>
                    <li class="">
                        <a href="overview.html">
                            Featured Item
                        </a>
                    </li>
                    <li class="">
                        <a href="overview.html">
                            New Designs
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#">About Us</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="about-us-basic.html">About Us - Basic</a></li>
                                    <li><a href="about-me.html">About Me</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Shop</a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-full-width.html">Shop - Full Width</a></li>
                                    <li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
                                    <li><a href="shop-product-full-width.html">Shop - Product Full Width</a></li>
                                    <li><a href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
                                    <li><a href="shop-cart.html">Shop - Cart</a></li>
                                    <li><a href="shop-login.html">Shop - Login</a></li>
                                    <li><a href="shop-checkout.html">Shop - Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                    <li><a href="blog-large-image.html">Blog Large Image</a></li>
                                    <li><a href="blog-medium-image.html">Blog Medium Image</a></li>
                                    <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                    <li><a href="blog-post.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Layouts</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page-full-width.html">Full Width</a></li>
                                    <li><a href="page-left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="page-right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                    <li><a href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
                                    <li><a href="page-secondary-navbar.html">Secondary Navbar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Extra</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page-404.html">404 Error</a></li>
                                    <li><a href="page-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="page-maintenance-mode.html">Maintenance Mode</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li>
                                </ul>
                            </li>
                            <li><a href="page-custom-header.html">Custom Header</a></li>
                            <li><a href="page-team.html">Team</a></li>
                            <li><a href="page-services.html">Services</a></li>
                            <li><a href="page-careers.html">Careers</a></li>
                            <li><a href="page-our-office.html">Our Office</a></li>
                            <li><a href="page-faq.html">FAQ</a></li>
                            <li><a href="page-login.html">Login / Register</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?= base_url('/about') ?>">
                            About Us
                        </a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('/contact') ?>">
                            Contact Us
                        </a>
                    </li>
                    <li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
                        <a class="dropdown-toggle" href="page-login.html">
                            <i class="fa fa-user"></i> Cart (<span id="cart_total_item">1</span>)
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
                                            <td class="product-actions">
                                                <a title="Remove this item" class="remove" href="#">
                                                    <i class="fa fa-times"></i>
                                                </a>
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