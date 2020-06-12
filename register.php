<?php
require('connection.php');

$fiscalCode = $_POST['fiscalcode'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$stagename = $_POST['stagename'];
$birthDate = $_POST['birthdate'];
$city = $_POST['city'];
$country = $_POST['country'];
$address = $_POST['address'];
$description = $_POST['description'];
//$category = $_POST['category'];

$target_dir = 'upload/';
$target_file = $target_dir . basename($_FILES['file']['name']);
$newFile = "gallery/".$firstname.'_'.$lastname.".png";

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    rename($target_dir.$_FILES['file']['name'], $newFile);
    //Attempt insert query execution
    $sql = "INSERT INTO artista (cf, nome, cognome, nomeArtistico, dataNascita, provincia, citta, indirizzo) 
            VALUES ('$fiscalCode', '$firstname', '$lastname', '$stagename', '$birthDate', '$city', '$country', '$address')";
    if (mysqli_query($conn, $sql)) {
        $sql = "INSERT INTO foto(artista, nome, dataRegistrazione, descrizione) 
                VALUES ('$fiscalCode', '$newFile', CURDATE(), '$description')";
        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
            //echo "tutto ok";    
            //alert("Congratulations, you've joined the contest, good luck!");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        //echo "Records added successfully.";
        //header('index.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn); //close connection
} else {
    echo "file not valid";
}


