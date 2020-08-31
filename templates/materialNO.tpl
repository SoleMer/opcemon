{include 'templates/header.tpl'}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {if $error}
                <div class="alert alert-primary" role="alert">
                    {$error}
                </div>
            {/if}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            {foreach from=$materials item=$material}
                <ul class="list-group">
                    {foreach from=$access item=$a}
                        {if $a->material == $material->id}
                            {if $a->commission == $user->commission}
                                <li class="list-group-item list-group-item-secondary">
                                    <a href="{$baseURL}archive/{$material->id}">{$material->title}</a>
                                </li>
                            {/if}
                        {/if}
                    {/foreach}
                </ul>
            {/foreach}
        </div>
        {if $admin == true}
            <div class="col-md-4">
                <form action="addMaterial" method="POST">
                    <label for="title">Titulo</label>
                    <input name='title' type="text" class="form-control" id="title">
                    <input type="file" name="archive" id="archive">
                    <label for="link">Link</label>
                    <input name='link' type="text" class="form-control" id="link">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        {/if}
    </div>
</div>