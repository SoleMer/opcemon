<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-12 19:47:30
  from 'C:\xampp\htdocs\opcemon\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f342b32d27069_13103008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b2591cc9c010704068455dcd192c5643fe37710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\login.tpl',
      1 => 1597196329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f342b32d27069_13103008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
      <?php }?>
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    <form action="register">
      <button type="submit" class="btn btn-primary">No tengo cuenta</button>
    </form>
  </div>
</div>
<?php }
}
