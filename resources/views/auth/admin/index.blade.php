<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> {{$admin->name}} </title>
</head>
<body>
    <h1 class="text-center"> Welcome {{$admin->name}} </h1>
    <h2 class="text-center"><a href="/admin/logout">Logout</a></h2>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Nama Toko</th>
                <th>Nama Pemilik</th>
                <th>Nomor Telepon</th>
                <th>Detail</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengusaha as $p)
                <tr>
                    <td>{{ $p->nama_toko }}</td>
                    <td>{{ $p->nama_pemilik }}</td>
                    <td>{{ $p->nomor_telepon }} </td>
                    <td>
                        <a href="/admin/profil-pengusaha/ {{$p->id}}" class="btn btn-primary">Profil</a>
                    </td>
                    <td>
                        {{$p->confirmed}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
