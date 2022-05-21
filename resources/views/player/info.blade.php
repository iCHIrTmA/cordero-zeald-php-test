<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <table class="shadow-lg bg-white border-collapse">
                <tr>
                    <th class="bg-blue-200 border text-left px-8 py-4">Player Name</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Jersey Number</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Team</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Position</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Height</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Weight</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">DOB</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Nationality</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">Years of Exp</th>
                    <th class="bg-blue-200 border text-left px-8 py-4">College</th>
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
        
        <div class="flex justify-around mt-5">
            <div>
                <a
                    href="{{ route('player.info.export.csv') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                        focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2
                        dark:bg-blue-600 dark:hover:bg-blue-700
                        focus:outline-none dark:focus:ring-blue-800">
                    Export to CSV
                </a>
            </div>
            <div>
                {{ $players->links() }}
            </div>
        </div>
    </div>
</x-app-layout>