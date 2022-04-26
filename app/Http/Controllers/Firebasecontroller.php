<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Contract\Database;
use Kreait\Firebase\Factory;



class Firebasecontroller extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablo='Kullanicilar';
        $this->tab='Rehberler';
    }


    public function kayit(Request $request)
    {
       $kayit=[
           'ad'=>$request->ad,
           'soyad'=>$request->soyad,
           'tel'=>$request->telefon,
           'email'=>$request->email,
           'sifre'=>bcrypt($request->sifre),

       ];
       $postRef = $this->database->getReference($this->tablo.'/'.$request->telefon)->set($kayit);
       if($postRef)
       return route('login');
    }

    public function giris(Request $request )
    {


        $input = $request->input('telefon');
        $input1 = $request->input('sifre');
        $id= $this->database->getReference($this->tablo."/".$input)->getValue();
        $yazi= $this->database->getReference($this->tablo."/".$input."/sifre")->getValue();
        $dataa=$this->database->getReference($this->tablo."/".$input)->getValue();

        if($id==$input)
        {
            if(Hash::check($input1, $yazi))
        {
            Session()->put('kull',$dataa);

            return redirect()->route('home');
        }
        else
       { return view('login',compact('id'));}

    }
        else
       { return view('login');}

    }

    public function anasayfa()
    {



        return view('index');

      }
      public function cikis()
      {


          if(Session::has("kull"))
          {
              Session::pull("kull");
              return redirect("login");
          }
        }

        public function ekle(Request $request)
    {
       $kayit=[
           'ad'=>$request->ad,
           'soyad'=>$request->soyad,
           'tel'=>$request->tel,
           'email'=>$request->email,
           'adres'=>$request->adres,

       ];
       $postRef = $this->database->getReference($this->tab.'/'.session()->get( 'kull')['tel'])->push($kayit);
       if($postRef)
       return back();
    }
    public function duzenle()
    {
        $veriii=session()->get( 'kull')['tel'];
       $yazi= $this->database->getReference($this->tab."/".$veriii)->getValue();
      // dd( $yazi);
        if($yazi!="")
        {

         return view('duzenle', compact('yazi'));

        }
        else
        {

         return view('duzenle',compact('yazi'));
        }
    }
    public function index()
    {
        $veriii=session()->get( 'kull')['tel'];
       $yazi= $this->database->getReference($this->tab."/".$veriii)->getValue();
      // dd( $yazi);
        if($yazi!="")
        {

         return view('index', compact('yazi'));

        }
        else
        {

         return view('index',compact('yazi'));
        }
    }
    public function profil()
    {
        $veriii=session()->get('kull')['tel'];
        $yazi= $this->database->getReference($this->tablo."/".$veriii)->getValue();
       //dd($yazi['ad']);
        return view('profil',compact('yazi'));
    }
    public function guncelle($id)
    {

        $veri=$id;
        $veriii=session()->get('kull')['tel'];
        $yazi= $this->database->getReference($this->tab."/".$veriii."/".$veri)->getValue();
       // dd($yazi['ad']);
        return view('duzenlee',compact('veri','yazi'));

      }
      public function sil($id)
      {

          $veri=$id;
          $veriii=session()->get( 'kull')['tel'];
          $yazi= $this->database->getReference($this->tab."/".$veriii."/".$veri)->remove();
          return redirect(route('duzenle'));

        }

      public function guncelled(Request $request)
      {
        $id=$request->input('kadd');
        $ad=$request->input('ad');
        $soyad=$request->input('soyad');
        $email=$request->input('email');
        $tel=$request->input('tel');
        $adres=$request->input('adres');
        $veriii=session()->get( 'kull')['tel'];
//dd($id);
        $update = ['ad'=> $ad,'soyad'=> $soyad,'email'=> $email,'tel'=> $tel,'adres'=> $adres];
        $gun=$this->database->getReference($this->tab.'/'.$veriii.'/'.$id)->update($update);
        if($gun)
        return redirect('duzenle');
        else
        return redirect('duzenle');


        }


      public function guncelledd(Request $request)
      {
        $id=$request->input('kadd');
        $ad=$request->input('ad');
        $soyad=$request->input('soyad');
        $email=$request->input('email');
        $tel=$request->input('tel');
        $sifre=bcrypt($request->input('sifre'));
        $veriii=session()->get('kull')['tel'];
//dd($id);
        $update = ['ad'=> $ad,'soyad'=> $soyad,'email'=> $email,'tel'=> $tel,'sifre'=> $sifre];
        $gun=$this->database->getReference($this->tablo.'/'.$veriii)->update($update);
        if($gun)
        return redirect('profil');
        else
        return redirect('profil');


        }

}
