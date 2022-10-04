<script type="text/javascript" src="script.js"></script>
<?php
//kode feli
  // require_once("db_login.php");

  // if (isset($_GET["id_tipe"])) {
  //   $id_tipe = $_GET["id_tipe"];

  //   $query = "SELECT * FROM model WHERE id_tipe='" . $id_tipe . "'";
  //   $result = $db->query($query);

  //   if (!$result) {
  //     die("Could not query the database: <br />" . $db->error);
  //   }

  //   echo '<option value="" selected>Pilih Room</option>';
    
  //   while ($row = $result->fetch_object()) {
  //     echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
  //   }
    
  //   $result->free();
  //   $db->close();
?>
<?php 
  require_once("db_login.php");

  if (isset($_GET["id_tipe"])) {
    $id_tipe = $_GET["id_tipe"];

    $query = "SELECT * FROM ruang WHERE id_tipe='" . $id_tipe . "'";
    $result = $db->query($query);

    if (!$result) {
      die("Could not query the database: <br />" . $db->error);
    }

    echo '<option value="" selected>Pilih Room</option>';
    
    while ($row = $result->fetch_object()) {
      echo '<option value="' . $row->id . '">' . $row->noruang . '</option>';
    }

    $result->free();
    $db->close();
  }
?>
