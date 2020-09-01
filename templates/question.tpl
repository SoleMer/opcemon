{include 'templates/header.tpl'}
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card text-white bg-dark mb-3">
                {foreach from=$users item=$user}
                    {if $user->id == $question->id_user}
                        <div class="card-header">{$user->username}</div>
                    {/if}
                {/foreach}
                <div class="card-body">
                    <h5 class="card-title">{$question->affair}</h5>
                    <p class="card-text">{$question->message}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-2">
            {foreach from=$replys item=$reply}
                <div class="card text-white bg-secondary mb-3">
                    {foreach from=$users item=$user}
                        {if $user->id == $reply->id_user}
                            <div class="card-header">{$user->username}</div>
                        {/if}
                    {/foreach}
                    <div class="card-body">
                        <p class="card-text">{$reply->message}</p>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Agrega tu respuesta</div>
                <div class="card-body">
                    <form action="newReply/{$question->id}{$user->id}" method="POST">
                        <input type="textarea" name="message">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>