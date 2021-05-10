<?php
  include_once __DIR__.'/./_partials/template/header.php';
?>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "db_hotel";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
  }
?>
































<?php
  include_once __DIR__.'/./_partials/template/footer.php';
?>
