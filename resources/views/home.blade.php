<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Pagination Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<h2>ÜRÜnler</h2>
<div class="container mt-4">

  <table class="table table-bordered">
    <tr class="table-info">
      <th>adı</th>
      <th>fiyatı</th>
      <th>Ekleyen</th>
    </tr>
      @foreach($products as $product)
        <tr>

          <td>{{$product->name}}</td>
          <td>{{$product->email}}</td>
          <td></td>

        </tr>
  @endforeach
  </table>
</div>
<div class="d-flex justify-content-center">
{{ $products -> links() }}
</div>
</body>
</html>
