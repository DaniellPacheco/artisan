<x-layout>
    <section class="banner">
        <div class="banner-section">
            <h1 class="banner-section-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem.</h1>
            <a class="default-button" href="/">Ação</a>
        </div>
        <img class="banner-image" src="{{ asset('images/imagem_principal.svg') }}" alt="Imagem ilustrativa de uma pessoa lendo.">
    </section>

    <section class="spotlight">
        <h2 class="spotlight-title">Destaques</h2>
        <div class="spotlight-group">
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
            <a href="/"><img class="spotlight-group-image" src="{{ asset('images/al.jpg') }}" alt="novel"></a>
        </div>
    </section>
    <section class="atualization">
        <table class="atualization-table">
            <thead class="atualization-table-thead">
                <tr class="atualization-table-thead-tr">
                    <th class="atualization-table-thead-tr-title">Capítulo</th>
                    <th class="atualization-table-thead-tr-title">Novel</th>
                    <th class="atualization-table-thead-tr-title">Autor</th>
                    <th class="atualization-table-thead-tr-title">Atualização</th>
                </tr>
            </thead>
            <tbody class="atualization-table-tbody">
                @foreach ($novels as $novel)
                <tr class="atualization-table-tbody-tr">
                    <td class="atualization-table-tbody-tr-text">
                        <a href="/">{{ $novel->titulo }}</a>
                    </td>
                    <td class="atualization-table-tbody-tr-text">
                        <a href="/novels/{{ $novel->id }}"> {{ $novel->titulo }}</a>
                    </td>
                    <td class="atualization-table-tbody-tr-text">
                        <a href="/">{{ $novel->autor }}</a>
                    </td>
                    <td class="atualization-table-tbody-tr-text">{{ $novel->created_at->format('d-m-Y'); }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</x-layout>