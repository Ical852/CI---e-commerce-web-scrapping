<div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 float-right-style">
          <!-- col lanjutan menu -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--20 bg__white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">


                              <!-- Data Produk -->
                                <div class="container">

                                <h1><b>Control Data Komentar</b></h1><br>
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
                                                                  <th class="center" width="10%">Tanggal</th>
                                                                  <th class="center" width="20%">Email</th>
                                                                  <th class="center" width="20%">Nama</th>
                                                                  <th class="center" width="25%">Komentar</th>
                                                                  <th class="center" >
                                                                      <span class="blue"><b>Control Data</b></span>
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
                                                    <form name="f_kategori" id="f_kategori" action="">
                                                        <input type="hidden" name="txtIdKomentar" id="txtIdKomentar" value="">
                                                        <div id="konfirmasi"></div>
                                                        <table class="table-form">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="date" class="form-control" name="txtDate" id="txtDate" required>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Email</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtEmail" id="txtEmail" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtNama" id="txtNama" required>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Komentar</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtKomentar" id="txtKomentar" required>
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
                                    <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <!-- Data Produk Masuk -->


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
        url    : "<?php echo base_url(); ?>datakomentar/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [6], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[6];
                    
                    jawab=confirm("Apakah yakin untuk menghapus komentar \n"+
                                    "Milik: "+myTable.row( $(this).parents('tr') ).data()[2]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>datakomentar/hapus/", { id:id  }, function( data ) {
                        obj = $.parseJSON(data);
                        $("#myModal13").modal('show');
                        if (obj.msg[0]=="hapus"){
                            
                            
                            $('#konfirmasihapus').html(
                                        '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                        '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '   <strong>Hapus Data</strong><br/>'+obj.msg[1]+
                                        '</div>');
                            setTimeout(function() {
                                $('#konfirmasihapus').html('');
                                $("#myModal13").modal('hide');
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
            
     $('#datatable tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        id  = myTable.row( $(this).parents('tr') ).data()[6];
        $('#txtDate').val(nama);
        $('#txtEmail').val(nama1);
        $('#txtNama').val(nama2);
        $('#txtKomentar').val(nama3);
        $('#txtIdKomentar').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>datakomentar/add/", {
                type:1,
                txtIdKomentar:$('#txtIdKomentar').val(),
                txtDate:$('#txtDate').val(),
                txtEmail:$('#txtEmail').val(),
                txtNama:$('#txtNama').val(),
                txtKomentar:$('#txtKomentar').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },2000);
                        
                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      myTable.ajax.reload();  
                
            });
            
    });


});
</script>   