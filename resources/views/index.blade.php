<!doctype html>
<html lang="en">
  <head>
  	<title>Anasayfa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
@include('header')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hoşgeldin {{session()->get( 'kull')['ad'].' '.session()->get( 'kull')['soyad']}}
                   </h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index">Anasayfa</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"  >
                <div class="slider-hero">
                    <div class="featured-carousel owl-carousel">
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center"   style="background-image: url(images/slider-1.jpg);">
                                    <div class="text ">
                                        <h2>Rehberinizi Hemen Yedekleyin!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center"  style="background-image: url(images/slider-2.jpg);">
                                    <div class="text text-center">
                                        <h2>Hem Bilgisayardan Hem Telefondan Erişimin Rahatlığını Çıkarın!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/slider-3.jpg);">
                                    <div class="text text-center">
                                        <h2>Bilgilerin Kaybolma Olasılığını Azaltın</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-5 text-center">
              <ul class="thumbnail">
                <li class="active img"><a href="#"><img src="images/thumb-1.jpg" alt="Image"  class="img-fluid"></a></li>
                <li><a href="#"><img src="images/thumb-2.jpg" alt="Image" class="img-fluid"></a></li>
                <li><a href="#"><img src="images/thumb-3.jpg" alt="Image" class="img-fluid"></a></li>
              </ul>
            </div>
                </div>
            </div>

        </div>
        <div class="col-10" style="right:-260px;">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Top Leaders</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                    id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="kontrol">Ekle</a>
                                    <a class="dropdown-item" href="duzenle">Güncelle</a>
                                    <a class="dropdown-item" href="duzenle">Sil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted">Ad-Soyad Email
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Adres
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Telefon</th>

                            </thead>
                            <tbody>
                                <tbody >
                                    @if ($yazi)


                                  @if (is_array($yazi) || is_object($yazi))

                                @forelse ($yazi as $key=>$item )
                                <input  type="hidden" class="form-control" name="kadd"  {{ $akey=$key}} placeholder="Kullanıcı Adı">

                                <tr>
                                    <td class="border-top-0 px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="mr-3"><img
                                                    src="assets/images/users/user.png"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">{{$item ['ad'].' '.$item ['soyad']}}</h5>
                                                <span class="text-muted font-14">{{$item ["email"]}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-top-0 text-muted px-2 py-4 font-14">{{$item ["adres"]}}</td>


                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">{{$item ["tel"]}}
                                    </td>
                                </tr>
                                <tr>

                                    @empty
                                    <tr><td colspan="4">Veri bulunamadı</td></tr>
                                    @endforelse
                                    @endif
                                    @endif
                                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
 @include('footer')
