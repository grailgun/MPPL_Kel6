<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <title>Formulir Buka Usaha</title>
</head>
<body>
    <div class="row">
		<div class="container">
			<h2 class="text-center my-5">Isi Portofolio</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/formulir/step-2" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
                    
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Kelebihan</label>
                        <textarea class="form-control" name="kelebihan" value="{{ old('kelebihan') }}"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Kekurangan</label>
                        <textarea class="form-control" name="kekurangan" value="{{ old('kekurangan') }}"></textarea>
                    </div>

                    {{-- <div class="form-group">
                        <label for="files">Galeri:</label> <br>
                        <input type="file" name="galeri" multiple><br>
                    </div> --}}

                    <input type="submit" value="Next" class="btn btn-primary">
                </form>

			</div>
		</div>
	</div>            

</body>
</html>