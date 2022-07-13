<?php include 'assets/setting.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tambah Kelurahan</title>
  <?php include 'assets/css.php'; ?>
</head>

<body>
  <div class="container-scroller">
    <?php include 'assets/navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:../../partials/_sidebar.html -->
      <?php include 'assets/sidebar.php'; ?>

      <!-- partial -->
      <div class="main-panel">

        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kelurahan Lokasi</h4>
                  <p class="card-description">
                    Masukan data Kelurahan untuk lokasi
                  </p>
                  <?php if (isset($_GET['alert'])): ?>
                    <?php if ($_GET['alert']=='1'): ?>
                      <div class="alert alert-success" role="alert">
                        Berhasil memproses data!
                      </div>
                    <?php else: ?>
                      <div class="alert alert-danger" role="alert">
                        Gagal memproses data!
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>

                  <?php if (isset($_GET['id'])): ?>
                    <?php $query = $mysqli->query("SELECT * FROM tb_kelurahan WHERE id_kelurahan='$_GET[id]'"); ?>
                    <?php $data = $query->fetch_object(); ?>
                    <form action="backend/kelurahan/edit.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Nama Kelurahan</label>
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                        <input type="text" class="form-control" name="j_kelurahan" placeholder="Jenis Kelurahan" value="<?= $data->nama_kelurahan; ?>" required>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                    <?php else: ?>
                      <form action="backend/kelurahan/add.php" method="post">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Jenis Kelurahan</label>
                          <input type="text" class="form-control" name="j_kelurahan" placeholder="Jenis Kelurahan" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      </form>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include 'assets/footer.php'; ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php include 'assets/js.php'; ?>
</body>

</html>
