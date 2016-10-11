<?php  $this->load->view('backend/admin/header1');  ?>
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
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>No. HP</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Payment Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach ($model as $row): ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row->fullname ?></td>
                                        <td><?= $row->address ?></td>
                                        <td><?= $row->no_hp ?></td>
                                        <td>Rp <?= number_format($row->total, 0, ',', '.') ?></td>
                                        <td><?= $this->orderMemberModel->getPayment($row->payment) ?></td>
                                        <td><?= $this->orderMemberModel->getStatus($row->status) ?></td>
                                        <td><?= $this->orderMemberModel->getPaymentStatus($row->payment_status) ?></td>
                                    </tr>
                                <?php $no++;endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>No</td>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>No. HP</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Payment Status</th>
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
<?php  $this->load->view('backend/admin/footer1');  ?>
