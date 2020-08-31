{include 'templates/header.tpl'}
<div class="container">
    {if $error}
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    {$error}
                </div>
            </div>
        </div>
    {/if}
    {if $archive}
        <div class="row">
            <div class="col-md-8">
                <h1>{$archive->title}</h1>
                {if $archive->archive != null}
                    {$material->archive}
                {/if}
                {if $archive->link != null}
                    <p>{$archive->link}</p>
                {/if}
            </div>
        </div>
    {/if}
        {if $admin == 1}
            <div class="col-md-4">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Comision</th>
                            <th scope="col">Acceso</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$commissions item=$commission}
                            {$finded=false}
                            <tr>
                                <td>{$commission->city}{$commission->number}</td>
                                {foreach from=$access item=$a}
                                    {if $a->material == $archive->id}
                                        {if $a->commission == $commission->id}
                                            <td><a href="{$baseURL}removeAccess/{$commission->id}/{$archive->id}"><button type="submit" class="btn btn-primary">SI</button></a></td>
                                            {$finded=true}
                                        {/if}
                                    {/if}
                                {/foreach}
                                {if $finded == false}
                                    <td><a href="{$baseURL}giveAccess/{$commission->id}/{$archive->id}"><button type="submit" class="btn btn-primary">NO</button></a></td>
                                {/if}
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        {/if}
    </div>
</div>