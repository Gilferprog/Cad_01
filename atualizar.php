<?php include_once "config.php" ?> 
<?php
$id = $_POST['id'];
$data = $_POST['data'];
$result = explode('/',$data);
$dia = $result[0];
$mes = $result[1];
$ano = $result[2];
$data = $ano.'-'.$mes.'-'.$dia;
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$inscestadual = $_POST['inscestadual'];
$responsavel = $_POST['responsavel'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$num = $_POST['num'];
$numcomp = $_POST['numcomp'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];

$sql = "UPDATE tbclientes SET nome='$nome', data='$data', cnpj='$cnpj', inscestadual='$inscestadual', responsavel='$responsavel', cpf='$cpf', rg='$rg', endereco='$endereco' ,num='$num', numcomp='$numcomp', bairro='$bairro' ,cidade='$cidade', estado='$estado' ,celular='$celular' , email='$email', obs='$obs' WHERE id='$id' ";

if (mysqli_query($conn, $sql)) {
   echo "<script>alert('Cadastro salvo com sucesso!');window.location='editar.php?id=$id';</script>";

   } else {
   echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>