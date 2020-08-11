<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 06:30:38
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8a6ee585e07_52303467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09609d4bf24a706b60a1f6c5ea1e6ca72fa7614b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productsList.tpl',
      1 => 1590208225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8a6ee585e07_52303467 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td>
        <td>$<?php echo $_smarty_tpl->tpl_vars['product']->value->cost;?>
</td>
        <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
"><button type="submit" class="btn btn-primary" name= "id" value= "<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Eliminar</button></a></td>
            <td><a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
"><button type="submit" class="btn btn-primary">Editar</button></a></td>
        <?php }?>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
     <tr>
     <form action="new" method="POST">
        <td><input name='name' type="text" class="form-control"  placeholder="Producto"></td>
        <td><input name='cost' type="number" class="form-control" placeholder="Precio"></td>
        <td><input name='id_collection' type="number" class="form-control" placeholder="Id coleccion"></td>
        <td><button type="submit" class="btn btn-primary">Agregar</button></td>
     </form>
        </tr>
    <?php }?>         
</tbody>

</table><?php }
}
