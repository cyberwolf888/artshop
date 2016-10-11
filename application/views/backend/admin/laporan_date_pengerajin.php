<?php  $this->load->view('backend/admin/header1');  ?>
<section id="main-content">
    <section class="wrapper">
        <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>',"</div>"); ?>
        <div class="row">
            <?= form_open('', ['enctype'=>'multipart/form-data']); ?>
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Period Report
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fullname">Start Date</label>
                                    <input type="text" name="start_date" class="form-control" id="start_date" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="no_hp">End Date</label>
                                    <input type="number" name="end_date" class="form-control" id="end_date" placeholder="Enter No. HP" required>
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