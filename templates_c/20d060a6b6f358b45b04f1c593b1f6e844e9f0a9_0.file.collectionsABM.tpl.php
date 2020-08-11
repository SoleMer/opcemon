<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-03 02:06:15
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\collectionsABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efe76771394c8_98146717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d060a6b6f358b45b04f1c593b1f6e844e9f0a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\collectionsABM.tpl',
      1 => 1593734560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5efe76771394c8_98146717 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <?php if (isset($_smarty_tpl->tpl_vars['userLogged']->value) && $_smarty_tpl->tpl_vars['permit']->value == 1) {?>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
deleteCollection/<?php echo $_smarty_tpl->tpl_vars['collection']->value->id_collection;?>
"><button type="submit" class="btn btn-primary" name= "id" value= "<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Eliminar</button></a></td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
collection/<?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
"><button type="submit" class="btn btn-primary">Editar</button></a></td> 
                            <?php }?>
                            </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (isset($_smarty_tpl->tpl_vars['userLogged']->value) && $_smarty_tpl->tpl_vars['permit']->value == 1) {?>
                        <tr>
                            <form action="newCollection" method="POST">
                                <td><input name='collectionName' type="text" class="form-control"  placeholder="Nueva Colección"></td>
                                <td><button type="submit" class="btn btn-primary">Agregar</button></td>
                            </form>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
