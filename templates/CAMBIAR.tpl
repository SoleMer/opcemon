{include 'templates/header.tpl'}
<div class="container">
  <div class="col-md-10 offset-md-1">
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">DNI</th>
      <th scope="col">e-mail</th>
      <th scope="col">Localidad</th>
      <th scope="col">Comision</th>
      <th scope="col">Permisos de administrador</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=users item=user}
    <tr>
        <th scope="row">{$user->id}</th>
        <td>{$user->name}</td>
        <td>{$user->lastname}</td>
        <td>{$user->date}</td>
        <td>{$user->DNI}</td>
        <td>{$user->email}</td>
        <td>{$user->city}</td>
        {if $user->commission == null}
          <td>
            <label for="listCommission">Asignar comision</label>
              <select name="listCommission">
	              {foreach from=$commissions item=$commission}
	                <option value='{$commission->id}'>{$commission->city}{$commission->number}</option>
	              {/foreach}
              </select>
        {/if}
        {foreach from=$commissions item=$commision}
          {if $commission->id == $user->commission}
              <td>{$commision->city}+{$commission->number}</td>
          {/if}
        {/foreach}
        <td>
            <form action="editPermits">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
            </form>
        </td>
    </tr>
  {/foreach}
  </tbody>
</table>
  
  </div>
</div>
