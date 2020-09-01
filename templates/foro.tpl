<div cass="row">
    <div class="col-md-10">
        {if $questions}
            <h3>Temas de discusion</h3>
            {foreach from=questions item=question}
                <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                    <div class="card-body">
                        <a href="{$baseURL}question/{$question->id}">
                            <h2 class="card-title">{$question->affair}</h2>
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
    <div class="col-md-8 offset-md-2">
        <h3>Agregar un nuevo tema de discusion</h3>
        <form action="newQuestion/{$archive->id}{$user->id}" method="POST">
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" name="asunto">
                <label for="message">Mensaje</label>
                <input type="textarea" name="message">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>