<?= $this->extend('layouts/admin') ?>
<?= $this->section('title') ?>
Pelanggan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="card">
        <div class="card-header bg-success">
            <h3>Pelanggan</h3>
            <a href="/fpelanggan" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-border">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 0;
                foreach ($pelanggan as $row) {
                    $data=$row['id'].",".$row['nama'].",".$row['alamat'].",".$row['no_hp'].",".base_url('pelanggan/edit/'.$row['id']);
                    # code...
                    $no++;
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['no_hp'] ?></td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#feditPelanggan" class="btn btn-warning" data-pelanggan="<?=$data ?>">edit</a>||
                            <a href="/pelanggan/delete/<?= $row['id'] ?>" onclick="return confirm('Yakin mau hapus data ? ')" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </div>

</div>
<?php if (!empty(session()->getFlashdata("message"))):?>
    <div class="alert alert-success">
        <?= session()->getFlashdata("message")?>
    </div>
<?php endif?>
<div class="modal fade" id="feditPelanggan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit PElanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="editPelanggan" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" id="nama" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" name="alamat" id="alamat" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">NO HAPE</label>
                        <input type="text" name="no_hp" id="no_hp" value="" class="form-control">
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?=$this->endSection() ?>

<?= $this->section('script')?>
<script>
    $(document).ready(function(){
        $("#feditPelanggan").on('show.bs.modal',function(event){
            var button = $(event.relatedTarget);
            var data = button.data('pelanggan');
            if (data!="")
            {
                const barisdata= data.split(",");
                $("#nama").val(barisdata[1]);
                $("#alamat").val(barisdata[2]);
                $("#no_hp").val(barisdata[3]);
                $("#editPelanggan").attr('action',barisdata[4]);
            }
        });
    })
</script>
<?=$this->endSection() ?>