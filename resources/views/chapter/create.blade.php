<x-layout>
    <form action="/novels/chapters" method="POST" class="form-base" enctype="multipart/form-data">
        @csrf
        <h1 class="form-base-title">
            <i class="fa-solid fa-pencil" style="padding-right: 20px"></i> ADICIONAR NOVEL
        </h1>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="novel_id">Novel</label>
            <select name="novel_id" class="form-base-fieldset-input">
                @foreach ($novels as $novel)
                    <option value="{{ $novel->id }}">{{ $novel->titulo }}</option>
                @endforeach
            </select>
            @error('novel_id')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="titulo">Título Capítulo</label>
            <input class="form-base-fieldset-input" type="text" name="titulo" value="{{ old('titulo') }}">
            @error('titulo')
                <p class="error-message">{{ $message }}</p> 
             @enderror
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="capitulo">Número Capítulo</label>
            <input class="form-base-fieldset-input" type="text" name="capitulo" value="{{ old('capitulo') }}">
            @error('capitulo')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <fieldset class="form-base-fieldset">
            <label class="form-base-fieldset-label" for="conteudo">Conteúdo Capítulo</label>
            <textarea class="form-base-fieldset-input" name="conteudo" cols="30" rows="10">{{ old('conteudo') }}</textarea>
            @error('capitulo')
                <p class="error-message">{{ $message }}</p> 
            @enderror
        </fieldset>
        <button class="form-base-button" type="submit">Adicionar</button>
    </form>
</x-layout>