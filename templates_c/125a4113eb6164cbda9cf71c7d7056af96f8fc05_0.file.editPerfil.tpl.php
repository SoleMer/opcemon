<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 18:21:02
  from 'C:\xampp\htdocs\opcemon\templates\editPerfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f565dee4f5816_35065136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '125a4113eb6164cbda9cf71c7d7056af96f8fc05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\editPerfil.tpl',
      1 => 1599495643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f565dee4f5816_35065136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h1><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</h1>
            <form action="editUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" method="POST">
                <label for="date">Fecha de nacimiento: </label>
                <input class="form-control form-control-lg" type="text" name="date" placeholder=<?php echo $_smarty_tpl->tpl_vars['user']->value->date;?>
>
                <label for="DNI">DNI: </label>
                <input class="form-control form-control-lg" type="number" name="DNI" placeholder=<?php echo $_smarty_tpl->tpl_vars['user']->value->DNI;?>
>
                <label for="email">Correo: </label>
                <input class="form-control form-control-lg" type="email" name="email" placeholder=<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
>
                <label for="city">Ciudad: </label>
                <input class="form-control form-control-lg" type="text" name="city" placeholder=<?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
>

                <button type=" submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div><?php }
}
