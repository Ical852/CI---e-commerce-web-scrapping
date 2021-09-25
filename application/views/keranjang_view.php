 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/cabean.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Keranjang</h2>
                                <nav class="bradcaump-inner">
                                  <a  style="color: white;" class="breadcrumb-item" href="index.html">Home</a>
                                  <span style="color: white;" class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Keranjang</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                        <?php 
                                        $month = date('m');
                                        $day = date('d');
                                        $year = date('Y');

                                        $today = $year . '-' . $month . '-' . $day;
                                        ?>
               <!-- Start Our Product Area -->
        <section class="htc__product__area shop__page ptb--20 bg__white">
            <div class="container-fluid">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    <button data-filter="*" class="is-checked">Pemesanan</button>
                                    <button data-filter=".cat--1">Konfirmasi</button>
                                    <button data-filter=".cat--2">Proses</button>
                                    <button data-filter=".cat--3">Barang Dikirim</button>
                                    <button data-filter=".cat--4">Riwayat Pemesanan</button>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    


                    <div class="row">

                        <div class="product__list another-product-style">
                            <!-- dari database -->

                            <!-- kat1 -->
                            <div class="col-md-12 single__pro col-lg-12 cat--1 col-sm-12 col-xs-12">
                                <div class="table-content table-responsive">
                                <div class="container-fluid">
                                    <h1><b>Konfirmasi Pesanan</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-xs-12">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="1%">No</th>  
                                                                  <th class="center" width="4%">Tanggal</th>
                                                                  <th class="center" width="10%">Email</th>
                                                                  <th class="center" width="10%">Nama</th>
                                                                  <th class="center" width="20%">Alamat</th>
                                                                  <th class="center" width="10%">Barang Pesanan</th>
                                                                  <th class="center" width="20%">Gambar Produk</th>
                                                                  <th class="center" width="5%">Harga</th>
                                                                  <th class="center" width="5%">Jumlah</th>
                                                                  <th class="center" width="5%">Total</th>
                                                                  <th class="center" width="10%">Status</th>
                                                                  <th class="center" >
                                                                      
                                                                      <span class="blue"><i class="ace-icon fa fa-cog bigger-120"><b>Atur Pemesanan</b></i></span>
                                                                  </th>
                                                              </tr>
                                                          </thead>                    
                                                              <tr>
                                                                  <td align="center"></td>
                                                                  <td></td>
                                                                  <td align="center"></td>
                                                              </tr>
                                                      </table><hr><br><br>
                                                      <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                  </div>

                                    <!-- Hapus Modal -->
                                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white"> &times; </span>
                                                        </button>
                                                        Hapus Data 
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="konfirmasihapus"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn btn-white btn-default btn-round">
                                                        <i class="fa fa-minus-circle"></i>
                                                        Tutup
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hapus Modal -->      
                                  </div>
                                </div>
                            </div>
                            <!-- Penutup kat 1 -->

                            <!-- kat2 -->
                            <div class="col-md-12 single__pro col-lg-12 cat--2 col-sm-12 col-xs-12">
                              <div class="table-content table-responsive">
                                <div class="container-fluid">
                                    <h1><b>Proses Pesanan</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-xs-12">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable2" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="1%">No</th>  
                                                                  <th class="center" width="4%">Tanggal</th>
                                                                  <th class="center" width="10%">Email</th>
                                                                  <th class="center" width="10%">Nama</th>
                                                                  <th class="center" width="20%">Alamat</th>
                                                                  <th class="center" width="10%">Barang Pesanan</th>
                                                                  <th class="center" width="20%">Gambar Produk</th>
                                                                  <th class="center" width="5%">Harga</th>
                                                                  <th class="center" width="5%">Jumlah</th>
                                                                  <th class="center" width="5%">Total</th>
                                                                  <th class="center" width="10%">Status</th>
                                                                  <th class="center" >
                                                                      
                                                                      <span class="blue"><i class="ace-icon fa fa-cog bigger-120"><b>Atur Pemesanan</b></i></span>
                                                                  </th>
                                                              </tr>
                                                          </thead>                    
                                                              <tr>
                                                                  <td align="center"></td>
                                                                  <td></td>
                                                                  <td align="center"></td>
                                                              </tr>
                                                      </table><hr><br><br>
                                                      <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                  </div>

                                    <!-- Hapus Modal -->
                                    <div class="modal fade" id="myModal32" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white"> &times; </span>
                                                        </button>
                                                        Hapus Data 
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="konfirmasihapus2"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn btn-white btn-default btn-round">
                                                        <i class="fa fa-minus-circle"></i>
                                                        Tutup
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hapus Modal -->

                                  </div>
                                </div>
                            </div>
                            <!-- Penutup kat 2 -->

                            <!-- kat3 -->
                            <div class="col-md-12 single__pro col-lg-12 cat--3 col-sm-12 col-xs-12">
                                <div class="table-content table-responsive">
                                <div class="container-fluid">
                                    <h1><b>Selesaikan Pesanan</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-xs-12">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable3" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="1%">No</th>  
                                                                  <th class="center" width="4%">Tanggal</th>
                                                                  <th class="center" width="10%">Email</th>
                                                                  <th class="center" width="10%">Nama</th>
                                                                  <th class="center" width="20%">Alamat</th>
                                                                  <th class="center" width="10%">Barang Pesanan</th>
                                                                  <th class="center" width="20%">Gambar Produk</th>
                                                                  <th class="center" width="5%">Harga</th>
                                                                  <th class="center" width="5%">Jumlah</th>
                                                                  <th class="center" width="5%">Total</th>
                                                                  <th class="center" width="10%">Status</th>
                                                                  <th class="center" >
                                                                      
                                                                      <span class="blue"><i class="ace-icon fa fa-cog bigger-120"><b>Atur Pemesanan</b></i></span>
                                                                  </th>
                                                              </tr>
                                                          </thead>                    
                                                              <tr>
                                                                  <td align="center"></td>
                                                                  <td></td>
                                                                  <td align="center"></td>
                                                              </tr>
                                                      </table><hr><br><br>
                                                      <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                  </div>

                                  <div class="modal fade" id="m_kategori3" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Selesaikan Pesanan
                                                    </div>
                                                </div>

                                                <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                <div class="modal-body">                                                    
                                                        <input type="hidden" name="txtIdKonfirmasi3" id="txtIdKonfirmasi3" value="">
                                                        <div id="konfirmasi3"></div>
                                                        <h2>Selesaikan Pesanan<input style="border: 0;" name="txtPemesan3" id="txtPemesan3" readonly="">???</input></h2>
                                                        <table class="table table-form hidden">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtTanggal3" id="txtTanggal3" required="" value="<?= $today; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Email</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtEmail3" id="txtEmail3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtNama3" id="txtNama3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Alamat</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtAlamat3" id="txtAlamat3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Barang Pesanan</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtProduct3" id="txtProduct3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Gambar</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtGambar3" id="txtGambar3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Harga</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtHarga3" id="txtHarga3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Jumlah</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtJumlah3" id="txtJumlah3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Total</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtTotal3" id="txtTotal3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Status</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtStatus3" id="txtStatus3" required="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan3" name="btnSimpan3">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Selesai</button>
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hapus Modal -->      
                                  </div>
                                </div>
                            </div>
                            <!-- Penutup kat 3 -->

                            <!-- kat4 -->
                            <div class="col-md-12 single__pro col-lg-12 cat--4 col-sm-12 col-xs-12">
                                <div class="table-content table-responsive">
                                <div class="container-fluid">
                                    <h1><b>Riwayat Pemesanan</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-xs-12">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable4" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="1%">No</th>  
                                                                  <th class="center" width="4%">Tanggal</th>
                                                                  <th class="center" width="10%">Email</th>
                                                                  <th class="center" width="10%">Nama</th>
                                                                  <th class="center" width="20%">Alamat</th>
                                                                  <th class="center" width="10%">Barang Pesanan</th>
                                                                  <th class="center" width="20%">Gambar Produk</th>
                                                                  <th class="center" width="5%">Harga</th>
                                                                  <th class="center" width="5%">Jumlah</th>
                                                                  <th class="center" width="5%">Total</th>
                                                                  <th class="center" width="10%">Status</th>
                                                                  <th class="center" >
                                                                      
                                                                      <span class="blue"><i class="ace-icon fa fa-cog bigger-120"><b>Status Record</b></i></span>
                                                                  </th>
                                                              </tr>
                                                          </thead>                    
                                                              <tr>
                                                                  <td align="center"></td>
                                                                  <td></td>
                                                                  <td align="center"></td>
                                                              </tr>
                                                      </table><hr><br><br>
                                                      <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                  </div>

                                    <!-- Hapus Modal -->
                                    <div class="modal fade" id="myModal34" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white"> &times; </span>
                                                        </button>
                                                        Hapus Data 
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="konfirmasihapus4"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn btn-white btn-default btn-round">
                                                        <i class="fa fa-minus-circle"></i>
                                                        Tutup
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hapus Modal -->     
                                  </div>
                                </div>
                            </div>
                            <!-- Penutup kat 4 -->

                        </div>
                        <!-- penutup product list -->
                    </div>
                    <!-- penutup row-->
                </div>
                <!-- penutup container product -->
            </div>
            <!-- penutup container awal -->
        </section>

       
