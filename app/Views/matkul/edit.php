<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br><br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Mata kuliah</h3>
        </div>
        <div class="card-body">

            <form method="post" action="<?= base_url('updatematkul/' . $ematkul->id) ?>">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $ematkul->id; ?>" />
                </div>
                <div class="form-group">
                    <label for="nim">Kode matakuliah</label>
                    <input type="text" class="form-control" id="nim" name="kode_mk" value="<?= $ematkul->kode_mk; ?>" />
                </div>

                <div class="form-group">
                    <label for="nama">Nama matakuliah</label>
                    <input type="text" class="form-control" id="nama" name="nama_mk" value="<?= $ematkul->nama_mk; ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Sks</label>
                    <input type="number" class="form-control" id="nama" name="sks" value="<?= $ematkul->sks; ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Semester</label>
                    <input type="number" class="form-control" id="nama" name="semester" value="<?= $ematkul->semester; ?>">
                </div>

                <div class="form-group">
                    <a href="<?= base_url('/mata-kuliah'); ?>" class="btn btn-secondary">Batal</a>
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>