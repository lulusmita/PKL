<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TELKOM Inventory Reset Password</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<style>
    @keyframes slideOut {
        to {
            opacity: 0;
            transform: translateY(-100%);
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(100%);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <a href="/" class="flex ms-2 md:me-24">
                    <img src="images/telkom_ind.png" class="h-8 me-3" alt="Telkom Logo" />
                    <span class="self-center text-merah text-xl font-bold sm:text-2xl whitespace-nowrap dark:text-white">MSO IV Inventory</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-8 px-6 mt-10 lg:mt-4">
        <div class="col-span-5 ">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl  lg:py-16">
                    <h1 class="mb-4 text-4xl font-extrabold leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white"><span class="text-merah">TELKOM</span> REGIONAL IV <span class="underline underline-offset-3 decoration-8 decoration-merah">Inventory</span></h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Empower your digital landscape with TELKOM REGIONAL IV cutting-edge Information System Inventory, a dynamic tool designed to seamlessly manage and optimize the progression of services in our vibrant Region IV.</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                        <a id="getStartedButton" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium  text-white rounded-lg bg-merah hover:bg-abu-abu focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Get started
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-span-3 flex items-center justify-center" >
            <img id="contentContainer" class="h-60 md:h-80 max-w-lg rounded-lg" src="images/telkom.png" alt="TELKOM REG 4">
            @include('components.reset')
        </div>
    </div>
    {{--@include('components.alerts')--}}
    <h1 class="mb-4 text-3xl font-bold tracking-tight text-gray-900 dark:text-white text-center justify-center"><span class="underline underline-offset-3 decoration-8 decoration-merah">Service</span></h1>
    <div class="grid grid-cols-1 lg:grid-cols-3 p-4 gap-4">
        <a class="p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Assurance</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Corrective actions are carried out based on OLO & Tsel trouble ticket orders to ensure optimal service quality.</p>
        </a>
        <a class="p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fullfilment</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Telkomsel fulfillment involves new link installations, rebalancing, dismantling, and quality assurance, while OLO fulfillment includes new installations, modifications, disconnections, and suspend-resume actions.</p>
        </a>
        <a class="p-6 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Quality Management</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Latency, packet loss, and jitter improvements are based on quality issue reports and measurements from TWAMP and Tutela.</p>
        </a>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const getStartedButton = document.querySelector('#getStartedButton');
        const contentContainer = document.querySelector('#contentContainer');
        const resetFormContainer = document.querySelector('#resetFormContainer');

        getStartedButton.addEventListener('click', function () {
            // Sembunyikan konten awal dan tampilkan formulir login dengan animasi
            contentContainer.style.animation = 'slideOut 0.3s forwards';
            setTimeout(() => {
                contentContainer.style.display = 'none';
                resetFormContainer.style.display = 'flex'; // Pastikan untuk mengatur display ke flex
                resetFormContainer.style.animation = 'slideIn 0.1s forwards';  
            }, 500);
            // Auto scroll ke elemen dengan ID loginFormContainer
            setTimeout(() => {
                if (isMobile()) {
                    resetFormContainer.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'center' });
                }
            }, 800); // Sesuaikan penundaan sesuai kebutuhan
        });
        // Fungsi untuk mendeteksi perangkat mobile
        function isMobile() {
            return window.innerWidth <= 767; // Sesuaikan dengan lebar layar yang dianggap sebagai perangkat mobile
        }
    });
</script>



</html>