{include 'templates/header.tpl'}
<div class="container">
  <div class="col-md-10 offset-md-1 principal">
    {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
    {else}
        {if isset($commission) && ($commission == COMISIONES HABILITADAS) || ($permits == true)}
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Título</h5>
                    <a href="#" class="btn btn-primary">Leer</a>
                </div>
            </div>
        {/if}
    {/if}
  
  </div>
</div>
