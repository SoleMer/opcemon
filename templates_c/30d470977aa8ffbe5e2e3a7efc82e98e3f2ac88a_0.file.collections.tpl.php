<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-27 23:41:23
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\collections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecede83113165_92012166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d470977aa8ffbe5e2e3a7efc82e98e3f2ac88a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\collections.tpl',
      1 => 1590615668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ecede83113165_92012166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container fluid">
<div class="col-md-6 offset-md-3 fondo-blanco inline">
            <h5>Colecciones</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th> 
                        <th scope="col">Coleccion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collections']->value, 'collection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['collection']->value->id_collection;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
