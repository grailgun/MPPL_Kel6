<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulir 3</title>
</head>
<body>
    <div class="row">
		<div class="container">
			<h2 class="text-center my-5">Isi Alamat</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br/>
                        @endforeach
                    </div>
                @endif
            
                <form action="/formulir/store" method="POST">
                    @csrf
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Deskripsi Produk</th>
                                <th>Harga Produk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="nama_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="deskripsi_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="tel" name="harga_produk[]" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="nama_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="deskripsi_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="tel" name="harga_produk[]" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="nama_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="deskripsi_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="tel" name="harga_produk[]" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="nama_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="deskripsi_produk[]" class="form-control" />
                                </td>
                                <td>
                                    <input type="tel" name="harga_produk[]" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    <input type="submit" class="btn btn-primary" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                
                
                </form>

            </div>
        </div>
    </div>
</body>
</html>