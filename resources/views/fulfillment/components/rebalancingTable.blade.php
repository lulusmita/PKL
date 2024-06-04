@php
    $hideColumn = isset($hideColumn) && $hideColumn;
@endphp

<table class="hidden md:table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-md rounded-2xl">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                NO
            </th>
            <th scope="col" class="px-6 py-3">
                ID Tiara
            </th>
            <th scope="col" class="px-6 py-3">
                Site ID
            </th>
            <th scope="col" class="px-6 py-3">
                Site Name
            </th>
            <th scope="col" class="px-6 py-3">
                Rebalancing Date
            </th>
            <th scope="col" class="px-6 py-3">
                Keterangan
            </th>
            <th scope="col" class="px-6 py-3">
                STATUS
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
            
        </tr>
    </thead>
    <tbody>
        @php
        $no=1;
        @endphp
        @foreach ($dataRebalancing as $index => $row)
            {{-- @if ($user->role == 'MSO') --}}
                <tr class="bg-white dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 p-4">
                        {{ $index + $dataRebalancing->firstItem() }}
                    </td>
                    <td class="px-6 p-4">
                        {{ $row->newLinkFulfillment->ID_Tiara_Enom }}
                    </td>
                    <td class="px-6 p-4">
                        {{ $row->Site_ID }}
                    </td>
                    <td class="px-6 p-4">
                        {{ $row->newLinkFulfillment->SITE_NAME }}
                    </td>
                    <td class="px-6 py-4">
                        {{ \Carbon\Carbon::parse($row->Tgl_Rebalancing)->format('d-m-Y') }}
                    </td>
                    <td class="px-6 p-4">
                        {{ $row->Ket }}
                    </td>
                    <td class="px-6 py-4">
                        @if ($row->Status == 'Pending')
                        <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                            <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                            {{ $row->Status }}
                        </span>
                        @else
                        <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                            {{ $row->Status }}
                        </span>
                        @endif
                    </td>
                    @unless($hideColumn)
                    <td class="flex gap-2 px-6 py-4">
                        <button data-modal-target="updateRebalancing{{ $row->Rebalancing_ID }}" data-modal-show="updateRebalancing{{ $row->Rebalancing_ID }}"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                            <svg class="w-5 h-5 text-putih dark:text-whitee" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                            </svg>                                
                            <span class="sr-only">Edit Rebalancing</span>
                        </button>
                        <button data-modal-target="deleteRebalancing{{ $row->Rebalancing_ID }}" data-modal-toggle="deleteRebalancing{{ $row->Rebalancing_ID}}" type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                            <svg class="w-5 h-5 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Delete Rebalancing</span>
                        </button>
                    </td>
                    @endunless
                </tr>
            {{-- @endif --}}
        @endforeach
    </tbody>
</table>


{{-- Tampilan mobile --}}
@foreach ($dataRebalancing as $index => $row)
<div class="grid grid-cols-1 gap-4 md:hidden" data-modal-target="updateRebalancing{{ $row->Rebalancing_ID }}" data-modal-show="updateRebalancing{{ $row->Rebalancing_ID }}">
    <div class="bg-white mb-3 p-4 rounded-lg shadow">
        <div class="flex flex-wrap items-center space-x-2 text-sm">
            <div class="flex items-center">
                <div class="ps-3">
                    <div class="text-base font-semibold">{{ $row->newLinkFulfillment->ID_Tiara_Enom }}</div>
                    <div class="font-normal text-gray-500 mb-1">{{ $row->Site_ID }} | {{ $row->newLinkFulfillment->SITE_NAME }}</div>
                    <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                        {{ \Carbon\Carbon::parse($row->Tgl_Rebalancing)->format('d-m-Y') }}
                    </span>
                    <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                        {{ $row->Ket }}
                    </span>
                    @if ( $row->Status == 'Pending')
                    <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                        <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                        {{ $row->Status }}
                    </span>
                    @else
                    <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                        <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                        {{ $row->Status }}
                    </span>
                    @endif
                </div> 
            </div>
        </div>
    </div>
</div>
@endforeach

