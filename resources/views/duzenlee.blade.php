<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('../assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('../assets/images/favicon.png')}}">
  @include('header')
  <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ekleme işlemi</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index" class="text-muted">Anasayfa</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Ekleme işlemi</li>
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
  <div class=" col-md-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Güncelle</h4>
            <form action="{{route('ekle1')}}" method="POST">
                @csrf
                <input  type="hidden" class="form-control" name="kadd" id="kadd"  value="{{$veri}}" placeholder="Kullanıcı Adı">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ad</label>
                                <input type="text" class="form-control" placeholder="Ad" value="{{$yazi['ad']}}" id='ad' name='ad'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Soyad</label>
                                <input type="text" class="form-control"
                                    placeholder="Soyad" id='soyad' name='soyad' value="{{$yazi['soyad']}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Telefon numarası</label>
                                <input type="text" class="form-control"
                                    placeholder="Telefon numarası" id='tel' name='tel' value="{{$yazi['tel']}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control"
                                    placeholder="Email" id='email' name='email' value="{{$yazi['email']}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Adres</label>
                                    <textarea id='adres' name='adres' class="form-control"  rows="10" cols="50" placeholder="Adres" >{{$yazi['adres']}}" </textarea>
                            </div>
                        </div>
                    </div>

                <div class="form-actions mt-4">
                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Kaydet</button>
                        <button type="reset" class="btn btn-dark">Sıfırla</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('footer')
