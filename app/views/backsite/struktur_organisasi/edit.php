<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit struktur organisasi</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/struktur_organisasi/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['struktur_organisasi']['id']; ?>">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" value="<?= $data['struktur_organisasi']['nama']; ?>">
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="hidden" name="foto_lama" value="<?= $data['struktur_organisasi']['foto'] ?>">
                <input type="file" class="form-control" name="foto_baru">
                <img src="<?= BASEURL . "/public/assets/frontsite/img/organisasi/" . $data['struktur_organisasi']['foto']; ?>" style="width: 60px;">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" placeholder="Masukkan jabatan" name="jabatan" value="<?= $data['struktur_organisasi']['jabatan']; ?>">
              </div>
              <div class="form-group">
                <label>Parent_key</label>
                <select class="form-control" name="parent_key">
                  <option selected disabled>--choose---</option>
                  <?php foreach ($data['tree_parent'] as $tree) { ?>
                    <option value="<?= $tree['id'] ?>" <?= $data['struktur_organisasi']['parent_key'] === $tree['id'] ? 'selected' : '' ?>>
                      <?= $tree['id'] . " - " . $tree['nama'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" name="proses">Update</button>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->