<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 14:42:25
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productsSelect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec91a3124e0a6_55776223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470ca3d3d4df0373fefa3e654eed141bab75f624' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productsSelect.tpl',
      1 => 1590237500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/productsList.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec91a3124e0a6_55776223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container fluid">
<div class="row">
    <div class="col-md-6 fondo-blanco">
        <form action="collection" method="POST">
            <label for="view">Ver:</label>
            <select name="view">
                <option selected>Todos los productos</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collections']->value, 'collection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['collection']->value->id_collection;?>
"><?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
            </select>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->_subTemplateRender('file:templates/productsList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
        <div class="col-md-5 offset-md-1 fondo-blanco inline">
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
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
deleteCollection/<?php echo $_smarty_tpl->tpl_vars['collection']->value->id_collection;?>
"><button type="submit" class="btn btn-primary">Eliminar</button></a></td>
                            <td><a href=""><button type="submit" class="btn btn-primary">Editar</button></a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <tr>
                    <form action="newCollection" method="POST">
                        <td><input name='collectionName' type="text" class="form-control"  placeholder="Nueva Coleccion"></td>
                        <td><a href=""><button type="submit" class="btn btn-primary">Agregar</button></a></td>
                    </form>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php }?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
