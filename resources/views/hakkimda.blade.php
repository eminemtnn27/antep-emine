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

<h2>Kullanicilar</h2>

<table>
  <tr>
    <th>ad</th>
    <th>email</th>
    <th>sifre</th>
  </tr>
    @foreach($users as $users)
      <tr>

        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <td>{{$users->password}}</td>
        
      </tr>
@endforeach
</table>

</body>
</html>
