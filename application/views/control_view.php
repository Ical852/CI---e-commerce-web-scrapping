        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 float-right-style">
          <!-- col lanjutan menu -->
        <div class="cart-main-area ptb--20 bg__white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">

                              <!-- Data Produk -->
                                <div class="container">

                                  <h1><b>Control Data Produk</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-md-10 col-lg-12 col-sm-10 col-xs-10">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="5%">No</th>  
                                                                  <th class="center" width="15%">Kategori Cabe</th>
                                                                  <th class="center" width="15%">Nama Cabe</th>
                                                                  <th class="center" width="20%">gambar</th>
                                                                  <th class="center" width="15%">Harga</th>
                                                                  <th class="center" width="15%">Stok</th>
                                                                  <th class="center" >
                                                                      <a href="# " class="tooltip-info" title="Tambah" style="text-decoration: none;">
                                                                      <span class="blue"><button class="btn btn-primary ace-icon fa fa-search-plus bigger-120"><b>Tambah Data</b></button></span></a>
                                                                  </th>
                                                              </tr>
                                                          </thead>                    
                                                              <tr>
                                                                  <td align="center"></td>
                                                                  <td></td>
                                                                  <td align="center"></td>
                                                              </tr>
                                                      </table>
                                                      <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                  </div>

                                    <div class="modal fade" id="m_kategori" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Data Cabe
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                        <input type="hidden" name="txtIdCabe" id="txtIdCabe" value="">
                                                        <div id="konfirmasi"></div>
                                                        <table class="table-form">
                                                            <tr><td style="width: 25%">Kategori Cabe</td>
                                                                <td style="width: 75%">
                                                                    <select style="width: 100%" type="text" class="form-control" name="txtKategoriCabe" id="txtKategoriCabe" required="">
                                                                    <option value="cabe merah">Cabe Merah</option>
                                                                    <option value="cabe ijo">Cabe Ijo</option>
                                                                    <option value="cabe pedes">Cabe Pedes</option>
                                                                    <option value="cabe lain">Cabe Lain</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama Cabe</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtNamaCabe" id="txtNamaCabe" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Harga</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtHarga" id="txtHarga" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Stok</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtStok" id="txtStok" required="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>

                                                </form>
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
                                            </form>
                                            </div>
                                        </div>
                                    </div>      

                                </div>
                                <!-- Data Produk -->

                                <!-- Data Keluar Masuk Produk -->
                                <div class="modal fade" id="m_kategorimasuk" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Pemasukkan
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="">
                                                        <input type="hidden" name="txtKodeMasuk" id="txtKodeMasuk" value="">
                                                        <div id="konfirmasimasuk"></div>
                                                        <table class="table-form">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="date" class="form-control" name="txtDate" id="txtDate" required>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Kategori Cabe</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtKategoriCabeMasuk" id="txtKategoriCabeMasuk" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama Cabe</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtNamaCabeMasuk" id="txtNamaCabeMasuk" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Jumlah Masuk</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtJumlahMasuk" id="txtJumlahMasuk" required>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Keterangan</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtKeterangan" id="txtKeterangan" required>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpanMasuk" name="btnSimpanMasuk">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="modal fade" id="m_kategorikeluar" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Pengeluaran
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="">
                                                        <input type="hidden" name="txtKodeKeluar" id="txtKodeKeluar" value="">
                                                        <div id="konfirmasikeluar"></div>
                                                        <table class="table-form">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="date" class="form-control" name="txtDateKeluar" id="txtDateKeluar" required>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Kategori Cabe</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtKategoriCabeKeluar" id="txtKategoriCabeKeluar" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama Cabe</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtNamaCabeKeluar" id="txtNamaCabeKeluar" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Jumlah Keluar</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtJumlahKeluar" id="txtJumlahKeluar" required>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Keterangan</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtKeteranganKeluar" id="txtKeteranganKeluar" required>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpanKeluar" name="btnSimpanKeluar">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Data Keluar Masuk Produk -->


                                <!-- ganti gambar -->
                              <div class="modal fade" id="ganti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Upload Gambar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">

                                    <?php echo form_open_multipart('control/ganti'); ?><br>
                                    <input class="hidden" type="text" name="nama_cabe" id="nama_cabe" readonly>
                                    <input type="file" name="img" id="img"><br>
                                    <p>"Make The Name of The Picture Easier Please"</p>
                                  </div>

                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-white btn-info btn-bold" name="btnGanti" id="btnGanti"><i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Ganti</button>
                                    <button type="button" class="btn btn-white btn-default btn-round" data-dismiss="modal"><i class="fa fa-minus-circle"></i> Tutup</button>
                                    <?php echo form_close(); ?>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- ganti gambar -->

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

