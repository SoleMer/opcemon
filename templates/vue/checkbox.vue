{literal} 
<section id="comments">
    <div v-if="loading">
        <div class="spinner-border text-success" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    </div>

    <div v-if="!loading" >
        <div v-if="!error">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <input type="checkbox" aria-label="Comisiones que pueden ver este material:">
                    <div v-for="commission in allCommissions" class="input-group-text">
                        <input v-on:click="save(commission.id)" type="text" class="form-control" aria-label={{$commission.city}{$commission.number}}>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div v-if="error">
        <h3>Error al cargar las comisiones.</h3>
    </div>
</section>
{/literal}
