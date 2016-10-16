<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="<?= base_url('petugas') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('petugas/category/manage') ?>">
                    <i class="fa fa-archive"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('petugas/souvenir/manage') ?>">
                    <i class="fa fa-tasks"></i>
                    <span>Souvenir</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-shopping-cart"></i>
                    <span>Order</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= base_url('petugas/order/member') ?>">Customer</a></li>
                    <li><a  href="<?= base_url('petugas/order/pengerajin') ?>">Pengerajin</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-money"></i>
                    <span>Payment</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= base_url('petugas/payment/member') ?>">Customer</a></li>
                    <li><a  href="<?= base_url('petugas/payment/pengerajin') ?>">Pengerajin</a></li>
                </ul>
            </li>

        <!-- sidebar menu end-->
    </div>
</aside>