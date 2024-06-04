<div class="relative overflow-x-auto sm:rounded-lg">
    <div class="flex flex-row items-center justify-between md:space-y-0 py-4 bg-white">
        <div>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative flex flex-col w-full xl:w-auto">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <form action="/dashboard" method="GET">
                <input type="search" name="search" id="table-search-users" class="block pt-2 ps-10 text-sm h-9 text-gray-900 border border-gray-300 rounded-lg w-full xl:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Id Tiara Enom">
            </form>
        </div>
    </div>
    <div class="relative  overflow-x-scroll md:overflow-x-hidden shadow-md sm:rounded-lg">
        <table class="hidden md:table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-md rounded-2xl">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        NO
                    </th>
                    <th scope="col" class="p-4">
                        Ticket ID
                    </th>
                    <th scope="col" class="p-4">
                        Witel
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Open Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        MTTR
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sites
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Root Cause
                    </th>               
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($tikets as $index=>$tiket)
                        <tr class="bg-white dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 p-4">
                                {{ $index + $tikets->firstItem() }}
                            </td>
                            <td class="px-6 p-4">
                                {{ $tiket->tiket_id }}
                            </td>
                            <td class="px-6 p-4">
                                {{ $tiket->report->witel }}
                            </td>
                            <td class="px-6 p-4">
                                {{ $tiket->tgl_open }}
                            </td>
                            <td class="px-6 p-4">
                                {{ $tiket->mttr }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $tiket->jml_site }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $tiket->root_cause }}
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Tampilan mobile --}}
        @foreach ($tikets as $index=>$tiket)
        <div class="grid grid-cols-1 gap-4 md:hidden" >
            <div class="bg-white mb-3 p-4 rounded-lg shadow">
                <div class="flex flex-wrap items-center space-x-2 text-sm">
                    <div class="flex items-center">
                        <div class="ps-3">
                            <div class="text-base font-semibold">{{ $tiket->tiket_id }}</div>
                            <div class="font-normal text-gray-500 mb-1">{{ $tiket->root_cause  }}</div>
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                
                                {{ $tiket->report->witel }}
                            </span>
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                Number of Sites : {{ $tiket->jml_site }}
                            </span>
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <svg class="w-2 h-2 me-1  bg-putih text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 8v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0Zm12 7h-1v1a1 1 0 0 1-2 0v-1H8a1 1 0 0 1 0-2h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 0 1 0 2Z"/>
                                  </svg>
                                  
                                {{ $tiket->tgl_open }}
                            </span>
                       
                            <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                    <svg class="w-2 h-2 me-1  bg-putih text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    {{ $tiket->mttr }} {{ $tiket->mttr <= 1 ? 'hour' : 'hours' }}
                            </span>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

