        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 float-right-style">
          <!-- col lanjutan menu -->
        <div class="cart-main-area ptb--20 bg__white"><!-- div1 -->
            <div class="container-fluid"><!-- div2 -->
              <div class="htc__product__container"><!-- filter -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    <button data-filter="*"  class="is-checked">All</button>
                                    <button data-filter=".cat--1">Akses Menu 1</button>
                                    <button data-filter=".cat--2">Akses Menu 2</button>
                                    <button data-filter=".cat--3">Akses Menu 3</button>
                                </div>
                            </div>
                        </div>
                    </div><br>

                <div class="row"><!-- div3 -->
                  <div class="product__list another-product-style"><!-- filterjs -->








                    <!-- Datatable1 -->

                    <div class="col-md-12 col-sm-12 col-xs-12 cat--1 single__pro"><!-- div4 -->
                            <div class="table-content table-responsive"><!-- div5 -->

                              <!-- Data Produk -->
                                <div class="container">

                                  <h1><b>Control Data Akses Menu 1</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-md-11 col-lg-12 col-sm-11 col-xs-10">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="5%">No</th>  
                                                                  <th class="center" width="40%">Role</th>
                                                                  <th class="center" width="40%">Menu Id</th>
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
                                                      </table><hr><br><br>
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
                                                        Tambah Akses Menu 1
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                        <input type="hidden" name="txtIdAccess" id="txtIdAccess" value="">
                                                        <div id="konfirmasi"></div>
                                                        <table class="table-form">
                                                            <tr><td style="width: 25%">Role</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtRole" id="txtRole" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Menu ID</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtMenuId" id="txtMenuId" required="">
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

                            </div><!-- div5 -->
                        </form><!-- form --> 
                    </div><!-- div4 -->

                    <!-- Datatable1 -->








                    <!-- Datatable2 -->

                    <div class="col-md-12 col-sm-12 col-xs-12 cat--2 single__pro"><!-- div4 -->
                            <div class="table-content table-responsive"><!-- div5 -->

                              <!-- Data Produk -->
                                <div class="container">

                                  <h1><b>Control Data Akses Menu 2</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-md-11 col-lg-12 col-sm-11 col-xs-10">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable2" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="5%">No</th>  
                                                                  <th class="center" width="40%">Role</th>
                                                                  <th class="center" width="40%">Menu Id</th>
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
                                                      </table><hr><br><br>
                                                      <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                  </div>

                                    <div class="modal fade" id="m_kategori2" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Tambah Akses Menu 2
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                        <input type="hidden" name="txtIdAccess2" id="txtIdAccess2" value="">
                                                        <div id="konfirmasi2"></div>
                                                        <table class="table-form">
                                                          <tr><td style="width: 25%">Role</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtRole2" id="txtRole2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Menu ID</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtMenuId2" id="txtMenuId2" required="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan2" name="btnSimpan2">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>

                                                </form>
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
                                            </form>
                                            </div>
                                        </div>
                                    </div>      

                                </div>
                                <!-- Data Produk -->

                            </div><!-- div5 -->
                        </form><!-- form --> 
                    </div><!-- div4 -->

                    <!-- Datatable2 -->









                    <!-- Datatable3 -->

                    <div class="col-md-12 col-sm-12 col-xs-12 cat--3 single__pro"><!-- div4 -->
                            <div class="table-content table-responsive"><!-- div5 -->

                              <!-- Data Produk -->
                                <div class="container">

                                  <h1><b>Control Data Akses Menu 3</b></h1><br>
                                    <div class="main-content">
                                      <div class="main-content-inner">
                                          
                                          <div class="page-content">
                                              <div class="row">
                                                  <div class="col-md-11 col-lg-12 col-sm-11 col-xs-10">
                                                      <div class="clearfix">
                                                      </div>
                                                      
                                                      <!-- BATAS HEADER TITLE -->
                                                      <div class="ln_solid"></div>
                                          
                                                      <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                                                      <table id="datatable3" class="table table-striped table-bordered" style="width: 100%">
                                                          <thead>
                                                              <tr> 
                                                                  <th class="center" width="5%">No</th>  
                                                                  <th class="center" width="40%">Role</th>
                                                                  <th class="center" width="40%">Menu Id</th>
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
                                                        Tambah Akses Menu 3
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                        <input type="hidden" name="txtIdAccess3" id="txtIdAccess3" value="">
                                                        <div id="konfirmasi3"></div>
                                                        <table class="table-form">
                                                          <tr><td style="width: 25%">Role</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtRole3" id="txtRole3" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Menu ID</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtMenuId3" id="txtMenuId3" required="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan3" name="btnSimpan3">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hapus Modal -->
                                    <div class="modal fade" id="myModal33" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                    <div id="konfirmasihapus3"></div>
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

                            </div><!-- div5 -->
                        </form><!-- form --> 
                    </div><!-- div4 -->

                    <!-- Datatable3 -->









                  </div><!-- filter js -->
                </div><!-- div3 -->
              </div><!-- filter -->
            </div><!-- div2 -->
        </div><!-- div1 -->

<!-- penutup col menu -->
</div>
<!-- penutup menu -->
</div>
</div>
</div><br>
</section>