<!-- script kat 1 -->
<script>
$(document).ready(function() {
$.fn.dataTable.ext.errMode = 'none';
    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>keranjang/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [12], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[12];
                    
                    jawab=confirm("Apakah anda yakin untuk menghapus pemesanan \n"+
                                    "barang: "+myTable.row( $(this).parents('tr') ).data()[5]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>keranjang/hapus/", { id:id  }, function( data ) {
                        obj = $.parseJSON(data);
                        $("#myModal3").modal('show');
                        if (obj.msg[0]=="hapus"){
                            
                            
                            $('#konfirmasihapus').html(
                                        '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                        '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '   <strong>Hapus Data</strong><br/>'+obj.msg[1]+
                                        '</div>');
                            setTimeout(function() {
                                $('#konfirmasihapus').html('');
                                $("#myModal3").modal('hide');
                            },2000);
                            
                            myTable.ajax.reload();
                            setInterval('location.reload()', 1000);  

                        } else {
                        
                            $('#konfirmasihapus').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           

});
</script>
<!-- script kat 1 -->



<!-- script kat 2 -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable2').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>keranjang/daftar_data2/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [12], "searchable": false },
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable2 tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[12];
                    
                    jawab=confirm("Apakah anda yakin untuk menghapus pesanan \n"+
                                    "Milik: "+myTable.row( $(this).parents('tr') ).data()[5]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>keranjang/hapus2/", { id:id  }, function( data ) {
                        obj = $.parseJSON(data);
                        $("#myModal32").modal('show');
                        if (obj.msg[0]=="hapus"){
                            
                            
                            $('#konfirmasihapus2').html(
                                        '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                        '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '   <strong>Hapus Data</strong><br/>'+obj.msg[1]+
                                        '</div>');
                            setTimeout(function() {
                                $('#konfirmasihapus2').html('');
                                $("#myModal32").modal('hide');
                            },2000);
                            
                            myTable.ajax.reload();
                            setInterval('location.reload()', 1000);  

                        } else {
                        
                            $('#konfirmasihapus2').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           

});
</script>
<!-- script kat 2 -->


<!-- script kat 3 -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable3').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>keranjang/daftar_data3/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [12], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });         
            
     $('#datatable3 tbody').on( 'click', '.fa-check', function () {            
        $("#m_kategori3").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[6];
        nama6    = myTable.row( $(this).parents('tr') ).data()[7];
        nama7    = myTable.row( $(this).parents('tr') ).data()[8];
        nama8    = myTable.row( $(this).parents('tr') ).data()[9];
        nama9    = myTable.row( $(this).parents('tr') ).data()[10];
        nama10    = myTable.row( $(this).parents('tr') ).data()[13];
        id  = myTable.row( $(this).parents('tr') ).data()[12];
        $('#txtPemesan3').val(nama4);
        $('#txtEmail3').val(nama1);
        $('#txtNama3').val(nama2);
        $('#txtAlamat3').val(nama3);
        $('#txtProduct3').val(nama4);
        $('#txtGambar3').val(nama10);
        $('#txtHarga3').val(nama6);
        $('#txtJumlah3').val(nama7);
        $('#txtTotal3').val(nama8);
        $('#txtStatus3').val(nama9);
        $('#txtIdKonfirmasi3').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan3').click(function(){
            
        $.post( "<?php echo base_url(); ?>keranjang/add3/", {
                type:1,
                txtIdKonfirmasi3:$('#txtIdKonfirmasi3').val(),
                txtTanggal3:$('#txtTanggal3').val(),
                txtEmail3:$('#txtEmail3').val(),
                txtNama3:$('#txtNama3').val(),
                txtAlamat3:$('#txtAlamat3').val(),
                txtProduct3:$('#txtProduct3').val(),
                txtGambar3:$('#txtGambar3').val(),
                txtHarga3:$('#txtHarga3').val(),
                txtJumlah3:$('#txtJumlah3').val(),
                txtTotal3:$('#txtTotal3').val(),
                txtStatus3:$('#txtStatus3').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi3').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi3').html('');
                        },2000);
                        
                        $('#txtIdKonfirmasi3').val('');
                        $('#txtTanggal3').val('');
                        $('#txtEmail3').val('');
                        $('#txtNama3').val('');
                        $('#txtAlamat3').val('');
                        $('#txtProduct3').val('');
                        $('#txtGambar3').val('');
                        $('#txtHarga3').val('');
                        $('#txtJumlah3').val('');
                        $('#txtTotal3').val('');
                        $('#txtStatus3').val('');
                        
                    } else {
                        
                        $('#konfirmasi3').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      myTable.ajax.reload();
                      setInterval('location.reload()', 1000);  
                
            });
            
    });


});
</script>
<!-- script kat 3 -->


<!-- script kat 4 -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable4').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>keranjang/daftar_data4/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [11], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });           

});
</script>
<!-- script kat 4 -->