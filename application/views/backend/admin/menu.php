<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="index-2.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/petugas/manage') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Petugas</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/pengerajin/manage') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Pengerajin</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/member/manage') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Member</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/admin/manage') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Admin</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Laporan</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= base_url('admin/laporan/order_member_date') ?>">Order Member</a></li>
                    <li><a  href="<?= base_url('admin/laporan/order_pengerajin_date') ?>">Order Pengerajin</a></li>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>