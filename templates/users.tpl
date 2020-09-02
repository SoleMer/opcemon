{include 'templates/header.tpl'}

<div class="container fluid">
    {if $error}
        {include 'templates/error.tpl'}
    {else}
        <div class="row">
            <div class="col-md-10 offset-md-1 fondo-blanco">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nombre y apellido</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Fecha de nacimiento</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Comision</th>
                            <th scope="col">Administrador</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$users item=$user}
                            <tr>
                                <td>{$user->username}</td>
                                <td>{$user->DNI}</td>
                                <td>{$user->date}</td>
                                <td>{$user->email}</td>
                                <td>{$user->city}</td>
                                <td>{$user->commission}</td>
                                <td>
                                    {if $user->permits == 1}
                                        <a href="{$baseURL}permit/{$user->id}"><button type="submit" class="btn btn-primary">SI</button>
                                        {else}
                                            <a href="{$baseURL}permit/{$user->id}"><button type="submit" class="btn btn-primary">NO</button></a>
                                        {/if}
                                </td>
                                <td>
                                    <a href="{$baseURL}deleteUser/{$user->id}"><button type="submit" class="btn btn-primary">Eliminar</button></a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {/if}
</div>