{include 'templates/header.tpl'}
<div class="container">
    <div class="row"> {*COMENTARIO*}
        <div class="col-md-10">
            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                {foreach from=$users item=$user}
                    {if $user->id == $question->id_user}
                        <div class="card-header">{$user->username}</div> {*NOMBRE DEL USUARIO QUE PREGUNTA*}
                    {/if}
                {/foreach}
                <div class="card-body">
                    <h5 class="card-title">{$question->affair}</h5> {*ASUNTO*}
                    <p class="card-text">{$question->message}</p> {*MENSAJE*}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-2"> {*RESPUESTAS*}
            {foreach from=$replys item=$reply}
                <div class="card text-white bg-secondary mb-3">
                    {foreach from=$users item=$user}
                        {if $user->id == $reply->id_user}
                            <div class="card-header">{$user->username}</div> {*NOMBRE DEL USUARIO QUE RESPONDE*}
                        {/if}
                    {/foreach}
                    <div class="card-body">
                        <p class="card-text">{$reply->messagge}</p> {*RESPUESTA*}
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-1">
        <h3>Agrega una respuesta:</h3>
        <form action="newReply/{$question->id}/{$user_id}" method="POST">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Deja tu comentario"></textarea>
                    <button type=" submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

{*
<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
    <h5 class="card-title">Agrega tu respuesta</h5>
    <form action="newReply/{$question->id}/{$user}" method="POST">
        <textarea class="form-control card-text" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Deja tu respuesta"></textarea>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
*}