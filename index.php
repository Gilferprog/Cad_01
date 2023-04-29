<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <?php include_once "top.php"; ?>
  <?php include_once "config.php"; ?>
  <script>
    function deletar() {
      if (confirm("Deseja deletar esse cadastro?"))
        document.forms[0].subimit();
      else
        return false}
  </script>

</head>

<body>
  <header>
    <br>
    <nav>
      <ul>
        <li><a href="addtbc.php">Home</li></a>
        <li><a href="addtbc.php">Cadastrar</li></a>
      </ul>
    </nav>
    <style>
      header {
        background-color: #142952;
      }

      li {
        display: inline;
        margin: 0px 0px 0px 20px;
        justify-content: space-between;
      }
    </style>
  </header>

  <div class="container-fluid">
    <table class="table table-hover" style="width:auto;">
      <thead>
        <tr>
          <th width="5%" style="text-align:left">Id</th>
          <th width="10%" style="text-align:left">Data</th>
          <th width="20%" style="text-align:left">Nome</th>
          <th width="10%" style="text-align:left">Celular</th>
          <th width="10%" style="text-align:left">Cpf</th>
          <th width="10%" style="text-align:left">Opção</th>
        </tr>
      </thead>
      <?php
      $result_nomes = "SELECT * FROM tbclientes";
      $resultado = mysqli_query($conn, $result_nomes);
      while ($linha = mysqli_fetch_array($resultado)) {
        echo '<thead>
              <tr>
                <th width="5%" style="text-align:left">' . $linha['id'] . '</th>

                <th width="10%" style="text-align:left">' . date('d/m/Y', strtotime($linha['data'])) . '</th>

                <th width="20%" style="text-align:left">' . $linha['nome'] . '</th>

                <th width="20%" style="text-align:left">' . $linha['celular'] . '</th>

                <th width="20%" style="text-align:left">' . $linha['cpf'] . '</th>

                <th width="10%" style="text-align:left"><a href=deletar.php?id='. $linha['id'].' onclick="return deletar();"><i class="bi bi-trash"></a></i> | <a href=editar.php?id='. $linha['id'].'><i class="bi bi-pencil-square"></a></i> </th>                           
              </tr>
            </thead>';
      }
      ?>
    </table>
  </div>

</body>

</html>