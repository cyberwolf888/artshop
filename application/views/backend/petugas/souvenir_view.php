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
                            <label for="name">Souvenir Name</label>
                            <input type="text" name="name" value="<?= $model->name ?>" class="form-control" id="name" placeholder="Souvenir Name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="categories_id">Category</label>
                            <select name="categories_id" id="categories_id" class="form-control" disabled>
                                <option value="" disabled selected>Category</option>
                                <?php foreach($category as $cRow): ?>
                                    <option value="<?= $cRow->id ?>" <?= $cRow->id == $model->categories_id ? 'selected':''  ?>><?= $cRow->label ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" value="<?= $model->price ?>" class="form-control" id="price" placeholder="Price" disabled>
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount (%)</label>
                            <input type="number" value="<?= $model->discount ?>" name="discount" class="form-control" id="discount" placeholder="Discount" disabled>
                        </div>
                        <div class="checkboxes">
                            <label class="label_check c_off" for="checkbox-01">
                                <input name="isAvailable" id="checkbox-01" value="1" type="checkbox" <?= $model->isAvailable == 1 ? 'checked' : '' ?> disabled>
                                Is Item Available
                            </label>
                            <label class="label_check c_off" for="checkbox-02">
                                <input name="isHot" id="checkbox-02" value="1" type="checkbox" <?= $model->isHot == 1 ? 'checked' : '' ?> disabled>
                                Hot Item
                            </label>
                            <label class="label_check c_off" for="checkbox-03">
                                <input name="isSale" id="checkbox-03" value="1" type="checkbox" <?= $model->isSale == 1 ? 'checked' : '' ?> disabled>
                                Sale Item
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3" disabled><?= $model->description ?></textarea>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Souvenir Spesifiction
                    </header>
                    <div class="panel-body">
                        <!-- <div id="field">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="label[]" class="form-control">
                                            <option value="Color">Color</option>
                                            <option value="Weight">Weight</option>
                                            <option value="Long">Long</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="value[]" class="form-control" id="value" placeholder="Value" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button id="b1" class="btn add-more" type="button">+</button>
                                </div>
                            </div>
                        </div> -->
                        <div class="input_fields_wrap">
                            <?php foreach($detailProduct as $dRow): ?>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <select name="label[]" class="form-control" disabled>
                                                <option value="Color" <?= $dRow->label == "Color" ? 'selected':''  ?>>Color</option>
                                                <option value="Weight" <?= $dRow->label == "Weight" ? 'selected':''  ?>>Weight</option>
                                                <option value="Dimensions" <?= $dRow->label == "Dimensions" ? 'selected':''  ?>>Dimensions</option>
                                                <option value="Size" <?= $dRow->label == "Size" ? 'selected':''  ?>>Size</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" name="value[]" class="form-control" id="value" placeholder="Value" value="<?= $dRow->value ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>
            </form>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Souvenir Images
                    </header>
                    <div class="panel-body">
                        <?php foreach($images as $image): ?>
                            <div class="col-md-3">
                                <img class="img-responsive" src="<?= base_url('images/product/'.$image->product_id.'/mini_'.$image->image) ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/petugas/footer1');  ?>
