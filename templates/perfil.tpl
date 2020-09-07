{include 'templates/header.tpl'}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h1>{$user->username}</h1>
            <p>Fecha de nacimiento: {$user->date}</p>
            <p>DNI: {$user->DNI}</p>
            <p>Correo: {$user->email}</p>
            <p>Ciudad: {$user->city}</p>
            <p>Comision: {$commission->city}{$commission->number}</p>

            <a href="editPerfil">Editar informacion</a>
        </div>
    </div>
</div>