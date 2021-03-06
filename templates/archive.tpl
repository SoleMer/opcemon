{include 'templates/header.tpl'}
<div class="container">
    <div class="row">
        {if $archive}
            <div class="col-md-8">
                <h1>{$archive->title}</h1>
                {if $archive->archive != null}
                    <embed src="{$archive->archive}" type="application/pdf" width="800" height="600">
                {/if}
                {if $archive->link != null}
                    <a href="{$archive->link}">{$archive->link}</a>
                {/if}
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
    <div name="foro"> 
        {include 'templates/foro.tpl'}
    </div>
</div>