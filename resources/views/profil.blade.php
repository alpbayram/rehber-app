<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/favicon.png">
  @include('header')
  <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Profilim</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index" class="text-muted">Anasayfa</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profil</h4>
                <form action="{{route('guncel')}}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ad</label>
                                    <input type="text" value="{{$yazi['ad']}}" name="ad" id="ad" class="form-control" placeholder="Ad">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Soyad</label>
                                    <input type="text" value="{{$yazi['soyad']}}" name="soyad" id="soyad" class="form-control" placeholder="Soyad">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" value="{{$yazi['email']}}" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="text" value="{{$yazi['tel']}}" name="tel" id="tel" class="form-control" placeholder="Telefon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Şifre</label>
                                    <input type="password" value="{{$yazi['sifre']}}" name="sifre" id="sifre" class="form-control" placeholder="Şifre">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <button type="submit" class="btn btn-info">Kaydet</button>
                            <button type="reset" class="btn btn-dark">Sıfırla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
     @include('footer')
