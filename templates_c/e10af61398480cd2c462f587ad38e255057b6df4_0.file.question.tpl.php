<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 20:51:14
  from 'C:\xampp\htdocs\opcemon\templates\question.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e9822979259_57305969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10af61398480cd2c462f587ad38e255057b6df4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\question.tpl',
      1 => 1598986272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/error.tpl' => 1,
  ),
),false)) {
function content_5f4e9822979259_57305969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class="row">         <div class="col-md-10">
            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['question']->value->id_user) {?>
                        <div class="card-header"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</div>                     <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['question']->value->affair;?>
</h5>                     <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['question']->value->message;?>
</p>                 </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-2">             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replys']->value, 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                <div class="card text-white bg-secondary mb-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['reply']->value->id_user) {?>
                            <div class="card-header"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</div>                         <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="card-body">
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['reply']->value->messagge;?>
</p>                     </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-1">
        <h3>Agrega una respuesta:</h3>
        <form action="newReply/<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" method="POST">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Deja tu comentario"></textarea>
                    <button type=" submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php }
}
