<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <div class="row text-center " style="padding-top:100px;">
    <form action="#" method="post">
                            <hr>
                              <center><h4>ÜYELİK GİRİŞİ</B></h4></center>
                              <br/>
                              <div class="form-group input-group">
                                 <div style="text-align:left">
                                  <input  class="form-control" type="text" name="name" placeholder="Adınız">
                                  </div>
                              <div class="form-group input-group">
                                <div style="text-align:left">
                                  <div class="wrap-input100 validate-input" data-validate = "Lütfen Şifrenizi Giriniz.">
                                      <input  class="form-control" type="password" name="password" placeholder="Şifreniz">
                                  </div>
                              </div></div>
                              <div class="flex-sb-m w-full p-b-48">
                                  <div style="text-align:right">
                                      <a href="{{ route('forget') }}" class="txt3">Şifremi Unuttum <i class="fa fa-frown-o" aria-hidden="true"></i></a>
                                  </div>
                              </div>
                          <button  type="submit"  class="btn btn-primary" >GİRİŞ YAP </button>  </div>    </div>
</body>
</html>
