<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
    @include('components.sidebar')
  
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
           
            <div class="grid grid-cols-2 gap-4 mb-4 lg:grid-cols-6">
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg  dark:bg-gray-800">
                    <div class="p-2 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                            <path d="M18 14H2a2 2 0 0 1-2-2V9.5a1 1 0 0 1 1-1 1.5 1.5 0 0 0 0-3 1 1 0 0 1-1-1V2a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v2.5a1 1 0 0 1-1 1 1.5 1.5 0 0 0 0 3 1 1 0 0 1 1 1V12a2 2 0 0 1-2 2Z"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{  $totalTiket }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Total Tickets</p>
                    </div>
                </div>

                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg dark:bg-gray-800">
                    <div class="p-2 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 7 4 4 4-4M1 1l4 4 4-4"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{ $totalSiteDown }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Site Down</p>
                    </div>
                </div>
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg dark:bg-gray-800">
                    <div class="p-1 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 9a1 1 0 0 0-1 1 6.994 6.994 0 0 1-11.89 5H7a1 1 0 0 0 0-2H2.236a1 1 0 0 0-.585.07c-.019.007-.037.011-.055.018-.018.007-.028.006-.04.014-.028.015-.044.042-.069.06A.984.984 0 0 0 1 14v5a1 1 0 1 0 2 0v-2.32A8.977 8.977 0 0 0 18 10a1 1 0 0 0-1-1ZM2 10a6.994 6.994 0 0 1 11.89-5H11a1 1 0 0 0 0 2h4.768a.992.992 0 0 0 .581-.07c.019-.007.037-.011.055-.018.018-.007.027-.006.04-.014.028-.015.044-.042.07-.06A.985.985 0 0 0 17 6V1a1 1 0 1 0-2 0v2.32A8.977 8.977 0 0 0 0 10a1 1 0 1 0 2 0Z"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{  $totalDistinctSite }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Distinct Site</p>
                    </div>
                </div>
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg dark:bg-gray-800">
                    <div class="p-2 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{  $averageMttr }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">MTTR</p>
                    </div>
                </div>
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg dark:bg-gray-800">
                    <div class="p-2 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 17 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 12v5m5-9v9m5-5v5m5-9v9M1 7l5-6 5 6 5-6"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{ $totalSite }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Site Bill</p>
                    </div>
                </div>
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg dark:bg-gray-800">
                    <div class="p-2 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="m17.351 3.063-8-3a1.009 1.009 0 0 0-.7 0l-8 3A1 1 0 0 0 0 4a19.394 19.394 0 0 0 8.47 15.848 1 1 0 0 0 1.06 0A19.394 19.394 0 0 0 18 4a1 1 0 0 0-.649-.937Zm-3.644 4.644-5 5A1 1 0 0 1 8 13c-.033 0-.065 0-.1-.005a1 1 0 0 1-.733-.44l-2-3a1 1 0 0 1 1.664-1.11l1.323 1.986 4.138-4.138a1 1 0 0 1 1.414 1.414h.001Z"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{ $averageAvailability }}%</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Availability</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 mb-4 mt-6">
                <div class="items-center col-span-2 justify-center rounded bg-merah dark:bg-gray-800 ">
                    <div class="p-2">
                        <div class="bg-gray-50 rounded"> @include('components.clickable_maps_tsel4')</div>
                        <div class="rounded mt-2">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 ">
                                <div class="col-span-2 flex rounded items-center justify-center bg-gray-50">
                                    <div class="p-2 rounded">
                                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                            <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-2">
                                        <p id="witel" class="text-xl font-bold text-hitam dark:text-white">Select Area</p>
                                        <p class="text-sm font-medium text-hitam dark:text-white">WITEL</p>
                                    </div>
                                </div>
                                <div class="flex rounded items-center justify-center bg-gray-50">
                                    <div class="p-2 rounded">
                                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 7 4 4 4-4M1 1l4 4 4-4"/>
                                        </svg>
                                    </div>
                                    <div class="ml-2">
                                        <p id="kolom2" class="text-xl font-bold text-hitam dark:text-white">-</p>
                                        <p class="text-sm font-medium text-hitam dark:text-white">Site down</p>
                                    </div>
                                </div>
                                <div class="flex rounded items-center justify-center bg-gray-50">
                                    <div class="p-2 rounded">
                                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path d="M17 9a1 1 0 0 0-1 1 6.994 6.994 0 0 1-11.89 5H7a1 1 0 0 0 0-2H2.236a1 1 0 0 0-.585.07c-.019.007-.037.011-.055.018-.018.007-.028.006-.04.014-.028.015-.044.042-.069.06A.984.984 0 0 0 1 14v5a1 1 0 1 0 2 0v-2.32A8.977 8.977 0 0 0 18 10a1 1 0 0 0-1-1ZM2 10a6.994 6.994 0 0 1 11.89-5H11a1 1 0 0 0 0 2h4.768a.992.992 0 0 0 .581-.07c.019-.007.037-.011.055-.018.018-.007.027-.006.04-.014.028-.015.044-.042.07-.06A.985.985 0 0 0 17 6V1a1 1 0 1 0-2 0v2.32A8.977 8.977 0 0 0 0 10a1 1 0 1 0 2 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-2">
                                        <p id="kolom3" class="text-xl font-bold text-hitam dark:text-white">-</p>
                                        <p class="text-sm font-medium text-hitam dark:text-white">Distinct Site</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items-center mt-4 lg:mt-0 lg:ml-4 col-span-1 p-2 justify-center rounded bg-merah dark:bg-gray-800 ">
                    <div id="chart" class="bg-gray-50 rounded items-center justify-center">
                        @include('components.chartbar')
                    </div>             
                </div>
            </div>

            <div class=" relative overflow-x-auto px-2 items-center justify-center rounded bg-putih dark:bg-gray-800">
                <div class="grid sm:p-2">
                    <div class="bg-gray-50 rounded h-10 flex items-center justify-center mb-2">
                        <p id="witel" class="text-xl font-bold text-hitam dark:text-white">Highlighted Tickets</p>
                    </div>
                    <div class=" rounded  justify-center h-max">
                        @include('components.alerts')
                        @include('assurance.components.ticket')
                    </div>
                    {{ $tikets->appends(Request::except('page'))->render() }}

                </div> 
            </div>
        </div>
    </div>
   
    <!-- Main modal -->
    <div id="modal-witel" tabindex="-1" aria-hidden="true" class="hidden flex overflow-y-auto overflow-x-hidden fixed inset-0 items-center justify-center">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-stone-300 rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <p id="namaWitel" class="text-lg font-semibold text-gray-900 dark:text-white">
                        Witel Nama
                    </p>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-witel">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                @include('assurance.components.modal_maps')
            </div>
        </div>
    </div> 
