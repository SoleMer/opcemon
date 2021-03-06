{include 'templates/header.tpl'}
<div class="container">
    {if $error}    
        {include 'templates/error.tpl'}
    {/if}
    <div class="row">
        <div class="col-md-8">
            {if $material}
                <ul class="list-group">
                    {foreach from=$material item=$archive}
                        <li class="list-group-item list-group-item-secondary">
                            <a href="{$baseURL}archive/{$archive->id}">{$archive->title}</a>
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </div>
        {if $admin == true}
            <div class="col-md-4">
                <form action="addMaterial" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input name='title' type="text" class="form-control" id="title">
                        <input type="file" name="document">
                        <label for="link">Link</label>
                        <input name='link' type="text" class="form-control" id="link">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        {/if}
    </div>
</div>