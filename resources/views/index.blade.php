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
            <li><a href="/">Beranda</a></li>
            <li><a href="/dijual">Dijual</a></li>
            <li><a href="/disewa">Disewa</a></li>  
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

    <section id="beginning">
      <div class="intro-picture">
        <img src="{{asset('images/bg-home.jpg')}}" alt="intro gambar">

        <form action="#" method="post">
        <div class="container">
       
        <div class="row">
          <div class="col-md-12">
           <h2 class="intro-description"><font color="#fff"> TEMUKAN RUMAH IDAMAN ANDA</font></h2>
           <div class="col-md-3"></div>
           <div class="col-md-6">  
            <div class="box-searching">

              <div class="panel-body">

                <form class="form-inline">
                  <div class="row">                  
                    <div class="col-md-6 col-xs-6">
                      <div class="form-group">
                         <label class="label-searching">Saya Mencari</label>
                          <select name="kategori_kampus" class="form-control">
                            <option>Properti Dijual</option>
                            <option>Properti Disewakan</option>
                            <option>Kos-kosan</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label class="label-searching">Jenis Properti</label>
                        <select name="kategori_kampus" class="form-control">
                          <option>Apartemen</option>
                          <option>Rumah</option>
                          <option>Kantor</option>
                          <option>Ruko</option>
                          <option>Gudang</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="label-searching">Kota</label>
                        <select name="kategori_kampus" class="form-control">
                          <option>Jakarta</option>
                          <option>Bandung</option>
                          <option>Malang</option>
                          <option>Surabaya</option>
                          <option>Bali</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="label-searching">Harga Min</label><br>
                        <input class="form-control" type="text" name="">
                      </div>
                      
                      <div class="form-group">
                        <label class="label-searching">Harga Min</label><br>
                        <input class="form-control" type="text" name="">
                      </div>

                    </div>

                    <div class="col-md-6 col-xs-6">
                    <div class="col-md-12 col-xs-6">
                      <div class="form-group">
                        <label class="label-searching">Fasilitas </label>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="kamar_mandi_dalam">Foodcourt
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="tempat_tidur">Gym
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="lemari">Laundry
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Kolam Renang
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Sport Center
                            </label>
                          </div>
                      </div>
                    </div>
                    <!-- <div class="col-md-6 col-xs-6">
                      <div class="form-group">
                        <label class="label-searching">:</label>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Shopping Mall
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Rumah Sakit
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Keamanan 24 jam
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Pintu Tol
                            </label>
                          </div>
                           <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Mesjid
                            </label>
                          </div>
                      </div>
                    </div> -->
                    
                  </div>
                  </div>  
                  <div class="row">
                  <div class="col-md-12 col-xs-12">                  
                      <div class="form-group">
                        <label class="label-searching">Kata Kunci</label><br>
                        <input class="form-control" type="text" name="">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn bg-maroon btn-flat pull-right">Cari</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div><!-- /.panel-body -->
            </div><!-- /.box -->
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container -->
      </form>
    </section>

    <section id="kost">
      <div class="container">
        <h2> EXPERT PROPERTI</h2>
        <p class="information">memberikan layanan bagi penggunanya untuk membeli, menyewa atau menjual properti</p>
        <a href="#" type="button" class="btn bg-maroon btn-flat btn-more">Lihat Lebih Banyak Properti</a>
        <br>

        <h4>Rumah Favorit</h4>
        <!-- <div>
          Tidak ada data yang ditampilkan
        </div> -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        <p>
                          <a href="lihat" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                    <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                    <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                    <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</td>
                    <td class="items"><i class="fa fa-car"> Parkir Mobil</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        <p>
                          <a href="lihat" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                    <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                    <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                    <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</td>
                    <td class="items"><i class="fa fa-car"> Parkir Mobil</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        <p>
                          <a href="#" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                    <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                    <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                    <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</td>
                    <td class="items"><i class="fa fa-car"> Parkir Mobil</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp.100 Jt</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image kos-image">
                          <img src="{{asset('images/kos7.JPG')}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p>Jl. Kresna No. 31</p>
                        <span><b>Deskripsi</b></span>
                        <br><span> Keterangan ada disini</span>
                        <p></p>
                        <p>
                          <a href="#" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                    <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                    <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                    <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</td>
                    <td class="items"><i class="fa fa-car"> Parkir Mobil</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> <!--end row-->
      </div>
    </section>

    <section id="kost">
      <div class="container">
        <h4>Rumah Baru</h4>
        <!-- <div>
          Tidak ada data yang ditampilkan
        </div> -->
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{{asset('images/kos1.jpg')}}">
            <div class="caption">
                <h4>Nama Property</h4>
                <p>Keterangan ada disini</p>
                <p><a href="#" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{{asset('images/kos1.jpg')}}">
            <div class="caption">
                <h4>Nama Property</h4>
                <p>Keterangan ada disini</p>
                <p><a href="#" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{{asset('images/kos1.jpg')}}">
            <div class="caption">
                <h4>Nama Property</h4>
                <p>Keterangan ada disini</p>
                <p><a href="#" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
              </div>
            </div>
          </div>
        </div> <!--end row-->
        </div>
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


   




