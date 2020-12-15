<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> {{$pengusaha->nama_toko}} </title>
</head>
<body>
    
    <button>
        <a href="/admin/approve/{{$pengusaha->id}}"> Approve </a>
    </button>

    <h1> {{$pengusaha->nama_toko}} </h1>
    <h2> {{$pengusaha->nama_pemilik}} </h2>
    <h3> {{$pengusaha->nomor_telepon}} </h3>

</body>
</html>