<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 14:10:52
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed24d4c517117_03156512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9932480e2c87756d596af25bef910fbf9499a13f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\home.tpl',
      1 => 1590354013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ed24d4c517117_03156512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="col-md-8 offset-md-2 fondo-blanco">
        <h1>Soy Yo diseños</h1>
        <h4>Bienvevidxs!</h4>
        <p>En esta página vas a encontrar los mejores productos artesanales, de la mejor calidad y personalizados.</p> 
        <p>Elegí el modelo que más te guste, elegí un motivo y en unos días tenes tu producto terminado y 
        personalizado, listo para usar o regalar.</p>

        <h6>Además, vos elegís cómo pagar:</h6>
        <img src="img/medios_de_pago.png" class="mediosDePago">

        <h6>Encontranos en las redes sociales o hacé tu consulta por whatsapp.</h6>
        <img src="img/logoSmall.png" class="centrado">
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
