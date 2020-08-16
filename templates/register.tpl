{include 'templates/header.tpl'}
<div class="container">
  <div class="col-md-8 offset-md-2">
    <form action="addUser" method="POST">
      <div class="form-group">
        <label for="name">Nombre</label>
        <input name='name' type="text" class="form-control" id="name">
        <label for="lastname">Apellido</label>
        <input name='lastname' type="text" class="form-control" id="lastname">
        <label for="email">Correo electronico</label>
        <input name='email' type="email" class="form-control" id="email">
        <label for="DNI">DNI</label>
        <input name='DNI' type="number" class="form-control" id="DNI">
        <label for="date">Fecha de nacimiento</label>
        <input name='date' type="date" class="form-control" id="date">
        <label for="city">Localidad</label>
        <input name='city' type="text" class="form-control" id="city">
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input name='password' type="password" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1">Repita contraseña</label>
        <input name='repassword' type="password" class="form-control" id="exampleInputPassword1">
      </div>
      {if $error}
        <div class="alert alert-danger" role="alert">
          {$error}
        </div>
      {/if}
      <button type="submit" class="btn btn-primary">Registrarme</button>
    </form>
  </div>
</div>