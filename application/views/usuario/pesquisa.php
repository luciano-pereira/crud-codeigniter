
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
<body>
<div class="container">
  <h1>Listagem</h1>

  <a type="button" href="<?= site_url("usuario/cadastro"); ?>" class="btn btn-success" >cadastrar</a>
  <a type="button" href="<?= site_url("usuario/deslogar"); ?>" class="btn btn-warning">sair</a>


  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">senha</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php

foreach($usuarios as $u){
    echo '
    <tr>
      <th scope="row">'.$u->idusuario.'</th>
      <td>'.$u->nome.'</td>
      <td>'.$u->email.'</td>
      <td>'.$u->senha.'</td>
      <td>
        <a href="'. site_url("usuario/excluir/$u->idusuario") .'">excluir</a>
        <form action="'. site_url("usuario/editar") .'" method="post">
        <input type="hidden" name="id" value="'.$u->idusuario.'">
        <button type="submit">alterar</button>
        </form>
      </td>
    </tr>';

}
?>
  </tbody>
</table>


<form>
  <div class="form-group" action="usuario/pesquisar" method="post">
    <label for="exampleInputEmail1">pesquisa</label>
    <input type="text" class="form-control" name="pesquisar" placeholder="nome">
  </div>
  <button type="submit" class="btn btn-default">go</button>
</form>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
