<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 16:08:29
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productsByCollection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec92e5d990b77_88182021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca528833c1860e092617baf5c6405f37706863db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productsByCollection.tpl',
      1 => 1590242905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec92e5d990b77_88182021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container fluid">
<div class="row">
<div class="col-md-3">
        <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
products"><button type="submit" class="btn btn-primary">Back</button></a></td>
    </div>
<div class="col-md-6 fondo-blanco inline">
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
                        <tr><ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->id_collection == $_smarty_tpl->tpl_vars['collection']->value->id_collection) {?>
                                    <td><li><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['product']->value->cost;?>
</li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</li></td>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul></tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        </div>
        </div>
</div>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
