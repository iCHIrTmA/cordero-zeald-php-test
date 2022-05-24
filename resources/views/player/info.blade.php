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

            <div class="m-3">
                <button
                    id="dropdownDefault"
                    data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-500 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                        Export
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="{{ route('player.info.export.csv') }}" class="block px-4 py-2 hover:bg-blue-400 dark:hover:bg-blue-600 dark:hover:text-white">CSV</a>
                        </li>
                        <li>
                            <a href="{{ route('player.info.export.json') }}" class="block px-4 py-2 hover:bg-blue-400 dark:hover:bg-blue-600 dark:hover:text-white">JSON</a>
                        </li>
                        <li>
                            <a href="{{ route('player.info.export.csv') }}" class="block px-4 py-2 hover:bg-blue-400 dark:hover:bg-blue-600 dark:hover:text-white">CSV</a>
                        </li>
                        <li>
                            <a href="{{ route('player.stats.export.json') }}" class="block px-4 py-2 hover:bg-blue-400 dark:hover:bg-blue-600 dark:hover:text-white">JSON</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="flex mt-5">
            <div>
                {{ $players->links() }}
            </div>
        </div>
    </div>
</x-app-layout>