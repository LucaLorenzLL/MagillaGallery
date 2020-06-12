<?php
require('connection.php');

$sql = "SELECT * FROM categoria";

$result = $conn->query($sql);

$categoria = array();
$id_categoria = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($categoria, $row['nome']);
        array_push($id_categoria, $row['id']);
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

    <title>Upload image on DB</title>
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
    </nav>

    <div class="container-fluid" style="width: 100%;">
        <h3 class="text-center">Take part in our photo contest!</h3>
        <h4 class="text-center">Send us your photo by filling out the form below.</h4>
        <br>

        <form method="POST" action="register.php" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">First name</label>
                    <input type="text" class="form-control" name="firstname" id="validationServer01" placeholder="First name" required>
                    <div class="valid-feedback">
                        Please insert your stage name.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="validationServer02" placeholder="Last name" required>
                    <div class="valid-feedback">
                        Please insert your last name.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Fiscal Code</label>
                    <input type="text" class="form-control" name="fiscalcode" id="validationServer02" placeholder="ABCDEF01G021F861M" required>
                    <div class="valid-feedback">
                        Please insert your fiscal code.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Birthday date</label>
                    <input type="date" class="form-control" name="birthdate" id="validationServer02" placeholder="16/06/2001" required>
                    <div class="valid-feedback">
                        Please insert your birthday date.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServerUsername">Stage name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="stagename" id="validationServerUsername" placeholder="AlFrison" aria-describedby="inputGroupPrepend3" required>
                        <div class="invalid-feedback">
                            Please insert your stage name.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer03">City</label>
                    <input type="text" class="form-control" name="city" id="validationServer03" placeholder="Bussolengo" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer04">Country</label>
                    <input type="text" class="form-control" name="country" id="validationServer04" placeholder="Verona" required>
                    <div class="invalid-feedback">
                        Please provide a valid country.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer05">Address</label>
                    <input type="text" class="form-control" name="address" id="validationServer05" placeholder="Via Mazzini, 18" required>
                    <div class="invalid-feedback">
                        Please provide a valid address.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer05">Photo</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="file" lang="en">
                        <label class="custom-file-label" for="customFileLang">Choose .png file</label>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer05">Description</label>
                    <input type="text" class="form-control" name="description" id="validationServer05" placeholder="Insert a short description" required>
                    <div class="invalid-feedback">
                        Please provide a valid description.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer05">Category</label>
                    <br>
                    <select id="category" name="category" class="form-control" required>
                        <?php
                        for ($i=0; $i < count($categoria); $i++) { 
                            echo '<option value="'.$id_categoria[$i].'">'.$categoria[$i].'</option>';
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid description.
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="text-center">
                <button class="btn btn-outline-info" type="submit">JOIN THE CONTEST</button>
            </div>
        </form>
    </div>
</body>

</html>