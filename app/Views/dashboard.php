<?= $this->extend('layouts/admin')?>
<?=$this->section('title')?>
 Dashboard
<?=$this->endSection()?>

<?=$this->section('content')?>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Paket</div>
            <div class="card-body">7</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Pelanggan</div>
            <div class="card-body">7</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Laporan</div>
            <div class="card-body">7</div>
        </div>
    </div>

</div>
<?=$this->endSection()?>