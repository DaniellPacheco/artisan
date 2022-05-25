<x-layout>
    <form action="" method="POST" class="form-base">
        <h1 class="form-base-title">
            <i class="fa-solid fa-pencil" style="padding-right: 20px"></i> ADICIONAR NOVEL
        </h1>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="title">Título Novel</label>
            <input class="form-base-fieldset-input" type="text" name="title">
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="title">Título Capítulo</label>
            <input class="form-base-fieldset-input" type="text" name="title">
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="title">Número Capítulo</label>
            <input class="form-base-fieldset-input" type="text" name="autor">
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="title">Conteúdo Capítulo</label>
            <textarea class="form-base-fieldset-input" name="sinopse" cols="30" rows="10"></textarea>
        </fieldset>
        <button class="form-base-button" type="submit">Adicionar</button>
    </form>
</x-layout>