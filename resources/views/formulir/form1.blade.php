<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulir Buka Usaha</title>
</head>
<body>
    <div class="row">
		<div class="container">
			<h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/formulir/step-1" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
                    
                    <div class="form-group">
                        <label>Nama Toko</label>
                        <input type="text" name="nama_toko" value="{{ old('nama_toko') }}">
                    </div>
                    
                    <div class="form-group">
                        <label>Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" value="{{ old('nama_pemilik') }}">
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="tel" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                    </div>
                    
                    <div class="form-group">
                        <b>Foto Profil</b><br/>
                        <input type="file" name="foto_toko">
                    </div>

                    <input type="submit" value="Next" class="btn btn-primary">
                </form>

			</div>
		</div>
	</div>            

</body>
</html>


<form method="POST" action="/buka-usaha">
    
</form>