    <!-- Tambah New Link modal -->
    <div id="tambahNewLinkModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-6xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" action="/insertNewLink" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add New Link
                    </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tambahNewLinkModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-12 md:grid-cols-10 gap-3">

                        <div class="col-span-8 md:col-span-3">
                            <label for="Nd_Nim_No" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nd Nim No</label>
                            <input type="text" name="Nd_Nim_No" id="Nd_Nim_No" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-4 md:col-span-2">
                            <label for="ID_Tiara_Enom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Tiara Enom</label>
                            <input type="number" name="ID_Tiara_Enom" id="ID_Tiara_Enom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-8 md:col-span-3">
                            <label for="SITE_NAME" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site Name</label>
                            <input type="text" name="SITE_NAME" id="SITE_NAME" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <label for="Site_ID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site ID</label>
                            <input type="text" name="Site_ID" id="Site_ID" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-4 sm:col-span-1">
                            <label for="Jumlah_NE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of NE</label>
                            <input type="number" name="Jumlah_NE" id="Jumlah_NE" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-3 sm:col-span-1">
                            <label for="BW_Order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bandwitch</label>
                            <input type="number" name="BW_Order" id="BW_Order" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-5 sm:col-span-2">
                            <label for="witel_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Witel</label>
                            <select id="witel_id" name="witel_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Semarang</option>
                                <option value="2">Yogyakarta</option>
                                <option value="3">Solo</option>
                                <option value="4">Pekalongan</option>
                                <option value="5">Purwokerto</option>
                                <option value="6">Kudus</option>
                                <option value="7">Magelang</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-1">
                            <label for="Main_Program" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program</label>
                            <select id="Main_Program" name="Main_Program" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="FIRO">FIRO</option>
                                <option value="FIMO">FIMO</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-1">
                            <label for="Order_Batch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order Batch</label>
                            <select id="Order_Batch" name="Order_Batch" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @php
                                $currentYear = date('Y');
                                @endphp

                                @for ($year = $currentYear; $year >= ($currentYear - 2); $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="Start_Target_Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Target Date</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input datepicker datepicker-format="dd-mm-yyyy" type="text" name="Start_Target_Date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="Target_Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target Date</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input datepicker datepicker-format="dd-mm-yyyy" type="text" name="Target_Date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-10">  
                            <label for="Detail_Program" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Program</label>
                            <textarea id="Detail_Program" name="Detail_Program" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi detail program..."></textarea>
                        </div>
                        <div class="col-span-12 md:col-span-10">
                            <label for="KET" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <input type="text" name="KET" id="KET" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Data</button>
                </div>
            </form>
        </div>
    </div>

    @foreach ($dataNewLinks as $row)
    <!-- Edit New Link modal -->
    <div id="updateNewLink{{ $row->Uniq_No }}" tabindex="-1" aria-hidden="true" class="fixed hidden top-0 left-0 right-0 z-50 items-center justify-center  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-6xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" action="/updateNewLink/{{ $row->Uniq_No }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Update New Link
                    </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="updateNewLink{{ $row->Uniq_No }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-12 md:grid-cols-10 gap-3">
                        <div class="col-span-8 md:col-span-3">
                            <label for="Nd_Nim_No" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nd Nim No</label>
                            <input value="{{ $row->Nd_Nim_No }}" type="text" name="Nd_Nim_No" id="Nd_Nim_No" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <label for="Site_ID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site ID</label>
                            <input value="{{ $row->Site_ID }}" type="text" name="Site_ID" id="Site_ID" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-7 md:col-span-3">
                            <label for="SITE_NAME" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site Name</label>
                            <input value="{{ $row->SITE_NAME }}" type="text" name="SITE_NAME" id="SITE_NAME" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-5 md:col-span-2">
                            <label for="ID_Tiara_Enom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Tiara Enom</label>
                            <input value="{{ $row->ID_Tiara_Enom }}" type="number" name="ID_Tiara_Enom" id="ID_Tiara_Enom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-4 sm:col-span-1">
                            <label for="Jumlah_NE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah NE</label>
                            <input value="{{ $row->Jumlah_NE }}" type="number" name="Jumlah_NE" id="Jumlah_NE" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-3 sm:col-span-1">
                            <label for="BW_Order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bandwitch</label>
                            <input value="{{ $row->BW_Order }}" type="number" name="BW_Order" id="BW_Order" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div class="col-span-5 sm:col-span-2">
                            <label for="witel_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Witel</label>
                            <select id="witel_id" name="witel_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="{{ $row->witel_id }}" selected>{{ $row->witel->witel }}</option>
                                <option value="1">Semarang</option>
                                <option value="2">Yogyakarta</option>
                                <option value="3">Solo</option>
                                <option value="4">Pekalongan</option>
                                <option value="5">Purwokerto</option>
                                <option value="6">Kudus</option>
                                <option value="7">Magelang</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-1">
                            <label for="Main_Program" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main Program</label>
                            <select id="Main_Program" name="Main_Program" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>{{ $row->Main_Program }}</option>
                                <option value="FIRO">FIRO</option>
                                <option value="FIMO">FIMO</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-1">
                            <label for="Order_Batch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order Batch</label>
                            <select id="Order_Batch" name="Order_Batch" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @php
                                $currentYear = date('Y');
                                @endphp
                                <option selected>{{ $row->Order_Batch }}</option>

                                @for ($year = $currentYear; $year >= ($currentYear - 2); $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="Start_Target_Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Target Date</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input value="{{ \Carbon\Carbon::parse($row->Start_Target_Date)->format('d-m-Y') }}" datepicker datepicker-format="dd-mm-yyyy" type="text" name="Start_Target_Date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="Target_Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target Date</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input value="{{ \Carbon\Carbon::parse($row->Target_Date)->format('d-m-Y') }}" datepicker datepicker-format="dd-mm-yyyy" type="text" name="Target_Date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-10">  
                            <label for="Detail_Program" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Program</label>
                            <textarea id="Detail_Program" name="Detail_Program" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi detail program...">{{ $row->Detail_Program }}</textarea>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <label for="Status_Final" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Final</label>
                            <select id="Status_Final" name="Status_Final" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>{{ $row->Status_Final }}</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                            </select>
                        </div>
                        <div class="col-span-8 md:col-span-8">
                            <label for="KET" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <input value="{{ $row->KET }}" type="text" name="KET" id="KET" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Data</button>
                    <button data-modal-hide="updateNewLink{{ $row->Uniq_No }}" data-modal-target="congirutationNewLink{{ $row->Uniq_No }}" data-modal-show="congirutationNewLink{{ $row->Uniq_No }}"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                        <svg class="w-5 h-5 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M10.8 5a3 3 0 0 0-5.6 0H4a1 1 0 1 0 0 2h1.2a3 3 0 0 0 5.6 0H20a1 1 0 1 0 0-2h-9.2ZM4 11h9.2a3 3 0 0 1 5.6 0H20a1 1 0 1 1 0 2h-1.2a3 3 0 0 1-5.6 0H4a1 1 0 1 1 0-2Zm1.2 6H4a1 1 0 1 0 0 2h1.2a3 3 0 0 0 5.6 0H20a1 1 0 1 0 0-2h-9.2a3 3 0 0 0-5.6 0Z"/>
                        </svg>                          
                        <span class="sr-only">Konfigurasi</span>
                    </button>
                    <button data-modal-hide="updateNewLink{{ $row->Uniq_No }}" data-modal-target="deleteNewLink{{ $row->Uniq_No }}" data-modal-toggle="deleteNewLink{{ $row->Uniq_No }}" type="button" class="md:hidden bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                        <svg class="w-5 h-5 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Delete User</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endforeach

    @foreach ($dataNewLinks as $row)
    <!-- Tampil New Link modal -->
    <div id="tampilNewLink{{ $row->Uniq_No }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-6xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" action="/updateNewLink/{{ $row->Uniq_No }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Detail New Link
                    </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tampilNewLink{{ $row->Uniq_No }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-10 gap-3">
                        <div class="col-span-6 md:col-span-3">
                            <label for="Nd_Nim_No" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nd Nim No</label>
                            <input value="{{ $row->Nd_Nim_No }}" type="text" name="Nd_Nim_No" id="Nd_Nim_No" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1701/TC.01/VS-01/XI/2023" disabled>
                        </div>
                        <div class="col-span-6 md:col-span-2">
                            <label for="ID_Tiara_Enom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Tiara Enom</label>
                            <input value="{{ $row->ID_Tiara_Enom }}" type="number" name="ID_Tiara_Enom" id="ID_Tiara_Enom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" disabled>
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <label for="SITE_NAME" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site Name</label>
                            <input value="{{ $row->SITE_NAME }}" type="text" name="SITE_NAME" id="SITE_NAME" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" disabled>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="Site_ID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site ID</label>
                            <input value="{{ $row->Site_ID }}" type="text" name="Site_ID" id="Site_ID" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" disabled>
                        </div>
                        <div class="col-span-6 sm:col-span-1">
                            <label for="Jumlah_NE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah NE</label>
                            <input value="{{ $row->Jumlah_NE }}" type="number" name="Jumlah_NE" id="Jumlah_NE" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" disabled>
                        </div>
                        <div class="col-span-6 sm:col-span-1">
                            <label for="BW_Order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bandwitch</label>
                            <input value="{{ $row->BW_Order }}" type="number" name="BW_Order" id="BW_Order" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" disabled>
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="witel_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Witel</label>
                            <select disabled id="witel_id" name="witel_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="{{ $row->witel_id }}" selected>{{ $row->witel->witel }}</option>
                                <option value="1">Semarang</option>
                                <option value="2">Yogyakarta</option>
                                <option value="3">Solo</option>
                                <option value="4">Pekalongan</option>
                                <option value="5">Purwokerto</option>
                                <option value="6">Kudus</option>
                                <option value="7">Magelang</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="Main_Program" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main Program</label>
                            <select disabled id="Main_Program" name="Main_Program" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>{{ $row->Main_Program }}</option>
                                <option value="FIRO">FIRO</option>
                                <option value="FIMO">FIMO</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="Order_Batch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order Batch</label>
                            <select disabled id="Order_Batch" name="Order_Batch" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @php
                                $currentYear = date('Y');
                                @endphp
                                <option selected>{{ $row->Order_Batch }}</option>

                                @for ($year = $currentYear; $year >= ($currentYear - 2); $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="Start_Target_Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Target Date</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input disabled value="{{ $row->Start_Target_Date }}" datepicker datepicker-format="dd-mm-yyyy" type="text" name="Start_Target_Date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="Target_Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target Date</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input disabled value="{{ $row->Target_Date}}" datepicker datepicker-format="dd-mm-yyyy" type="text" name="Target_Date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-10">  
                            <label for="Detail_Program" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Program</label>
                            <textarea disabled id="Detail_Program" name="Detail_Program" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi detail program...">{{ $row->Detail_Program }}</textarea>
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="Status_Final" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Final</label>
                            <select disabled id="Status_Final" name="Status_Final" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>{{ $row->Status_Final }}</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                            </select>
                        </div>
                        <div class="col-span-6 md:col-span-8">
                            <label for="KET" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <input disabled value="{{ $row->KET }}" type="text" name="KET" id="KET" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach

    @foreach ($dataNewLinks as $row)
    <div id="deleteNewLink{{ $row->Uniq_No }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteNewLink{{ $row->Uniq_No }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="merah" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-merah w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kamu yakin untuk menghapus progress new link dengan ID Tiara <span class="text-merah">{{ $row->ID_Tiara_Enom }}</span>?</h3>
                    <a href="/deleteNewlink/{{ $row->Uniq_No }}" data-modal-hide="deleteNewLink{{ $row->Uniq_No }}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Ya
                    </a>
                    <button data-modal-hide="deleteNewLink{{ $row->Uniq_No }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach ($dataKonfigurasi as $konfigurasi)
    <!-- Konfigurasi New Link modal -->
    <div id="congirutationNewLink{{ $konfigurasi->Configuration_ID  }}" tabindex="-1" aria-hidden="true" class="fixed hidden top-0 left-0 right-0 z-50 items-center justify-center  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-6xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" action="/configurationlink/{{ $konfigurasi->Configuration_ID }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Konfigurasi New Link {{ $konfigurasi->site_id }}
                    </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="congirutationNewLink{{ $konfigurasi->Configuration_ID }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-12 md:grid-cols-10 gap-3">
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">[IDX] [DIRECT GPON (ONT) 4G/LTE]</label>
                        </div>
                        <div class="col-span-4 md:col-span-3">
                            <label for="witel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Witel</label>
                            <input value="{{ $konfigurasi->witel }}" type="text" name="witel" id="witel" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-4 md:col-span-2">
                            <label for="base_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base ID</label>
                            <input value="{{ $konfigurasi->base_id }}" type="text" name="base_id" id="base_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <label for="site_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site ID</label>
                            <input value="{{ $konfigurasi->site_id }}" type="text" name="site_id" id="site_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" disabled>
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="site_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Site Name</label>
                            <input value="{{ $konfigurasi->site_name }}" type="text" name="site_name" id="site_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 sm:col-span-1">
                            <label for="mac_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MAC ADDRESS NODEB</label>
                            <input value="{{ $konfigurasi->mac_address }}" type="text" name="mac_address" id="mac_address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 sm:col-span-1">
                            <label for="vlan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VLAN</label>
                            <input value="{{ $konfigurasi->vlan }}" type="text" name="vlan" id="vlan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ALAMAT</label>
                            <input value="{{ $konfigurasi->alamat }}" type="text" name="alamat" id="alamat" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">STO INFO</label>
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label for="sto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">STO</label>
                            <input value="{{ $konfigurasi->sto }}" type="text" name="sto" id="sto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">METRO INFO</label>
                        </div>
                        <div class="col-span-4 sm:col-span-3">
                            <label for="metro_hostname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HOSTNAME</label>
                            <input value="{{ $konfigurasi->metro_hostname }}" type="text" name="metro_hostname" id="metro_hostname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-4 sm:col-span-6">
                            <label for="metro_ip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IP ADDRESS</label>
                            <input value="{{ $konfigurasi->metro_ip }}" type="text" name="metro_ip" id="metro_ip" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-4 sm:col-span-3">
                            <label for="metro_port" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PORT</label>
                            <input value="{{ $konfigurasi->metro_port }}" type="text" name="metro_port" id="metro_port" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label  class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">OLT INFO</label>
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <label for="olt_merk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MERK/TYPE</label>
                            <input value="{{ $konfigurasi->olt_merk }}" type="text" name="olt_merk" id="olt_merk" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-6 md:col-span-2">
                            <label for="olt_hostname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HOSTNAME</label>
                            <input value="{{ $konfigurasi->base_id }}" type="text" name="olt_hostname" id="olt_hostname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-7 sm:col-span-2">
                            <label for="olt_ip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IP ADDRESS</label>
                            <input value="{{ $konfigurasi->olt_ip }}" type="text" name="olt_ip" id="olt_ip" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-5 md:col-span-3">
                            <label for="olt_port_uplink" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PORT UPLINK</label>
                            <input value="{{ $konfigurasi->olt_port_uplink }}" type="text" name="olt_port_uplink" id="olt_port_uplink" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 sm:col-span-1">
                            <label for="olt_port_splitter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PORT SPLITTER</label>
                            <input value="{{ $konfigurasi->olt_port_splitter }}" type="text" name="olt_port_splitter" id="olt_port_splitter" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        {{-- <div class="col-span-3 sm:col-span-1">
                            <label for="BW_Order" class="block mb-2 text-sm font-medium text-gray-900 invisible dark:text-white"></label>
                            <input value="{{ $konfigurasi->base_id }}" type="number" name="BW_Order" id="BW_Order" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div> --}}
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">ONT/L2SWITCH INFO</label>
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <label for="ont_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TYPE</label>
                            <input value="{{ $konfigurasi->ont_type }}" type="text" name="ont_type" id="ont_type" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <label for="ont_serial_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SERIAL NUMBER</label>
                            <input value="{{ $konfigurasi->ont_serial_number }}" type="text" name="ont_serial_number" id="ont_serial_number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label for="ont_ip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IP ADDRESS</label>
                            <input value="{{ $konfigurasi->ont_ip }}" type="text" name="ont_ip" id="ont_ip" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="port_ont" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PORT ONT/L2SWITCH</label>
                            <input value="{{ $konfigurasi->port_ont }}" type="text" name="port_ont" id="port_ont" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">ODP INFO</label>
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="odp_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ODP_NAME</label>
                            <input value="{{ $konfigurasi->odp_name }}" type="text" name="odp_name" id="odp_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="odp_longitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LONGTITUDE</label>
                            <input value="{{ $konfigurasi->odp_longitude }}" type="text" name="odp_longitude" id="odp_longitude" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <label for="odp_latitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LATITUDE</label>
                            <input value="{{ $konfigurasi->odp_latitude }}" type="text" name="odp_latitude" id="odp_latitude" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-4 md:col-span-2">
                            <label for="odp_cap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CAPACITY</label>
                            <input value="{{ $konfigurasi->odp_cap }}" type="number" name="odp_cap" id="odp_cap" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-4 md:col-span-2">
                            <label for="odp_port" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ODP_PORT</label>
                            <input value="{{ $konfigurasi->odp_port }}" type="text" name="odp_port" id="odp_port" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12">
                            <label for="odp_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ODP_ADDRESS</label>
                            <input value="{{ $konfigurasi->odp_address }}" type="text" name="odp_address" id="odp_address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12">
                            <label for="odp_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ODP_DESCRIPTION</label>
                            <input value="{{ $konfigurasi->odp_desc }}" type="text" name="odp_desc" id="odp_desc" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">RNC/BSC [RAN] INFO</label>
                        </div>
                        <div class="col-span-12 md:col-span-12">
                            <label for="rnc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RNC/BSC NAME [RAN ROUTER]</label>
                            <input value="{{ $konfigurasi->rnc }}" type="text" name="rnc" id="rnc" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-12 bg-slate-500 rounded-full flex justify-center">
                            <label class="mx-auto text-center text-sm font-medium text-gray-50 dark:text-white">ADDITIONAL INFO</label>
                        </div>
                        <div class="col-span-12 md:col-span-12">
                            <label for="ket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KETERANGAN</label>
                            <input value="{{ $konfigurasi->ket }}" type="text" name="ket" id="ket" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="user_id " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ORDER INSERTED BY</label>
                            <div class="flex items-center">
                                <img class="w-12 h-12 object-cover rounded-full" src="images/user/{{ $konfigurasi->newLinkFulfillment->user->foto }}" alt="{{ $konfigurasi->newLinkFulfillment->user->foto }}">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $konfigurasi->newLinkFulfillment->user->name }}</div>
                                    <div class="font-normal text-xs text-gray-500">{{ $konfigurasi->newLinkFulfillment->user->unit_kerja }}</div>
                                    <div class="font-normal text-xs text-gray-500">{{ $konfigurasi->newLinkFulfillment->created_at->format('d-m-Y') }} - {{ $konfigurasi->newLinkFulfillment->created_at->diffForHumans() }}</div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="user_id " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CONFIGURATION UPDATED BY</label>
                            <div class="flex items-center">
                                <img class="w-12 h-12 object-cover rounded-full" src="images/user/{{ $konfigurasi->user->foto }}" alt="{{ $konfigurasi->user->foto }}">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $konfigurasi->user->name}}</div>
                                    <div class="font-normal text-xs text-gray-500">{{ $konfigurasi->user->unit_kerja }}</div>
                                    <div class="font-normal text-xs text-gray-500">{{ $konfigurasi->updated_at->format('d-m-Y') }} - {{ $konfigurasi->updated_at->diffForHumans() }}</div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Configuration Data</button>
                    {{-- <button data-modal-hide="congirutationNewLink{{ $konfigurasi->Configuration_ID }} data-modal-target="deleteNewLink{{ $row->Uniq_No }}" data-modal-toggle="deleteNewLink{{ $row->Uniq_No }}" type="button" class="md:hidden bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                        <svg class="w-5 h-5 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Delete User</span>
                    </button> --}}
                </div>
            </form>
        </div>
    </div>
    @endforeach


    
    