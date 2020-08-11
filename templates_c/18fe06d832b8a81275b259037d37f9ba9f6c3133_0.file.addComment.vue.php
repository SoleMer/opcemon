<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-07 15:31:22
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\vue\addComment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f04792aa47d15_60848186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18fe06d832b8a81275b259037d37f9ba9f6c3133' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\vue\\addComment.vue',
      1 => 1594128668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f04792aa47d15_60848186 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form @submit="addComment" method="POST">
    <label id="user" value={{}}
    <textarea v-model="userComment" id="userComment" placeholder="Agrega tu comentario." required id="text"></textarea>
    <input type="number" v-model="puntaje" id="puntaje" max=5 min=1 placeholder="Puntos" required id="score">
    <input id= "btn-add" type="submit" value="add">
</form>

<?php }
}
