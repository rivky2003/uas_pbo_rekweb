<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br><br>
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Matakuliah</h3>
    </div>
    <div class="card-body">
      <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo session()->getFlashdata('message'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <a href="<?= base_url('/addmatkul'); ?>" class="btn btn-primary">+ Tambah</a>
      <hr />
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Kode mk</th>
          <th>Nama mk</th>
          <th>Sks</th>
          <th>Semester</th>
          <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($matkul as $row) {
        ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->kode_mk; ?></td>
            <td><?= $row->nama_mk; ?></td>
            <td><?= $row->sks; ?></td>
            <td><?= $row->semester; ?></td>
            <td>
              <a title="Edit" href="<?= base_url("/editmatkul/$row->id"); ?>" class="btn btn-warning">Edit</a>
              <a title="Delete" href="<?= base_url("/deletematkul/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection('content'); ?>