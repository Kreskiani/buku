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

    <div id="kost-detail">
    <div class="container">
        <div class="row">
          <div class="col-md-3">
              <div class="box">
                  <div class="box-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Rumah Dijual :</label>
                                    <select name="kategori_kampus" class="form-control">
                                      <option>Rumah</option>
                                      <option>Apartement</option>
                                      <option>Hotel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas :</label>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="tempat_tidur"> Mall
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="meja"> Kantor
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="tempat_tidur"> Rumah Sakit
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="meja"> Keamanan 24 jam
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="tempat_tidur"> Pintu Tol
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="meja"> Mesjid
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
                            <label> Luas Bangunan :</label>
                              <select name="kategori_kampus" class="form-control">
                                <option>50 m</option>
                                <option>100 m</option>
                                <option>200 m</option>
                                <option>500 m</option>
                                <option>1000 m</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label> Kamar Tidur :</label>
                              <select name="kategori_kampus" class="form-control">
                                <option>1+</option>
                                <option>2+</option>
                                <option>3+</option>
                                <option>4+</option>
                                <option>5+</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label> Kamar Mandi :</label>
                              <select name="kategori_kampus" class="form-control">
                                <option>1+</option>
                                <option>2+</option>
                                <option>3+</option>
                                <option>4+</option>
                                <option>5+</option>
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
              <!-- Rekomentasi -->
              <h4>Rekomendasi</h4>
                <div class="thumbnail">
                  <img src="{{asset('images/kos1.jpg')}}">
                  <div class="caption">
                      <h4>Nama Property</h4>
                      <p>Keterangan ada disini</p>
                      <p><a href="lihat.html" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
                  </div>
                </div>
                <div class="thumbnail">
                  <img src="{{asset('images/kos1.jpg')}}">
                  <div class="caption">
                      <h4>Nama Property</h4>
                      <p>Keterangan ada disini</p>
                      <p><a href="lihat.html" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
                  </div>
                </div>
          </div>

          <div class="col-md-9">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Nama Property</span>
                  <h3 class="box-title navbar-right label label-danger">Rp. 100jt </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="detail-image">
                          <img src="{{asset('images/kos7.JPG')}}"/>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <span><b> Alamat</b></span>
                        <p>Jl. Kresna No. 31</p>
                        <span><b> Deskripsi</b></span>
                        <p>Keterangan property disini</p>
                        
                      </div>
                    </div>
                    <p></p>

                    <div class="facilities">
                      <table class="table table-bordered text-center">
                        <tr>
                        <td class="items"><i class="fa fa-bed"> 2 Kamar Tidur</i></td>
                        <td class="items"><i class="fa fa-tint"> 2 Kamar Mandi</td>
                        <td class="items"><i class="fa fa-arrows"> Luas Tanah 2000 m<sup>2</sup></td>
                        <td class="items"><i class="fa fa-building"> Luas Bangunan 1800 m<sup>2</td>
                        </tr>
                      </table>
                    </div>

                    <hr>

                    <div class="additional">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#fasilitasUmum" aria-controls="fasilitasUmum" role="tab" data-toggle="tab">Fasilitas</a></li>
                            <li role="presentation"><a href="#fasilitasTerdekat" aria-controls="fasilitasTerdekat" role="tab" data-toggle="tab">Fasilitas Terdekat</a></li>
                          </ul>
                        </div>

                        <div class="panel-body">
                          <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade in active" id="fasilitasUmum">
                              <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right"></i> Dapur</li>
                                <li><i class="fa fa-angle-right"></i> Ruang Tamu</li>
                                <li><i class="fa fa-angle-right"></i> Parkir Motor</li>
                                <li><i class="fa fa-angle-right"></i> Parkir Mobil</li>
                                <li><i class="fa fa-angle-right"></i> Kamar Mandi</li>
                              </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="fasilitasTerdekat">
                              <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right"></i> Balai Kesehatan</li>
                                <li><i class="fa fa-angle-right"></i> Masjid</li>
                                <li><i class="fa fa-angle-right"></i> Gereja</li>
                                <li><i class="fa fa-angle-right"></i> Bank</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr>
                    <h4> Peta Lokasi</h4>
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
                    <div id="map"></div>

                    <script type="text/javascript">
                        // Menentukan koordinat titik tengah peta
                        var myLatlng = new google.maps.LatLng(-6.917759, 107.615689);

                        // Pengaturan zoom dan titik tengah peta
                        var myOptions = {
                            zoom: 12,
                            center: myLatlng
                        };

                        // Menampilkan output pada element
                        var map = new google.maps.Map(document.getElementById("map"), myOptions);

                        // Menambahkan marker
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title:"Lokasi Kos"
                        });
                    </script>

                    <!--div class="share">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b> Bagikan</b></p>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                            </div>
                        </div>
                    </div-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>



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
