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
            <div class="grid grid-cols-3 gap-4 mb-4 lg:grid-cols-3">
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg  dark:bg-gray-800">
                    <div class="p-2 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h8m-8 6h8m-8 6h8M4 16a2 2 0 1 1 3.3 1.5L4 20h5M4 5l2-1v6m-2 0h4"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{ $totalUniqNo }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Orders</p>
                    </div>
                </div>
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg dark:bg-gray-800">
                    <div class="p-2 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{ $totalOpenStatus }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Open</p>
                    </div>
                </div>
                <div class="flex p-4 items-center justify-center h-16 md:h-24 rounded bg-putih shadow-lg dark:bg-gray-800">
                    <div class="p-1 rounded">
                        <svg class="w-[27px] h-[27px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 3-17.5m-8 6 4 4L19.3 5M17 14v6m-3-3h6"/>
                        </svg>   
                    </div>
                    <div class="ml-2">
                        <p class="text-xl font-bold text-hitam dark:text-white">{{ $totalClosedStatus }}</p>
                        <p class="md:text-sm text-xs font-medium text-hitam dark:text-white">Closed</p>
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
                                        <p id="witel" class="text-xl font-bold text-hitam dark:text-white">Pilih Area</p>
                                        <p class="text-sm font-medium text-hitam dark:text-white">WITEL</p>
                                    </div>
                                </div>
                                <div class="flex rounded items-center justify-center bg-gray-50">
                                    <div class="p-2 rounded">
                                        <svg class="w-[29px] h-[29px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-2">
                                        <p id="kolom2" class="text-xl font-bold text-hitam dark:text-white">-</p>
                                        <p class="text-sm font-medium text-hitam dark:text-white">Open</p>
                                    </div>
                                </div>
                                <div class="flex rounded items-center justify-center bg-gray-50">
                                    <div class="p-2 rounded">
                                        <svg class="w-[29px] h-[29px] text-merah dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 3-17.5m-8 6 4 4L19.3 5M17 14v6m-3-3h6"/>
                                        </svg> 
                                    </div>
                                    <div class="ml-2">
                                        <p id="kolom3" class="text-xl font-bold text-hitam dark:text-white">-</p>
                                        <p class="text-sm font-medium text-hitam dark:text-white">Closed</p>
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
                        <p id="witel" class="text-xl font-bold text-hitam dark:text-white">New Link Order</p>
                    </div>
                    <div class=" rounded  justify-center h-max">
                        @include('fulfillment.components.newLinkTable', ['hideColumn' => true])
                        @include('fulfillment.components.modalNewLink')
                    </div>
                    <div class=" rounded  justify-center h-max">
                        {{ $dataNewLinks->appends(Request::except('page'))->render() }}
                    </div>
                </div> 
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
        document.getElementById("kolom2").innerText = witelDataItem ? + witelDataItem.Open : 'N/A';
        document.getElementById("kolom3").innerText = witelDataItem ? + witelDataItem.Closed : 'N/A';
    });

    e.addEventListener("mouseleave", function () {
        const classes = e.className.baseVal.replace(/ /g, '.');
        document.querySelectorAll(`.${classes}`).forEach(witel => {
            witel.style.fill = "#ececec";
        });
    });
    

  });

</script>


</html>