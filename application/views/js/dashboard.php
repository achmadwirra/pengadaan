<script src="<?= site_url('assets/assets/extra-libs/c3/d3.min.js') ?>"></script>
<script src="<?= site_url('assets/assets/extra-libs/c3/c3.min.js') ?>"></script>
<script src="<?= site_url('assets/assets/libs/chartist/dist/chartist.min.js') ?>"></script>
<script src="<?= site_url('assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') ?>"></script>
<script src="<?= site_url('assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') ?>"></script>
<script src="<?= site_url('assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!-- <script src="<?= site_url('assets/dist/js/pages/dashboards/dashboard1.js') ?>"></script> -->
<script>
    $(document).ready(function () {
        var data_donut = [];
        donutChart();

        // get_chart_barangmasuk();
        // get_chart_barangmasuk_years();
        // get_chart_barangkeluar();

        function donutChart() { 
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/Dashboard/getTotalBarang') ?>",
                dataType: "JSON",
                success: function (response) {
                    data_donut.push(
                        ['Data Barang', response.total_databarang],
                        ['Barang Masuk', response.total_databarangmasuk],
                        ['Barang Keluar', response.total_databarangkeluar],
                    );

                    var chart1 = c3.generate({
                        bindto: '#donut-data-barang',
                        data: {
                            columns: data_donut,
                            type: 'donut',
                            tooltip: {
                                show: true
                            }
                        },
                        donut: {
                            label: {
                                show: false
                            },
                            title: 'Data Barang',
                            width: 18
                        },

                        legend: {
                            hide: true
                        },
                    });

                    // console.log(response.total_databarang);
                }
            });

            // return false;
         }

         var label_bulan = ['', 'Jan','Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'];
        
         var options = {
            axisX: {
                showGrid: false
            },
            seriesBarDistance: 1,
            chartPadding: {
                top: 15,
                right: 15,
                bottom: 5,
                left: 0
            },
            plugins: [
                Chartist.plugins.tooltip()
            ],
            width: '100%'
        };

        var responsiveOptions = [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 5,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value[0];
                    }
                }
            }]
        ];

       
        get_chart();
        function get_chart() {
            // var data = array();
            $.ajax({
                type: "GET",
                url: "<?= site_url('Admin/Dashboard/getChart') ?>",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var labels = [];
                    var jumlah = [];

                    var masuk = [];
                    var keluar = [];

                    $.each(data.barang_masuk, function (i, v) { 

                        $.each(label_bulan, function (lb, bulan) {       
                            if(v.bulan == lb){
                                masuk.push(v.jumlah);
                            }else{
                                masuk.push(0);
                            }
                        });
                        // console.log(label_bulan[]);

                        jumlah.push(masuk);
                    });

                    $.each(data.barang_keluar, function (i, v) { 
                        $.each(label_bulan, function (lb, bulan) { 
                            if(v.bulan == lb){
                                keluar.push(v.jumlah);
                            }else{
                                keluar.push(0);
                            }
                        });

                        jumlah.push(keluar);
                    });

                    // console.log(labels);
                    // console.log(jumlah);

                    // var barang = {
                    //     labels: label_bulan,
                    //     series: [
                    //         jumlah
                    //     ]
                    // };

                    var chart = new Chartist.Line('.stats', {
                        labels: label_bulan,
                        series: jumlah
                    }, {
                        low: 0,
                        // high: 28,
                        showArea: false,
                        fullWidth: true,
                        plugins: [
                            Chartist.plugins.tooltip()
                        ],
                        axisY: {
                            onlyInteger: true,
                            scaleMinSpace: 40,
                            // offset: 20,
                            labelInterpolationFnc: function (value) {
                                return (value / 1) ;
                            }
                        },
                    });

                    // new Chartist.Line('.stats', barang, options, responsiveOptions);
                }
            });
        }

        function get_chart_barangmasuk() {
            // var data = array();
            $.ajax({
                type: "GET",
                url: "<?= site_url('Admin/Dashboard/chart_barangmasuk') ?>",
                dataType: "json",
                success: function (data) {
                    // console.log(data)
                    var labels = [];
                    var jumlah = [];

                    $.each(data, function (i, v) { 
                         labels[i] = label_bulan[v.bulan];
                         jumlah[i] = v.jumlah;
                    });

                    console.log(labels);
                    console.log(jumlah);

                    var barang_masuk = {
                        labels: labels,
                        series: [
                            jumlah
                        ]
                    };

                    new Chartist.Bar('.barang-masuk', barang_masuk, options, responsiveOptions);
                }
            });
        }

        function get_chart_barangkeluar() {
            // var data = array();
            $.ajax({
                type: "GET",
                url: "<?= site_url('Admin/Dashboard/chart_barangkeluar') ?>",
                dataType: "json",
                success: function (data) {
                    console.log(data)
                    var labels = [];
                    var jumlah = [];

                    $.each(data, function (i, v) { 
                         labels[i] = label_bulan[v.bulan];
                         jumlah[i] = v.jumlah;
                    });

                    console.log(labels);
                    console.log(jumlah);

                    var barang_keluar = {
                        labels: labels,
                        series: [
                            jumlah
                        ]
                    };

                    new Chartist.Bar('.barang-keluar', barang_keluar, options, responsiveOptions);
                }
            });
        }   

        function get_chart_barangmasuk_years() {
            // var data = array();
            $.ajax({
                type: "GET",
                url: "<?= site_url('Admin/Dashboard/chart_barangmasuk_tahun') ?>",
                dataType: "json",
                success: function (data) {
                    console.log(data)

                    var labels = [];
                    var jumlah = [];

                    $.each(data, function (i, v) { 
                         labels[i] = v.year;
                         jumlah[i] = v.jumlah;
                    });

                    var chart = new Chartist.Line('.stats-year', {
                        labels: labels,
                        series: [
                            jumlah
                        ]
                    }, {
                        // low: 0,
                        // high: 28,
                        showArea: false,
                        fullWidth: false,
                        plugins: [
                            Chartist.plugins.tooltip()
                        ],
                        axisY: {
                            onlyInteger: true,
                            scaleMinSpace: 40,
                            offset: 20,
                            labelInterpolationFnc: function (value) {
                                return (value / 1);
                            }
                        },
                    });
                }
            });
        }

    //     new Chartist.Bar('.barang-keluar', data, options, responsiveOptions);

    });
</script>