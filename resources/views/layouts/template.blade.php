<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--bootstrap 4.5.3 downloaded complete-->
        <link href="{{asset('assets/bootstrap-4.5.3/dist/css/bootstrap.css')}}" rel="stylesheet">
        {{-- <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset('/assets/css/CSS-sendiri.css')}}">
        <meta charset="utf-8">
        <title> @yield('title')</title>
        <!--link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/"-->
        
    </head>
    <body>
        @yield('body')

        @include('layouts.footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js">')</script></script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('bootstrap-4.5.3/dist/js/bootstrap.js')}}"></script>
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script>
            $('.addRow').on('click', function(){
                addRow();
            });
        
            function addRow(){
                var tr = '<tr>'+
                        '<td>'+
                            '<input type="text" name="nama_produk[]" class="form-control-sm" />'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="deskripsi_produk[]" class="form-control-sm" />'+
                        '</td>'+
                        '<td>'+
                            '<input type="tel" name="harga_produk[]" class="form-control-sm" />'+
                        '</td>'+
                        '<td style="text-align: center">'+
                            '<a href="#" class="btn btn-danger removeProduct">-</a>'+
                        '</td>'+
                    '</tr>';
                $('tbody').append(tr);
            }

            $('tbody').on('click', '.removeProduct', function(){
                $(this).parent().parent().remove();
            });
        </script>
        <script>
            $('.addImage').on('click', function(){
                addImage();
            });
        
            function addImage(){
                var tr = '<tr>'+
                        '<td>'+
                            '<input type="file" name="galeri[]" class="form-control-file" />'+
                        '</td>'+
                        '<td style="text-align: center">'+
                            '<a href="#" class="btn btn-danger removeImage">-</a>'+
                        '</td>'+
                    '</tr>';
                $('tbody').append(tr);
            }

            $('tbody').on('click', '.removeImage', function(){
                $(this).parent().parent().remove();
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        
    </body>
</html>
            