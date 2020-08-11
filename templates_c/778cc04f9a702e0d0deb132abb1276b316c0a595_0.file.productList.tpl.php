<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 16:02:08
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebff2608bf4e1_00511723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '778cc04f9a702e0d0deb132abb1276b316c0a595' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productList.tpl',
      1 => 1589637722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ebff2608bf4e1_00511723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->cost;?>
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
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
