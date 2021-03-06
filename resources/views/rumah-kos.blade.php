<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-dialog.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/AdminLTE.min.css')}}">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.css">

    <!--[if lt IE 9]>
      <script src="//www.oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//www.oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    <script src="{{asset('js/jquery-1.11.3.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-dialog.min.js')}}"</script>
    <script src="{{asset('js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </head>
  <body>

    <header class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">
          <img src="{{asset('images/logo.png')}}">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
        <form action="#" method="post">
          <div class="form-inline">
              <div class="form-group input-group pull-right">
                  <input type="text" class="form-control" name="address" placeholder="Cari alamat kosan">
                  <span class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search fa-fw"></i></button>
                  </span>
              </div>
          </div>
        </form>

        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav navbar-left">
            
            <li><a href="/index">Beranda</a></li>
            <li><a href="/dijual">Dijual</a></li>
            <li><a href="/disewa">Disewakan</a></li>
            <li><a href="/rumah-kos">Rumah Kos</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="flag-icon flag-icon-id"></span> Indonesia<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="flag-icon flag-icon-id"></span> Indonesia</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><span class="flag-icon flag-icon-gb"></span> United Kingdom</a></li>
                </ul>
              </li>
          </ul>
        </div><!-- /.collapse -->
      </div><!-- /.container -->
    </header>

   

    <section id="kost">
      <div class="container"><br><br><br>
         <h2> RUMAH DISEWA</h2>
        <p class="information"> <b>Expert Property</b> memberikan layanan bagi penggunanya untuk membeli, menyewa atau menjual properti</p>
        <!-- <a href="#" type="button" class="btn bg-maroon btn-flat btn-more">Lihat Lebih Banyak Properti</a> -->
        <br>

        <!-- <h4>Rumah Favorit</h4> -->
        <!-- <div>
          Tidak ada data yang ditampilkan
        </div> -->
        <div class="row">
        <h4>Filter Pencarian :</h4>
        <div class="col-md-3">
              <div class="box">
                  <div class="box-body">
                    <form action="filter_kosan.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas Kamar</label>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="kamar_mandi_dalam"> Kamar Mandi Dalam
                                            </label>
                                        </div>
                                      </div><!-- /.col -->
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="lemari"> Lemari
                                          </label>
                                        </div>
                                      </div>
                                    </div><!-- /.row -->
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="tempat_tidur"> Tempat Tidur
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="meja"> Meja
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas Umum</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="parkir_mobil" value=""> Parkir Mobil
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="ruangan_tamu" value=""> Ruang Tamu
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="parkir_motor" value=""> Parkir Motor
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="dapur_bersama" value=""> Dapur
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lokasi Kampus Terdekat</label>
                                    <select name="kategori_kampus" class="form-control">
                                      <option>UNIKOM, ITHB, UNPAD, ITB</option>
                                      <option>UNISBA, UNPAS</option>
                                      <option>ITENAS, WIDYATAMA, LP3I</option>
                                      <option>UPI, UNPAS, NHI</option>
                                      <option>TELKOM UNIVERSITY</option>
                                      <option>UNPAD, ITB JATINANGOR</option>
                                      <option>Dekat Kampus Lain</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Harga</label>
                                <select name="harga_kosan" id="" class="form-control">
                                  <option> &lt;Rp 500.000/Bln </option>
                                  <option> Rp 500.000 - Rp 1.000.000/Bln</option>
                                  <option> &gt;Rp 1.000.000/Bln</option>
                                  <option>Pertahun</option>
                                </select>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="button">
                                    <button type="submit" class="btn bg-maroon btn-flat">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
          <div class="col-md-9">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        
                      </div>
                      <div class="col-md-3">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right"></i> Tempat Tidur</li>
                            <li><i class="fa fa-angle-right"></i> Kamar Mandi Dalam</li>
                            <li><i class="fa fa-angle-right"></i> Meja</li>
                            <li><i class="fa fa-angle-right"></i> Lemari</li>
                            <li><i class="fa fa-angle-right"></i> AC</li>
                            <li><i class="fa fa-angle-right"></i> TV</li>
                            <li><i class="fa fa-angle-right"></i> TV Kabel</li>
                          </ul>
                      </div>
                      <div class="col-md-2">
                        <p>
                          <a href="lihat" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        
                      </div>
                      <div class="col-md-3">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right"></i> Tempat Tidur</li>
                            <li><i class="fa fa-angle-right"></i> Kamar Mandi Dalam</li>
                            <li><i class="fa fa-angle-right"></i> Meja</li>
                            <li><i class="fa fa-angle-right"></i> Lemari</li>
                            <li><i class="fa fa-angle-right"></i> AC</li>
                            <li><i class="fa fa-angle-right"></i> TV</li>
                            <li><i class="fa fa-angle-right"></i> TV Kabel</li>
                          </ul>
                      </div>
                      <div class="col-md-2">
                        <p>
                          <a href="lihat.html" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        
                      </div>
                      <div class="col-md-3">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right"></i> Tempat Tidur</li>
                            <li><i class="fa fa-angle-right"></i> Kamar Mandi Dalam</li>
                            <li><i class="fa fa-angle-right"></i> Meja</li>
                            <li><i class="fa fa-angle-right"></i> Lemari</li>
                            <li><i class="fa fa-angle-right"></i> AC</li>
                            <li><i class="fa fa-angle-right"></i> TV</li>
                            <li><i class="fa fa-angle-right"></i> TV Kabel</li>
                          </ul>
                      </div>
                      <div class="col-md-2">
                        <p>
                          <a href="lihat" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        
                      </div>
                      <div class="col-md-3">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right"></i> Tempat Tidur</li>
                            <li><i class="fa fa-angle-right"></i> Kamar Mandi Dalam</li>
                            <li><i class="fa fa-angle-right"></i> Meja</li>
                            <li><i class="fa fa-angle-right"></i> Lemari</li>
                            <li><i class="fa fa-angle-right"></i> AC</li>
                            <li><i class="fa fa-angle-right"></i> TV</li>
                            <li><i class="fa fa-angle-right"></i> TV Kabel</li>
                          </ul>
                      </div>
                      <div class="col-md-2">
                        <p>
                          <a href="lihat" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        
                      </div>
                      <div class="col-md-3">
                          <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right"></i> Tempat Tidur</li>
                            <li><i class="fa fa-angle-right"></i> Kamar Mandi Dalam</li>
                            <li><i class="fa fa-angle-right"></i> Meja</li>
                            <li><i class="fa fa-angle-right"></i> Lemari</li>
                            <li><i class="fa fa-angle-right"></i> AC</li>
                            <li><i class="fa fa-angle-right"></i> TV</li>
                            <li><i class="fa fa-angle-right"></i> TV Kabel</li>
                          </ul>
                      </div>
                      <div class="col-md-2">
                        <p>
                          <a href="lihat" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





          
          
        </div> <!--end row-->
      </div>
    </section>

     <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2"><a href="tentang.php">Tentang</a></div>
                    <div class="col-xs-1"><a href="faq.php">FAQ</a></div>
                    <div class="col-xs-6"><a href="kontak.php">Kontak</a></div>
                    <div class="col-xs-3 copyright">&copy; 2017</div>
                </div>
            </div>
        </footer>
    </body>
</html>


   




