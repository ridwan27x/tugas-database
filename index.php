<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = student.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data nilai XI RPL    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand text-white"  href="#">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Input Data</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.html">Daftar Ranking</a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-white" type="submit">Search</button>
    </form>
  </div>
</nav>
        
        <div class="row">
            <div class="col-4">
                <h2>Input Data</h2>
                <form class="border p-4">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai:</label>
                        <input type="number" class="form-control" id="Nilai" placeholder="Masukkan Nilai">
                    </div>
                    <label for="Kelamin">Alat kelamin:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
            <div class="col-8">
                <h2>Tabel Data</h2>
                <table class="table text-center table-hover">
                    <thead class="bg-warning text-white">
                        <tr>
                            <th class="border">NO</th>
                            <th class="border">Nama</th>
                            <th class="border">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $key => $d): ?>
                          <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['score'] ?></td>
                          </tr>
                          <?php endforeach ?>
                    </tbody>
                      
                </table>
            </div>
        </div>
    </div>

    <footer class=" text-center py-3 bg-dark container">
        <p class="mb-0 text-white">Hak cipta &copy; nam - 2023  </p>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>