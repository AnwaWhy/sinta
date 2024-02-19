<!-- 
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $gebets['nama_gebetan']; ?>"><br>
        Umur: <input type="text" name="zodiak" value="<?php echo $gebets['zodiak']; ?>"><br>
        Keterangan: <input type="text" name="hobi" value="<?php echo $gebets['hobi']; ?>"><br>
        <input type="submit" value="Simpan"> -->



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h2>Edit Gebetan</h2>
    <?php
    include './koneksi/koneksi.php';
    $id = $_GET['id'];
    $gebets = detailGebetan($id);
    ?>
    <form action="./proses/edit.php" method="post">
        <div class="row mb-3">
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Gebetan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $gebets['nama_gebetan']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Zodiak Gebetan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="zodiak" value="<?php echo $gebets['zodiak']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Hobi Gebetan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="hobi" value="<?php echo $gebets['hobi']; ?>">
            </div>
        </div>
        <input type="submit" class="btn btn-primary"></input>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>