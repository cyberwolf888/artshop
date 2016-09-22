<?php  $this->load->view('backend/petugas/header1');  ?>
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
                        Souvenir Detail
                    </header>
                    <div class="panel-body">
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
            </form>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/petugas/footer1');  ?>