</body>
 
@php
$witelDataJson = $witelData->toJson(JSON_HEX_APOS);
@endphp
<script>
const witelData = {!! $witelDataJson !!};

document.querySelectorAll(".allPaths").forEach(e => {
    e.setAttribute('class', `allPaths ${e.id}`);
    e.addEventListener("mouseover", function () {
        const classes = e.className.baseVal.replace(/ /g, '.');

        // Mengambil data SiteDown dan DistSite sesuai dengan ID (witel)
        const witelId = witelIdMap[e.id];
        const witelDataItem = witelData.find(item => item.witel_id === witelId);

        document.querySelectorAll(`.${classes}`).forEach(witel => {
            witel.style.fill = "red";
        });

        document.getElementById("witel").innerText = e.id;
        document.getElementById("kolom2").innerText = witelDataItem ? '+' + witelDataItem.delta_down : 'N/A';
        document.getElementById("kolom3").innerText = witelDataItem ? '+' + witelDataItem.delta_distinct : 'N/A';
    });

    e.addEventListener("mouseleave", function () {
        const classes = e.className.baseVal.replace(/ /g, '.');
        document.querySelectorAll(`.${classes}`).forEach(witel => {
            witel.style.fill = "#ececec";
        });
    });
    
    //modal clicknya disini
    // Fungsi untuk membuka modal
    function openMainModal() {
        const modal = document.getElementById("modal-witel");
        modal.classList.remove("hidden");
    }

    // Fungsi untuk menutup modal
    function closeMainModal() {
        const modal = document.getElementById("modal-witel");
        modal.classList.add("hidden");
    }
        
    e.addEventListener("click", function () {
        const witelId = witelIdMap[e.id];
        const witelDataItem = witelData.find(item => item.witel_id === witelId);

        document.getElementById("namaWitel").innerText = 'Witel '+e.id;
        document.getElementById("SiteDownValue").innerText = witelDataItem ? witelDataItem.site_down : 'N/A';
        document.getElementById("DisctinctSiteValue").innerText = witelDataItem ? witelDataItem.distinct_site : 'N/A';
        document.getElementById("TiketValue").innerText = witelDataItem ? witelDataItem.jml_tiket : 'N/A';
        document.getElementById("MTTRValue").innerText = witelDataItem ? witelDataItem.mttr+' Jam' : 'N/A';
        document.getElementById("BillValue").innerText = witelDataItem ? witelDataItem.site_bill : 'N/A';
        document.getElementById("AvailValue").innerText = witelDataItem ? witelDataItem.availability+' %' : 'N/A';

        // Buka modal
        openMainModal();
        // Tambahkan event listener untuk tombol close pada modal
        const closeButton = document.querySelector('[data-modal-toggle="modal-witel"]');
        closeButton.addEventListener("click", closeMainModal);
    });
  });

</script>

</html>