{include 'templates/header.tpl'}
<div class="container">
  <div class="col-md-6 offset-md-3">
    <form action="verify" method="POST">
      <div class="form-group">
        <label for="username">Correo electrónico:</label>
        <input name='email' type="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input name='password' type="password" class="form-control" id="exampleInputPassword1">
      </div>
      {if $error}
        <div class="alert alert-danger" role="alert">
          {$error}
        </div>
      {/if}
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    <form action="register">
      <button type="submit" class="btn btn-primary">No tengo cuenta</button>
    </form>
  </div>
</div>