<!-- Datatable1 -->
<script>
$(document).ready(function() {
$.fn.dataTable.ext.errMode = 'none';
    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>menuaccess/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [4], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[4];
                    
                    jawab=confirm("Apakah yakin untuk menghapus \n"+
                                    "Akses: "+myTable.row( $(this).parents('tr') ).data()[2]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>menuaccess/hapus/", { id:id  }, function( data ) {
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
                $('#txtIdAccess').val('');
                $('#txtRole').val('');
                $('#txtMenuId').val('');
                
     });

     $('#datatable tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        id  = myTable.row( $(this).parents('tr') ).data()[4];
        $('#txtRole').val(nama);
        $('#txtMenuId').val(nama1);
        $('#txtIdAccess').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>menuaccess/add/", {
                type:1,
                txtIdAccess:$('#txtIdAccess').val(),
                txtRole:$('#txtRole').val(),
                txtMenuId:$('#txtMenuId').val()

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
                        
                        $('#txtIdAccess').val('');
                        $('#txtRole').val('');
                        $('#txtMenuId').val('');

                        myTable.ajax.reload();  
                        setInterval('location.reload()', 1000);
                        
                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      
            });
            
    });


});
</script>
<!-- Datatable1 -->





<!-- Datatable2 -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable2').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>menuaccess/daftar_data2/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [4], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable2 tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[4];
                    
                    jawab=confirm("Apakah yakin untuk menghapus \n"+
                                    "Akses: "+myTable.row( $(this).parents('tr') ).data()[2]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>menuaccess/hapus2/", { id:id  }, function( data ) {
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
                            
                        } else {
                        
                            $('#konfirmasihapus2').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           
            
     $('#datatable2 thead').on( 'click', '.fa-search-plus', function () {
                $("#m_kategori2").modal('show');
                $('#txtIdAccess2').val('');
                $('#txtRole2').val('');
                $('#txtMenuId2').val('');
                
     });

     $('#datatable2 tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori2").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        id  = myTable.row( $(this).parents('tr') ).data()[4];
        $('#txtRole2').val(nama);
        $('#txtMenuId2').val(nama1);
        $('#txtIdAccess2').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan2').click(function(){
            
        $.post( "<?php echo base_url(); ?>menuaccess/add2/", {
                type:1,
                txtIdAccess2:$('#txtIdAccess2').val(),
                txtRole2:$('#txtRole2').val(),
                txtMenuId2:$('#txtMenuId2').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi2').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi2').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="update"){
                        $('#konfirmasi2').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi2').html('');
                        },2000);
                        
                        myTable.ajax.reload();  

                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi2').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi2').html('');
                        },2000);
                        
                        $('#txtIdAccess2').val('');
                        $('#txtRole2').val('');
                        $('#txtMenuId2').val('');

                        myTable.ajax.reload();  
                        setInterval('location.reload()', 1000);
                        
                    } else {
                        
                        $('#konfirmasi2').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
            });
            
    });


});
</script>
<!-- Datatable2 -->





<!-- Datatable3 -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable3').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>menuaccess/daftar_data3/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [4], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable3 tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[4];
                    
                    jawab=confirm("Apakah yakin untuk menghapus \n"+
                                    "Akses: "+myTable.row( $(this).parents('tr') ).data()[2]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>menuaccess/hapus3/", { id:id  }, function( data ) {
                        obj = $.parseJSON(data);
                        $("#myModal33").modal('show');
                        if (obj.msg[0]=="hapus"){
                            
                            
                            $('#konfirmasihapus3').html(
                                        '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                        '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '   <strong>Hapus Data</strong><br/>'+obj.msg[1]+
                                        '</div>');
                            setTimeout(function() {
                                $('#konfirmasihapus3').html('');
                                $("#myModal33").modal('hide');
                            },2000);
                            
                            myTable.ajax.reload();
                            
                        } else {
                        
                            $('#konfirmasihapus3').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           
            
     $('#datatable3 thead').on( 'click', '.fa-search-plus', function () {
                $("#m_kategori3").modal('show');
                $('#txtIdAccess3').val('');
                $('#txtRole3').val('');
                $('#txtMenuId3').val('');
                
     });

     $('#datatable3 tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori3").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        id  = myTable.row( $(this).parents('tr') ).data()[4];
        $('#txtRole3').val(nama);
        $('#txtMenuId3').val(nama1);
        $('#txtIdAccess3').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan3').click(function(){
            
        $.post( "<?php echo base_url(); ?>menuaccess/add3/", {
                type:1,
                txtIdAccess3:$('#txtIdAccess3').val(),
                txtRole3:$('#txtRole3').val(),
                txtMenuId3:$('#txtMenuId3').val(),

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi3').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi3').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="update"){
                        $('#konfirmasi3').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi3').html('');
                        },2000);
                        
                        myTable.ajax.reload();  

                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi3').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi3').html('');
                        },2000);
                        
                        $('#txtIdAccess3').val('');
                        $('#txtRole3').val('');
                        $('#txtMenuId3').val('');

                        myTable.ajax.reload();  
                        setInterval('location.reload()', 1000);
                        
                    } else {
                        
                        $('#konfirmasi3').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
            });
            
    });


});
</script>
<!-- Datatable3 -->