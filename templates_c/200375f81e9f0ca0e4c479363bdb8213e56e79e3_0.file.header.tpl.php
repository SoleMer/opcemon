<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 19:32:22
  from 'C:\xampp\htdocs\opcemon\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a91263c7c36_08542029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200375f81e9f0ca0e4c479363bdb8213e56e79e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\header.tpl',
      1 => 1598722340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a91263c7c36_08542029 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href=<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPCEMON</title>
    <link rel="stylesheet" href="css/opcemon.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="img/Logo.jpg" class="logo-nav">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="home" id="" class="item-href-nav">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="material" class="item-href-nav">MATERIAL</a>
                </li>
                <li class="nav-item">
                    <a href="calendario" class="item-href-nav">CALENDARIO</a>
                </li>
                <li class="nav-item">
                    <a href="examenes" class="item-href-nav">EXAMENES</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
                        <a href="logout" class="item-href-nav">CERRAR SESION</a>
                    <?php } else { ?>
                        <a href="login" class="item-href-nav">INICIAR SESION</a>
                    <?php }?>
                </li>
                <li class="nav-item">
                    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
                        <a href="perfil" class="item-href-nav"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
                    <?php }?>
                </li>
            </ul>
            
        </div>
    </nav>
    
<?php }
}
