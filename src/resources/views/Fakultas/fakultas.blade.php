
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Fakultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/esa.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
    <div class="navbar-wrapper">
    <header class="navbar-container">
        <div class="logo">
          <img src="img/esa unggul.png" alt="Universitas Esa Unggul">
        </div>

        <nav class="nav-list">
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{url ('fakultas')}}">Data fakultas</a></li> <!-- kasih html registrasi disini -->
          </ul>
        </nav>
       </header>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Fakultas</th>
                <th>Nama Dekan</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fakultasdatas as $fakultasdata)
            <tr>
                <td>{{ $fakultasdata->name }}</td>
                <td>{{ $fakultasdata->dekan }}</td>
                <td>{{ $fakultasdata->jumlahmahasiswa }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>