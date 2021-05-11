<?php
  // DATI X LA CONNESSIONE
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "db_hotel";

  // METTO  IN UNA VARIABILE IL RISULTATO DELLA CONNESSIONE
  $conn = new mysqli($servername, $username, $password, $dbname);

  // CHIEDO COM'E' ANDATA LA CONNESSIONE
  if ($conn && $conn->connect_error) {
    // SE E' FALLITA
    echo "Connection failed: " . $conn->connect_error;
  }
?>
