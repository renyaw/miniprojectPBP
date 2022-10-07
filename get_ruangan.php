<?php 
    require_once("db_login.php");

  if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = $db->query("SELECT * from ruang WHERE id_tipe='$id' and status='0'");
?>
  <option value="0">-- Select Room Number --</option>
  <?php while ($data = $result->fetch_object()): ?>
      <option value="<?php echo $data->no_ruang ?>"><?php echo $data->no_ruang ?></option>
  <?php endwhile;
  }