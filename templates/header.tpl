<!DOCTYPE html>
<html lang="en">

<head>
    <base href={$baseURL}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPCEMON</title>
    <link rel="stylesheet" href="css/opcemon.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
                    <a href="home" id="" class="item-href-nav"><img src="img/logo.jpg" class="logo"></a>
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
                    {if isset($username)}
                        <a href="logout" class="item-href-nav">CERRAR SESION</a>
                    {else}
                        <a href="login" class="item-href-nav">INICIAR SESION</a>
                    {/if}
                </li>
                <li class="nav-item">
                    {if isset($username)}
                        <a href="perfil" class="item-href-nav">{$username}</a>
                    {/if}
                </li>
            </ul>
            
        </div>
    </nav>
    
