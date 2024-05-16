<script src="{{ asset('apexChart/dist/apexcharts.js') }}"></script>
<script>
    var Data = {!! json_encode($Chart) !!};
    var mulai = {!! json_encode($startChart) !!};
    var judul = {!! json_encode($judulChart) !!};
    
    

    var options = {
        series: [{
            name: 'Presentase',
            data: Object.values(Data),
    }],
        chart: {
        type: 'bar',
        height: '100%',
        width:'100%',
        toolbar: {
            show: false, // Menyembunyikan toolbar (garis burger)
            position: 'bottom'
        }
    },
    plotOptions: {
        bar: {
        borderRadius: 0,
        horizontal: true,
        colors: {
            ranges: [{
            from: 0,
            to: 100,
            color: '#ec2d23' // Warna untuk rentang 90 - 100
            }]
        }
        }
    },
    dataLabels: {
        enabled: false,
    },
    title: {
          text: judul,
          align: 'center',
          style: {
            fontSize: '12px',
            fontWeight: 'normal'
          }
        },
    xaxis: {
        categories: Object.keys(Data),
        labels: {
            style: {
                colors: '#333', // Warna teks pada sumbu x
                fontSize: '10px', // Ukuran font pada sumbu x
                fontFamily: 'font-mono', // Jenis font pada sumbu x
            }
        },
        min: mulai,
        max: 100,
    },
        // Tambahkan properti fill untuk warna di luar rentang
        fill: {
            type: 'solid',
            colors: ['#6e6f71'] // Warna ketika di luar rentang
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>