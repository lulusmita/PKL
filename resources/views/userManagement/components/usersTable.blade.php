
<div class="relative overflow-x-auto px-2">
    <div class="flex flex-row items-center justify-between md:space-y-0 py-4 bg-white">
        <div>
            <button data-modal-show="tambahUserModal" data-modal-target="tambahUserModal" type="button" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg md:text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                <span class="sr-only">Add User</span>
                Add
                <svg class="w-5 h-5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1c0-.6.4-1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <form action="/users" method="GET">
                <input type="search" name="search" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full md:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
            </form>
        </div>
    </div>
    <div class="hidden md:block shadow-md rounded-3xl">
        <table class="mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Unit Kerja
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($users as $index => $user)
                    {{-- @if ($user->role == 'MSO') --}}
                        <tr class="bg-white dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="whitespace-nowrap w-4 p-4">
                                {{ $index + $users->firstItem() }}
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 object-cover rounded-full" src="images/user/{{ $user->foto }}" alt="{{ $user->foto }}">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $user->name }}</div>
                                    <div class="font-normal text-gray-500">{{ $user->email }}</div>
                                </div>  
                            </th>
                            <td class="whitespace-nowrap px-6 py-4">
                                {{ $user->unit_kerja }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                {{ $user->role }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                @if ($user->status == 'Aktif')
                                <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                    <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                    {{ $user->status }}
                                </span>
                                @else
                                <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                    <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                    {{ $user->status }}
                                </span>
                                @endif
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button data-modal-target="editUserModal{{ $user->id }}" data-modal-show="editUserModal{{ $user->id }}"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                                    <svg class="w-5 h-5 text-putih dark:text-whitee" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                    </svg>                                
                                    <span class="sr-only">Edit User</span>
                                </button>
                                <button data-modal-target="deleteModal{{ $user->id }}" data-modal-show="deleteModal{{ $user->id }}" type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                    <svg class="w-5 h-5 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="sr-only">Delete User</span>
                                </button>
                            </td>
                        </tr>
                    {{-- @endif --}}
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Tampilan mobile --}}
    @foreach ($users as $index => $user)
    <div class="grid grid-cols-1 gap-4 md:hidden data-modal-target="editUserModal{{ $user->id }}" data-modal-show="editUserModal{{ $user->id }}"">
        <div class="bg-white mb-3 p-4 rounded-lg shadow">
            <div class="flex flex-wrap items-center space-x-2 text-sm">
                <div class="flex items-center" >
                    <img class="w-10 h-10 object-cover rounded-full" src="images/user/{{ $user->foto }}" alt="{{ $user->foto }}">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{ $user->name }}</div>
                        <div class="font-normal text-gray-500">{{ $user->email }}</div>
                        <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                            {{ $user->unit_kerja }}
                        </span>
                        <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                            {{ $user->role }}
                        </span>
                        @if ($user->status == 'Aktif')
                        <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                            {{ $user->status }}
                        </span>
                        @else
                        <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                            <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                            {{ $user->status }}
                        </span>
                        @endif
                    </div> 
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    @include('userManagement.components.modalUser')

    

</div>

