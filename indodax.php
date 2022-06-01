<?php
$data = file_get_contents('https://indodax.com/api/pairs');
$coin = json_decode($data, true);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>API Movie</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Restfull API</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="index.html">Search Movie</a>
                    <a class="nav-link active" href="indodax.php">List Coin</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- form pencarian -->

    <div class="container">
        <!-- justify-content-center agar ketengah
        md untuk ukuran col -->
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">List Coin with API Indodax</h1>
                <!-- <div class="input-group mb-3">
                    <input type="text" class="form-control" id="search-input" placeholder="Coin...">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button" id="search-button">Search</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <hr>

    <!-- daftar list coin menggunakan php -->
    <!-- <div class="row" id="coin-list">
        <? //php foreach ($coin as $row) : 
        ?>
            <div class="col-md-2">
                <div class="card mb-3">
                    <img src="<? //= $row["url_logo_png"]; 
                                ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><? //= $row["description"]; 
                                                ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><? //= $row["trade_min_base_currency"]; 
                                                                    ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><? //= $row["trade_min_traded_currency"]; 
                                                                    ?></h6>
                        <a href="<? //= $row["id"]; 
                                    ?>" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" id="<?= $row["id"]; ?>">See Detail</a>
                    </div>
                </div>
            </div>
        <? //php endforeach;
        ?>

    </div> -->

    <!-- Modal untuk php -->
    <!-- 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Judul</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- daftar list coin menggunakan javascript -->
    <div class="row" id="coin-list">

    </div>

    <!-- Modal untuk java script -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- membuat script kita sendiri -->
    <script src="js/apiindodax.js"></script>
</body>

</html>