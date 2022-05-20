<x-app-layout>
    <div class="container">
        <table class="shadow-lg bg-white border-collapse">
            <tr>
                <th class="bg-blue-100 border text-left px-8 py-4">Player Name</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Team Name</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Age</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Jersey Number</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Position</th>
                <th class="bg-blue-100 border text-left px-8 py-4">3pts (%)</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Total 3pts</th>
            </tr>
            @foreach($playerStats as $playerStat)
            <tr>
                <td class="border px-8 py-4">{{$playerStat->player_name }}</td>
                <td class="border px-8 py-4">{{ $playerStat->team_name }}</td>
                <td class="border px-8 py-4">{{ $playerStat->age }}</td>
                <td class="border px-8 py-4">{{ $playerStat->player_number }}</td>
                <td class="border px-8 py-4">{{ $playerStat->position }}</td>
                <td class="border px-8 py-4">{{ $playerStat->three_pts_percent }}</td>
                <td class="border px-8 py-4">{{ $playerStat->three_pts_total }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="mt-5">
        {{ $playerStats->links() }}
    </div>
</x-app-layout>