<script>
$(document).ready(function() {
$.fn.dataTable.ext.errMode = 'none';
    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>control/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [7], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[7];
                    
                    jawab=confirm("Apakah yakin untuk menghapus record \n"+
                                    "Perlengkapan: "+myTable.row( $(this).parents('tr') ).data()[2]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>control/hapus/", { id:id  }, function( data ) {
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
                            
                        } else {
                        
                            $('#konfirmasihapus').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           
            
     $('#datatable thead').on( 'click', '.fa-search-plus', function () {
                $("#m_kategori").modal('show');
                $('#txtIdCabe').val('');
                $('#txtKategoriCabe').val('');
                $('#txtNamaCabe').val('');
                $('#txtGambar').val('');
                $('#txtHarga').val('');
                $('#txtStok').val('');
                
     });

     $('#datatable tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[4];
        nama3    = myTable.row( $(this).parents('tr') ).data()[5];
        id  = myTable.row( $(this).parents('tr') ).data()[7];
        $('#txtKategoriCabe').val(nama);
        $('#txtNamaCabe').val(nama1);
        $('#txtHarga').val(nama2);
        $('#txtStok').val(nama3);
        $('#txtIdCabe').val(id);

        myTable.ajax.reload();
                
    });

    $('#datatable tbody').on( 'click', '.fa-download', function () {            
        $("#m_kategorimasuk").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[4];
        nama3    = myTable.row( $(this).parents('tr') ).data()[5];
        nama4    = myTable.row( $(this).parents('tr') ).data()[6];
        id  = myTable.row( $(this).parents('tr') ).data()[7];
        $('#txtKategoriCabeMasuk').val(nama);
        $('#txtNamaCabeMasuk').val(nama1);
        $('#txtKodeMasuk').val(id);

        myTable.ajax.reload();
                
    });  

    $('#datatable tbody').on( 'click', '.fa-share-square-o', function () {            
        $("#m_kategorikeluar").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[4];
        nama3    = myTable.row( $(this).parents('tr') ).data()[5];
        nama4    = myTable.row( $(this).parents('tr') ).data()[6];
        id  = myTable.row( $(this).parents('tr') ).data()[7];
        $('#txtKategoriCabeKeluar').val(nama);
        $('#txtNamaCabeKeluar').val(nama1);
        $('#txtKodeKeluar').val(id);

        myTable.ajax.reload();
                
    }); 

    $('#datatable tbody').on( 'click', '.fa-picture-o', function () {            
        $("#ganti").modal('show');
        kode  = myTable.row( $(this).parents('tr') ).data()[7];
        $('#nama_cabe').val(kode);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>control/add/", {
                type:1,
                txtIdCabe:$('#txtIdCabe').val(),
                txtKategoriCabe:$('#txtKategoriCabe').val(),
                txtNamaCabe:$('#txtNamaCabe').val(),
                txtHarga:$('#txtHarga').val(),
                txtStok:$('#txtStok').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="update"){
                        $('#konfirmasi').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },2000);
                        
                        myTable.ajax.reload();  

                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },2000);
                        
                        $('#txtIdCabe').val('');
                        $('#txtKategoriCabe').val('');
                        $('#txtNamaCabe').val('');
                        $('#txtHarga').val('');
                        $('#txtStok').val('');

                        myTable.ajax.reload();  

                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });

     $('#btnSimpanMasuk').click(function(){
            
        $.post( "<?php echo base_url(); ?>controlmasuk/add/", {
                type:1,
                txtKodeMasuk:$('#txtKodeMasuk').val(),
                txtDate:$('#txtDate').val(),
                txtKategoriCabeMasuk:$('#txtKategoriCabeMasuk').val(),
                txtNamaCabeMasuk:$('#txtNamaCabeMasuk').val(),
                txtJumlahMasuk:$('#txtJumlahMasuk').val(),
                txtKeterangan:$('#txtKeterangan').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasimasuk').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasimasuk').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasimasuk').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasimasuk').html('');
                        },2000);
                        
                        $('#txtDate').val('');
                        $('#txtJumlahMasuk').val('');
                        $('#txtKeterangan').val('');

                        myTable.ajax.reload();  

                    } else {
                        
                        $('#konfirmasimasuk').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });

     $('#btnSimpanKeluar').click(function(){
            
        $.post( "<?php echo base_url(); ?>controlkeluar/add/", {
                type:1,
                txtKodeKeluar:$('#txtKodeKeluar').val(),
                txtDateKeluar:$('#txtDateKeluar').val(),
                txtKategoriCabeKeluar:$('#txtKategoriCabeKeluar').val(),
                txtNamaCabeKeluar:$('#txtNamaCabeKeluar').val(),
                txtJumlahKeluar:$('#txtJumlahKeluar').val(),
                txtKeteranganKeluar:$('#txtKeteranganKeluar').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasikeluar').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasikeluar').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasikeluar').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasikeluar').html('');
                        },2000);
                        
                        $('#txtDateKeluar').val('');
                        $('#txtJumlahKeluar').val('');
                        $('#txtKeteranganKeluar').val('');

                        myTable.ajax.reload();  

                    } else {
                        
                        $('#konfirmasikeluar').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });


});
</script>