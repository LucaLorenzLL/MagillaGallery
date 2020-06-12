<?php
/*
  creazione di un database con MySQLi.
  La prima operazione richiesta sarà quella relativa alla definizione
  del blocco dei parametri per la connessione
*/

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "magillagallery";

try {
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
  //echo 'connesso';
} catch (\Throwable $th) {
  echo 'noup';
}
