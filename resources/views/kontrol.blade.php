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
  {{-- <div class=" col-md-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Rehbere Ekle</h4>
            <form action="{{route('ekle')}}" method="POST">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ad</label>
                                <input type="text" class="form-control" placeholder="Ad" id='ad' name='ad'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Soyad</label>
                                <input type="text" class="form-control"
                                    placeholder="Soyad" id='soyad' name='soyad'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Telefon numarası</label>
                                <input type="text" class="form-control"
                                    placeholder="Telefon numarası" id='tel' name='tel'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control"
                                    placeholder="Email" id='email' name='email'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Adres</label>
                                    <textarea id='adres' name='adres' class="form-control"  rows="10" cols="50" placeholder="Adres"> </textarea>
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
    <div class=" col-md-6" style="display: inline-block;" >
    <div class="col flex " >
    <div class="card card-width" style="background-color: white;"  >
      <div class="card-body">
        <h1 class="card-title">Rehber'den Kaydet</h4>
            <h5 class="card-subtitle">Telefondan girerek rehberinizi yedekleyebilirsiniz.!</h5>
        <img src="assets/images/rocket-white.png" width="400" height="280" alt="homepage" class="light-logo" />
          <button id="aa">Kaydet</button>
          <button id="contactBtn" type="button" class="btn-success margin-top-small">
            Rehberden Ekle
          </button>
        <h2>{{session()->get( 'kull')['ad'].' '.session()->get( 'kull')['soyad']." Rehber"}}</h2>
        <p id="empty">Veri bulunamadi !</p>
        <table id="table" class="border border-primary invisible">
          <thead>
            <tr>
              <th>#</th>
              <th>İsim</th>
              <th>Telefon</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
  <div id="alert" class="alert alert-danger invisible">Alert-danger</div> --}}




  <div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rehbere Ekle</h4>
                <form action="{{route('ekle')}}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ad</label>
                                <input type="text" class="form-control" placeholder="Ad" id='ad' name='ad'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Soyad</label>
                                    <input type="text" class="form-control"
                                        placeholder="Soyad" id='soyad' name='soyad'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Telefon numarası</label>
                                <input type="text" class="form-control"
                                    placeholder="Telefon numarası" id='tel' name='tel'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control"
                                        placeholder="Email" id='email' name='email'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Adres</label>
                                    <textarea id='adres' name='adres' class="form-control"  rows="10" cols="50" placeholder="Adres"> </textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="text-left">
                            <button type="submit" class="btn btn-info">Kaydet</button>
                            <button type="reset" class="btn btn-dark">Sıfırla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Rehber'den Kaydet</h4>
                    <h5 class="card-subtitle">Telefondan girerek rehberinizi yedekleyebilirsiniz.!</h5>
                <img src="assets/images/rocket-white.png" width="440" height="320" alt="homepage" class="light-logo" />
                  <button id="aa">Kaydet</button>
                  <button id="contactBtn" type="button" class="btn-success margin-top-small">
                    Rehberden Ekle
                  </button>
                <h2>{{session()->get( 'kull')['ad'].' '.session()->get( 'kull')['soyad']." Rehber"}}</h2>
                <p id="empty">Veri bulunamadi !</p>
                <table id="table" class="border border-primary invisible">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>İsim</th>
                      <th>Telefon</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



  <script type="module">
    import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js'
    import { getDatabase,ref,set,child,update,remove,onValue,get,query, orderByChild,equalTo,push } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-database.js";
    const firebaseConfig = {
        apiKey: "AIzaSyC6SG9PPWhQMZ6fNrtmDR8sa4MCmlcUnU8",
        authDomain: "bulutbilisimkou.firebaseapp.com",
        databaseURL: "https://bulutbilisimkou-default-rtdb.firebaseio.com",
        projectId: "bulutbilisimkou",
        storageBucket: "bulutbilisimkou.appspot.com",
        messagingSenderId: "807979470162",
        appId: "1:807979470162:web:50dab66d32eadb546ffe8b",
        measurementId: "G-5K2243J9SY"
      };
      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
          const db = getDatabase();


      const contactBtn = document.querySelector('#contactBtn');
        const displayText = document.querySelector("#displayText");
        const contactTable = document.querySelector("#table");
        const contactTableContent = document.querySelector("tbody");
        //const errorAlert = document.querySelector("#errorAlert");
        const addBtn = document.querySelector("#addBtn");
        const name = document.querySelector("#name");
        const phone = document.querySelector("#phone");
        const emptyText = document.querySelector("#empty");
        const modal = document.querySelector("#modal");
        const alertBlock = document.querySelector("#alert");

        var ad=document.getElementById('name1');
    var tel=document.getElementById('phone1');
    var aa=document.getElementById('aa');

    console.log(ad.value);
     var dizi=[];
           var dizi1=[];



        contactBtn.addEventListener('click', async function (e) {
          e.preventDefault();
          if ("contacts" in navigator && "select" in navigator.contacts) {
            try {
              //const availableProperties = await navigator.contacts.getProperties();
              //displayText.innerHTML = availableProperties.join(',');
              const contacts = await navigator
              .contacts
              .select(
                ['name', 'tel'],
                {multiple: true}
                );

              if (!contacts.length) {
                return;
              }

              if (contactTableContent.childElementCount === 0) {
                emptyText.classList.add("invisible");
                contactTable.classList.remove("invisible");
              }

              let count = contactTableContent.childElementCount + 1;

              for (let i = 0; i < contacts.length; i++) {
                       //  alert("Your first contact: " + contacts[i].name + " " + contacts[i].tel + " " + contacts[i].address);
                    //dizi=[];
                    dizi.push(contacts[i].name);
                    dizi1.push(contacts[i].tel);
              //alert(dizi);
                const organizer = document.createElement('tr');
                organizer.classList.add('list-group-item');

                const id = document.createElement('td');
                id.innerHTML = count;
                organizer.appendChild(id);
                count++;

                const name = document.createElement('td');
                name.innerHTML = contacts[i].name[0];
                organizer.appendChild(name);

                const tel = document.createElement('td');
                tel.innerHTML = contacts[i].tel[0];
                organizer.appendChild(tel);


                contactTableContent.appendChild(organizer);
              }
            } catch (e) {
              //const availableProperties = await navigator.contacts.getProperties();
              //displayText.innerHTML = availableProperties.join(',');
              alertBlock.innerHTML = "Sorry, something happened with fetching Contacts :("
              alertBlock.style.display = "block";
              setTimeout(function() {
                alertBlock.style.display = "none";
              }, 5000);
            }
          } else {
            //const availableProperties = await navigator.contacts.getProperties();
            //displayText.innerHTML = availableProperties.join(',');
            alertBlock.innerHTML = "Sorry, your device doesn't support Contact Picker API :("
            alertBlock.style.display = "block";
            setTimeout(function() {
              alertBlock.style.display = "none";
            }, 5000);
          }
        })

          function writeUserData() {
               for(var i=0;i<4;i++)
                {
               const newPostKey = push(child(ref(db), 'posts')).key;
              set(ref(db, 'Rehberozel/' +'{{session()->get( 'kull')['tel']}}/'+  newPostKey ), {
                ad:dizi[i][0],
                soyad:"",
                email:"",
                adres:"",
                  tel:dizi1[i][0],
                  });}



        }
        aa.addEventListener('click',writeUserData);

        </script>

     @include('footer')
