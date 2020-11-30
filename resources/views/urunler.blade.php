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

<h2>ÜRÜNLER</h2>

<table>
  <tr>
    <th>ad</th>
    <th>fiyat</th>

  </tr>
    @foreach($products as $products)
      <tr>

        <td>{{$products->name}}</td>
        <td>{{$products->price}}</td>


      </tr>
@endforeach
</table>

</body>
</html>
