<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-01 21:15:17
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efce0c58d1e19_95362835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d32d7f44ff500beb6041585c86b70bfaac7c59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\login.tpl',
      1 => 1593630909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5efce0c58d1e19_95362835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="col-md-6 offset-md-3 fondo-blanco">
    <form action="verify" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input name='username' type="text" class="form-control" id="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name='password' type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
      <?php }?>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <form action="register">
      <button type="submit" class="btn btn-primary">Registrarme</button>
    </form>
    <?php if (isset($_smarty_tpl->tpl_vars['userLogged']->value) && ($_smarty_tpl->tpl_vars['permit']->value == 1)) {?>
      <form action="users">
        <button type="submit" class="btn btn-primary">Usuarios</button>
      </form>
    <?php }?>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
