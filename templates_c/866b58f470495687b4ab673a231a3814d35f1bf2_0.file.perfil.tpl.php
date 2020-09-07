<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 18:15:09
  from 'C:\xampp\htdocs\opcemon\templates\perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f565c8dde36a5_29773403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '866b58f470495687b4ab673a231a3814d35f1bf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\perfil.tpl',
      1 => 1599492611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f565c8dde36a5_29773403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h1><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</h1>
            <p>Fecha de nacimiento: <?php echo $_smarty_tpl->tpl_vars['user']->value->date;?>
</p>
            <p>DNI: <?php echo $_smarty_tpl->tpl_vars['user']->value->DNI;?>
</p>
            <p>Correo: <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>
            <p>Ciudad: <?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
</p>
            <p>Comision: <?php echo $_smarty_tpl->tpl_vars['commission']->value->city;
echo $_smarty_tpl->tpl_vars['commission']->value->number;?>
</p>

            <a href="editPerfil">Editar informacion</a>
        </div>
    </div>
</div><?php }
}
