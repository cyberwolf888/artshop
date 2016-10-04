<?php  $this->load->view('backend/petugas/header1');  ?>
<section id="main-content">
    <section class="wrapper">
        <?php if($this->session->flashdata('success')!==null): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12 alert alert-success">
                            <span ><?= $this->session->flashdata('success') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Souvenir
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <td>No</td>
                                    <th>Customer</th>
                                    <th>Order</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach ($model as $row): ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row->fullname ?></td>
                                        <td>Order #<?= $row->order_id ?></td>
                                        <td>Rp <?= number_format($row->total, 0, ',', '.') ?></td>
                                        <td>Trasnfer Bank</td>
                                        <td><?= $row->status ?></td>
                                        <td><?= $row->created_at ?></td>
                                        <td><a href="<?= base_url('petugas/order/detail_member/'.$row->id) ?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Detail </a></td>
                                    </tr>
                                    <?php $no++;endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>No</td>
                                    <th>Customer</th>
                                    <th>Order</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/petugas/footer1');  ?>
