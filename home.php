<?php
    $dataproduk = array(
        array("Paket A", "Cuci kering biasa", "40.000", 'gambar/paket a.webp'),
        array("Paket B", "Cuci kering dan lipat", "45.000", 'gambar/paket b.jpg'),
        array("Paket C", "Cuci kering, setrika, dan lipat", "50.000", 'gambar/paket c.webp'),
        array("Paket D", "Cuci kering, setrika, pengharum,lipat", "55.000", 'gambar/paket d.avif'),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body style="background-color: white;">
<nav class="navbar navbar-expand-lg bg-dark-subtle">
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
<center>
  <img src="Gambar/laundry.jpg" width="100%" style="padding: 10px; height: 800px; margin: 12px 15px;">
</center>
<h2>Daftar Paket Laundry Smk Farmasi Banjarmasin</h2><br>

<div class="container-fluid bg-body-secondary" >
  <div class="row">
    <?php foreach ($dataproduk as $values =>$data) {?>
            <div class="col-md-3">
                <div class="card mt-2">
                    <img src="<?php echo $data[3] ?>" style="width: 100%; height: 250px;">
                    <div class="card-body bg-light-subtle tescard">
                        <p><?php echo $data[0]; ?></p>
                        <p><?php echo $data[1]; ?></p>
                        <p><?php echo $data[2]; ?></p>
                    </div>
                </div>
                <form action="transaksi.php" method="post">
                    <input type="hidden" name="data1" id="data" value="<?php echo $data[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $data[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $data[2] ?>">
                    <button class=" btn btn-secondary mt-2" style="width:482px;">
                        Pilih Paket
                    </button>
                </form>
            </div>
    <?php } ?>
</div>
</div>
<br>
<div class="container-fluid">
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
</body>
</html>