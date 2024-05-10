<?php
// ambil

@ $data1 = $_POST['data1'];
@ $data3 = $_POST['data3'];
@ $hasil = $_POST['harga'] * $_POST['jumlah'];
@ $pas = $_POST['total'];
@ $kembalian = $_POST['pembayaran'] - $_POST['total'];
@ $bayar = $_POST['pembayaran'];


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body background-color: white;>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" href="transaksi.php">Transaksi</a>
          <li class="nav-item">
            <a class="nav-link active position-absolute end-0" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- End navbar -->
<!-- TRF -->
<form action="" method="post">
<div class="container-fluid">
    <div class="card mt-3" style="background-color: rgb(198, 211, 211);">
        <div class="card-body">
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-5">
                No Transaksi
            </div>
            <div class="col-md-2 ms-0 mt-5">
            <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Username" placeholder="Masukan No Transaksi" name="notransaksi" aria-describedby="basic-addon1">
</div>
            </div>
            <div class="col-md-3 ms-0 mt-5">
            <div class="form-check">
            </div>
           </div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2">
                Tanggal Transaksi
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
</div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2 mb-5">
                Nama Customer
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Username" placeholder="Masukan Nama Costumer" aria-describedby="basic-addon1">
</div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2 mb-5">
                Pilihan paket
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control p-4" value="<?php echo $data1?>" >
</div>
            </div>
           </div>            <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2 mb-5">
                Harga Paket
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control p-4" value="<?php echo $data3?>" name="harga" >
</div>
            </div>
</div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2 mb-5">
                Jumlah Produk
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control p-4" placeholder="Masukan Jumlah Produk" name="jumlah" value="" >
</div>
            </div>
            <div class="col-md-2 ms-0 mt-2">
              <button type="submit" name="totalkan" class="btn btn-light mt-3">Hitung Total Harga</button>
            </div>
          </form>
           </div>
           </div>
          </div>
            </div>
            <div class="container-fluid mt-3">
              <form action="" method="post">

                <div class="row">
                <div class="col-md-1 ms-5 me-0 mt-2">
                  Total Harga
              </div>
              <div class="col-md-2 ms-3 mt-2">
              <div class="input-group mb-3">
    <input type="text" class="form-control" aria-label="Username" name="total" value="<?php echo $hasil ?>" aria-describedby="basic-addon1">
  </div>
              </div>
              <div class="col-md-2 mt-2" style="margin-left: 20rem;">
              Pembayaran Berhasil
              </div>
                </div>
                <div class="row">
                <div class="col-md-1 ms-5 me-0 mt-2">
                  Pembayaran
              </div>
              <div class="col-md-2 ms-3 mt-2">
              <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Masukan Pembayaran" name="pembayaran" value="<?php echo $bayar ?>" aria-label="Username" aria-describedby="basic-addon1">
  </div>
              </div>
              <div class="col-md-2 mt-2 " style="margin-left: 20rem; margin-right: -9rem;">
              Kembalian
              </div>
              <div class="col-md-2 mt-2">
              <div class="input-group mb-3 ms-5">
    <input type="text" class="form-control" name="kembalian" value="<?php echo $kembalian ?>" aria-label="Username" aria-describedby="basic-addon1">
  </div>
              </div>
                </div>
                <div class="row">
                  <div class="col-md-2 mt-2 " style="margin-left: 10rem;">
                  <button type="submit" name="kembalian" style="margin-left:140px; width:200px;" class="btn btn-light mt-3">Hitung Kembalian</button>
                  </div>
                  <div class="col-md-2 mt-2 " style="margin-left: 30rem;">
                  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" style="margin-left:300px; width:200px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Simpan Transaksi
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hasil Transaksi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Transaksi Berhasil
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="home.php" type="button" class="btn btn-primary">Save changes</a>
        </div>
      </div>
    </div>
  </div>
                  </div>
                </div>
              </div>
              </div>
              </form>
        
<!-- END Trf -->



<!-- Footer -->
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-5 rounded" style="background-color: #C8D0D5;">
        <div class="card-body">
          <div class="text-center text-black">
            @copyright Muhammad Rizky Maulana
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>