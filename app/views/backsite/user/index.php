<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool"
                data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool"
                data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/user/store" method="POST"
              enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan nama..." id="nama" name="nama">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan username..." id="username" name="username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan password..." id="password" name="password">
                </div>
                <div class="form-group">
                  <label>Type_User_id</label>
                  <select class="form-control" name="id_album">
                    <option value="">Pilih</option>
                    <?php foreach ($data['type-user'] as $row) : ?>
                        <option value="<?= $row['id']; ?>"><?= $row['type_user_id']; ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Photo</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan photo..." id="photo" name="photo">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User</h3>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL; ?>/backsite/user/search" method="post">
              <div class="row mb-3">
                <div class="col-lg-6">
                  <div class="input-group">
                    <input type="text" class="form-control"
                      placeholder="" name="key">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                      <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/user">Reset</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Type_User_id</th>
                  <th>Photo</th>
                  <th style="width: 150px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data['user'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['password']; ?></td>
                    <td><?= $row['type_user_id']; ?></td>
                    <td><?= $row['photo']; ?></td>
                    <td>
                      <a href="<?= BASEURL; ?>/backsite/user/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a>
                      <a href="<?= BASEURL; ?>/backsite/user/deploy/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
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