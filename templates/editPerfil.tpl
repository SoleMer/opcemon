{include 'templates/header.tpl'}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h1>{$user->username}</h1>
            <form action="editUser/{$user->id}" method="POST">
                <label for="date">Fecha de nacimiento: </label>
                <input class="form-control form-control-lg" type="text" name="date" placeholder={$user->date}>
                <label for="DNI">DNI: </label>
                <input class="form-control form-control-lg" type="number" name="DNI" placeholder={$user->DNI}>
                <label for="email">Correo: </label>
                <input class="form-control form-control-lg" type="email" name="email" placeholder={$user->email}>
                <label for="city">Ciudad: </label>
                <input class="form-control form-control-lg" type="text" name="city" placeholder={$user->city}>

                <button type=" submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>