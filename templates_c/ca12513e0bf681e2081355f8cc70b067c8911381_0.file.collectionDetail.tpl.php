<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 14:20:48
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\collectionDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed24fa0955cd3_01949629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca12513e0bf681e2081355f8cc70b067c8911381' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\collectionDetail.tpl',
      1 => 1590353782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ed24fa0955cd3_01949629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="col-md-6 offset-md-2 fondo-blanco">
    <h1><?php echo $_smarty_tpl->tpl_vars['collection']->value->name;?>
</h1>
  </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
editCollection/<?php echo $_smarty_tpl->tpl_vars['collection']->value->id_collection;?>
" method= "POST" class="col-md-4 fondo-blanco">
      <div class="form-group">
        <label for="collectionName">Colección</label>
        <input name='collectionName' type="text" class="form-control" id="collectionName">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
