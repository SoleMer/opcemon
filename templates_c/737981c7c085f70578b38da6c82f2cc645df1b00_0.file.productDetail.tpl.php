<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 03:20:12
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\productDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0913cc3a4e88_86977422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737981c7c085f70578b38da6c82f2cc645df1b00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\productDetail.tpl',
      1 => 1594429713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/productEdit.tpl' => 1,
    'file:templates/vue/comments.vue' => 1,
    'file:templates/vue/formComment.vue' => 1,
  ),
),false)) {
function content_5f0913cc3a4e88_86977422 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input type="hidden" id="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" class="card-text">$<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
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
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comments.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['userLogged']->value)) {?>
      <input type="hidden" id="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">Escribe un comentario: </input> 
      <input type="hidden" id="permit" value="<?php echo $_smarty_tpl->tpl_vars['permit']->value;?>
"></input> 
      <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/formComment.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <input type="hidden" id="username" value="">Registrate para dejar un comentario.</input> 
    <input type="hidden" id="permit" value="0"></input> 
    <?php }?>
  </div>
  <?php echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
</div>



<?php }
}
