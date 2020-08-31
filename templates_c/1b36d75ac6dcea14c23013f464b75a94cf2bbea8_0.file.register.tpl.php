<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 23:34:16
  from 'C:\xampp\htdocs\opcemon\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4978587f9979_84354554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b36d75ac6dcea14c23013f464b75a94cf2bbea8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\register.tpl',
      1 => 1598650111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f4978587f9979_84354554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
      <?php }?>
      <button type="submit" class="btn btn-primary">Registrarme</button>
    </form>
  </div>
</div><?php }
}
