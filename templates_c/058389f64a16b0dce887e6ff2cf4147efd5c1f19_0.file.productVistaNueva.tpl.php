<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-01 18:09:42
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productVistaNueva.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efcb546cc3a50_25334876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '058389f64a16b0dce887e6ff2cf4147efd5c1f19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productVistaNueva.tpl',
      1 => 1593619779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/productEdit.tpl' => 1,
    'file:templates/coment.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5efcb546cc3a50_25334876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div col-md-8 offset-col-md-2>
    <div class="card mb-3" >
      <div class="row no-gutters">
        <div class="col-md-8">
          <?php if (isset($_smarty_tpl->tpl_vars['product']->value->image)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" class="card-img"/>
          <?php }?>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h5>
            <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['product']->value->cost;?>
</p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collections']->value, 'collection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['collection']->value->id_collection == $_smarty_tpl->tpl_vars['product']->value->id_collection) {?>
                <p class="card-text"><small class="text-muted">Colección: <?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</small></p>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if (isset($_smarty_tpl->tpl_vars['userLogged']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['permit']->value == 1) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:templates/productEdit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php }?>
              <?php $_smarty_tpl->_subTemplateRender('file:templates/coment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 


<?php }
}
