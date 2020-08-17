<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-17 02:01:30
  from 'C:\xampp\htdocs\opcemon\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f39c8da4ef497_59223634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67170756f2223e81dce8623193a83ec4eeca3770' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\admin.tpl',
      1 => 1597622484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f39c8da4ef497_59223634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="col-md-8 offset-md-2">
  
  <div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
  <div class="card-body">
    <a href="users"><h5 class="card-title">Usuarios</h5></a>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="max-width: 50rem;">
  <div class="card-body">
  <a href="commissions"><h5 class="card-title">Comisiones</h5>
  </div>
</div>

<div class="card text-white bg-warning mb-3" style="max-width: 50rem;">
  <div class="card-body">
  <a href="content"><h5 class="card-title">Material</h5>
  </div>
</div>

  </div>
</div><?php }
}
