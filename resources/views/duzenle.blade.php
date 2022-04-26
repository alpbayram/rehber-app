
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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-20">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rehber Tablosu</h4>
                        <h6 class="card-subtitle">Bulutta yedeklediginiz kişiler
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>Adres</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                    </tr>
                                </thead>
                                <tbody >
@if ($yazi)


                                    @if (is_array($yazi) || is_object($yazi))

                                    @forelse ($yazi as $key=>$item )
                                    <input  type="hidden" class="form-control" name="kadd"  {{ $akey=$key}} placeholder="Kullanıcı Adı">
                                    <tr>
                                        <td>{{$item ['ad']}}</td>
                                        <td>{{$item ['soyad']}}</td>
                                         <td>{{$item ["adres"]}}</td>
                                         <td>{{$item ["email"]}}</td>
                                         <td>{{$item ["tel"]}}</td>
                                         <td>
                                            <a href="{{url("onayla/".$akey)}}" type="submit"  class="btn btn-sm btn-success" >Düzenle</a>

                                         </td>
                                         <td>   <a href="{{url("sil/$akey")}}" type="submit"  class="btn btn-sm btn-danger">Sil</a>
                        </td>


                                    </tr>



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
        @include('footer')

