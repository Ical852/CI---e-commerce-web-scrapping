 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/cabean.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Stat Control</h2>
                                <nav class="bradcaump-inner">
                                  <a  style="color: white;" class="breadcrumb-item" href="index.html">Home</a>
                                  <span style="color: white;" class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Stat Control</span>
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
                                    <button data-filter=".cat--3">Kirim Barang</button>
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

                                  <div class="modal fade" id="m_kategori" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Konfirmasi Pesanan
                                                    </div>
                                                </div>

                                                <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                <div class="modal-body">                                                    
                                                        <input type="hidden" name="txtIdKonfirmasi" id="txtIdKonfirmasi" value="">
                                                        <div id="konfirmasi"></div>
                                                        <h2>Konfirmasi Pesanan<input style="border: 0;" name="txtPemesan" id="txtPemesan" readonly="">???</input></h2>
                                                        <table class="table table-form hidden">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtTanggal" id="txtTanggal" required="" value="<?= $today; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Email</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtEmail" id="txtEmail" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtNama" id="txtNama" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Alamat</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtAlamat" id="txtAlamat" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Barang Pesanan</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtProduct" id="txtProduct" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Gambar</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtGambar" id="txtGambar" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Harga</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtHarga" id="txtHarga" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Jumlah</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtJumlah" id="txtJumlah" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Total</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtTotal" id="txtTotal" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Status</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtStatus" id="txtStatus" required="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Konfirmasi</button>
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
                                            </div>
                                        </div>
                                    </div>      
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

                                  <div class="modal fade" id="m_kategori2" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Proses Pesanan
                                                    </div>
                                                </div>

                                                <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                <div class="modal-body">                                                    
                                                        <input type="hidden" name="txtIdKonfirmasi2" id="txtIdKonfirmasi2" value="">
                                                        <div id="konfirmasi2"></div>
                                                        <h2>Proses Pesanan<input style="border: 0;" name="txtPemesan2" id="txtPemesan2" readonly="">???</input></h2>
                                                        <table class="table table-form hidden">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtTanggal2" id="txtTanggal2" required="" value="<?= $today; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Email</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtEmail2" id="txtEmail2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtNama2" id="txtNama2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Alamat</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtAlamat2" id="txtAlamat2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Barang Pesanan</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtProduct2" id="txtProduct2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Gambar</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtGambar2" id="txtGambar2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Harga</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtHarga2" id="txtHarga2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Jumlah</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtJumlah2" id="txtJumlah2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Total</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtTotal2" id="txtTotal2" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Status</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtStatus2" id="txtStatus2" required="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan2" name="btnSimpan2">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Proses</button>
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
                                            </div>
                                        </div>
                                    </div>      
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
                                            </div>
                                        </div>
                                    </div>      
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
                                                                      
                                                                      <span class="blue"><i class="ace-icon fa fa-cog bigger-120"><b>Atur Record</b></i></span>
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

                                  <div class="modal fade" id="m_kategori4" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Edit Record
                                                    </div>
                                                </div>

                                                <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                                <div class="modal-body">                                                    
                                                        <input type="hidden" name="txtIdKonfirmasi4" id="txtIdKonfirmasi4" value="">
                                                        <div id="konfirmasi4"></div>
                                                        <table class="table table-form">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="date" class="form-control" name="txtTanggal4" id="txtTanggal4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Email</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtEmail4" id="txtEmail4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtNama4" id="txtNama4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Alamat</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtAlamat4" id="txtAlamat4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Barang Pesanan</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtProduct4" id="txtProduct4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Gambar</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtGambar4" id="txtGambar4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Harga</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtHarga4" id="txtHarga4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Jumlah</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="advance" class="form-control" name="txtJumlah4" id="txtJumlah4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Total</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtTotal4" id="txtTotal4" required="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Status</td>
                                                                <td style="width: 75%">
                                                                    <input style="width: 100%" type="text" class="form-control" name="txtStatus4" id="txtStatus4" required="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan4" name="btnSimpan4">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>

                                                </form>
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

    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>statcontrol/daftar_data/",
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
                    
                    jawab=confirm("Apakah anda yakin untuk menghapus pesanan \n"+
                                    "Milik: "+myTable.row( $(this).parents('tr') ).data()[3]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>statcontrol/hapus/", { id:id  }, function( data ) {
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
            

     $('#datatable tbody').on( 'click', '.fa-check', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[7];
        nama6    = myTable.row( $(this).parents('tr') ).data()[8];
        nama7    = myTable.row( $(this).parents('tr') ).data()[9];
        nama8    = myTable.row( $(this).parents('tr') ).data()[10];
        nama9    = myTable.row( $(this).parents('tr') ).data()[11];
        nama10    = myTable.row( $(this).parents('tr') ).data()[13];
        id  = myTable.row( $(this).parents('tr') ).data()[12];
        $('#txtPemesan').val(nama2);
        $('#txtEmail').val(nama1);
        $('#txtNama').val(nama2);
        $('#txtAlamat').val(nama3);
        $('#txtProduct').val(nama4);
        $('#txtGambar').val(nama10);
        $('#txtHarga').val(nama5);
        $('#txtJumlah').val(nama6);
        $('#txtTotal').val(nama7);
        $('#txtStatus').val(nama8);
        $('#txtIdKonfirmasi').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>statcontrol/add/", {
                type:1,
                txtIdKonfirmasi:$('#txtIdKonfirmasi').val(),
                txtID:$('#txtID').val(),
                txtTanggal:$('#txtTanggal').val(),
                txtEmail:$('#txtEmail').val(),
                txtNama:$('#txtNama').val(),
                txtAlamat:$('#txtAlamat').val(),
                txtProduct:$('#txtProduct').val(),
                txtGambar:$('#txtGambar').val(),
                txtHarga:$('#txtHarga').val(),
                txtJumlah:$('#txtJumlah').val(),
                txtTotal:$('#txtTotal').val(),
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
                        
                        $('#txtIdKonfirmasi').val('');
                        $('#txtID').val('');
                        $('#txtTanggal').val('');
                        $('#txtEmail').val('');
                        $('#txtNama').val('');
                        $('#txtAlamat').val('');
                        $('#txtProduct').val('');
                        $('#txtGambar').val('');
                        $('#txtHarga').val('');
                        $('#txtJumlah').val('');
                        $('#txtTotal').val('');
                        $('#txtStatus').val('');
                        
                    } else {
                        
                        $('#konfirmasi').html(
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
<!-- script kat 1 -->



<!-- script kat 2 -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable2').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>statcontrol/daftar_data2/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [12], "searchable": false }
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
                                    "Milik: "+myTable.row( $(this).parents('tr') ).data()[3]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>statcontrol/hapus2/", { id:id  }, function( data ) {
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
            
     $('#datatable2 tbody').on( 'click', '.fa-check', function () {            
        $("#m_kategori2").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[7];
        nama6    = myTable.row( $(this).parents('tr') ).data()[8];
        nama7    = myTable.row( $(this).parents('tr') ).data()[9];
        nama8    = myTable.row( $(this).parents('tr') ).data()[10];
        nama9    = myTable.row( $(this).parents('tr') ).data()[11];
        nama10    = myTable.row( $(this).parents('tr') ).data()[13];
        id  = myTable.row( $(this).parents('tr') ).data()[12];
        $('#txtPemesan2').val(nama2);
        $('#txtEmail2').val(nama1);
        $('#txtNama2').val(nama2);
        $('#txtAlamat2').val(nama3);
        $('#txtProduct2').val(nama4);
        $('#txtGambar2').val(nama10);
        $('#txtHarga2').val(nama5);
        $('#txtJumlah2').val(nama6);
        $('#txtTotal2').val(nama7);
        $('#txtStatus2').val(nama8);
        $('#txtIdKonfirmasi2').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan2').click(function(){
            
        $.post( "<?php echo base_url(); ?>statcontrol/add2/", {
                type:1,
                txtIdKonfirmasi2:$('#txtIdKonfirmasi2').val(),
                txtTanggal2:$('#txtTanggal2').val(),
                txtEmail2:$('#txtEmail2').val(),
                txtNama2:$('#txtNama2').val(),
                txtAlamat2:$('#txtAlamat2').val(),
                txtProduct2:$('#txtProduct2').val(),
                txtGambar2:$('#txtGambar2').val(),
                txtHarga2:$('#txtHarga2').val(),
                txtJumlah2:$('#txtJumlah2').val(),
                txtTotal2:$('#txtTotal2').val(),
                txtStatus2:$('#txtStatus2').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi2').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi2').html('');
                        },2000);
                        
                        $('#txtIdKonfirmasi2').val('');
                        $('#txtTanggal2').val('');
                        $('#txtEmail2').val('');
                        $('#txtNama2').val('');
                        $('#txtAlamat2').val('');
                        $('#txtProduct2').val('');
                        $('#txtGambar2').val('');
                        $('#txtHarga2').val('');
                        $('#txtJumlah2').val('');
                        $('#txtTotal2').val('');
                        $('#txtStatus2').val('');
                        
                    } else {
                        
                        $('#konfirmasi2').html(
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
<!-- script kat 2 -->


<!-- script kat 3 -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable3').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>statcontrol/daftar_data3/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [12], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable3 tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[12];
                    
                    jawab=confirm("Apakah anda yakin untuk menghapus pesanan \n"+
                                    "Milik: "+myTable.row( $(this).parents('tr') ).data()[3]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>statcontrol/hapus3/", { id:id  }, function( data ) {
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
            
     $('#datatable3 tbody').on( 'click', '.fa-check', function () {            
        $("#m_kategori3").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[7];
        nama6    = myTable.row( $(this).parents('tr') ).data()[8];
        nama7    = myTable.row( $(this).parents('tr') ).data()[9];
        nama8    = myTable.row( $(this).parents('tr') ).data()[10];
        nama9    = myTable.row( $(this).parents('tr') ).data()[11];
        nama10    = myTable.row( $(this).parents('tr') ).data()[13];
        id  = myTable.row( $(this).parents('tr') ).data()[12];
        $('#txtPemesan3').val(nama2);
        $('#txtEmail3').val(nama1);
        $('#txtNama3').val(nama2);
        $('#txtAlamat3').val(nama3);
        $('#txtProduct3').val(nama4);
        $('#txtGambar3').val(nama10);
        $('#txtHarga3').val(nama5);
        $('#txtJumlah3').val(nama6);
        $('#txtTotal3').val(nama7);
        $('#txtStatus3').val(nama8);
        $('#txtIdKonfirmasi3').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan3').click(function(){
            
        $.post( "<?php echo base_url(); ?>statcontrol/add3/", {
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
$.fn.dataTable.ext.errMode = 'none';

    var myTable =$('#datatable4').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>statcontrol/daftar_data4/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [12], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable4 tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[12];
                    
                    jawab=confirm("Apakah anda yakin untuk menghapus record \n"+
                                    "pemesanan: "+myTable.row( $(this).parents('tr') ).data()[5]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>statcontrol/hapus4/", { id:id  }, function( data ) {
                        obj = $.parseJSON(data);
                        $("#myModal34").modal('show');
                        if (obj.msg[0]=="hapus"){
                            
                            
                            $('#konfirmasihapus4').html(
                                        '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                        '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '   <strong>Hapus Data</strong><br/>'+obj.msg[1]+
                                        '</div>');
                            setTimeout(function() {
                                $('#konfirmasihapus4').html('');
                                $("#myModal34").modal('hide');
                            },2000);
                            
                            myTable.ajax.reload();
                            
                        } else {
                        
                            $('#konfirmasihapus4').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           
            
     $('#datatable4 tbody').on( 'click', '.fa-check', function () {            
        $("#m_kategori4").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[7];
        nama6    = myTable.row( $(this).parents('tr') ).data()[8];
        nama7    = myTable.row( $(this).parents('tr') ).data()[9];
        nama8    = myTable.row( $(this).parents('tr') ).data()[10];
        nama10    = myTable.row( $(this).parents('tr') ).data()[13];
        id  = myTable.row( $(this).parents('tr') ).data()[12];
        $('#txtTanggal4').val(nama);
        $('#txtEmail4').val(nama1);
        $('#txtNama4').val(nama2);
        $('#txtAlamat4').val(nama3);
        $('#txtProduct4').val(nama4);
        $('#txtGambar4').val(nama10);
        $('#txtHarga4').val(nama5);
        $('#txtJumlah4').val(nama6);
        $('#txtTotal4').val(nama7);
        $('#txtStatus4').val(nama8);
        $('#txtIdKonfirmasi4').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan4').click(function(){
            
        $.post( "<?php echo base_url(); ?>statcontrol/add4/", {
                type:1,
                txtIdKonfirmasi4:$('#txtIdKonfirmasi4').val(),
                txtTanggal4:$('#txtTanggal4').val(),
                txtEmail4:$('#txtEmail4').val(),
                txtNama4:$('#txtNama4').val(),
                txtAlamat4:$('#txtAlamat4').val(),
                txtProduct4:$('#txtProduct4').val(),
                txtGambar4:$('#txtGambar4').val(),
                txtHarga4:$('#txtHarga4').val(),
                txtJumlah4:$('#txtJumlah4').val(),
                txtTotal4:$('#txtTotal4').val(),
                txtStatus4:$('#txtStatus4').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi4').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi4').html('');
                        },2000);
                        
                        $('#txtIdKonfirmasi4').val('');
                        $('#txtTanggal4').val('');
                        $('#txtEmail4').val('');
                        $('#txtNama4').val('');
                        $('#txtAlamat4').val('');
                        $('#txtProduct4').val('');
                        $('#txtGambar4').val('');
                        $('#txtHarga4').val('');
                        $('#txtJumlah4').val('');
                        $('#txtTotal4').val('');
                        $('#txtStatus4').val('');
                        
                    } else {
                        
                        $('#konfirmasi4').html(
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
<!-- script kat 4 -->