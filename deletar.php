<?php include_once"config.php";?>
<?php 
$id = $_GET['id'];
$sql = "DELETE FROM tbclientes WHERE id='$id'";
if (mysqli_query($conn, $sql)){
    header("Location: addtbc.php");
	//echo "<script>alert('Cadastro deletado com sucesso!'); window.location = 'index.php';</script>";
	
}else{
	echo 'Deu erro';
}
?>