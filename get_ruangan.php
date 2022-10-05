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
// Punya Nada
  // require_once("db_login.php");

  // if (isset($_GET["id_tipe"])) {
  //   $id_tipe = $_GET["id_tipe"];

  //   $query = "SELECT * FROM ruang WHERE id_tipe='" . $id_tipe . "'";
  //   $result = $db->query($query);

  //   if (!$result) {
  //     die("Could not query the database: <br />" . $db->error);
  //   }

  //   echo '<option value="" selected>Pilih Room</option>';
    
  //   while ($data = $result->fetch_object()) {
  //     echo '<option value="' . $data->id_tipe . '">' . $data->no_ruang . '</option>';
  //   }

  //   $result->free();
  //   $db->close();
  // }
?>
<!-- Punya Patan -->
<?php 
    require_once("db_login.php");

  if (isset($_GET["id"])) {
      $id = $_GET["id"];
      $result = $db->query("select * from ruang where id_tipe='$id'");
?>

  <option value="0">Pilih Ruangan</option>
  <?php while ($data = $result->fetch_object()): ?>
      <option value="<?php echo $data->noruangan ?>"><?php echo $data->nama ?></option>
  <?php endwhile;
  }