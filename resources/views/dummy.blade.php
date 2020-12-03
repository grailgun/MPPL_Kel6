<h1>
    All Pengusaha
</h1>
<a href="/formulir-1"> BERGABUNG </a>

<table border="1px">
    <thead>
        <tr>
            <th>Nama Toko</th>
            <th>Nama Pemilik</th>
            <th>Nomor Telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengusaha as $p)
        <tr>
            <td>
                <a href="/pengusaha/{{ $p->id }}"> {{ $p->nama_toko }} </a>
            </td>
            <td>{{ $p->nama_pemilik }}</td>
            <td>{{ $p->nomor_telepon }}</td>
        </tr>
        @endforeach
    </tbody>
</table>