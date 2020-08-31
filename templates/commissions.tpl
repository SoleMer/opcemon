{include 'templates/header.tpl'}
<div class="container">
    <div class="row">
        <div class="col-md-2 offset-md-2">
            <h4>Comisiones</h4>
            <ul class="list-group">
                {foreach from=$commissions item=$commission}
                    <li class="list-group-item">{$commission->city}{$commission->number}</li>
                {/foreach}
            </ul>
        </div>
        <div class="col-md-5 offset-md-3">
            <h4>Agregar comision</h4>
            <form action="addCommission" method="POST">
                <label for="city">Ciudad:</label>
                <input name='city' type="text" class="form-control" id="city">
                <label for="number">Numero:</label>
                <input name='number' type="number" class="form-control" id="number">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-white bg-dark text-center">Usuarios</h2>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nombre y apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Comision</th>
                        <th scope="col">Asignar comision</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$users item=$user}
                        {if $user->permits != 1}
                            <tr>
                                <td>{$user->username}</td>
                                <td>{$user->email}</td>
                                <td>{$user->city}</td>
                                {if $user->commission == 0}
                                    <td>Sin comision</td>
                                {else}
                                    {foreach from=$commissions item=$commission}
                                        {if $commission->id == $user->commission}
                                            <td>{$commission->city}{$commission->number}</td>
                                        {/if}
                                    {/foreach}
                                {/if}
                                <form action="{$baseURL}asignCommission/{$user->id}" method="POST">
                                    <td>
                                        <select name="commission">
                                            {foreach from=$commissions item=$commission}
                                                <option value='{$commission->id}'>{$commission->city}{$commission->number}</option>
                                            {/foreach}
                                        </select>
                                    </td>
                                    <td><button type="submit" class="btn btn-primary" name="id">Asignar</button></td>
                                </form>
                            </tr>
                        {/if}
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>