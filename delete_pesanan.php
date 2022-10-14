<!-- 
Nama    : Fathan Muhammad Faqih
NIM     : 24060120130053
LAB C1 
-->
<?php
		require_once('db_login.php');
		$id = $_GET['id']; //mendapatkan customerid yang dilewatkan ke url
		// memerlukan informasi login
		// assign a query
		$query = "DELETE FROM pesanan WHERE id_pesanan=" .$id;
    $query2 = $db->query("SELECT * FROM pesanan WHERE id_pesanan='$id'" );
    $data=mysqli_fetch_assoc($query2);
    $noruang=$data['no_ruang'];
    $query3=$db->query("UPDATE ruang SET status=0 WHERE no_ruang = '$noruang'");
		// execute the query

		$result = $db->query( $query );
		if (!$result){
			die ("Could not query the database: <br />". $db->error);
		} 
		else{
			$db->close();
			header('Location: dashboard_admin.php');
		}
		// close db connection
		$db->close();
?>
<!DOCTYPE HTML> 
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body> 
	<div class="container">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	</div>
</body>
</html>