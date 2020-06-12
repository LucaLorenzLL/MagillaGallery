<?php
require('connection.php');

$sql = "SELECT artist  FROM foto";

$result = $conn->query($sql);

$gallery = array();
//$description = array();
//$nomeArtisti = array();
//$category = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($gallery, $row['nome']);
        //array_push($description, $row['descrizione']);
        //array_push($nomeArtisti, $row['nomeArtistico']);
        //array_push($category, $row['categoria']);
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>GalleriaFotografica</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MagillaGallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Gallery <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" method="post" action="loginForm.php">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">LOGIN</button>
        </form>
    </nav>

    <form class="joinContest text-center" method="post" action="upload-on-db.php">
        <h4>Do you want to enter the contest too?</h4>
        <button class="btn btn-outline-info" type="submit">JOIN NOW</button>
        <br><br>
    </form>

    <div class="container-fluid">
        <div class="row">
            <?php
            for ($i=0; $i < count($gallery); $i++) { 
                echo '<div class="col-sm-4">';
                echo '<div class="card">';
                echo '<img class="card-img-top" src="'.$gallery[$i].'" alt="image" height="50%" width="auto">';
                echo '<div class="card-body">';
                //echo '<p class="card-text">'.$description[$i].'</p>';
                //echo '<p class="card-text">'.$category[$i].'</p>';
                //echo '<b><p class="card-text">'.$nomeArtisti[$i].'</p></b>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>