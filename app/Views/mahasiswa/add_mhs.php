<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br><br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Mahasiswa</h3>
        </div>
        <div class="card-body">

            <form method="post" action="<?= base_url('/inputmhs') ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="no_telp">Nim</label>
                    <input type="text" class="form-control" id="nim" name="nim" required />
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jk" class="form-control" id="jenis_kelamin" required>
                        <option value="">Pilih</option>
                        <option value="laki-laki">Laki - laki </option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <select name="jurusan" class="form-control" id="jurusan" required>
                        <option value="">Pilih</option>
                        <option value="informatika">Informatika</option>
                        <option value="teknik komputer">Teknik Komputer</option>
                        <option value="teknik elektro">Teknik Elektro</option>
                        <option value="akuntansi">Akuntansi</option>
                        <option value="manajemen">Manajemen</option>
                        <option value="pbi">PBI</option>
                        <option value="pgsd">PGSD</option>
                        <option value="agribisnis">Agribisnis</option>
                        <option value="thp">THP</option>
                        <option value="farmasi">Farmasi</option>
                        <option value="sii">SII</option>
                    </select>
                </div>

                <div class="form-group">
                    <a href="<?= base_url('/'); ?>" class="btn btn-secondary">Batal</a>
                    <input type="submit" value="simpan" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>