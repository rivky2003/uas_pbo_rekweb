<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br><br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Mata kuliah</h3>
        </div>
        <div class="card-body">

            <form method="post" action="<?= base_url('/inputmatkul') ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="no_telp">Kode matakuliah</label>
                    <input type="text" class="form-control" id="nim" name="kode_mk" required />
                </div>

                <div class="form-group">
                    <label for="nama">Nama matakuliah</label>
                    <input type="text" class="form-control" id="nama" name="nama_mk" required>
                </div>

                <div class="form-group">
                    <label for="nama">Sks</label>
                    <input type="number" class="form-control" id="nama" name="sks" required>
                </div>

                <div class="form-group">
                    <label for="nama">Semester</label>
                    <input type="number" class="form-control" id="nama" name="semester" required>
                </div>

                <div class="form-group">
                    <a href="<?= base_url('/mata-kuliah'); ?>" class="btn btn-secondary">Batal</a>
                    <input type="submit" value="simpan" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>