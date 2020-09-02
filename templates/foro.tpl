<div cass="row">
    <div class="col-md-10">
        {if $questions}
            <h3>Temas de discusion</h3>   
            {foreach from=$questions item=$question}
                <div class="card little-card text-white bg-dark mb-3" style="max-width: 50rem;">
                    <div class="card-body">
                        <a href="{$baseURL}question/{$question->id}">
                            <h5 class="card-text text-white">{$question->affair}</h5>
                        </a>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="alert alert-primary" role="alert">
                "No hay consultas para este material."
            </div>
        {/if}
    </div>
</div>
<div class="row">
    <div class="col-md-8 offset-md-1">
        <h3>Comienza un nuevo tema de discusion:</h3>
        <form action="newQuestion/{$archive->id}/{$user}" method="POST">
            <div class="for-group">
                <input class="form-control form-control-lg" type="text" name="affair" placeholder="Asunto">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Deja tu comentario"></textarea>
                <button type=" submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>