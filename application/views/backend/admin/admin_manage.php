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
                        Manage Admin
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="<?= base_url('admin/admin/create') ?>" class="btn btn-primary" style="color: #FFF;"><i class="fa fa-plus"></i> Add New Data</a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($model as $row): ?>

                                    <tr>
                                        <td><?= $row->fullname ?></td>
                                        <td><?= $row->no_hp ?></td>
                                        <td><?= $row->alamat ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $this->users->getStatusLabel($row->status) ?></td>
                                        <td><a href="<?= base_url('admin/admin/edit/'.$row->id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a> <a href="<?= base_url('admin/admin/view/'.$row->id) ?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a></td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Full Name</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Status</th>
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
<?php  $this->load->view('backend/admin/footer1');  ?>
