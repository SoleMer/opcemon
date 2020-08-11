<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-07 15:57:17
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\vue\comments1.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f047f3daaf0c3_53595741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9c21906329561df708a22e5ffd770665620680c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\vue\\comments1.vue',
      1 => 1594129819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f047f3daaf0c3_53595741 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="form-center" id="comments">
  <h2 class="subtitle">comments</h2>

  <div v-if="loading">
    <p>Loading comments...</p>
  </div>

  <div v-if="!loading" >
    <div v-if="!error">
      <table >
        <thead>
          <tr>
            <th>comentarios</th>
            <th>puntaje</th>
            <th>usuario</th>
            <th v-if="permit == 1"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="comment in comments">
            <td class="text-size">{{comment.text}}</td>
            <td>{{comment.score}}</td>
            <td>{{comment.userName}}</td>
            <td v-if="permit == 1">

              <button v-on:click="deleteComment(comentario.id)">Eliminar</button>
            
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div v-if="error">
      <h3>no hay comentarios para este producto</h3>
    </div>
  </div>
</section>


<?php }
}
