<?= $this->extend('layouts/admin') ?>
<?= $this->section('title') ?>
Form input pelanggan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3>form input Pelanggan</h3>
    </div>
    <form action="addPelanggan" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">NOMER HAPE</label>
                <input type="number" name="no_hp" id="no_hp" class="form-control">
            </div>
        </div>

        <div class="card-header">
            <input type="submit" value="SImpan" class="btn btn-primary">||<input type="reset" value="cancel" class="btn btn-secondary">
        </div>
    </form>
</div>

<?= $this->endSection() ?>