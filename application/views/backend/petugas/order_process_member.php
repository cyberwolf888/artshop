<?php  $this->load->view('backend/petugas/header1');  ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Process Oroder Member
                    </header>
                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="name">Pengerajin</label>
                                <select class="form-control" name="pengerajin_id" id="pengerajin_id" required>
                                    <?php foreach ($pengerajin as $row): ?>
                                        <?php if($row->status == 1): ?>
                                            <option value="<?= $row->id ?>"><?= $row->fullname ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <input type="hidden" name="order_id" value="<?= $order_id ?>">
                            </div>
                            <button type="submit" class="btn btn-info">Process</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php  $this->load->view('backend/petugas/footer1');  ?>
