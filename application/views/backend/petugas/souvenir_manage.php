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
                            <a href="<?= base_url('petugas/souvenir/create') ?>" class="btn btn-primary" style="color: #FFF;"><i class="fa fa-plus"></i> Add New Data</a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($model as $row): ?>
                                        <td><?= $row->name ?></td>
                                        <td><?= $row->label ?></td>
                                        <td>Rp. <?= number_format($row->price,0,',','.') ?></td>
                                        <td><?= $row->discount ?> %</td>
                                        <td><?= date('d/m/Y',strtotime($row->created_at)) ?></td>
                                        <td>
                                            <a href="<?= base_url('petugas/souvenir/edit/'.$row->id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="<?= base_url('petugas/souvenir/view/'.$row->id) ?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a>
                                            <a href="<?= base_url('petugas/souvenir/gallery/'.$row->id) ?>" class="btn btn-warning btn-xs"><i class="fa fa-image"></i> Gallery </a>
                                        </td>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Discount</th>
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
