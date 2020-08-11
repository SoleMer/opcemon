<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-30 02:14:36
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productsABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efa83ecde7e07_25553650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45595cbb3f5b299c5638e7c9af71d4a9ce324640' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productsABM.tpl',
      1 => 1593475819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5efa83ecde7e07_25553650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container fluid">
<div class="row">
    <div class="col-md-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
productsByCollection"><button type="submit" class="btn btn-primary">Ver por colección</button></a></td>
    </div>
    <div class="col-md-8 fondo-blanco">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Colección</th>
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
                        <td><a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></td>
                        <td>$<?php echo $_smarty_tpl->tpl_vars['product']->value->cost;?>
</td>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collections']->value, 'collection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->value) {
?>
	                        <?php if ($_smarty_tpl->tpl_vars['collection']->value->id_collection == $_smarty_tpl->tpl_vars['product']->value->id_collection) {?>
	                            <td><?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</td>
	                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['permit']->value == 1) {?>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
"><button type="submit" class="btn btn-primary" name= "id" value= "<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Eliminar</button></a></td>
                            <td><a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
"><button type="submit" class="btn btn-primary">Editar</button></a></td>
                        <?php }?>}
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['permit']->value == 1) {?>
                    <tr>
                        <form action="new" method="POST"  enctype="multipart/form-data">
                            <td></td>
                            <td><input name='name' type="text" class="form-control"  placeholder="Producto"></td>
                            <td><input name='cost' type="number" class="form-control" placeholder="$"></td>
                            <td><label for="id_collection">Colección</label>
                                <select name="id_collection">
	                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collections']->value, 'collection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->value) {
?>
	                                    <option value='<?php echo $_smarty_tpl->tpl_vars['collection']->value->id_collection;?>
'><?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</option>
	                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                            </select></td>
                            <td><button type="submit" class="btn btn-primary">Agregar</button></td>
                            <input type="file" name="input_name" id="imageToUpload">
                        </form>
                    </tr>       
                <?php }?>}
            </tbody>
        </table>
    </div>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
