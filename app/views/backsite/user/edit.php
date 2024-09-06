<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit User</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/user/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="masukkan nama" name="nama" value="<?= $data['user']['nama']; ?>">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="masukkan username" name="username" value="<?= $data['user']['username']; ?>">
                  <label>Password</label>
                  <input type="text" class="form-control" placeholder="masukkan password" name="password" value="<?= $data['user']['password']; ?>">
                  
                  <label>Type_User_id</label>
                  <select class="form-control" name="id_typeuser">
                    <option value="">Pilih</option>
                    <?php foreach ($data['type-user'] as $row) : ?>
                        <option value="<?= $row['id']; ?>"
                        <?php if ($data['user']['id_type_user'] == $row['id']){
                            echo "selected";
                        }?>>
                        <?= $row['nama']; ?></option>
                        <?php endforeach;?>
                    </select>
                    <label>Photo</label>
                  <input type="text" class="form-control" placeholder="masukkan photo" name="photo" value="<?= $data['user']['photo']; ?>">
                  
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
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
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->