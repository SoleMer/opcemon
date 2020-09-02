<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 18:10:59
  from 'C:\xampp\htdocs\opcemon\templates\material.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e729375dc07_09683941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f581178e26c69cbcc783733daedbe46ad2d2f67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\material.tpl',
      1 => 1598976055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/error.tpl' => 1,
  ),
),false)) {
function content_5f4e729375dc07_09683941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>    
        <?php $_smarty_tpl->_subTemplateRender('file:templates/error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class="row">
        <div class="col-md-8">
            <?php if ($_smarty_tpl->tpl_vars['material']->value) {?>
                <ul class="list-group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['material']->value, 'archive');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['archive']->value) {
?>
                        <li class="list-group-item list-group-item-secondary">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
archive/<?php echo $_smarty_tpl->tpl_vars['archive']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['archive']->value->title;?>
</a>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
            <div class="col-md-4">
                <form action="addMaterial" method="POST">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input name='title' type="text" class="form-control" id="title">
                        <input type="file" name="input_name" id="archive">
                        <label for="link">Link</label>
                        <input name='link' type="text" class="form-control" id="link">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        <?php }?>
    </div>
</div><?php }
}
