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
                        <div class="form-group">
                            <label for="label">Souvenir Name</label>
                            <input type="text" name="label" class="form-control" id="label" placeholder="Souvenir Name" required>
                        </div>
                        <div class="form-group">
                            <label for="label">Category</label>
                            <input type="text" name="label" class="form-control" id="label" placeholder="Category" required>
                        </div>
                        <div class="form-group">
                            <label for="label">Price</label>
                            <input type="number" name="label" class="form-control" id="label" placeholder="Price" required>
                        </div>
                        <div class="form-group">
                            <label for="label">Discount (%)</label>
                            <input type="number" value="0" name="label" class="form-control" id="label" placeholder="Discount" required>
                        </div>
                        <div class="checkboxes">
                            <label class="label_check c_off" for="checkbox-01">
                                <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked=""> I agree to the terms &amp; conditions.
                            </label>
                            <label class="label_check c_off" for="checkbox-02">
                                <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox"> Please send me regular updates. </label>
                            <label class="label_check c_off" for="checkbox-03">
                                <input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox"> This is nice checkbox.</label>

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
