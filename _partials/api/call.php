<?php
  include __DIR__.'/./partials/db.php';
  // var_dump($database);
  header('Content-Type: application/json');
  echo json_encode($database);
  // RICORDARSI DI AGGIUNGERE IL SUCCESS => TRUE ED EVENBTUALMENTE GESTIRE I DatI QUINDI:

  // echo json_encode([
  //   'response' => $database,
  //   'success' => true
  // ]);


?>
