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
                        Admin Detail
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. HP</label>
                            <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Enter No. HP" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Address</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Address" required>
                        </div>
                        <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                            <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input name="photo" type="file" class="default">
                                                   </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
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
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="passconf">Confirm Password</label>
                            <input type="password" name="passconf" class="form-control" id="passconf" placeholder="Password" required>
                        </div>
                    </div>
                </section>
            </div>
            </form>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/admin/footer1');  ?>
