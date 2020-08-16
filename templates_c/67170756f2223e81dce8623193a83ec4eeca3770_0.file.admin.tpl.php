<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-13 00:08:40
  from 'C:\xampp\htdocs\opcemon\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f346868336a62_84680227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67170756f2223e81dce8623193a83ec4eeca3770' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\admin.tpl',
      1 => 1597270118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f346868336a62_84680227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="col-md-10 offset-md-1">
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">DNI</th>
      <th scope="col">e-mail</th>
      <th scope="col">Localidad</th>
      <th scope="col">Comision</th>
      <th scope="col">Permisos de administrador</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'users', 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
    <tr>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->lastname;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->date;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->DNI;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->commission == null) {?>
          <td>
            <label for="listCommission">Asignar comision</label>
              <select name="listCommission">
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
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commissions']->value, 'commision');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commision']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['commission']->value->id == $_smarty_tpl->tpl_vars['user']->value->commission) {?>
              <td><?php echo $_smarty_tpl->tpl_vars['commision']->value->city;?>
+<?php echo $_smarty_tpl->tpl_vars['commission']->value->number;?>
</td>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <td>
            <form action="editPermits">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
            </form>
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
<?php }
}
