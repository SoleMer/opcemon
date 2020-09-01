<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 02:23:27
  from 'C:\xampp\htdocs\opcemon\templates\archive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4d947f094ce3_74586331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137759142bb35d2b0c4b3420b8471aa5b0678558' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\archive.tpl',
      1 => 1598914118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/foro.tpl' => 1,
  ),
),false)) {
function content_5f4d947f094ce3_74586331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            </div>
        </div>
    <?php }?>
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['archive']->value) {?>
            <div class="col-md-8">
                <h1><?php echo $_smarty_tpl->tpl_vars['archive']->value->title;?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['archive']->value->archive != null) {?>
                    <?php echo $_smarty_tpl->tpl_vars['material']->value->archive;?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['archive']->value->link != null) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['archive']->value->link;?>
</p>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value == 1) {?>
            <div class="col-md-4">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Comision</th>
                            <th scope="col">Acceso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commissions']->value, 'commission');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commission']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('finded', false);?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['commission']->value->city;
echo $_smarty_tpl->tpl_vars['commission']->value->number;?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['access']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['a']->value->material == $_smarty_tpl->tpl_vars['archive']->value->id) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['a']->value->commission == $_smarty_tpl->tpl_vars['commission']->value->id) {?>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
removeAccess/<?php echo $_smarty_tpl->tpl_vars['commission']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['archive']->value->id;?>
"><button type="submit" class="btn btn-primary">SI</button></a></td>
                                            <?php $_smarty_tpl->_assignInScope('finded', true);?>
                                        <?php }?>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['finded']->value == false) {?>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
giveAccess/<?php echo $_smarty_tpl->tpl_vars['commission']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['archive']->value->id;?>
"><button type="submit" class="btn btn-primary">NO</button></a></td>
                                <?php }?>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php }?>
    </div>
    <div name="foro"> 
        <?php $_smarty_tpl->_subTemplateRender('file:templates/foro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
