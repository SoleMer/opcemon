<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 07:10:09
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\vue\comments.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0949b1927ca6_81755306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5b582ebac41cea3001ee5033c2bcf63026526b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\vue\\comments.vue',
      1 => 1594443875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0949b1927ca6_81755306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="comments">

    <div v-if="loading">
        <p>Loading comments...</p>
    </div>

    <div v-if="!loading" >
        <div v-if="!error">
            <h3>Puntaje del producto: {{finalScore}}</h3>
            <h5>Ordenar por: </h5>
            <button v-on:click="ordenar(1)" class="btn btn-primary">Menor puntaje</button>
            <button v-on:click="ordenar(2)" class="btn btn-primary">Mayor puntaje</button>
            <div v-for="comment in allComments" class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{comment.user}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Puntuacion: {{comment.score}}</h6>
                    <p class="card-text">{{comment.text}}</p>
                    <button v-if="permit" v-on:click="eliminar(comment.id_comment)" class="btn btn-primary">Eliminar</button>    
                </div>
            </div>
        </div>
    </div>
    <div v-if="error">
        <h3>no hay comentarios para este producto</h3>
    </div>
</section>
<?php }
}
