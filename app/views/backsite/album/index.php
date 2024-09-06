<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Album</h3>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL; ?>/backsite/album/search" method="post">
              <div class="row mb-3">
                <div class="col-lg-6">
                  <div class="input-group">
                    <input type="text" class="form-control"
                      placeholder="" name="key">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                      <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/Album">Reset</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
             
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th style="width: 150px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data['album'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td>
                      <a href="<?= BASEURL; ?>/backsite/album/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a>
                      <a href="<?= BASEURL; ?>/backsite/album/deploy/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                  </tr>
                  <?php $no++;
                endforeach; ?>
              </tbody>
            </table>
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