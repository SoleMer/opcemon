<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-01 19:02:31
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efcc1a74d0c66_37067127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a7acccc52ac9de6241e79d5c76574cc2c62147' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\register.tpl',
      1 => 1593621068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5efcc1a74d0c66_37067127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="col-md-6 offset-md-3 fondo-blanco">
    <form action="addUser" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input name='username' type="text" class="form-control" id="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name='password' type="password" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1">Rewrite password</label>
        <input name='repassword' type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
      <?php }?>
      <button type="submit" class="btn btn-primary">Guardar mis datos</button>
    </form>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
