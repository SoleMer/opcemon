<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 20:30:16
  from 'C:\xampp\htdocs\opcemon\templates\foro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e93387c65f6_64825801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '975192032da3340753cf4463bab7819a16c24c27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\foro.tpl',
      1 => 1598985014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e93387c65f6_64825801 (Smarty_Internal_Template $_smarty_tpl) {
?><div cass="row">
    <div class="col-md-10">
        <?php if ($_smarty_tpl->tpl_vars['questions']->value) {?>
            <h3>Temas de discusion</h3>   
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
                <div class="card little-card text-white bg-dark mb-3" style="max-width: 50rem;">
                    <div class="card-body">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
question/<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
                            <h5 class="card-text text-white"><?php echo $_smarty_tpl->tpl_vars['question']->value->affair;?>
</h5>
                        </a>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <div class="alert alert-primary" role="alert">
                "No hay consultas para este material."
            </div>
        <?php }?>
    </div>
</div>
<div class="row">
    <div class="col-md-8 offset-md-1">
        <h3>Comienza un nuevo tema de discusion:</h3>
        <form action="newQuestion/<?php echo $_smarty_tpl->tpl_vars['archive']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" method="POST">
            <div class="for-group">
                <input class="form-control form-control-lg" type="text" name="affair" placeholder="Asunto">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Deja tu comentario"></textarea>
                <button type=" submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div><?php }
}
