        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 float-right-style">
          <!-- col lanjutan menu -->
        <div class="cart-main-area ptb--20 bg__white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">


                              <!-- Data Produk -->
                                <div class="container">

                                  <h1><b>Control Data User</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-md-11 col-lg-12 col-sm-10 col-xs-10">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="5%">No</th>  
                                                                  <th class="center" width="20%">Name</th>
                                                                  <th class="center" width="20%">Email</th>
                                                                  <th class="center" width="20%">Role</th>
                                                                  <th class="center" width="5%">Status</th>
                                                                  <th class="center" >
                                                                      <span class="blue"><i class="ace-icon fa fa-cogs"><b>Kelola</b></i></span>
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
                                                        Data User
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                        <input type="hidden" name="txtIdKelola" id="txtIdKelola" value="">
                                                        <div id="konfirmasi"></div>
                                                        <table class="table table-form">
                                                            <tr><td style="width: 25%">Nama User</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtNamaUser" id="txtNamaUser" required="" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Email</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtEmail" id="txtEmail" required=""  readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Role</td>
                                                                <td style="width: 75%">
                                                                    <select style="width: 100%" type="text" class="form-control" name="txtRole" id="txtRole" required="">
                                                                    <?php foreach ($role as $role): ?> 
                                                                    <option value="<?php echo $role->id  ?>"><?php echo $role->role  ?></option>
                                                                    <?php endforeach ?>
                                                                    </select>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Status</td>
                                                                <td style="width: 75%">
                                                                    <select style="width: 100%" type="text" class="form-control" name="txtStatus" id="txtStatus" required="">
                                                                    <option value="1">Active</option>
                                                                    <option value="2">Nonactive</option>
                                                                    </select>
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
        url    : "<?php echo base_url(); ?>kelola/daftar_data/",
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
                    
                    jawab=confirm("Apakah yakin untuk menghapus record \n"+
                                    "Perlengkapan: "+myTable.row( $(this).parents('tr') ).data()[1]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>kelola/hapus/", { id:id  }, function( data ) {
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
            
     $('#datatable tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        id  = myTable.row( $(this).parents('tr') ).data()[6];
        $('#txtNamaUser').val(nama);
        $('#txtEmail').val(nama1);
        $('#txtRole').val(nama2);
        $('#txtStatus').val(nama3);
        $('#txtIdKelola').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>kelola/add/", {
                type:1,
                txtIdKelola:$('#txtIdKelola').val(),
                txtNamaUser:$('#txtNamaUser').val(),
                txtEmail:$('#txtEmail').val(),
                txtRole:$('#txtRole').val(),
                txtStatus:$('#txtStatus').val()

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