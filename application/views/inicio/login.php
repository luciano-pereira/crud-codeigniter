

<div class="panel-heading">
<p>email: adm@email.com</p>
<p>senha: 123</p>
</div>

-->
<?  //validation_errors(); ?> 
<div class="col-md-4">

    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Login </strong></h3></div>
  <div class="panel-body">
   <form role="form" action="<?= site_url("inicio/entrar"); ?>" method="post">
   <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="email"
     value="<?= set_value('email') ?>">
     <?=  form_error("email"); ?> 
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha" placeholder="senha">
    <?=  form_error("senha"); ?>
  </div>
 
  <div class="form-group">
    <label for="confirma_senha">Confirma senha</label>
    <input type="password" class="form-control" name="confirma_senha" placeholder="confirma senha">
    <?=  form_error("confirma_senha"); ?> 
  </div>
  <button type="submit" class="btn btn-sm btn-default">Entrar</button>
</form>
  </div>
</div>


