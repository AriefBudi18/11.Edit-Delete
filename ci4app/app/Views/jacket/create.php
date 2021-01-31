<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Add Jacket Data</h2>

            <!-- Form buat bikin data baru -->
            <form action="/jacket/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ?
                                                                    'is-invalid' : ''; ?>" " id=" name" name="name" autofocus value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control <?= ($validation->hasError('product_price')) ?
                                                                        'is-invalid' : ''; ?>" " aria-label=" Dollar amount (with dot and two decimal places)" id=" product_price" name="product_price" value="<?= old('product_price'); ?>">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <div class="invalid-feedback" type="text">
                                <?= $validation->getError('product_price'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="product_code" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('product_code')) ?
                                                                    'is-invalid' : ''; ?>" " id=" product_code" name="product_code" value="<?= old('product_code'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('product_code'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pictures" class="col-sm-2 col-form-label">Pictures</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('pictures')) ?
                                                                    'is-invalid' : ''; ?>" " id=" pictures" name="pictures" value="<?= old('pictures'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('pictures'); ?>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>