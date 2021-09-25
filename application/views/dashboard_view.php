        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 float-right-style">
          <!-- col lanjutan menu -->
        <div class="cart-main-area ptb--20 bg__white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">


                              <!-- Dashboard -->
                                      <br />
                                      <h3 align="center">Grafik Penjualan Produk Cabai</h3>
                                      <br />
                                      <div class="panel panel-default">
                                        <?php 
                                        $month = date('m');
                                        $day = date('d');
                                        $year = date('Y');

                                        $today = $year . '-' . $month . '-' . $day;
                                        ?>
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h3 class="panel-title">Chart Penjualan Produk</h3>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p class="panel-title" style="text-align: right">Pilih Tanggal :</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $today; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="chart_area" style="width: 100%; height: 620px;"></div>
                                                </div>
                                            </div>

                                          <script type="text/javascript">

                                          google.charts.load('current', {packages:['corechart', 'bar']});
                                          google.charts.setOnLoadCallback();

                                          function load_monthwise_data(tanggal, title)
                                          {
                                              var temp_title = title + ' ' + tanggal;
                                              $.ajax({
                                                  url:"<?php echo base_url(); ?>dashboard/fetch_data",
                                                  method:"POST",
                                                  data:{tanggal:tanggal},
                                                  dataType:"JSON",
                                                  success:function(data)
                                                  {
                                                      drawMonthwiseChart(data, temp_title);
                                                  }
                                              })
                                          }

                                          function drawMonthwiseChart(chart_data, chart_main_title)
                                          {
                                              var jsonData = chart_data;
                                              var data = new google.visualization.DataTable();
                                              data.addColumn('string', 'Nama Cabai');
                                              data.addColumn('number', 'Jumlah');

                                              $.each(jsonData, function(i, jsonData){
                                                  var nama_cabe = jsonData.nama_cabe;
                                                  var jumlah = parseFloat($.trim(jsonData.jumlah));
                                                  data.addRows([[nama_cabe, jumlah]]);
                                              });

                                              var options = {
                                                  title:chart_main_title,
                                                  hAxis: {
                                                      title: "Nama Cabai"
                                                  },
                                                  vAxis: {
                                                      title: 'Jumlah'
                                                  },
                                                  chartArea:{width:'80%',height:'85%'}
                                              }

                                              var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));

                                              chart.draw(data, options);
                                          }

                                          </script>

                                          <script>
                                              
                                          $(document).ready(function(){
                                              $('#tanggal').change(function(){
                                                  var tanggal = $(this).val();
                                                  if(tanggal != '')
                                                  {
                                                      load_monthwise_data(tanggal, 'Grafik Penjualan Tanggal :');
                                                  }
                                              });
                                          });

                                          </script>
                              <!-- Dashboard -->

                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

<!-- penutup col menu -->
</div>
<!-- penutup menu -->
</div>
</div>
</div><br>
</section>