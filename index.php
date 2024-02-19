<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <h2>Daftar Gebetan</h2>
    <a href="tambah.php" class="btn btn-primary">Tambah Gebetan</a>
    <br><br>
    <table class="table table-hover">
        <tr>

            <th scope="col">Nama Gebetan</th>
            <th scope="col">Zodiak Gebetan</th>
            <th scope="col">Hobi Gebetan</th>
            <th scope="col">Aksi</th>
        </tr>
        <?php
        include './koneksi/koneksi.php';
        $gebets = semuaGebetan();
        while ($row = mysqli_fetch_assoc($gebets)) {
            echo "<tr>";
            echo "<td>".$row['nama_gebetan']."</td>";
            echo "<td>".$row['zodiak']."</td>";
            echo "<td>".$row['hobi']."</td>";
            echo "<td><a class='btn btn-warning' href='edit.php?id=".$row['id_gebetan']."'>Edit</a>  <a class='btn btn-danger' href='hapus.php?id=".$row['id_gebetan']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
