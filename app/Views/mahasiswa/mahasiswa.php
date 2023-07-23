<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br><br>
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Mahasiswa</h3>
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
      <a href="<?= base_url('/addmhs'); ?>" class="btn btn-primary">+ Tambah</a>
      <hr />
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Nim</th>
          <th>Nama</th>
          <th>Jenis kelamin</th>
          <th>jurusan</th>
          <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mhs as $row) {
        ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->nim; ?></td>
            <td><?= $row->nama; ?></td>
            <td><?= $row->jk; ?></td>
            <td><?= $row->jurusan; ?></td>
            <td>
              <a title="Edit" href="<?= base_url("/edit/$row->id"); ?>" class="btn btn-warning">Edit</a>
              <a title="Delete" href="<?= base_url("/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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