<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>SiPARİŞLER</h2>

<table>
  <tr>
    <th>Alıcı</th>
    <th>Ürün</th>
    <th>Fiyat</th>

  </tr>
    @foreach($user_products as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->pname}}</td>
        <td>{{$user->price}}</td>



      </tr>
@endforeach
</table>

</body>
</html>
