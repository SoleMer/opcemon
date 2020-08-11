<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-20 18:53:10
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\collectionsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec560762d2ef7_34254990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caecbf7c8e1baeaeed38ba596d0dbdfa363402f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\collectionsList.tpl',
      1 => 1589990224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec560762d2ef7_34254990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="col-md-6 offset-md-3 fondo-blanco">
        <h1>Colecciones</h1>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collections']->value, 'collection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->value) {
?>
              <a href="collection"><li><?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</li></a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>  
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
