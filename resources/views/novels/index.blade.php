<x-layout>

    <section class="projectNovels">
        <h2 class="projectNovels-title">Projetos do Site</h2>
        <div class="projectNovels-group">
            @foreach ($novels as $novel)
            
                <a href="/novels/{{ $novel->id }}">
                    <img class="projectNovel-group-image" src="{{ asset('storage/' . $novel->imagem) }}" alt="Ilustração da novel {{ $novel->titulo }}">
                </a>    

            @endforeach
        </div>
    </section>


</x-layout>