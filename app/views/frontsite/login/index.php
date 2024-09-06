<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <main id="main">
            <!-- ======= Contact Section ======= -->
            <<div class="about_section layout_padding margin_top90">
         <div class="container">
                    <style>
                        body {
                            background-color: #f8f9fc;
                        }

                        .container {
                            height: 100vh;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .card {
                            border: none;
                            border-radius: 10px;
                            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                        }

                        .card-body {
                            padding: 40px;
                        }

                        .logo {
                            text-align: center;
                        }

                        .logo img {
                            max-width: 150px;
                        }

                        .form-heading {
                            text-align: center;
                        }
                    </style>
                   <form role="form" action="<?= BASEURL; ?>/frontsite/login/login" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="logo">
                <img src="<?= BASEURL; ?>/assets/frontsite/img/logo smpn1.png" alt="SMP PGRI Logo">
            </div>
            <div class="title">
                <h2>Welcome Perpustakaan</h2>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control form-control-user" id="username" name="username" required>
            </div>

            <div class="form-group" style="margin-top: 10px;">
                <label for="password">Password:</label>
                <input type="password" class="form-control form-control-user" id="password" name="password" required>
            </div>

            <div class="logo" style="margin-top: 10px;">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </div>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
