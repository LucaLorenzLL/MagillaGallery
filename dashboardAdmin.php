<?php
require('dashboard.php');
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>ADMIN</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MagillaGalleryAdmin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Gallery <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="upload.php">Upload Image</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" method="post" action="loginForm.php">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">LOGIN</button>
        </form>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="upload/" alt="Card image cap" height="50%" width="auto">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="upload/" alt="Card image cap" height="50%" width="auto">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="upload/" alt="Card image cap" height="50%" width="auto">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>