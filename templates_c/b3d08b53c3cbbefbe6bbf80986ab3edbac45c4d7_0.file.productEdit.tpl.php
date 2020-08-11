<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-03 01:54:29
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efe73b5666cb1_59051215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3d08b53c3cbbefbe6bbf80986ab3edbac45c4d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productEdit.tpl',
      1 => 1593734066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efe73b5666cb1_59051215 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
edit/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" method= "POST" class="col-md-4 fondo-blanco" enctype="multipart/form-data">
    <div class="form-group">
        <label for="productname">Producto</label>
        <input name='productname' type="text" class="form-control" id="productname">
    </div>
    <div class="form-group">
        <label for="cost">Precio</label>
        <input name='cost' type="number" class="form-control" id="cost">
    </div>
        <div class="form-group">
          <label for="collection">Coleccion</label>
          <select name="collection">
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
          </select>
          <input type="file" name="input_name" id="imageToUpload">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
</form> 
<a href='<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
deleteImage/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
'><button type="submit" class="btn btn-primary">Eliminar imagen</button></a><?php }
}
