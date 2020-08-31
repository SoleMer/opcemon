<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-17 02:27:10
  from 'C:\xampp\htdocs\opcemon\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f39cede5d8ec9_22568202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65bb41f555e8fc0385352ecea24e177aa9ded112' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\users.tpl',
      1 => 1597624027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f39cede5d8ec9_22568202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container fluid">
<div class="row">
    <div class="col-md-10 offset-md-1 fondo-blanco">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre y apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Correo electronico</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Comision</th>
                    <th scope="col">Administrador</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->DNI;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->date;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->commission;?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->permits == 1) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
permit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><button type="submit" class="btn btn-primary">SI</button>
                            <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
permit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><button type="submit" class="btn btn-primary">NO</button></a>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><button type="submit" class="btn btn-primary">Eliminar</button></a>
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
</div><?php }
}