<div class="container">
    <table>
        <thead>
            <tr>
                <th>Comics</th>
                <th>Universe</th>
                <th>Timeline</th>
                <th>Characters</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td>
                    <a href="/testingshow/{{ $comic['slug'] }}">
                        {{ $comic['name'] }}
                    </a>
                </td>
                <td> {{ $comic['universe']['name'] }} </td>
                <td> {{ $comic['timeline']['name'] }} </td>
                <td>
                    @foreach($comic['characters'] as $character)
                    {{ $character['name'] }}
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>