<?php  $this->load->view('backend/admin/header1');  ?>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>backend/assets/assets/bootstrap-datetimepicker/css/datetimepicker.css" />
<section id="main-content">
    <section class="wrapper">
        <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>',"</div>"); ?>
        <div class="row">
            <?= form_open(base_url('admin/laporan/laporan_pengerajin'), ['enctype'=>'multipart/form-data']); ?>
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Period Report
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fullname">Start Date</label>
                                    <input type="text" name="start_date" class="form-control" id="start_date" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="no_hp">End Date</label>
                                    <input type="text" name="end_date" class="form-control" id="end_date" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="no_hp">Payment Status</label>
                                    <select class="form-control" name="payment_status">
                                        <option value="2">All Status</option>
                                        <option value="0">Not Paid</option>
                                        <option value="1">Paid</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </section>
            </div>
            </form>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/admin/footer1');  ?>
