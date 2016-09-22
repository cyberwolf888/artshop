<?php  $this->load->view('backend/petugas/header1');  ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Souvenir
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="<?= base_url('petugas/souvenir/creategallery/'.$id) ?>" class="btn btn-primary" style="color: #FFF;"><i class="fa fa-plus"></i> Add New Image</a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/petugas/footer1');  ?>
