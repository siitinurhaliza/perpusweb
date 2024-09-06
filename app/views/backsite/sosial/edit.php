<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit data buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form action="<?= BASEURL; ?>/backsite/sosial/update" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $data['sosial']['id']; ?>">
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" value="<?= $data['sosial']['judul']; ?>">
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
    <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $data['sosial']['foto']; ?>" style="width: 60px;">
  </div>
  <div class="form-group">
    <label>No Induk sosial</label>
    <input type="text" class="form-control" placeholder="Masukkan inventaris" name="inventaris" value="<?= $data['sosial']['inventaris']; ?>">
  </div>
  <div class="form-group">
    <label>Stok</label>
    <input type="text" class="form-control" placeholder="Masukkan stok" name="stok" value="<?= $data['sosial']['stok']; ?>">
  </div>
  <div class="form-group">
    <label>Jumlah sosial Rusak</label>
    <input type="text" class="form-control" placeholder="Masukkan jumlah sosial rusak" name="rusak" value="<?= $data['sosial']['rusak']; ?>">
  </div>
  <div class="form-group">
    <label>Harga sosial</label>
    <input type="text" class="form-control" placeholder="Masukkan harga sosial" name="harga" value="<?= $data['sosial']['harga']; ?>">
  </div>
  <div class="form-group">
    <label>Kategori</label>
    <input type="text" class="form-control" placeholder="Masukkan kategori" name="kategori" value="<?= $data['sosial']['kategori']; ?>">
  </div>
 
  <div class="form-group">
    <label>Tanggal</label>
    <input type="text" class="form-control" placeholder="Masukkan tanggal" name="tanggal" value="<?= $data['sosial']['tanggal']; ?>">
  </div>
  <div class="form-group">
    <label>Pengarang</label>
    <input type="text" class="form-control" placeholder="Masukkan pengarang" name="pengarang" value="<?= $data['sosial']['pengarang']; ?>">
  </div>
  <div class="form-group">
    <label>Isbn</label>
    <input type="text" class="form-control" placeholder="Masukkan isbn" name="isbn" value="<?= $data['sosial']['isbn']; ?>">
  </div>
  <div class="form-group">
    <label>Klasifikasi</label>
    <input type="text" class="form-control" placeholder="Masukkan klasifikasi" name="klasifikasi" value="<?= $data['sosial']['klasifikasi']; ?>">
  </div>
  
  <div class="form-group">
    <label>Penerbit</label>
    <input type="text" class="form-control" placeholder="Masukkan penerbit" name="penerbit" value="<?= $data['sosial']['penerbit']; ?>">
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