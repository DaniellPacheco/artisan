<x-layout>
    <a href="/novels/chapters/create" class="default-button">Adicionar Capítulo</a>
    <a href="/admin/" class="default-button">Voltar</a>
    <section class="atualization">
        <table class="atualization-table">
            <thead class="atualization-table-thead">
                <tr class="atualization-table-thead-tr">
                    <th class="atualization-table-thead-tr-title">Capítulo</th>
                    <th class="atualization-table-thead-tr-title">Novel</th>
                    <th class="atualization-table-thead-tr-title">Autor</th>
                    <th class="atualization-table-thead-tr-title" style="text-align: center">Editar</th>
                    <th class="atualization-table-thead-tr-title" style="text-align: center">Deletar</th>
                </tr>
            </thead>
            <tbody class="atualization-table-tbody">
                @foreach ($chapters as $chapter)
                <tr class="atualization-table-tbody-tr">
                    <td class="atualization-table-tbody-tr-text">
                        <a href="/novels/{{ $chapter->id }}">{{ $chapter->titulo_capitulo }}</a>
                    </td>
                    <td class="atualization-table-tbody-tr-text">
                        {{ $chapter->titulo }}
                    </td>
                    <td class="atualization-table-tbody-tr-text">
                        {{ $chapter->created_at->format('d-m-Y') }}
                    </td>
                    <td style="text-align: center"">
                        <a href="/novels/{{ $chapter->id }}/edit" class="default-color-button"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td style="text-align: center">
                        <form method="POST" action="/novels/{{ $chapter->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="default-color-button" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>
