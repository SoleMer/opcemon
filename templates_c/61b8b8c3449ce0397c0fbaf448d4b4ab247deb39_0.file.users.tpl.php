<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-01 22:38:30
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efcf446940136_99697367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b8b8c3449ce0397c0fbaf448d4b4ab247deb39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\users.tpl',
      1 => 1593635757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5efcf446940136_99697367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container fluid">
<div class="row">
    <div class="col-md-8 offset-md-2 fondo-blanco">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre de usuario</th>
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
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
permit/<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
"><button type="submit" class="btn btn-primary">SI</button>
                            <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
permit/<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
"><button type="submit" class="btn btn-primary">NO</button></a>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
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
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
