<?php  $this->load->view('backend/admin/header1');  ?>
<section id="main-content">
    <section class="wrapper">
        <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>',"</div>"); ?>
        <div class="row">
            <?= form_open('', ['enctype'=>'multipart/form-data']); ?>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Pengerajin Detail
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" value="<?= $model->fullname ?>" required readonly style="background: white;">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. HP</label>
                            <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Enter No. HP" value="<?= $model->no_hp ?>" required readonly style="background: white;">
                        </div>
                        <div class="form-group">
                            <label for="status_member">Status Pengerajin</label>
                            <select class="form-control" id="status_member" name="status_member" style="background: white;" disabled>
                                <option value="1" <?= $model->status == '1' ? 'selected':'' ?>>Available</option>
                                <option value="2" <?= $model->status == '2' ? 'selected':'' ?>>Full</option>
                                <option value="0" <?= $model->status == '0' ? 'selected':'' ?>>Banned</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Address</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Address" value="<?= $model->alamat ?>" required readonly style="background: white;">
                        </div>
                        <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="<?= $model->photo=='' ? 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image':base_url('images/profile/pengerajin/'.$model->photo) ?>" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Users Detail
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?= $model->email ?>" required readonly style="background: white;">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required style="background: white;" disabled>
                                <option value="1" <?= $model->status == '1' ? 'selected':'' ?>>Active</option>
                                <option value="2" <?= $model->status == '2' ? 'selected':'' ?>>Pending</option>
                                <option value="0" <?= $model->status == '0' ? 'selected':'' ?>>Deleted</option>
                            </select>
                        </div>
                    </div>
                </section>
            </div>
            </form>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/admin/footer1');  ?>
