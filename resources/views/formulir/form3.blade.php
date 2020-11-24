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
            
                <form action="/formulir/step-3" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                                
                    <div class="form-group">
                        <label>Jalan</label>
                        <textarea class="form-control" name="nama_jalan" value="{{ old('nama_jalan') }}"></textarea>
                    </div>
                                
                    <div class="form-group">
                        <label>RT/RW</label>
                        <input type="text" class="form-control" name="rt_rw" value="{{ old('rt_rw') }}">
                    </div>

                    <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan" value="{{ old('kelurahan') }}">
                    </div>

                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}">
                    </div>

                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-control" name="kota" value="{{ old('kota') }}">
                    </div>

                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi') }}">
                    </div>

                    <input type="submit" value="Next" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>