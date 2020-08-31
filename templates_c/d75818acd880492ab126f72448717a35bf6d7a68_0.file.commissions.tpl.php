<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 19:38:43
  from 'C:\xampp\htdocs\opcemon\templates\commissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a92a3c2d5f6_25690073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd75818acd880492ab126f72448717a35bf6d7a68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\commissions.tpl',
      1 => 1598722720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f4a92a3c2d5f6_25690073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-md-2 offset-md-2">
            <h4>Comisiones</h4>
            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commissions']->value, 'commission');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commission']->value) {
?>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['commission']->value->city;
echo $_smarty_tpl->tpl_vars['commission']->value->number;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="col-md-5 offset-md-3">
            <h4>Agregar comision</h4>
            <form action="addCommission" method="POST">
                <label for="city">Ciudad:</label>
                <input name='city' type="text" class="form-control" id="city">
                <label for="number">Numero:</label>
                <input name='number' type="number" class="form-control" id="number">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-white bg-dark text-center">Usuarios</h2>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nombre y apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Comision</th>
                        <th scope="col">Asignar comision</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->permits != 1) {?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->commission == 0) {?>
                                    <td>Sin comision</td>
                                <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commissions']->value, 'commission');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commission']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['commission']->value->id == $_smarty_tpl->tpl_vars['user']->value->commission) {?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['commission']->value->city;
echo $_smarty_tpl->tpl_vars['commission']->value->number;?>
</td>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
asignCommission/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" method="POST">
                                    <td>
                                        <select name="commission">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commissions']->value, 'commission');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commission']->value) {
?>
                                                <option value='<?php echo $_smarty_tpl->tpl_vars['commission']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['commission']->value->city;
echo $_smarty_tpl->tpl_vars['commission']->value->number;?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </td>
                                    <td><button type="submit" class="btn btn-primary" name="id">Asignar</button></td>
                                </form>
                            </tr>
                        <?php }?>
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
