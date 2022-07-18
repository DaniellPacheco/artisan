<x-layout>
    <section class="show-banner">

        <div class="show-banner-img">

            <img src="{{ asset('storage/'.$novel->imagem) }}" alt="Arte da novel: {{ $novel->titulo }}">
            
        </div>

        <div class="show-novelInfo">
            
            <div class="show-novelInfo-addons">

                <h2 class="show-novelInfo-title">
                    {{ $novel->titulo }}
                </h2>

                <form action="post">
                    @csrf
                    <button class="show-buttonList-favorite" type="submit"><i class="fa-regular fa-heart"></i></button>
                    {{-- <i class="fa-solid fa-heart"></i> cheio --}}
                </form>

            </div>
            <span class="button-{{ $novel->nacionalidade }}">{{ $novel->nacionalidade }}</span>
            <span class="show-novelInfo-author"><strong>Autor:</strong> {{ $novel->autor }}</span>
            
            <h4 class="show-novelInfo-h4">Sinopse:</h4>
            <p class="show-novelInfo-description">
                {{ $novel->sinopse }}
            </p>

            <a class="show-buttonList-firstChapter" href="/novels/{{ $novel->id }}/chapter/1">Primeiro Capítulo</a>

        </div>

    </section>

    <section class="atualization">
        <table class="atualization-table">
            <thead class="atualization-table-thead">
                <tr class="atualization-table-thead-tr">
                    <th class="atualization-table-thead-tr-title">Capítulo</th>
                    <th class="atualization-table-thead-tr-title">Atualização</th>
                </tr>
            </thead>
            <tbody class="atualization-table-tbody">
                @foreach ($chapters as $chapter)
                <tr class="atualization-table-tbody-tr">
                    <td class="atualization-table-tbody-tr-text">
                        <a href="/novels/{{ $chapter->novel_id }}/chapters/{{ $chapter->capitulo }}">Capítulo: {{ $chapter->capitulo . " ". $chapter->titulo_capitulo }}</a>
                    </td>
                    <td class="atualization-table-tbody-tr-text">{{ $novel->created_at->format('d-m-Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="spotlight">
        <h2 class="spotlight-title">Novels Parecidas</h2>
        <div class="spotlight-group">
            @foreach ($spotlights as $spotlight)
            
            <a href="/novels/{{ $spotlight->id }}">
                <img class="spotlight-group-image" src="{{ asset('storage/' . $spotlight->imagem) }}" alt="Ilustração da novel {{ $spotlight->titulo }}">
            </a>    

        @endforeach
        </div>






</x-layout>