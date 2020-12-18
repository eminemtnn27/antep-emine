<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div align="center">  <h2>ŞİFREMİ UNUTTUM</h2>
  <div class="container mt-4">
    @if(Session::has('success'))
                   <div class="alert alert-info alert-dismissible">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
                       <h4 style="..."><i class="icon fa fa-ban"></i>{{ Session::get('success')}}</h4>
                   </div>
                   @endif
 <form action="{{route('forget.send')}}" method="post">
{{csrf_field()}}
    <div class="form-group">
      <label>Telefon No:</label>
      <input type="text"  class="form-row" name="phone" ><small>Format: 905xxxxxxxxx</small>
        </div>
    </div>

    <div class="col-md-6">
    <button type="submit" class="btn btn-primary">SMS Gönder</button></div>
</div>
</form>
</body>
</html>
