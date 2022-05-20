<x-app-layout>
    <div class="container">
        <table class="shadow-lg bg-white border-collapse">
            <tr>
                <th class="bg-blue-100 border text-left px-8 py-4">Player Name</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Jersey Number</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Team</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Position</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Height</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Weight</th>
                <th class="bg-blue-100 border text-left px-8 py-4">DOB</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Nationality</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Years of Exp</th>
                <th class="bg-blue-100 border text-left px-8 py-4">College</th>
            </tr>
            @foreach($players as $player)
            <tr>
                <td class="border px-8 py-4">{{$player->name }}</td>
                <td class="border px-8 py-4">{{ $player->number }}</td>
                <td class="border px-8 py-4">{{ $player->team_code }}</td>
                <td class="border px-8 py-4">{{ $player->pos }}</td>
                <td class="border px-8 py-4">{{ $player->height }}</td>
                <td class="border px-8 py-4">{{ $player->weight }}</td>
                <td class="border px-8 py-4">{{ $player->dob }}</td>
                <td class="border px-8 py-4">{{ $player->nationality }}</td>
                <td class="border px-8 py-4">{{ $player->years_exp }}</td>
                <td class="border px-8 py-4">{{ $player->college }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="mt-5">
        {{ $players->links() }}
    </div>
</x-app-layout>