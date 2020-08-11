<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 02:12:34
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\vue\formComment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0903f2efe4e1_45242456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e812cb271a44921c75b48e71ce748b5ffca052a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\vue\\formComment.vue',
      1 => 1594426324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0903f2efe4e1_45242456 (Smarty_Internal_Template $_smarty_tpl) {
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
      <button class="btn btn-primary" @click="save">GUARDAR</button>
      </div>
</section>
 
<?php }
}
