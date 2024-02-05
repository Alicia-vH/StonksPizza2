<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Eenheden lijst
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <h1>Eenheden lijst</h1>
            <br>
        </div>
        <a href="{{ route('eenheden.create') }}">Maak een nieuwe eenheid aan</a>

        {{-- Dump the data for debugging --}}


        <table>
            <thead>
            <tr >
                <th>Id</th>

                <th>Eenheid</th>
            </tr>
            </thead>
            <tbody>
            {{-- Loop through units and display --}}
            @foreach ($eenheden as $eenheid)

                <tr>
                    <td>{{ $eenheid->id }}</td>
                    <td>{{ $eenheid->eenhedens}}</td>
                    <td>
                        <a href="{{ route('eenheden.edit', $eenheid->id) }}">Edit</a>
                        <form method="POST" action="{{ route('eenheden.destroy', $eenheid->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Weet je het zeker?')">Verwijder</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</x-nav-layout>
