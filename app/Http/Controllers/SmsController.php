<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
//use http\Client\Curl\User;use SoapClient;
class SmsController extends Controller
{
  public function indexLogin(){
      return view('login');
  }
  public function indexForget(){
        return view('forget');
    }
    public function sendPasswordWithMessage(Request $request){
        $phone=$request->get('phone');
        $password=mt_rand(100000,999999);
        $newPass=Hash::make($password); //veritabanına kaydedilecek
        if (User::where('phone', '=', $phone)->count() > 0) {
        $basic  = new \Nexmo\Client\Credentials\Basic('396968e6', 'uFDNsDxUzfumI1K6');
        $client = new \Nexmo\Client($basic);
        $message = $client->message()->send([
          'to' => $phone,
          'from' => 'Vonage APIs',
          'text' => 'Merhaba değerli üyemiz şifreni yeniledik .Yeni şifren:'.$password
        ]);
        User::where('phone',$phone) ->update(['password'=>$newPass]);
        return redirect('/forget')->with('success', 'SMS gönderimi başarılı');
}
}
}


        //user sifresini güncelle
        /*$message='Yeni Şifreniz :' .$password. 'bu şifreyi sisteme girdikten sonra lütfen değiştirin';
        $this->soapClient->smsGonder1NV2([
          'username'=>'Kullanıcı Adınız',
          'password'=>'Şifreniz',
          'header'=>'Emine Metin',
          'msg'=>$message,
          'gsm'=>$gsm,
          'filter'=>'',
          'startdate'=>'',
          'stopdate'=>'',
          'encoding'=>'TR'
        ]);
      }
      catch(\Exception $error){
        echo "Sms gönderilme aşamasında bir sorun oluştu: ".$error->getMessage();
      }
    }*/
