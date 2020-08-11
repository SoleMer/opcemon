<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 01:56:55
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\vue\otroFormComment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f09004770e8c2_81912567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaf6c6d0394b4c46b2973fae724493bc0d2d8635' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\vue\\otroFormComment.vue',
      1 => 1594425412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f09004770e8c2_81912567 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="addComment"> 
   <div class="col-md-3 fondo-blanco">
     <p class="clasificacion">
    <img src="img/estrellaContorno.jpg" v-on:click="readScore(1)" id="star1">
    <img src="img/estrellaContorno.jpg" v-on:click="readScore(2)" id="star2">
    <img src="img/estrellaContorno.jpg" v-on:click="readScore(3)" id="star3">
    <img src="img/estrellaContorno.jpg" v-on:click="readScore(4)" id="star4">
    <img src="img/estrellaContorno.jpg" v-on:click="readScore(5)" id="star5">
  </p>
      <input type="text" ref="comment" placeholder="comentario"></input>
   <br>
      <button class="btn btn-primary" @click="save">GUARDAR COMENTARIO</button>
      </div>
</section>
 
<?php }
}
