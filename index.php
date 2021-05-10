<?php
  include_once __DIR__.'/./_partials/template/header.php';
?>





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
  } else { 
    // SE E' ANDATA A BUON FINE FACCIO LA QUERY
    $sql = "SELECT room_number, floor FROM stanze"; // CREO LA QUERY
    $result = $conn->query($sql); // ESEGUO LA QUERY

    //CONTROLLO I RISULTATI DELLA QUERY
    if ($result && $result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
        echo "Stanza N. " . $row['room_number']. " piano: " .$row['floor'] . "<br>";
      }
    } elseif ($result) {
      echo "o results";
    } else {
      echo "query error";
    }
    $conn->close();
  }
?>
































<?php
  include_once __DIR__.'/./_partials/template/footer.php';
?>
