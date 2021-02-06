<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'function.php';

$sepeda = query("SELECT *,cycle.id AS c_id, cycle.name AS c_name FROM cycle INNER JOIN merk on id_merk=merk.id");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Cycle Store || Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <h1>Cycle Store</h1>
                <a href="keranjang.php" class="btn btn-primary float-right">Keranjang</a>
                <a href="logout.php" class="btn btn-success float-right">Logout</a>
            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($sepeda as $s) : ?>
                <div class="col my-3">
                    <div class="card" style="width: 18rem;">
                        <img src=img/<?= $s['image']; ?> class="card-img" style="height: 250px;">
                        <div class=" card-body">
                            <div class="d-flex bd-highlight mb-3">
                                <h5 class="me-auto bd-highlight card-title"><?= $s['c_name']; ?></h5>
                                <div class="bd-highlight card-text"><small class="text-muted"><?= $s['name']; ?></small></div>
                            </div>
                            <p class="card-text">Harga : <?= number_format($s['price']); ?></p>
                            <p>Stock : <?= $s['stock']; ?></p>
                            <div class="text-center">
                                <a href="beli.php?id=<?= $s['c_id']; ?>" class="btn  btn-outline-primary">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>