<?php require "header/navbar.php" ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>ApexCharts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Charts</li>
          <li class="breadcrumb-item active">ApexCharts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <p>ApexCharts Examples. You can check the <a href="https://apexcharts.com/javascript-chart-demos/" target="_blank">official website</a> for more examples.</p>

    <section class="section">
      <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Line Chart</h5>

              <!-- Line Chart -->
              <div id="lineChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#lineChart"), {
                    series: [{
                      name: "Desktops",
                      data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                    }],
                    chart: {
                      height: 350,
                      type: 'line',
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    grid: {
                      row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                      },
                    },
                    xaxis: {
                      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Area Chart</h5>

              <!-- Area Chart -->
              <div id="areaChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  const series = {
                    "monthDataSeries1": {
                      "prices": [
                        8107.85,
                        8128.0,
                        8122.9,
                        8165.5,
                        8340.7,
                        8423.7,
                        8423.5,
                        8514.3,
                        8481.85,
                        8487.7,
                        8506.9,
                        8626.2,
                        8668.95,
                        8602.3,
                        8607.55,
                        8512.9,
                        8496.25,
                        8600.65,
                        8881.1,
                        9340.85
                      ],
                      "dates": [
                        "13 Nov 2017",
                        "14 Nov 2017",
                        "15 Nov 2017",
                        "16 Nov 2017",
                        "17 Nov 2017",
                        "20 Nov 2017",
                        "21 Nov 2017",
                        "22 Nov 2017",
                        "23 Nov 2017",
                        "24 Nov 2017",
                        "27 Nov 2017",
                        "28 Nov 2017",
                        "29 Nov 2017",
                        "30 Nov 2017",
                        "01 Dec 2017",
                        "04 Dec 2017",
                        "05 Dec 2017",
                        "06 Dec 2017",
                        "07 Dec 2017",
                        "08 Dec 2017"
                      ]
                    },
                    "monthDataSeries2": {
                      "prices": [
                        8423.7,
                        8423.5,
                        8514.3,
                        8481.85,
                        8487.7,
                        8506.9,
                        8626.2,
                        8668.95,
                        8602.3,
                        8607.55,
                        8512.9,
                        8496.25,
                        8600.65,
                        8881.1,
                        9040.85,
                        8340.7,
                        8165.5,
                        8122.9,
                        8107.85,
                        8128.0
                      ],
                      "dates": [
                        "13 Nov 2017",
                        "14 Nov 2017",
                        "15 Nov 2017",
                        "16 Nov 2017",
                        "17 Nov 2017",
                        "20 Nov 2017",
                        "21 Nov 2017",
                        "22 Nov 2017",
                        "23 Nov 2017",
                        "24 Nov 2017",
                        "27 Nov 2017",
                        "28 Nov 2017",
                        "29 Nov 2017",
                        "30 Nov 2017",
                        "01 Dec 2017",
                        "04 Dec 2017",
                        "05 Dec 2017",
                        "06 Dec 2017",
                        "07 Dec 2017",
                        "08 Dec 2017"
                      ]
                    },
                    "monthDataSeries3": {
                      "prices": [
                        7114.25,
                        7126.6,
                        7116.95,
                        7203.7,
                        7233.75,
                        7451.0,
                        7381.15,
                        7348.95,
                        7347.75,
                        7311.25,
                        7266.4,
                        7253.25,
                        7215.45,
                        7266.35,
                        7315.25,
                        7237.2,
                        7191.4,
                        7238.95,
                        7222.6,
                        7217.9,
                        7359.3,
                        7371.55,
                        7371.15,
                        7469.2,
                        7429.25,
                        7434.65,
                        7451.1,
                        7475.25,
                        7566.25,
                        7556.8,
                        7525.55,
                        7555.45,
                        7560.9,
                        7490.7,
                        7527.6,
                        7551.9,
                        7514.85,
                        7577.95,
                        7592.3,
                        7621.95,
                        7707.95,
                        7859.1,
                        7815.7,
                        7739.0,
                        7778.7,
                        7839.45,
                        7756.45,
                        7669.2,
                        7580.45,
                        7452.85,
                        7617.25,
                        7701.6,
                        7606.8,
                        7620.05,
                        7513.85,
                        7498.45,
                        7575.45,
                        7601.95,
                        7589.1,
                        7525.85,
                        7569.5,
                        7702.5,
                        7812.7,
                        7803.75,
                        7816.3,
                        7851.15,
                        7912.2,
                        7972.8,
                        8145.0,
                        8161.1,
                        8121.05,
                        8071.25,
                        8088.2,
                        8154.45,
                        8148.3,
                        8122.05,
                        8132.65,
                        8074.55,
                        7952.8,
                        7885.55,
                        7733.9,
                        7897.15,
                        7973.15,
                        7888.5,
                        7842.8,
                        7838.4,
                        7909.85,
                        7892.75,
                        7897.75,
                        7820.05,
                        7904.4,
                        7872.2,
                        7847.5,
                        7849.55,
                        7789.6,
                        7736.35,
                        7819.4,
                        7875.35,
                        7871.8,
                        8076.5,
                        8114.8,
                        8193.55,
                        8217.1,
                        8235.05,
                        8215.3,
                        8216.4,
                        8301.55,
                        8235.25,
                        8229.75,
                        8201.95,
                        8164.95,
                        8107.85,
                        8128.0,
                        8122.9,
                        8165.5,
                        8340.7,
                        8423.7,
                        8423.5,
                        8514.3,
                        8481.85,
                        8487.7,
                        8506.9,
                        8626.2
                      ],
                      "dates": [
                        "02 Jun 2017",
                        "05 Jun 2017",
                        "06 Jun 2017",
                        "07 Jun 2017",
                        "08 Jun 2017",
                        "09 Jun 2017",
                        "12 Jun 2017",
                        "13 Jun 2017",
                        "14 Jun 2017",
                        "15 Jun 2017",
                        "16 Jun 2017",
                        "19 Jun 2017",
                        "20 Jun 2017",
                        "21 Jun 2017",
                        "22 Jun 2017",
                        "23 Jun 2017",
                        "27 Jun 2017",
                        "28 Jun 2017",
                        "29 Jun 2017",
                        "30 Jun 2017",
                        "03 Jul 2017",
                        "04 Jul 2017",
                        "05 Jul 2017",
                        "06 Jul 2017",
                        "07 Jul 2017",
                        "10 Jul 2017",
                        "11 Jul 2017",
                        "12 Jul 2017",
                        "13 Jul 2017",
                        "14 Jul 2017",
                        "17 Jul 2017",
                        "18 Jul 2017",
                        "19 Jul 2017",
                        "20 Jul 2017",
                        "21 Jul 2017",
                        "24 Jul 2017",
                        "25 Jul 2017",
                        "26 Jul 2017",
                        "27 Jul 2017",
                        "28 Jul 2017",
                        "31 Jul 2017",
                        "01 Aug 2017",
                        "02 Aug 2017",
                        "03 Aug 2017",
                        "04 Aug 2017",
                        "07 Aug 2017",
                        "08 Aug 2017",
                        "09 Aug 2017",
                        "10 Aug 2017",
                        "11 Aug 2017",
                        "14 Aug 2017",
                        "16 Aug 2017",
                        "17 Aug 2017",
                        "18 Aug 2017",
                        "21 Aug 2017",
                        "22 Aug 2017",
                        "23 Aug 2017",
                        "24 Aug 2017",
                        "28 Aug 2017",
                        "29 Aug 2017",
                        "30 Aug 2017",
                        "31 Aug 2017",
                        "01 Sep 2017",
                        "04 Sep 2017",
                        "05 Sep 2017",
                        "06 Sep 2017",
                        "07 Sep 2017",
                        "08 Sep 2017",
                        "11 Sep 2017",
                        "12 Sep 2017",
                        "13 Sep 2017",
                        "14 Sep 2017",
                        "15 Sep 2017",
                        "18 Sep 2017",
                        "19 Sep 2017",
                        "20 Sep 2017",
                        "21 Sep 2017",
                        "22 Sep 2017",
                        "25 Sep 2017",
                        "26 Sep 2017",
                        "27 Sep 2017",
                        "28 Sep 2017",
                        "29 Sep 2017",
                        "03 Oct 2017",
                        "04 Oct 2017",
                        "05 Oct 2017",
                        "06 Oct 2017",
                        "09 Oct 2017",
                        "10 Oct 2017",
                        "11 Oct 2017",
                        "12 Oct 2017",
                        "13 Oct 2017",
                        "16 Oct 2017",
                        "17 Oct 2017",
                        "18 Oct 2017",
                        "19 Oct 2017",
                        "23 Oct 2017",
                        "24 Oct 2017",
                        "25 Oct 2017",
                        "26 Oct 2017",
                        "27 Oct 2017",
                        "30 Oct 2017",
                        "31 Oct 2017",
                        "01 Nov 2017",
                        "02 Nov 2017",
                        "03 Nov 2017",
                        "06 Nov 2017",
                        "07 Nov 2017",
                        "08 Nov 2017",
                        "09 Nov 2017",
                        "10 Nov 2017",
                        "13 Nov 2017",
                        "14 Nov 2017",
                        "15 Nov 2017",
                        "16 Nov 2017",
                        "17 Nov 2017",
                        "20 Nov 2017",
                        "21 Nov 2017",
                        "22 Nov 2017",
                        "23 Nov 2017",
                        "24 Nov 2017",
                        "27 Nov 2017",
                        "28 Nov 2017"
                      ]
                    }
                  }
                  new ApexCharts(document.querySelector("#areaChart"), {
                    series: [{
                      name: "STOCK ABC",
                      data: series.monthDataSeries1.prices
                    }],
                    chart: {
                      type: 'area',
                      height: 350,
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    subtitle: {
                      text: 'Price Movements',
                      align: 'left'
                    },
                    labels: series.monthDataSeries1.dates,
                    xaxis: {
                      type: 'datetime',
                    },
                    yaxis: {
                      opposite: true
                    },
                    legend: {
                      horizontalAlign: 'left'
                    }
                  }).render();
                });
              </script>
              <!-- End Area Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Column Chart</h5>

              <!-- Column Chart -->
              <div id="columnChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#columnChart"), {
                    series: [{
                      name: 'Net Profit',
                      data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                    }, {
                      name: 'Revenue',
                      data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                    }, {
                      name: 'Free Cash Flow',
                      data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                      },
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      show: true,
                      width: 2,
                      colors: ['transparent']
                    },
                    xaxis: {
                      categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    },
                    yaxis: {
                      title: {
                        text: '$ (thousands)'
                      }
                    },
                    fill: {
                      opacity: 1
                    },
                    tooltip: {
                      y: {
                        formatter: function(val) {
                          return "$ " + val + " thousands"
                        }
                      }
                    }
                  }).render();
                });
              </script>
              <!-- End Column Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar Chart</h5>

              <!-- Bar Chart -->
              <div id="barChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#barChart"), {
                    series: [{
                      data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        borderRadius: 4,
                        horizontal: true,
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    xaxis: {
                      categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                        'United States', 'China', 'Germany'
                      ],
                    }
                  }).render();
                });
              </script>
              <!-- End Bar Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pie Chart</h5>

              <!-- Pie Chart -->
              <div id="pieChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Donut Chart</h5>

              <!-- Donut Chart -->
              <div id="donutChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
                  }).render();
                });
              </script>
              <!-- End Donut Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Radar Chart</h5>

              <!-- Radar Chart -->
              <div id="radarChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#radarChart"), {
                    series: [{
                      name: 'Series 1',
                      data: [80, 50, 30, 40, 100, 20],
                    }],
                    chart: {
                      height: 350,
                      type: 'radar',
                    },
                    xaxis: {
                      categories: ['January', 'February', 'March', 'April', 'May', 'June']
                    }
                  }).render();
                });
              </script>
              <!-- End Radar Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Polar Area Chart</h5>

              <!-- Polar Area Chart -->
              <div id="polarAreaChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#polarAreaChart"), {
                    series: [14, 23, 21, 17, 15, 10, 12, 17, 21],
                    chart: {
                      type: 'polarArea',
                      height: 350,
                      toolbar: {
                        show: true
                      }
                    },
                    stroke: {
                      colors: ['#fff']
                    },
                    fill: {
                      opacity: 0.8
                    }
                  }).render();
                });
              </script>
              <!-- End Polar Area Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Radial Bar Chart</h5>

              <!-- Radial Bar Chart -->
              <div id="radialBarChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#radialBarChart"), {
                    series: [44, 55, 67, 83],
                    chart: {
                      height: 350,
                      type: 'radialBar',
                      toolbar: {
                        show: true
                      }
                    },
                    plotOptions: {
                      radialBar: {
                        dataLabels: {
                          name: {
                            fontSize: '22px',
                          },
                          value: {
                            fontSize: '16px',
                          },
                          total: {
                            show: true,
                            label: 'Total',
                            formatter: function(w) {
                              // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                              return 249
                            }
                          }
                        }
                      }
                    },
                    labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
                  }).render();
                });
              </script>
              <!-- End Radial Bar Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bubble Chart</h5>

              <!-- Bubble Chart -->
              <div id="bubbleChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  function generateData(baseval, count, yrange) {
                    var i = 0;
                    var series = [];
                    while (i < count) {
                      var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
                      var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
                      var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;
                      series.push([x, y, z]);
                      baseval += 86400000;
                      i++;
                    }
                    return series;
                  }
                  new ApexCharts(document.querySelector("#bubbleChart"), {
                    series: [{
                        name: 'Bubble1',
                        data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                          min: 10,
                          max: 60
                        })
                      },
                      {
                        name: 'Bubble2',
                        data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                          min: 10,
                          max: 60
                        })
                      },
                      {
                        name: 'Bubble3',
                        data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                          min: 10,
                          max: 60
                        })
                      },
                      {
                        name: 'Bubble4',
                        data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                          min: 10,
                          max: 60
                        })
                      }
                    ],
                    chart: {
                      height: 333,
                      type: 'bubble',
                    },
                    dataLabels: {
                      enabled: false
                    },
                    fill: {
                      opacity: 0.8
                    },
                    xaxis: {
                      tickAmount: 12,
                      type: 'category',
                    },
                    yaxis: {
                      max: 70
                    }
                  }).render();
                });
              </script>
              <!-- End Bubble Chart -->

            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>




