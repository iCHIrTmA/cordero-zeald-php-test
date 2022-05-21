<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <table class="shadow-lg bg-white border-collapse">
                <tr>
                    <th class="bg-blue-200 border text-left px-8 py-4">Player Name</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Team Name</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Age</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Jersey Number</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Position</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">3pts (%)</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Total 3pts</th>
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

        <div class="flex justify-around mt-5">
            <div>
                <a
                    href="{{ route('player.stats.export.csv') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                        focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2
                        dark:bg-blue-600 dark:hover:bg-blue-700
                        focus:outline-none dark:focus:ring-blue-800">
                    Export to CSV
                </a>
            </div>
            <div>
                {{ $playerStats->links() }}
            </div>
        </div>
    </div>
</x-app-layout>