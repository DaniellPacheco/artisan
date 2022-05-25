<x-layout>
    <form action="/novels" method="POST" class="form-base" enctype="multipart/form-data">
        @csrf
        <h1 class="form-base-title">
            <i class="fa-solid fa-pencil" style="padding-right: 20px"></i> ADICIONAR NOVEL
        </h1>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="titulo">Título Novel</label>
            <input class="form-base-fieldset-input" type="text" name="titulo">
            @error('titulo')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="autor">Autor</label>
            <input class="form-base-fieldset-input" type="text" name="autor">
            @error('autor')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="tags">Tags - separar tags com ponto e virgula</label>
            <input class="form-base-fieldset-input" type="text" name="tags" placeholder="PHP;LARAVEL;NODEJS">
            @error('tags')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="sinopse">Sinopse</label>
            <textarea class="form-base-fieldset-input" name="sinopse" cols="30" rows="10"></textarea>
            @error('sinopse')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="imagem">Novel Image</label>
            <input class="form-base-fieldset-input-img" type="file" name="imagem">
            @error('imagem')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <button class="form-base-button" type="submit">Adicionar</button>
    </form>
</x-layout>